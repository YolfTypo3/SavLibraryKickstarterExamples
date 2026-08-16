<?php

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
 * The TYPO3 project - inspiring people to share
 */

namespace YolfTypo3\SavCalendarMvc\Controller;

use Psr\Http\Message\ResponseInterface;
use YolfTypo3\SavCalendarMvc\Domain\Model\Event;
use YolfTypo3\SavCalendarMvc\Domain\Repository\EventRepository;

/**
 * Controller for the form Admin
 *
 */
final class AdminController extends \YolfTypo3\SavLibraryMvc\Controller\DefaultController
{
    /**
     * Main repository
     *
     * @var EventRepository
     */
    protected $mainRepository = null;

    /**
     * Constructor.
     *
     * @return void
     */
    public function __construct(EventRepository $repository)
    {
        $this->mainRepository = $repository;
    }

    /**
     * Subform repository class names
     *
     * @var array
     */
    protected $subforms = [
    ];
 
    /**
     * Save action for this controller
     *
     * @param Event $data
     * @return ResponseInterface
     */
    public function saveAction(Event $data): ResponseInterface
    {
        return $this->save($data);
    }
}
