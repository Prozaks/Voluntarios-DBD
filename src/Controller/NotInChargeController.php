<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NotInCharge Controller
 *
 * @property \App\Model\Table\NotInChargeTable $NotInCharge
 */
class NotInChargeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $notInCharge = $this->paginate($this->NotInCharge);

        $this->set(compact('notInCharge'));
        $this->set('_serialize', ['notInCharge']);
    }

    /**
     * View method
     *
     * @param string|null $id Not In Charge id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notInCharge = $this->NotInCharge->get($id, [
            'contain' => []
        ]);

        $this->set('notInCharge', $notInCharge);
        $this->set('_serialize', ['notInCharge']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notInCharge = $this->NotInCharge->newEntity();
        if ($this->request->is('post')) {
            $notInCharge = $this->NotInCharge->patchEntity($notInCharge, $this->request->data);
            if ($this->NotInCharge->save($notInCharge)) {
                $this->Flash->success(__('The not in charge has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The not in charge could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('notInCharge'));
        $this->set('_serialize', ['notInCharge']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Not In Charge id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notInCharge = $this->NotInCharge->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notInCharge = $this->NotInCharge->patchEntity($notInCharge, $this->request->data);
            if ($this->NotInCharge->save($notInCharge)) {
                $this->Flash->success(__('The not in charge has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The not in charge could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('notInCharge'));
        $this->set('_serialize', ['notInCharge']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Not In Charge id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notInCharge = $this->NotInCharge->get($id);
        if ($this->NotInCharge->delete($notInCharge)) {
            $this->Flash->success(__('The not in charge has been deleted.'));
        } else {
            $this->Flash->error(__('The not in charge could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
