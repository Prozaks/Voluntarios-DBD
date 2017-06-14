<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Volunteer Controller
 *
 * @property \App\Model\Table\VolunteerTable $Volunteer
 */
class VolunteerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->loadModel('Region');
        $regiones= $this->Region->newEntity();
        $regiones= $this->Region->find('list')->order(['REG_NOMBRE' => 'ASC']);

        $this->loadModel('Province');
        $provincias= $this->Province->newEntity();
        $provincias= $this->Province->find('list')->order(['PRO_NOMBRE' => 'ASC']);

        $this->loadModel('Commune');
        $comunas= $this->Commune->newEntity();
        $comunas= $this->Commune->find('list')->order(['COM_NOMBRE' => 'ASC']);

        $this->loadModel('Address');
        $address= $this->Address->newEntity();

        $this->loadModel('Users');
        $usuarios= $this->Users->newEntity();

        $volunteer= $this->Volunteer->newEntity();
        
        if ($this->request->is('post')) {
            $address->ADD_CALLE=$this->request->data['Calle'];
            $address->ADD_NUMERO=$this->request->data['Numero'];
            $address->COM_ID=$this->request->data['Comuna'];
            
            $dir = $this->Address->save($address);

            $usuarios->username = $this->request->data['Email'];
            $usuarios->password = $this->request->data['Contraseña'];
            $usuarios->group_id = 3;
            $dirr = $this->Users->save($usuarios);

            $volunteer->ADD_ID=$dir->ADD_ID;
            $volunteer->VOL_NOMBRE1=$this->request->data['Nombre1'];
            $volunteer->VOL_NOMBRE2=$this->request->data['Nombre2'];
            $volunteer->VOL_APELLIDO1=$this->request->data['Apellido1'];
            $volunteer->VOL_APELLIDO2=$this->request->data['Apellido2'];
            $volunteer->VOL_TELEFONO=$this->request->data['Teléfono'];
            $volunteer->VOL_EMAIL=$this->request->data['Email'];
            $volunteer->VOL_DISPONIBILIDAD='0';
            $volunteer->VOL_RANK='0';
            $volunteer->VOL_IDUSER=$dirr->id;
            

            if ($this->Volunteer->save($volunteer)) {
            $usuarios->id = $volunteer->VOL_ID;
            $this->Users->save($usuarios);

                $this->Flash->success(__('The volunteer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The volunteer could not be saved. Please, try again.'));
            }
        }
        
        $this->set(compact('volunteer','regiones', 'provincias', 'comunas', 'address', 'usuarios'));
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
