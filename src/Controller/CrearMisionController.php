<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Volunteer Controller
 *
 * @property \App\Model\Table\VolunteerTable $Volunteer
 */
class CrearMisionController extends AppController
{

  public function index()
  {
      $this->loadModel('Mission');
      $misiones= $this->Mission->newEntity();

      $this->loadModel('Emergency');
      $emergencia= $this->Emergency->newEntity();

      $this->loadModel('InCharge');
      $encargado= $this->InCharge->newEntity();
      $encargado= $this->InCharge->find('list')->where(['IN_DISPONIBILIDAD'=>1]);

      $uid = $this->Auth->User('id');
      $usuarios=$this->loadModel('Users');
      $user = $usuarios->get($uid);

      $this->loadModel('Administrator');
      $admin= $this->Administrator->newEntity();

      $aux=$this->Administrator->find('list')->where(['ADM_IDUSER'=>$user->id]);
      $temp=null;
      foreach ($aux as $row) {
        $temp=$row;
      }

      $aux2=$this->Emergency->find()->select(['EMER_ID'])->where(['ADM_ID'=>$temp]);
      $temp2=null;
      foreach ($aux2 as $row) {
        $temp2=$row;
      }

      $volunteer=null;

      if ($this->request->is('post')) {
        $misiones->MIS_NOMBRE=$this->request->data['Nombre'];
        $misiones->MIS_DESCRIPCION=$this->request->data['Descripcion'];
        $misiones->IN_ID=$this->request->data['Encargado'];
        $misiones->EMER_ID=$temp2->EMER_ID;
        $misiones->MIS_ESTADO='En curso';


        $aux=$this->InCharge->find()->where(['IN_ID'=>$misiones->IN_ID]);
        $temp=null;
        foreach($aux as $row){
          $temp=$row;
        }

        $temp->IN_DISPONIBILIDAD=0;


        $dir2= $this->InCharge->save($temp);
        $dir = $this->Mission->save($misiones);

        $this->Flash->success(__('Misión creada.'));
        return $this->redirect(['controller' => 'Perfiladministrador']);
      }

      $this->set(compact('volunteer','misiones', 'usuarios','encargado'));
      $this->set('_serialize', ['volunteer']);

  }

}
