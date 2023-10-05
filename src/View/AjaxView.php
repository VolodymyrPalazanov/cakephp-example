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

namespace App\View;

/**
 * A view class that is used for AJAX responses.
 * Currently only switches the default layout and sets the response type -
 * which just maps to text/html by default.
 */
class AjaxView extends AppView
{
    /**
     * The name of the layout file to render the view inside of. The name
     * specified is the filename of the layout in /templates/Layout without
     * the .php extension.
     */
    protected string $layout = 'ajax';

    /**
     * Initialization hook method.
     */
    public function initialize(): void
    {
        parent::initialize();

        $this->response = $this->response->withType('ajax');
    }
}
