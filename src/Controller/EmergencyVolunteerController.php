<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EmergencyVolunteer Controller
 *
 * @property \App\Model\Table\EmergencyVolunteerTable $EmergencyVolunteer
 */
class EmergencyVolunteerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $emergencyVolunteer = $this->paginate($this->EmergencyVolunteer);

        $this->set(compact('emergencyVolunteer'));
        $this->set('_serialize', ['emergencyVolunteer']);
    }

    /**
     * View method
     *
     * @param string|null $id Emergency Volunteer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emergencyVolunteer = $this->EmergencyVolunteer->get($id, [
            'contain' => []
        ]);

        $this->set('emergencyVolunteer', $emergencyVolunteer);
        $this->set('_serialize', ['emergencyVolunteer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emergencyVolunteer = $this->EmergencyVolunteer->newEntity();
        if ($this->request->is('post')) {
            $emergencyVolunteer = $this->EmergencyVolunteer->patchEntity($emergencyVolunteer, $this->request->data);
            if ($this->EmergencyVolunteer->save($emergencyVolunteer)) {
                $this->Flash->success(__('The emergency volunteer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The emergency volunteer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('emergencyVolunteer'));
        $this->set('_serialize', ['emergencyVolunteer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Emergency Volunteer id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emergencyVolunteer = $this->EmergencyVolunteer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emergencyVolunteer = $this->EmergencyVolunteer->patchEntity($emergencyVolunteer, $this->request->data);
            if ($this->EmergencyVolunteer->save($emergencyVolunteer)) {
                $this->Flash->success(__('The emergency volunteer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The emergency volunteer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('emergencyVolunteer'));
        $this->set('_serialize', ['emergencyVolunteer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Emergency Volunteer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emergencyVolunteer = $this->EmergencyVolunteer->get($id);
        if ($this->EmergencyVolunteer->delete($emergencyVolunteer)) {
            $this->Flash->success(__('The emergency volunteer has been deleted.'));
        } else {
            $this->Flash->error(__('The emergency volunteer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
