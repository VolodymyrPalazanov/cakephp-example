<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\Component\MatComponent;
use Cake\Controller\Controller;
use Cake\Event\EventInterface;

/**
 * Math Controller
 *
 * @property \App\Model\Table\MathTable $Math
 * 
 */
class MathController extends AppController
{
    /**
    * @property \App\Controller\Component\MatComponent $Mat
    * @var \App\Controller\Component\MatComponent
    */
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
        $number1 = 10;
        $number2 = 3;
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
        $this->loadModel('Math'); // Load the Math model
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
