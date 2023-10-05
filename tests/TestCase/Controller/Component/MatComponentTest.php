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

namespace App\Test\TestCase\Controller\Component;

use App\Controller\MathController; // Poprawa: Import kontrolera, który ma być testowany
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\MatComponent Test Case.
 *
 * @internal
 *
 * @coversNothing
 */
final class MatComponentTest extends TestCase
{
    /**
     * Test subject.
     *
     * @var \App\Controller\MathController
     */
    public $MathController; // Poprawa: Zmiana nazwy zmiennej na MathController

    /**
     * setUp method.
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Tworzenie instancji kontrolera
        $registry = new ComponentRegistry();
        $this->MathController = new MathController($registry); // Poprawa: Przekazanie ComponentRegistry do kontrolera
    }

    /**
     * tearDown method.
     */
    protected function tearDown(): void
    {
        $this->MathController = null;

        parent::tearDown();
    }

    public function testAddNumbers(): void
    {
        // Call the controller action
        $result = $this->MathController->addNumbers();

        // Get the view vars from the controller
        $viewVars = $this->MathController->viewVars;

        // Assert that the result is as expected
        self::assertSame(13, $viewVars['sum']); // Poprawa: Sprawdzenie wyniku na podstawie zmiennych widoku
    }
}
