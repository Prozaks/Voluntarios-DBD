<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Commune Controller
 *
 * @property \App\Model\Table\CommuneTable $Commune
 */
class CommuneController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $commune = $this->paginate($this->Commune, ['limit' => 5, 'conditions' => ['COM_ID' => 1, 'OR' => ['COM_ID' => 3]]]);

        debug($commune);
        $this->set(compact('commune'));
        $this->set('_serialize', ['commune']);
    }

    /**
     * View method
     *
     * @param string|null $id Commune id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $commune = $this->Commune->get($id, [
            'contain' => []
        ]);

        $this->set('commune', $commune);
        $this->set('_serialize', ['commune']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $commune = $this->Commune->newEntity();
        if ($this->request->is('post')) {
            $commune = $this->Commune->patchEntity($commune, $this->request->data);
            if ($this->Commune->save($commune)) {
                $this->Flash->success(__('The commune has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The commune could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('commune'));
        $this->set('_serialize', ['commune']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Commune id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $commune = $this->Commune->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $commune = $this->Commune->patchEntity($commune, $this->request->data);
            if ($this->Commune->save($commune)) {
                $this->Flash->success(__('The commune has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The commune could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('commune'));
        $this->set('_serialize', ['commune']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Commune id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $commune = $this->Commune->get($id);
        if ($this->Commune->delete($commune)) {
            $this->Flash->success(__('The commune has been deleted.'));
        } else {
            $this->Flash->error(__('The commune could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
