<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SkillVolunteer Controller
 *
 * @property \App\Model\Table\SkillVolunteerTable $SkillVolunteer
 */
class SkillVolunteerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $skillVolunteer = $this->paginate($this->SkillVolunteer);

        $this->set(compact('skillVolunteer'));
        $this->set('_serialize', ['skillVolunteer']);
    }

    /**
     * View method
     *
     * @param string|null $id Skill Volunteer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $skillVolunteer = $this->SkillVolunteer->get($id, [
            'contain' => []
        ]);

        $this->set('skillVolunteer', $skillVolunteer);
        $this->set('_serialize', ['skillVolunteer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $skillVolunteer = $this->SkillVolunteer->newEntity();
        if ($this->request->is('post')) {
            $skillVolunteer = $this->SkillVolunteer->patchEntity($skillVolunteer, $this->request->data);
            if ($this->SkillVolunteer->save($skillVolunteer)) {
                $this->Flash->success(__('The skill volunteer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The skill volunteer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('skillVolunteer'));
        $this->set('_serialize', ['skillVolunteer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Skill Volunteer id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $skillVolunteer = $this->SkillVolunteer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $skillVolunteer = $this->SkillVolunteer->patchEntity($skillVolunteer, $this->request->data);
            if ($this->SkillVolunteer->save($skillVolunteer)) {
                $this->Flash->success(__('The skill volunteer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The skill volunteer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('skillVolunteer'));
        $this->set('_serialize', ['skillVolunteer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Skill Volunteer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $skillVolunteer = $this->SkillVolunteer->get($id);
        if ($this->SkillVolunteer->delete($skillVolunteer)) {
            $this->Flash->success(__('The skill volunteer has been deleted.'));
        } else {
            $this->Flash->error(__('The skill volunteer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
