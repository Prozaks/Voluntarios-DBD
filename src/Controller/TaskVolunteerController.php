<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TaskVolunteer Controller
 *
 * @property \App\Model\Table\TaskVolunteerTable $TaskVolunteer
 */
class TaskVolunteerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $taskVolunteer = $this->paginate($this->TaskVolunteer);

        $this->set(compact('taskVolunteer'));
        $this->set('_serialize', ['taskVolunteer']);
    }

    /**
     * View method
     *
     * @param string|null $id Task Volunteer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $taskVolunteer = $this->TaskVolunteer->get($id, [
            'contain' => []
        ]);

        $this->set('taskVolunteer', $taskVolunteer);
        $this->set('_serialize', ['taskVolunteer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $taskVolunteer = $this->TaskVolunteer->newEntity();
        if ($this->request->is('post')) {
            $taskVolunteer = $this->TaskVolunteer->patchEntity($taskVolunteer, $this->request->data);
            if ($this->TaskVolunteer->save($taskVolunteer)) {
                $this->Flash->success(__('The task volunteer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The task volunteer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('taskVolunteer'));
        $this->set('_serialize', ['taskVolunteer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Task Volunteer id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $taskVolunteer = $this->TaskVolunteer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $taskVolunteer = $this->TaskVolunteer->patchEntity($taskVolunteer, $this->request->data);
            if ($this->TaskVolunteer->save($taskVolunteer)) {
                $this->Flash->success(__('The task volunteer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The task volunteer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('taskVolunteer'));
        $this->set('_serialize', ['taskVolunteer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Task Volunteer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $taskVolunteer = $this->TaskVolunteer->get($id);
        if ($this->TaskVolunteer->delete($taskVolunteer)) {
            $this->Flash->success(__('The task volunteer has been deleted.'));
        } else {
            $this->Flash->error(__('The task volunteer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
