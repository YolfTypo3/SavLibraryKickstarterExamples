<?php
namespace YolfTypo3\SavLibraryKickstarter\ViewHelpers;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with TYPO3 source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;
use YolfTypo3\SavLibraryKickstarter\Managers\ConfigurationManager;

/**
 * A view helper for building the constraints for the ext_emconf.php.
 *
 * = Examples =
 *
 * <code title="BuildConstraintsForExtensionManager">
 * <sav:BuildConstraintsForExtensionManager />
 * </code>
 *
 * Output:
 * the contraints
 *
 * @package SavLibraryKickstarter
 */
class BuildConstraintsForExtensionManagerViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    /**
     * Initializes arguments.
     *
     * @return void
     */
    public function initializeArguments()
    {
        $this->registerArgument('extension', 'array', 'Extension', true);
        $this->registerArgument('type', 'string', 'Type', true);
    }

    /**
     * Renders the dependencies
     *
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     *
     * @return string the dependencies array
     */
    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext)
    {
        // Gets the arguments
        $extension = $arguments['extension'];
        $type = $arguments['type'];

        // Gets the configuration manager
        $configurationManager = GeneralUtility::makeInstance(ObjectManager::class)->get(ConfigurationManagerInterface::class);

        // Gets the settings
        $settings = $configurationManager->getConfiguration(ConfigurationManagerInterface::CONFIGURATION_TYPE_SETTINGS);

        $dependenciesResult = [];

        // Processes the dependency for the core
        $compatibility = $extension['general'][1]['compatibility'];
        $dependenciesResult['emconf']['typo3'] = $settings['dependency']['emconf'][$compatibility];
        $dependenciesResult['composer']['typo3/cms-core'] = $settings['dependency']['composer'][$compatibility];

        // Processes the library dependancy
        switch ($extension['general'][1]['libraryType']) {
            case ConfigurationManager::TYPE_SAV_LIBRARY_MVC:
                $libraryDependency = 'sav_library_mvc';
                break;
            case ConfigurationManager::TYPE_SAV_LIBRARY_PLUS:
                $libraryDependency = 'sav_library_plus';
                break;
            default:
                $libraryDependency = '';
        }

        // Processes the other dependencies
        $dependencies = $extension['emconf'][1]['dependencies'];

        if (! empty($dependencies)) {
            $dependenciesArray = explode(',', $dependencies);
            foreach ($dependenciesArray as $dependency) {
                $match = [];
                if (preg_match('/^([^\(]+)\s*((?:\([^)]+\)\s*){1,2})?/', trim($dependency), $match)) {
                    $dependencyName = $match[1];
                    // Parses the constraints if any
                    if (! empty($match[2])) {
                        $matches = [];
                        if (preg_match_all('/\((emconf|composer):([^)]+)\)/', $match[2], $matches)) {
                            foreach ($matches[0] as $constraintKey => $constraint) {
                                switch ($matches[1][$constraintKey]) {
                                    case 'emconf':
                                        $dependenciesResult['emconf'][$dependencyName] = $matches[2][$constraintKey];
                                        break;
                                    case 'composer':
                                        if (strpos($dependencyName, '/') === false) {
                                            $dependencyName = 'typo3-ter/' . $dependencyName;
                                        }
                                        $dependenciesResult['composer'][str_replace('_', '-', $dependencyName)] = $matches[2][$constraintKey];
                                        break;
                                }
                            }
                        }
                    } else {
                        // Inserts in ext_emconf.php if no dependecies are added
                        $dependenciesResult['emconf'][$dependencyName] = '';
                        if ($libraryDependency != '' && $dependencyName == $libraryDependency) {
                            // If the default library is used without constraint, the default constraint will be used
                            unset($dependenciesResult['emconf'][$dependencyName]);
                        }
                    }
                }
            }
        }

        // Adds the default library dependenciens if not provided
        if ($libraryDependency != '' && ! array_key_exists($libraryDependency, $dependenciesResult['emconf'])) {
            $dependenciesResult['emconf'][$libraryDependency] = $settings['dependency']['emconf'][$libraryDependency]['default'];
            $dependenciesResult['composer']['typo3-ter/' . str_replace('_', '-', $libraryDependency)] = $settings['dependency']['composer'][$libraryDependency]['default'];
        }

        // Processes the constraints
        $constraints = '';
        foreach ($dependenciesResult[$type] as $dependencyKey => $dependency) {
            switch ($type) {
                case 'emconf':
                    $constraint = '\'' . $dependencyKey . '\' => \'' . $dependency . '\'';
                    break;
                case 'composer':
                    $constraint = '"' . $dependencyKey . '": "' . $dependency . '"';
            }
            $constraints .= (empty($constraints) ? $constraint : ',' . chr(10) . $constraint);
        }

        return $constraints;
    }
}
?>
