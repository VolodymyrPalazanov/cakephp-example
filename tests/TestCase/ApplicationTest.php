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

namespace App\Test\TestCase;

use App\Application;
use Cake\Core\Configure;
use Cake\Error\Middleware\ErrorHandlerMiddleware;
use Cake\Http\MiddlewareQueue;
use Cake\Routing\Middleware\AssetMiddleware;
use Cake\Routing\Middleware\RoutingMiddleware;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * ApplicationTest class.
 *
 * @internal
 *
 * @coversNothing
 */
final class ApplicationTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Test bootstrap in production.
     */
    public function testBootstrap(): void
    {
        Configure::write('debug', false);
        $app = new Application(\dirname(__DIR__, 2).'/config');
        $app->bootstrap();
        $plugins = $app->getPlugins();

        self::assertTrue($plugins->has('Bake'), 'plugins has Bake?');
        self::assertFalse($plugins->has('DebugKit'), 'plugins has DebugKit?');
        self::assertTrue($plugins->has('Migrations'), 'plugins has Migrations?');
    }

    /**
     * Test bootstrap add DebugKit plugin in debug mode.
     */
    public function testBootstrapInDebug(): void
    {
        Configure::write('debug', true);
        $app = new Application(\dirname(__DIR__, 2).'/config');
        $app->bootstrap();
        $plugins = $app->getPlugins();

        self::assertTrue($plugins->has('DebugKit'), 'plugins has DebugKit?');
    }

    /**
     * testBootstrapPluginWitoutHalt.
     */
    public function testBootstrapPluginWithoutHalt(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $app = $this->getMockBuilder(Application::class)
            ->setConstructorArgs([\dirname(__DIR__, 2).'/config'])
            ->onlyMethods(['addPlugin'])
            ->getMock()
        ;

        $app->method('addPlugin')
            ->will(self::throwException(new \InvalidArgumentException('test exception.')))
        ;

        $app->bootstrap();
    }

    /**
     * testMiddleware.
     */
    public function testMiddleware(): void
    {
        $app = new Application(\dirname(__DIR__, 2).'/config');
        $middleware = new MiddlewareQueue();

        $middleware = $app->middleware($middleware);

        self::assertInstanceOf(ErrorHandlerMiddleware::class, $middleware->current());
        $middleware->seek(1);
        self::assertInstanceOf(AssetMiddleware::class, $middleware->current());
        $middleware->seek(2);
        self::assertInstanceOf(RoutingMiddleware::class, $middleware->current());
    }
}
