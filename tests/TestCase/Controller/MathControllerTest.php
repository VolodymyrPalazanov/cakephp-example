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

use Cake\ORM\TableRegistry;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\MathController Test Case.
 *
 * @uses \App\Controller\MathController
 *
 * @internal
 *
 * @coversNothing
 */
final class MathControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Test that the "addNumbers" action renders correctly.
     */
    public function testAddNumbers(): void
    {
        $this->get('/math/addNumbers');

        $this->assertResponseOk();
    }

    /**
     * Test adding numbers via the "add" action.
     */
    public function testAdd(): void
    {
        $data = [
            'number1' => 5,
            'number2' => 7,
        ];
        $this->enableCsrfToken();
        $this->post('/math/add', $data);

        $this->assertRedirect(['action' => 'index']);
        $this->assertFlashElement('Flash/success');
    }

    /**
     * Test editing a record via the "edit" action.
     */
    public function testEdit(): void
    {
        $entityId = 4;
        $this->get(['controller' => 'Math', 'action' => 'edit', $entityId]);
        $this->assertResponseOk();

        $data = [
            'number1' => '2',
        ];
        $this->post(['controller' => 'Math', 'action' => 'edit', $entityId], $data);
        $this->assertResponseSuccess();
        $updatedEntity = $this->getTableLocator()->get('Math')->get(primaryKey: $entityId, finder: 'all', cache: null, cacheKey: null);
        $this->assertEquals('2', $updatedEntity->number1);
    }

    /**
     * Test deleting a record via the "delete" action.
     */
    public function testDelete(): void
    {
        $idToDelete = 4; 
        $this->delete('/math/delete/' . $idToDelete);
        $this->assertResponseSuccess();
        $this->assertFalse(TableRegistry::getTableLocator()->get('Math')->exists(['id' => $idToDelete]));
    }
}
