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
use Cake\Event\EventInterface;


/**
 * Math Controller.
 *
 * @property \App\Model\Table\MathTable $Math
 */
class MathController extends AppController
{
    /**
     * @property \App\Controller\Component\MatComponent $Mat
     *
     * @var \App\Controller\Component\MatComponent
     */

    public $components = ['Security'];

    private $Mat;

    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Mat');
        $this->Mat = $this->loadComponent('Mat');
    }

    /**
     * @return mixed
     */
    public function addNumbers()
    {
        $number1 = 18;
        $number2 = 14;
        $sum = $this->Mat->add($number1, $number2);

        $this->set('number1', $number1);
        $this->set('number2', $number2);
        $this->set('sum', $sum);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Math->find();
        $math = $this->paginate($query);

        $this->set(compact('math'));
    }

    /**
     * View method
     *
     * @param string|null $id Math id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $math = $this->Math->get($id, ['contain' => []]);
        $this->set(compact('math'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $math = $this->Math->newEmptyEntity();
        if ($this->request->is('post')) {
            $math = $this->Math->patchEntity($math, $this->request->getData());
            if ($this->Math->save($math)) {
                $this->Flash->success(__('The math has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The math could not be saved. Please, try again.'));
        }
        $this->set(compact('math'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Math id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $math = $this->Math->get($id, ['contain' => []]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $math = $this->Math->patchEntity($math, $this->request->getData());
            if ($this->Math->save($math)) {
                $this->Flash->success(__('The math has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The math could not be saved. Please, try again.'));
        }
        $this->set(compact('math'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Math id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $math = $this->Math->get($id);
        if ($this->Math->delete($math)) {
            $this->Flash->success(__('The math has been deleted.'));
        } else {
            $this->Flash->error(__('The math could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
