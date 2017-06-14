<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Emergency Controller
 *
 * @property \App\Model\Table\EmergencyTable $Emergency
 */
class EmergencyController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $emergency = $this->paginate($this->Emergency);

        $emergency= $this->Emergency->newEntity();
        $emergency= $this->Emergency->find('list')->order(['EMER_NOMBRE' => 'ASC']);

        $this->set(compact('emergency'));
        $this->set('_serialize', ['emergency']);
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
        #debug($temp);

        $this->set('emergency', $emergency);
        $this->set( 'temp', $temp);
        $this->set('_serialize', ['emergency']);

        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($this->request->data['Estado']==0) {

                $temp->MIS_ESTADO = 'Terminada';
                debug($temp);
                $this->Mission->save($temp);
                return $this->redirect(array('controller' => 'Perfilencargado'));

            } else{
                $temp->MIS_ESTADO = 'En curso';
                $this->Mission->save($temp);
                return $this->redirect(array('controller' => 'Perfilencargado'));
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
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emergency = $this->Emergency->get($id);
        if ($this->Emergency->delete($emergency)) {
            $this->Flash->success(__('The emergency has been deleted.'));
        } else {
            $this->Flash->error(__('The emergency could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
