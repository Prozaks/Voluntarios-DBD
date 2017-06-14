<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Administrator Controller
 *
 * @property \App\Model\Table\AdministratorTable $Administrator
 */
class AdministratorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $administrator = $this->paginate($this->Administrator);

        $this->set(compact('administrator'));
        $this->set('_serialize', ['administrator']);
    }

    /**
     * View method
     *
     * @param string|null $id Administrator id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $administrator = $this->Administrator->get($id, [
            'contain' => []
        ]);

        $this->set('administrator', $administrator);
        $this->set('_serialize', ['administrator']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $administrator = $this->Administrator->newEntity();
        if ($this->request->is('post')) {
            $administrator = $this->Administrator->patchEntity($administrator, $this->request->data);
            if ($this->Administrator->save($administrator)) {
                $this->Flash->success(__('The administrator has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The administrator could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('administrator'));
        $this->set('_serialize', ['administrator']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Administrator id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $administrator = $this->Administrator->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $administrator = $this->Administrator->patchEntity($administrator, $this->request->data);
            if ($this->Administrator->save($administrator)) {
                $this->Flash->success(__('The administrator has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The administrator could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('administrator'));
        $this->set('_serialize', ['administrator']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Administrator id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $administrator = $this->Administrator->get($id);
        if ($this->Administrator->delete($administrator)) {
            $this->Flash->success(__('The administrator has been deleted.'));
        } else {
            $this->Flash->error(__('The administrator could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
