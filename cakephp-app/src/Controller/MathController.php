<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Math Controller
 *
 * @property \App\Model\Table\MathTable $Math
 */
class MathController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('Mat');
    }
    public function addNumbers()
    {
        $result = $this->Mat->add(8, 3);

        $this->set(compact('result'));
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
        $math = $this->Math->get($id, contain: []);
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
        $math = $this->Math->get($id, contain: []);
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
