<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Skill Controller
 *
 * @property \App\Model\Table\SkillTable $Skill
 */
class SkillController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $skill = $this->paginate($this->Skill);

        $this->set(compact('skill'));
        $this->set('_serialize', ['skill']);
    }

    /**
     * View method
     *
     * @param string|null $id Skill id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $skill = $this->Skill->get($id, [
            'contain' => ['Volunteer', 'Task']
        ]);

        $this->set('skill', $skill);
        $this->set('_serialize', ['skill']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $skill = $this->Skill->newEntity();
        if ($this->request->is('post')) {
            $skill = $this->Skill->patchEntity($skill, $this->request->data);
            if ($this->Skill->save($skill)) {
                $this->Flash->success(__('The skill has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The skill could not be saved. Please, try again.'));
            }
        }
        $volunteer = $this->Skill->Volunteer->find('list', ['limit' => 200]);
        $task = $this->Skill->Task->find('list', ['limit' => 200]);
        $this->set(compact('skill', 'volunteer', 'task'));
        $this->set('_serialize', ['skill']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Skill id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $skill = $this->Skill->get($id, [
            'contain' => ['Volunteer', 'Task']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $skill = $this->Skill->patchEntity($skill, $this->request->data);
            if ($this->Skill->save($skill)) {
                $this->Flash->success(__('The skill has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The skill could not be saved. Please, try again.'));
            }
        }
        $volunteer = $this->Skill->Volunteer->find('list', ['limit' => 200]);
        $task = $this->Skill->Task->find('list', ['limit' => 200]);
        $this->set(compact('skill', 'volunteer', 'task'));
        $this->set('_serialize', ['skill']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Skill id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $skill = $this->Skill->get($id);
        if ($this->Skill->delete($skill)) {
            $this->Flash->success(__('The skill has been deleted.'));
        } else {
            $this->Flash->error(__('The skill could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
