<?php
namespace YolfTypo3\SavCharts\Hooks;

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
use TYPO3\CMS\Core\Database\DatabaseConnection;

/**
 * Hook for the query manager "savcharts"
 *
 * @extensionScannerIgnoreFile
 */
class SavChartsQueryManagerForTypo3VersionLowerThan8 extends AbstractQueryManager
{
    // Constants for the handler type
    const NATIVE = 0;
    const ADODB = 1;
    const USERDEFINED = 2;

    /**
     * Database connection
     *
     * @var \TYPO3\CMS\Core\Database\DatabaseConnection
     */
    protected $databaseConnection = null;

    /**
     * Executes the query
     *
     * @param int $queryId
     *            The query id
     *
     * @return array The rows
     */
    public function executeQuery(int $queryId) : array
    {
        // Initializes the query
        if(!$this->initialize($queryId)) {
            return null;
        }

        // Gets the rows
        $rows = $this->databaseConnection->exec_SELECTgetRows($this->query['selectClause'], $this->query['fromClause'], $this->query['whereClause'], $this->query['groupbyClause'], $this->query['orderbyClause'], $this->query['limitClause']);
        if ($rows === null) {
            $this->controller->addError(
                'error.queryReturnedNull',
                [
                    $queryId
                ]
            );
        }

        return $rows;
    }

    /**
     * Initialization
     *
     * @param int $queryId
     *            The query id
     *
     * @return void
     */
    protected function initialize(int $queryId)
    {
        // Gets the object
        $object = $this->controller->getQueryRepository()->findByUid($queryId);
        if ($object === null) {
            $this->controller->addError(
                'error.queryError',
                [
                    $queryId
                ]
            );
            return false;
        }

        // Gets the query
        $this->query['selectClause'] = trim($object->getSelectClause());
        $this->query['fromClause'] = trim($object->getFromClause());
        $this->query['whereClause'] = trim($object->getWhereClause());
        $this->query['groupbyClause'] = trim($object->getGroupbyClause());
        $this->query['orderbyClause'] = trim($object->getOrderbyClause());
        $this->query['limitClause'] = trim($object->getLimitClause());

        // Replaces the markers
        $this->replaceMarkersInQuery($queryId);

        // Processes the database
        $databaseId = $object->getDatabaseId();

        if ($databaseId === null) {
            $this->databaseConnection = $GLOBALS['TYPO3_DB'];
        } else {
            $title = $databaseId->getTitle();
            $handlertype = $databaseId->getHandlertype();
            $host = $databaseId->getHost();
            $port = $databaseId->getPort();
            $socket = $databaseId->getSocket();
            $name = $databaseId->getName();
            $username = $databaseId->getUsername();
            $userpassword =  $databaseId->getUserpassword();
            $persistent = $databaseId->getPersistent();

            // Processes connection according to the handler type
            switch ($handlertype) {
                case self::NATIVE:
                    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['dbal']['handlerCfg']['_DEFAULT'] = [
                        'type' => 'native',
                        'config' => [
                            'username' => $username,
                            'password' => $userpassword,
                            'socket' => $socket,
                            'host' => $host,
                            'port' => $port,
                            'database' => $name,
                            'driver' => $databaseId->getDriver(),
                        ]
                    ];
                    break;
                case self::ADODB:
                    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['dbal']['handlerCfg'][$title] = [
                        'type' => 'adodb',
                        'config' => [
                            'username' => $username,
                            'password' => $userpassword,
                            'host' => $host,
                            'port' => $port,
                            'database' => $name,
                            'driver' => $databaseId->getDriver(),
                        ]
                    ];

                    // Creates the table handler for the database
                    $tables = explode(chr(10), str_replace(chr(13), '', $databaseId->getTables()));
                    foreach ($tables as $table) {
                        $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['dbal']['table2handlerKeys'][$table] = trim($title);
                    }
                    break;
                case self::USERDEFINED:
                        break;
            }
            $this->databaseConnection = $this->openDatabaseConnection($host, $port, $socket, $name, $username, $userpassword, $persistent);
            $this->databaseConnection->initialize();
        }

        return true;
    }

    /**
     * Opens a database connection
     *
     * @param string $host
     *            database host
     * @param integer $port
     *            database port
     * @param integer $socket
     *            socket
     * @param string $name
     *            database name
     * @param string $username
     *            database username
     * @param string $password
     *            database password
     * @param bool $persistentDatabaseConnection
     *            database persistent connection
     *
     * @return \TYPO3\CMS\Core\Database\DatabaseConnection The database connection
     */
    protected function openDatabaseConnection(string $host, int $port, int $socket, string $name, string $username, string $password, bool $persistentDatabaseConnection) : DatabaseConnection
    {
        $databaseConnection = GeneralUtility::makeInstance(DatabaseConnection::class);
        if (! empty($host)) {
            $databaseConnection->setDatabaseHost($host);
            $databaseConnection->setDatabasePort($port);
        } elseif (! empty($socket)) {
            $databaseConnection->setDatabaseSocket($socket);
        }
        $databaseConnection->setDatabaseName($name);
        $databaseConnection->setDatabaseUsername($username);
        $databaseConnection->setDatabasePassword($password);
        $databaseConnection->setPersistentDatabaseConnection($persistentDatabaseConnection);

        return $databaseConnection;
    }
}

?>