<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Controller;

use Cake\Event\EventInterface;

/**
 * Error Handling Controller.
 *
 * Controller used by ExceptionRenderer to render error responses.
 */
class ErrorController extends AppController
{
    /**
     * Initialization hook method.
     */
    public function initialize(): void
    {
        // Only add parent::initialize() if you are confident your appcontroller is safe.
    }

    /**
     * beforeFilter callback.
     *
     * @param \Cake\Event\EventInterface<\Cake\Controller\Controller> $event event
     *
     * @return null|\Cake\Http\Response|void
     */
    public function beforeFilter(EventInterface $event) {}

    /**
     * beforeRender callback.
     *
     * @param \Cake\Event\EventInterface<\Cake\Controller\Controller> $event event
     *
     * @return null|\Cake\Http\Response|void
     */
    public function beforeRender(EventInterface $event)
    {
        parent::beforeRender($event);

        $this->viewBuilder()->setTemplatePath('Error');
    }

    /**
     * afterFilter callback.
     *
     * @param \Cake\Event\EventInterface<\Cake\Controller\Controller> $event event
     *
     * @return null|\Cake\Http\Response|void
     */
    public function afterFilter(EventInterface $event) {}
}
