<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Email\Email;
/**
 * Volunteer Controller
 *
 * @property \App\Model\Table\VolunteerTable $Volunteer
 */
class NotifiVolController extends AppController
{

  public function index()
  {
      $uid = $this->Auth->User('id');

      $this->loadModel('Mission');
      $misiones= $this->Mission->newEntity();

      $this->loadModel('MissionVolunteer');
      $missionVolunteer= $this->MissionVolunteer->newEntity();

      $this->loadModel('Volunteer');
      $voluntario= $this->Volunteer->newEntity();

      $this->loadModel('InCharge');
      $encargado= $this->InCharge->newEntity();

      $usuarios=$this->loadModel('Users');

      $user = $usuarios->get($uid);

      $voluntarioActual = $this->Volunteer->find()->select('VOL_ID')->where(['VOL_IDUSER' => $user->id ]);

      $temp= null;
      foreach ($voluntarioActual as $row) {
        $temp = $row;
      }

      $misionActual=$this->MissionVolunteer->find()->select('MIS_ID')->where(['VOL_ID' => $temp->VOL_ID ]);

      $temp2= null;
      foreach ($misionActual as $row) {
        $temp2 = $row;
      }

      $mision=$this->Mission->find()->select('IN_ID')->where(['MIS_ID' => $temp2->MIS_ID ]);

      $temp3= null;
      foreach ($mision as $row) {
        $temp3 = $row;
      }

      $encargadoMision=$this->InCharge->find()->select('IN_EMAIL')->where(['IN_ID' => $temp3->IN_ID ]);
      $volunteer=null;

      $temp4= null;
      foreach ($encargadoMision as $row) {
        $temp4 = $row;
      }


      if ($this->request->is('post')) {
            $this->autoRender = false;

            if($this->request->data(['Tipo'])== 0){
              $motivo='Tarea finalizada';
            }
            else{
              $motivo='Reporte de conflicto';
            }
            /*configuramos las opciones para conectarnos al servidor
              smtp de Gmail
             */
            Email::configTransport('mail', [
              'host' => 'smtp.gmail.com', //servidor smtp con encriptacion ssl
              'port' => 587, //puerto de conexion
              'tls' => true, //true en caso de usar encriptacion tls

              //cuenta de correo gmail completa desde donde enviaran el correo
              'username' => 'voluntarios.dbd@gmail.com',
              'password' => '189061021', //contrasena

              //Establecemos que vamos a utilizar el envio de correo por smtp
              'className' => 'Smtp',

              //evitar verificacion de certificado ssl ---IMPORTANTE---
              'context' => [
                'ssl' => [
                  'verify_peer' => false,
                  'verify_peer_name' => false,
                  'allow_self_signed' => true
                ]
              ]
            ]);

            /*enviando el correo*/
            $correo = new Email();
            $correo
              ->transport('mail')
              ->template('index2')
              ->emailFormat('html')
              ->to($temp4->IN_EMAIL)
              ->from('voluntarios.dbd@gmail.com') //correo de
              ->subject($motivo)
              ->viewVars([
                'mensaje1' => $this->request->data['Mensaje']]);
          #  $correo->attachments([
          #    'photo.pdf' => [
          #    'file' => '/home/camus/Escritorio/lab1ORGA.pdf',
          #    'mimetype' => 'application/pdf'
          #    ]
          #    ]);

            if ($correo->send()) {
                $this->Flash->success(__('Correo enviado.'));
                return $this->redirect(['controller' => 'Perfilvoluntario']);
            }else{
                echo "Ups error man";
            }

      }

      $this->set(compact('volunteer','misiones', 'usuarios','encargado'));
      $this->set('_serialize', ['volunteer']);

  }

}
