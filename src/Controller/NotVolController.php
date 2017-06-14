<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NotVol Controller
 *
 * @property \App\Model\Table\NotVolTable $NotVol
 */
class NotVolController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $notVol = $this->paginate($this->NotVol);

        $this->set(compact('notVol'));
        $this->set('_serialize', ['notVol']);
    }

    /**
     * View method
     *
     * @param string|null $id Not Vol id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notVol = $this->NotVol->get($id, [
            'contain' => []
        ]);

        $this->set('notVol', $notVol);
        $this->set('_serialize', ['notVol']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notVol = $this->NotVol->newEntity();
        if ($this->request->is('post')) {
            $notVol = $this->NotVol->patchEntity($notVol, $this->request->data);
            if ($this->NotVol->save($notVol)) {
                $this->Flash->success(__('The not vol has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The not vol could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('notVol'));
        $this->set('_serialize', ['notVol']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Not Vol id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notVol = $this->NotVol->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notVol = $this->NotVol->patchEntity($notVol, $this->request->data);
            if ($this->NotVol->save($notVol)) {
                $this->Flash->success(__('The not vol has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The not vol could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('notVol'));
        $this->set('_serialize', ['notVol']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Not Vol id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notVol = $this->NotVol->get($id);
        if ($this->NotVol->delete($notVol)) {
            $this->Flash->success(__('The not vol has been deleted.'));
        } else {
            $this->Flash->error(__('The not vol could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
