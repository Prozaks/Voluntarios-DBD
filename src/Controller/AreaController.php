<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Error\Debugger;
use Cake\Datasource\ConnectionManager;

/**
 * Area Controller
 *
 * @property \App\Model\Table\AreaTable $Area
 */
class AreaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $area = $this->Area->newEntity();
        $area = $this->Area->find('list')->select(['AREA_NOMBRE'])->order(['AREA_NOMBRE' => 'ASC']);

        $uid = $this->Auth->User('id');

        $usersTable = $this-> loadModel('Users');
        $user = $usersTable->get($uid);

        $this->loadModel('Volunteer');
        $volunteer= $this->Volunteer->newEntity();

        $dir = $this->Volunteer->find()->where(['VOL_IDUSER' => $user->id ]);

        $temp= null;
        foreach ($dir as $row) {
          $temp = $row;
        }

        $this->loadModel('AreaVolunteer');
        $intermedia= $this->AreaVolunteer->newEntity();

        $this->loadModel('SkillVolunteer');
        $habilidad1=$this->SkillVolunteer->newEntity();
        $habilidad2=$this->SkillVolunteer->newEntity();
        $habilidad3=$this->SkillVolunteer->newEntity();
        $habilidad4=$this->SkillVolunteer->newEntity();
        $habilidad5=$this->SkillVolunteer->newEntity();
        $habilidad6=$this->SkillVolunteer->newEntity();
        $habilidad7=$this->SkillVolunteer->newEntity();
        $habilidad8=$this->SkillVolunteer->newEntity();
        $habilidad9=$this->SkillVolunteer->newEntity();
        $habilidad10=$this->SkillVolunteer->newEntity();
        $habilidad11=$this->SkillVolunteer->newEntity();
        $habilidad12=$this->SkillVolunteer->newEntity();
        $habilidad13=$this->SkillVolunteer->newEntity();
        $habilidad14=$this->SkillVolunteer->newEntity();
        $habilidad15=$this->SkillVolunteer->newEntity();

        if ($this->request->is(['patch', 'post', 'put'])) {
            if ($this->request->data['1']==True) {
                $habilidad1->VOL_ID=$temp->VOL_ID;
                $habilidad1->SKILL_ID=1;
                $aux1=$habilidad1;
                $this->SkillVolunteer->save($aux1);
            }
            if ($this->request->data['2']==True) {
                $habilidad2->VOL_ID=$temp->VOL_ID;
                $habilidad2->SKILL_ID=2;
                $aux2=$habilidad2;
                $this->SkillVolunteer->save($aux2);
            }
            if ($this->request->data['3']==True) {
                $habilidad3->VOL_ID=$temp->VOL_ID;
                $habilidad3->SKILL_ID=3;
                $aux3=$habilidad3;
                $this->SkillVolunteer->save($aux3);
            }
            if ($this->request->data['4']==True) {
                $habilidad4->VOL_ID=$temp->VOL_ID;
                $habilidad4->SKILL_ID=4;
                $aux4=$habilidad4;
                $this->SkillVolunteer->save($aux4);
            }
            if ($this->request->data['5']==True) {
                $habilidad5->VOL_ID=$temp->VOL_ID;
                $habilidad5->SKILL_ID=5;
                $aux5=$habilidad5;
                $this->SkillVolunteer->save($aux5);
            }
            if ($this->request->data['6']==True) {
                $habilidad6->VOL_ID=$temp->VOL_ID;
                $habilidad6->SKILL_ID=6;
                $aux6=$habilidad6;
                $this->SkillVolunteer->save($aux6);
            }
            if ($this->request->data['7']==True) {
                $habilidad7->VOL_ID=$temp->VOL_ID;
                $habilidad7->SKILL_ID=7;
                $aux7=$habilidad7;
                $this->SkillVolunteer->save($aux7);
            }
            if ($this->request->data['8']==True) {
                $habilidad8->VOL_ID=$temp->VOL_ID;
                $habilidad8->SKILL_ID=8;
                $aux8=$habilidad8;
                $this->SkillVolunteer->save($aux8);
            }
            if ($this->request->data['9']==True) {
                $habilidad9->VOL_ID=$temp->VOL_ID;
                $habilidad9->SKILL_ID=9;
                $aux9=$habilidad9;
                $this->SkillVolunteer->save($aux9);
            }
            if ($this->request->data['10']==True) {
                $habilidad10->VOL_ID=$temp->VOL_ID;
                $habilidad10->SKILL_ID=10;
                $aux10=$habilidad10;
                $this->SkillVolunteer->save($aux10);
            }
            if ($this->request->data['11']==True) {
                $habilidad11->VOL_ID=$temp->VOL_ID;
                $habilidad11->SKILL_ID=11;
                $aux11=$habilidad11;
                $this->SkillVolunteer->save($aux11);
            }
            if ($this->request->data['12']==True) {
                $habilidad12->VOL_ID=$temp->VOL_ID;
                $habilidad12->SKILL_ID=12;
                $aux12=$habilidad12;
                $this->SkillVolunteer->save($aux12);
            }
            if ($this->request->data['13']==True) {
                $habilidad13->VOL_ID=$temp->VOL_ID;
                $habilidad13->SKILL_ID=13;
                $aux13=$habilidad13;
                $this->SkillVolunteer->save($aux13);
            }
            if ($this->request->data['14']==True) {
                $habilidad14->VOL_ID=$temp->VOL_ID;
                $habilidad14->SKILL_ID=14;
                $aux14=$habilidad14;
                $this->SkillVolunteer->save($aux14);
            }
            if ($this->request->data['15']==True) {
                $habilidad15->VOL_ID=$temp->VOL_ID;
                $habilidad15->SKILL_ID=15;
                $aux15=$habilidad15;
                $this->SkillVolunteer->save($aux15);
            }
            return $this->redirect(['controller' => 'Perfilvoluntario']);

        }
        

        $this->set(compact('temp','area', 'volunteer'));
        $this->set('_serialize', ['area']);
    }

    /**
     * View method
     *
     * @param string|null $id Area id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $area = $this->Area->get($id, [
            'contain' => []
        ]);

        $this->set('area', $area);
        $this->set('_serialize', ['area']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Retempects on successful add, renders view otherwise.
     */
    public function add()
    {
        $area = $this->Area->newEntity();
        if ($this->request->is('post')) {
            $area = $this->Area->patchEntity($area, $this->request->data);
            if ($this->Area->save($area)) {
                $this->Flash->success(__('The area has been saved.'));

                return $this->retempect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The area could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('area'));
        $this->set('_serialize', ['area']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Area id.
     * @return \Cake\Network\Response|void Retempects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $area = $this->Area->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $area = $this->Area->patchEntity($area, $this->request->data);
            if ($this->Area->save($area)) {
                $this->Flash->success(__('The area has been saved.'));

                return $this->retempect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The area could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('area'));
        $this->set('_serialize', ['area']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Area id.
     * @return \Cake\Network\Response|null Retempects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $area = $this->Area->get($id);
        if ($this->Area->delete($area)) {
            $this->Flash->success(__('The area has been deleted.'));
        } else {
            $this->Flash->error(__('The area could not be deleted. Please, try again.'));
        }

        return $this->retempect(['action' => 'index']);
    }
}
