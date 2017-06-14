<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mission Controller
 *
 * @property \App\Model\Table\MissionTable $Mission
 */
class MissionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $mission = $this->paginate($this->Mission);

        $this->set(compact('mission'));
        $this->set('_serialize', ['mission']);
    }

    /**
     * View method
     *
     * @param string|null $id Mission id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mission = $this->Mission->get($id, [
            'contain' => []
        ]);

        $this->set('mission', $mission);
        $this->set('_serialize', ['mission']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mission = $this->Mission->newEntity();
        if ($this->request->is('post')) {
            $mission = $this->Mission->patchEntity($mission, $this->request->data);
            if ($this->Mission->save($mission)) {
                $this->Flash->success(__('The mission has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mission could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mission'));
        $this->set('_serialize', ['mission']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mission id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mission = $this->Mission->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mission = $this->Mission->patchEntity($mission, $this->request->data);
            if ($this->Mission->save($mission)) {
                $this->Flash->success(__('The mission has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mission could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mission'));
        $this->set('_serialize', ['mission']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mission id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mission = $this->Mission->get($id);
        if ($this->Mission->delete($mission)) {
            $this->Flash->success(__('The mission has been deleted.'));
        } else {
            $this->Flash->error(__('The mission could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
