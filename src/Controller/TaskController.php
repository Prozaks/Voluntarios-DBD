<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Task Controller
 *
 * @property \App\Model\Table\TaskTable $Task
 */
class TaskController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $task = $this->paginate($this->Task);

        $this->set(compact('task'));
        $this->set('_serialize', ['task']);
    }

    /**
     * View method
     *
     * @param string|null $id Task id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $task = $this->Task->get($id, [
            'contain' => ['Skill', 'Volunteer']
        ]);

        $this->set('task', $task);
        $this->set('_serialize', ['task']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $task = $this->Task->newEntity();
        if ($this->request->is('post')) {
            $task = $this->Task->patchEntity($task, $this->request->data);
            if ($this->Task->save($task)) {
                $this->Flash->success(__('The task has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The task could not be saved. Please, try again.'));
            }
        }
        $skill = $this->Task->Skill->find('list', ['limit' => 200]);
        $volunteer = $this->Task->Volunteer->find('list', ['limit' => 200]);
        $this->set(compact('task', 'skill', 'volunteer'));
        $this->set('_serialize', ['task']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Task id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $task = $this->Task->get($id, [
            'contain' => ['Skill', 'Volunteer']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $task = $this->Task->patchEntity($task, $this->request->data);
            if ($this->Task->save($task)) {
                $this->Flash->success(__('The task has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The task could not be saved. Please, try again.'));
            }
        }
        $skill = $this->Task->Skill->find('list', ['limit' => 200]);
        $volunteer = $this->Task->Volunteer->find('list', ['limit' => 200]);
        $this->set(compact('task', 'skill', 'volunteer'));
        $this->set('_serialize', ['task']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Task id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $task = $this->Task->get($id);
        if ($this->Task->delete($task)) {
            $this->Flash->success(__('The task has been deleted.'));
        } else {
            $this->Flash->error(__('The task could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
