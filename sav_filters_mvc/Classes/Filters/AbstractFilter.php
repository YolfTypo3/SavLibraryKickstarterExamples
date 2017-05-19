<?php
namespace SAV\SavFiltersMvc\Filters;

/**
 * Copyright notice
 *
 * (c) 2016 Laurent Foulloy <yolf.typo3@orange.fr>
 *
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script
 */
use SAV\SavFiltersMvc\Controller\DefaultController;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\LocalizationUtility;
use TYPO3\CMS\Core\Collection\NameableCollectionInterface;

/**
 * Alphabetic filter
 */
abstract class AbstractFilter
{

    /**
     * @var boolean
     */
    protected static $filterIsSelected = FALSE;

    /**
     * @var array
     */
    protected static $filterContext;

    /**
     * @var array
     */
    protected static $filterSettings = NULL;

    /**
     * @var \SAV\SavFiltersMvc\Controller\DefaultController
     */
    protected $controller;

    /**
     * @var \TYPO3\CMS\Extbase\Object\ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @var boolean
     */
    protected static $keepWhereClause = False;

    /**
     * Injects the object manager
     *
     * @param \TYPO3\CMS\Extbase\Object\ObjectManagerInterface $objectManager
     * @return void
     */
    public function injectObjectManager(\TYPO3\CMS\Extbase\Object\ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
        $this->arguments = $this->objectManager->get(\TYPO3\CMS\Extbase\Mvc\Controller\Arguments::class);
    }

    /**
     * sets the controller
     *
     * @param \SAV\SavFiltersMvc\Controller\DefaultController $controller
     * @return void
     */
    public function setController($controller)
    {
        $this->controller = $controller;
    }

    /**
     * Render
     *
     * @return void
     */
    public function render()
    {
        self::$filterSettings = $this->getFilterSettings();
        self::$filterContext = self::getFilterContext();
        $this->renderFilter();
        self::setFilterContextInSession();
    }

    /**
     * Gets the filter WHERE clause part to the query
     *
     * @param \TYPO3\CMS\Extbase\Persistence\QueryInterface $query
     * @return \TYPO3\CMS\Extbase\Persistence\QueryInterface
     */
    public static function getFilterWhereClause($query)
    {
        // Gets the filter settings from the session
        self::$filterSettings = self::getFilterSettingsFromSession();

        // Gets the parameters from the filter context saved in session
        self::$filterContext = self::getFilterContextFromSession();

        return static::filterWhereClause($query);
    }

    /**
     * Gets keep WHERE clause flag
     *
     * @return integer
     */
    public static function keepWhereClause()
    {
        return static::$keepWhereClause;
    }

    /**
     * Gets the filter settings
     *
     * @return array
     */
    protected function getFilterSettings()
    {
        $settings = $this->controller->getSettings();
        $shortClassName = (new \ReflectionClass($this))->getShortName();
        return $settings['flexform'][$shortClassName];
    }

    /**
     * Gets a filter setting
     *
     * @param string $parameter
     * @return mixed
     */
    protected static function getFilterSetting($parameter)
    {
        return self::$filterSettings[$parameter];
    }

    /**
     * Gets a variable from the session
     *
     * @param string $variableName
     * @return void
     */
    protected static function getVariableFromSession($variableName)
    {
        return $GLOBALS['TSFE']->fe_user->getKey('ses', $variableName);
    }

    /**
     * Gets the filter context
     *
     * @return array
     */
    protected static function getFilterContext()
    {
        $filterContext = self::getFilterContextFromHttpRequest();
        if (empty($filterContext)) {
            $filterContext = self::getFilterContextFromSession();
            if (empty($filterContext)) {
                $filterClassName = self::getFilterClassName();
                $filterContext = array(
                   'filter' => GeneralUtility::md5int($filterClassName),
                );
            }
        }

        return $filterContext;
    }

