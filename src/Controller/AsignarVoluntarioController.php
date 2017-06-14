<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Emergency Controller
 *
 * @property \App\Model\Table\EmergencyTable $Emergency
 */
class AsignarVoluntarioController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {


        $volunteer = null;
        $this->loadModel('Volunteer');
        $voluntarios= $this->Volunteer->newEntity();
        $voluntarios= $this->Volunteer->find('list')->order(['VOL_NOMBRE1' => 'ASC'])->where(['VOL_DISPONIBILIDAD' => 1]);


        $this->loadModel('Task');
        $tareas = $this->Task->newEntity();
        $tareas = $this->Task->find('list')->order(['TASK_NOMBRE' => 'ASC']);




        $this->loadModel('TaskVolunteer');
        $voltarea= $this->TaskVolunteer->newEntity();

        $volunteer=null;
         if ($this->request->is('post')) {

            $voltarea->TASK_ID = $this->request->data['Tareas'];
            $voltarea->VOL_ID = $this->request->data['Voluntarios'];

            debug($voltarea->VOL_ID);


            if ($this->TaskVolunteer->save($voltarea)){
                $this->Flash->success(__('The volunteer has been saved.'));
                return $this->redirect(['controller' => 'Perfilencargado']);
            } else {
                $this->Flash->error(__('The volunteer could not be saved. Please, try again.'));
            }
        }

        $this->set(compact('voluntarios', 'tareas','voltarea','volunteer'));
        $this->set('_serialize', ['voluntarios','tareas','voltarea']);



    }

    /**
     * View method
     *
     * @param string|null $id Emergency id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emergency = $this->Emergency->get($id);

        $this->loadModel('Mission');
        $misionActual= $this->Mission->newEntity();

        $aux=$this->Mission->find()->where(['EMER_ID' => $emergency->EMER_ID ]);
        $temp= null;
        foreach ($aux as $row) {
          $temp = $row;
        }

        $this->set('emergency', $emergency);
        $this->set( 'temp', $temp);
        $this->set('_serialize', ['emergency']);

        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($this->request->data['Estado']==0) {

                $temp->MIS_ESTADO = 'Terminada';
                $this->Mission->save($temp);
                return $this->redirect(array('controller' => 'home', 'action' => 'index'));

            } else{
                $temp->MIS_ESTADO = 'En curso';
                $this->Mission->save($temp);
                return $this->redirect(array('controller' => 'home', 'action' => 'index'));
            }
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emergency = $this->Emergency->newEntity();
        if ($this->request->is('post')) {
            $emergency = $this->Emergency->patchEntity($emergency, $this->request->data);
            if ($this->Emergency->save($emergency)) {
                $this->Flash->success(__('The emergency has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The emergency could not be saved. Please, try again.'));
            }
        }
        $volunteer = $this->Emergency->Volunteer->find('list', ['limit' => 200]);
        $this->set(compact('emergency', 'volunteer'));
        $this->set('_serialize', ['emergency']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Emergency id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emergency = $this->Emergency->get($id, [
            'contain' => ['Volunteer']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emergency = $this->Emergency->patchEntity($emergency, $this->request->data);
            if ($this->Emergency->save($emergency)) {
                $this->Flash->success(__('The emergency has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The emergency could not be saved. Please, try again.'));
            }
        }
        $volunteer = $this->Emergency->Volunteer->find('list', ['limit' => 200]);
        $this->set(compact('emergency', 'volunteer'));
        $this->set('_serialize', ['emergency']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Emergency id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete()
    {

        debug($voluntarios);
        #return $this->redirect(['action' => 'index']);
    }
}
