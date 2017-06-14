<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Volunteer Controller
 *
 * @property \App\Model\Table\VolunteerTable $Volunteer
 */
class CrearTareaController extends AppController
{

  public function index()
  {
      $this->loadModel('Mission');
      $misiones= $this->Mission->newEntity();

      $this->loadModel('Task');
      $tareas= $this->Task->newEntity();

      $this->loadModel('InCharge');
      $encargado= $this->InCharge->newEntity();

      $uid = $this->Auth->User('id');
      $usuarios=$this->loadModel('Users');
      $user = $usuarios->get($uid);

      $aux=$this->InCharge->find()->where(['IN_IDUSER'=>$user->id]);
      $temp=null;
      foreach ($aux as $row) {
        $temp=$row;
      }

      $aux=$this->Mission->find()->where(['IN_ID'=>$temp->IN_ID]);
      $temp=null;
      foreach ($aux as $row) {
        $temp=$row;
      }

      #debug($temp->MIS_ID);


    $volunteer=null;

      if ($this->request->is('post')) {
        $tareas->TASK_NOMBRE=$this->request->data['Nombre'];
        $tareas->TASK_DESCRIPCION=$this->request->data['Descripcion'];
        $tareas->TASK_ESTADO='Creada';
        $tareas->MIS_ID = $temp->MIS_ID;

        $dir = $this->Task->save($tareas);
      }

      $this->set(compact('tareas','misiones', 'usuarios','encargado','volunteer'));
      $this->set('_serialize', ['volunteer']);

  }

}