    /**
     * Gets the filter context from the http request
     *
     * @return array
     */
    protected static function getFilterContextFromHttpRequest()
    {
        $filterClassName = self::getFilterClassName();
        $filterContext = GeneralUtility::_GET('tx_savfiltersmvc_default');

        if ($filterContext['filter'] != GeneralUtility::md5int($filterClassName)) {
            $filterContext = GeneralUtility::_POST('tx_savfiltersmvc_default');

            if ($filterContext['filter'] != GeneralUtility::md5int($filterClassName)) {
                self::$filterIsSelected = FALSE;
                return array();
            }
        }

        self::$filterIsSelected = TRUE;
        return $filterContext;
    }

    /**
     * Gets the filter context from the session
     *
     * @return array
     */
    protected static function getFilterContextFromSession()
    {
        // Gets the session variables
        $sessionFilters = self::getVariableFromSession('filters');
        $sessionSelectedFilter = self::getVariableFromSession('selectedFilter');

        $filterClassName = self::getFilterClassName();
        if ($sessionFilters[$filterClassName]['pageId'] != $GLOBALS['TSFE']->id || $sessionSelectedFilter != $filterClassName) {
            return array();
        } else {
            return $sessionFilters[$filterClassName]['context'];
        }
    }

    /**
     * Gets the filter settingd from the session
     *
     * @return array
     */
    protected static function getFilterSettingsFromSession()
    {
        // Gets the session variables
        $sessionFilters = self::getVariableFromSession('filters');
        $sessionSelectedFilter = self::getVariableFromSession('selectedFilter');

        $filterClassName = self::getFilterClassName();
        if ($sessionFilters[$filterClassName]['pageId'] != $GLOBALS['TSFE']->id || $sessionSelectedFilter != $filterClassName) {
            return array();
        } else {
            return $sessionFilters[$filterClassName]['settings'];
        }
    }

    /**
     * Sets the filter context in the session
     *
     * @param array $filterContext
     * @return void
     */
    protected static function setFilterContextInSession()
    {
        if (self::$filterIsSelected) {
            $sessionFilters = self::getVariableFromSession('filters');
            $filterClassName = self::getFilterClassName();
            $sessionFilters[$filterClassName] = array(
                'pageId' => self::getPageId(),
                'context' => self::$filterContext,
                'settings' => self::$filterSettings
            );

            // Sets session data
            $GLOBALS['TSFE']->fe_user->setKey('ses', 'selectedFilter', $filterClassName);
            $GLOBALS['TSFE']->fe_user->setKey('ses', 'filters', $sessionFilters);
            $GLOBALS['TSFE']->storeSessionData();
        }
    }

    /**
     * Gets the parameter from filter context
     *
     * @param string $parameter
     * @return array
     */
    protected static function getParameterFromFilterContext($parameter)
    {
        return self::$filterContext[$parameter];
    }

    /**
     * Adds an error mesage
     *
     * @param string $key
     * @param array $arguments
     * @return void
     */
    protected function addErrorMessage($key, $arguments)
    {
        $this->controller->addFlashMessage(LocalizationUtility::translate($key, $this->controller->getRequest()
            ->getControllerExtensionName(), $arguments));
    }

    /**
     * Gets the filter class name
     *
     * @return string
     */
    protected static function getFilterClassName()
    {
        return get_called_class();
    }

    /**
     * Gets the filter name
     *
     * @return string
     */
    protected function getFilterName()
    {
        return (new \ReflectionClass($this))->getShortName();
    }

    /**
     * Gets the page id
     *
     * @return integer
     */
    protected static function getPageId()
    {
        return $GLOBALS['TSFE']->id;
    }

    /**
     * Translates the model name to the table name
     *
     * @param string $modelClassName
     *
     * @return string
     */
    protected static function translateModelNameToTableName($modelClassName) {
        $tableName = 'tx_' . strtolower(str_replace('\\', '_', substr($modelClassName, strpos($modelClassName, '\\') + 1)));
        return $tableName;
    }

}
?>