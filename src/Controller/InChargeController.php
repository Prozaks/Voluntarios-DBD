<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InCharge Controller
 *
 * @property \App\Model\Table\InChargeTable $InCharge
 */
class InchargeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $inCharge = $this->paginate($this->InCharge);

        $this->set(compact('inCharge'));
        $this->set('_serialize', ['inCharge']);
    }

    /**
     * View method
     *
     * @param string|null $id In Charge id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inCharge = $this->InCharge->get($id, [
            'contain' => []
        ]);

        $this->set('inCharge', $inCharge);
        $this->set('_serialize', ['inCharge']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inCharge = $this->InCharge->newEntity();
        if ($this->request->is('post')) {
            $inCharge = $this->InCharge->patchEntity($inCharge, $this->request->data);
            if ($this->InCharge->save($inCharge)) {
                $this->Flash->success(__('The in charge has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The in charge could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('inCharge'));
        $this->set('_serialize', ['inCharge']);
    }

    /**
     * Edit method
     *
     * @param string|null $id In Charge id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inCharge = $this->InCharge->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inCharge = $this->InCharge->patchEntity($inCharge, $this->request->data);
            if ($this->InCharge->save($inCharge)) {
                $this->Flash->success(__('The in charge has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The in charge could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('inCharge'));
        $this->set('_serialize', ['inCharge']);
    }

    /**
     * Delete method
     *
     * @param string|null $id In Charge id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inCharge = $this->InCharge->get($id);
        if ($this->InCharge->delete($inCharge)) {
            $this->Flash->success(__('The in charge has been deleted.'));
        } else {
            $this->Flash->error(__('The in charge could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
