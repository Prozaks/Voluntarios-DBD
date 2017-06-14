<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Volunteer Controller
 *
 * @property \App\Model\Table\VolunteerTable $Volunteer
 */
class CrearEmergenciaController extends AppController
{

  public function index()
  {
      $this->loadModel('Region');
      $regiones= $this->Region->newEntity();
      $regiones= $this->Region->find('list')->order(['REG_NOMBRE' => 'ASC']);

      $this->loadModel('Emergency');
      $emergencia= $this->Emergency->newEntity();

      $this->loadModel('Administrator');
      $admin= $this->Administrator->newEntity();

      $uid = $this->Auth->User('id');

      $usuarios=$this->loadModel('Users');
      $user = $usuarios->get($uid);


      $aux=$this->Administrator->find('list')->where(['ADM_IDUSER'=>$user->id]);
      $temp=null;
      foreach ($aux as $row) {
        $temp=$row;
      }

      $volunteer=null;

      if ($this->request->is('post')) {
          $emergencia->AREA_ID=$this->request->data['Region'];
          $emergencia->ADM_ID=$temp;
          #$emergencia->EMER_ID=2;
          $emergencia->EMER_NOMBRE=$this->request->data['Nombre'];
          $emergencia->EMER_FECHA=$this->request->data['Fecha'];
          $emergencia->EMER_ESTADO='En curso';
          $emergencia->EMER_DESCRIPCION=$this->request->data['Descripcion'];
          $emergencia->EMER_GRAVEDAD=$this->request->data['Gravedad'];
          $emergencia->EMER_RANGO=1;


          $dir = $this->Emergency->save($emergencia);
          $this->Flash->success(__('Emergencia creada.'));
          return $this->redirect(['controller' => 'Perfiladministrador']);


      }

      $this->set(compact('volunteer','regiones', 'usuarios'));
      $this->set('_serialize', ['volunteer']);

  }

}
