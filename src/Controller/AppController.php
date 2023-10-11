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

use Cake\Controller\Controller;
use Cake\Core\Configure;

/**
 * Application Controller.
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @see https://book.cakephp.org/4/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Flash');
        /* $this->loadComponent('Auth', [
             'authenticate' => [
                 'Form' => [
                     'fields' => [
                         'Number1' => 'number1',
                         'Number2' => 'number2',
                     ]
                 ]
             ],
             'addnumbersAction' => [
                 'controller' => 'Math',
                 'action' => 'addnumbers'
             ]

         ]); */

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        // $this->loadComponent('FormProtection');
    }
}
