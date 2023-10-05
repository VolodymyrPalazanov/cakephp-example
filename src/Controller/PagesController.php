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

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller.
 *
 * This controller will render views from templates/Pages/
 *
 * @see https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    /**
     * Displays a view.
     *
     * @param string ...$path Path segments.
     *
     * @throws \Cake\Http\Exception\ForbiddenException       when a directory traversal attempt
     * @throws \Cake\View\Exception\MissingTemplateException when the view file could not
     *                                                       be found and in debug mode
     * @throws \Cake\Http\Exception\NotFoundException        when the view file could not
     *                                                       be found and not in debug mode
     * @throws \Cake\View\Exception\MissingTemplateException in debug mode
     */
    public function display(string ...$path): ?Response
    {
        if (!$path) {
            return $this->redirect('/');
        }
        if (\in_array('..', $path, true) || \in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }

            throw new NotFoundException();
        }
    }
}
