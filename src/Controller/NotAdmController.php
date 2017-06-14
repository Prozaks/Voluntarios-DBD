<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * NotAdm Controller
 *
 * @property \App\Model\Table\NotAdmTable $NotAdm
 */
class NotAdmController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $notAdm = $this->paginate($this->NotAdm);

        $this->set(compact('notAdm'));
        $this->set('_serialize', ['notAdm']);
    }

    /**
     * View method
     *
     * @param string|null $id Not Adm id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $notAdm = $this->NotAdm->get($id, [
            'contain' => []
        ]);

        $this->set('notAdm', $notAdm);
        $this->set('_serialize', ['notAdm']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $notAdm = $this->NotAdm->newEntity();
        if ($this->request->is('post')) {
            $notAdm = $this->NotAdm->patchEntity($notAdm, $this->request->data);
            if ($this->NotAdm->save($notAdm)) {
                $this->Flash->success(__('The not adm has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The not adm could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('notAdm'));
        $this->set('_serialize', ['notAdm']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Not Adm id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $notAdm = $this->NotAdm->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $notAdm = $this->NotAdm->patchEntity($notAdm, $this->request->data);
            if ($this->NotAdm->save($notAdm)) {
                $this->Flash->success(__('The not adm has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The not adm could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('notAdm'));
        $this->set('_serialize', ['notAdm']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Not Adm id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $notAdm = $this->NotAdm->get($id);
        if ($this->NotAdm->delete($notAdm)) {
            $this->Flash->success(__('The not adm has been deleted.'));
        } else {
            $this->Flash->error(__('The not adm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
