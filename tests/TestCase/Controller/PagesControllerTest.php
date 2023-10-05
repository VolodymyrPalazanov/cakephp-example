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

namespace App\Test\TestCase\Controller;

use Cake\Core\Configure;
use Cake\TestSuite\Constraint\Response\StatusCode;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * PagesControllerTest class.
 *
 * @uses \App\Controller\PagesController
 *
 * @internal
 *
 * @coversNothing
 */
final class PagesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * testDisplay method.
     */
    public function testDisplay(): void
    {
        Configure::write('debug', true);
        $this->get('/pages/home');
        $this->assertResponseOk();
        $this->assertResponseContains('CakePHP');
        $this->assertResponseContains('<html>');
    }

    /**
     * Test that missing template renders 404 page in production.
     */
    public function testMissingTemplate(): void
    {
        Configure::write('debug', false);
        $this->get('/pages/not_existing');

        $this->assertResponseError();
        $this->assertResponseContains('Error');
    }

    /**
     * Test that missing template in debug mode renders missing_template error page.
     */
    public function testMissingTemplateInDebug(): void
    {
        Configure::write('debug', true);
        $this->get('/pages/not_existing');

        $this->assertResponseFailure();
        $this->assertResponseContains('Missing Template');
        $this->assertResponseContains('stack-frames');
        $this->assertResponseContains('not_existing.php');
    }

    /**
     * Test directory traversal protection.
     */
    public function testDirectoryTraversalProtection(): void
    {
        $this->get('/pages/../Layout/ajax');
        $this->assertResponseCode(403);
        $this->assertResponseContains('Forbidden');
    }

    /**
     * Test that CSRF protection is applied to page rendering.
     */
    public function testCsrfAppliedError(): void
    {
        $this->post('/pages/home', ['hello' => 'world']);

        $this->assertResponseCode(403);
        $this->assertResponseContains('CSRF');
    }

    /**
     * Test that CSRF protection is applied to page rendering.
     */
    public function testCsrfAppliedOk(): void
    {
        $this->enableCsrfToken();
        $this->post('/pages/home', ['hello' => 'world']);

        self::assertThat(403, self::logicalNot(new StatusCode($this->_response)));
        $this->assertResponseNotContains('CSRF');
    }
}
