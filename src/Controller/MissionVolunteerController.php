<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MissionVolunteer Controller
 *
 * @property \App\Model\Table\MissionVolunteerTable $MissionVolunteer
 */
class MissionVolunteerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $missionVolunteer = $this->paginate($this->MissionVolunteer);

        $this->set(compact('missionVolunteer'));
        $this->set('_serialize', ['missionVolunteer']);
    }

    /**
     * View method
     *
     * @param string|null $id Mission Volunteer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $missionVolunteer = $this->MissionVolunteer->get($id, [
            'contain' => []
        ]);

        $this->set('missionVolunteer', $missionVolunteer);
        $this->set('_serialize', ['missionVolunteer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $missionVolunteer = $this->MissionVolunteer->newEntity();
        if ($this->request->is('post')) {
            $missionVolunteer = $this->MissionVolunteer->patchEntity($missionVolunteer, $this->request->data);
            if ($this->MissionVolunteer->save($missionVolunteer)) {
                $this->Flash->success(__('The mission volunteer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mission volunteer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('missionVolunteer'));
        $this->set('_serialize', ['missionVolunteer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mission Volunteer id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $missionVolunteer = $this->MissionVolunteer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $missionVolunteer = $this->MissionVolunteer->patchEntity($missionVolunteer, $this->request->data);
            if ($this->MissionVolunteer->save($missionVolunteer)) {
                $this->Flash->success(__('The mission volunteer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The mission volunteer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('missionVolunteer'));
        $this->set('_serialize', ['missionVolunteer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mission Volunteer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $missionVolunteer = $this->MissionVolunteer->get($id);
        if ($this->MissionVolunteer->delete($missionVolunteer)) {
            $this->Flash->success(__('The mission volunteer has been deleted.'));
        } else {
            $this->Flash->error(__('The mission volunteer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
