<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Volunteer Controller
 *
 * @property \App\Model\Table\VolunteerTable $Volunteer
 */
class CalificarController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {


        $uid = $this->Auth->User('id');

        $usersTable = $this-> loadModel('Users');
        $user = $usersTable->get($uid);

        #debug($user); #Tiene el ID del usuario loggeado

        $this->loadModel('InCharge');
        $encargado= $this->InCharge->newEntity();


        $aux= $this->InCharge->find('list')->select(['IN_ID'])->where(['IN_IDUSER =' => 5]);

        $temp= null;
        foreach ($aux as $row) {
          $temp = $row;
        }

        debug($temp); #Selecciona el ID del Cristian (1)

        $this->loadModel('Mission');
        $misiones= $this->Mission->newEntity();
        $misiones= $this->Mission->find('list')->select(['MIS_ID'])->where(['IN_ID' => 2]);

        $temp2= null;
        foreach ($misiones as $row) {
          $temp2 = $row;
        }

        #debug($temp2); #Selecciona el ID de la mision (1)

        $this->loadModel('MissionVolunteer');
        $misionesVoluntario= $this->MissionVolunteer->newEntity();
        $misionesVoluntario= $this->MissionVolunteer->find()->select(['VOL_ID'])->where(['MIS_ID' => $temp2]);

        #foreach ($misionesVoluntario as $row) {
        # debug($row);
        #}


        $this->loadModel('Volunteer');
        $voluntario= $this->Volunteer->newEntity();

        $query=$this->Volunteer->find('list') ->select(['VOL_NOMBRE1'])->where(['VOL_ID IN' => $misionesVoluntario]);

        debug($query);
        #query("SELECT a.* FROM Volunteer a WHERE a.VOL_ID=1");

        #$aux3=$voluntario->find()->where(['Volunteer.VOL_ID' => $misionesVoluntario]);


        if ($this->request->is('postas')) {


            if ($this->Volunteer->save($volunteer)) {
            $usuarios->id = $volunteer->VOL_ID;
            $this->Users->save($usuarios);

                $this->Flash->success(__('The volunteer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The volunteer could not be saved. Please, try again.'));
            }
        }

        $this->set(compact('misionesVoluntario', 'usuarios', 'mission','voluntario','temp4', 'query','aux3'));
        $this->set('_serialize', ['volunteer']);

    }

    /**
     * View method
     *
     * @param string|null $id Volunteer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $volunteer = $this->Volunteer->get($id);

        $this->set('volunteer', $volunteer);
        $this->set('_serialize', ['volunteer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $volunteer = $this->Volunteer->newEntity();
        if ($this->request->is('post')) {
            $volunteer = $this->Volunteer->patchEntity($volunteer, $this->request->data);
            if ($this->Volunteer->save($volunteer)) {
                $this->Flash->success(__('The volunteer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The volunteer could not be saved. Please, try again.'));
            }
        }
        $area = $this->Volunteer->Area->find('list', ['limit' => 200]);
        $emergency = $this->Volunteer->Emergency->find('list', ['limit' => 200]);
        $skill = $this->Volunteer->Skill->find('list', ['limit' => 200]);
        $task = $this->Volunteer->Task->find('list', ['limit' => 200]);
        $this->set(compact('volunteer', 'area', 'emergency', 'skill', 'task'));
        $this->set('_serialize', ['volunteer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Volunteer id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $volunteer = $this->Volunteer->get($id, [
            'contain' => ['Area', 'Emergency', 'Skill', 'Task']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $volunteer = $this->Volunteer->patchEntity($volunteer, $this->request->data);
            if ($this->Volunteer->save($volunteer)) {
                $this->Flash->success(__('The volunteer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The volunteer could not be saved. Please, try again.'));
            }
        }
        $area = $this->Volunteer->Area->find('list', ['limit' => 200]);
        $emergency = $this->Volunteer->Emergency->find('list', ['limit' => 200]);
        $skill = $this->Volunteer->Skill->find('list', ['limit' => 200]);
        $task = $this->Volunteer->Task->find('list', ['limit' => 200]);
        $this->set(compact('volunteer', 'area', 'emergency', 'skill', 'task'));
        $this->set('_serialize', ['volunteer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Volunteer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $volunteer = $this->Volunteer->get($id);
        if ($this->Volunteer->delete($volunteer)) {
            $this->Flash->success(__('The volunteer has been deleted.'));
        } else {
            $this->Flash->error(__('The volunteer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
