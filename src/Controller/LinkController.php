<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Email\Email; // <-- Importante para utilizacion de correo electronico

/**
 * Volunteer Controller
 *
 * @property \App\Model\Table\VolunteerTable $Volunteer
 */
class LinkController extends AppController
{

  public function index()
  {
      $this->loadModel('Volunteer');
      $voluntario= $this->Volunteer->newEntity();

      $this->loadModel('Users');
      $usuarios= $this->Users->newEntity();

      $volunteer=null;


      $uid = $this->Auth->User('id');

      $usuarios=$this->loadModel('Users');
      $user = $usuarios->get($uid);

      $aux=$this->Volunteer->find()->where(['VOL_IDUSER' => $user->id]);
      $temp=null;
      foreach($aux as $row){
        $temp=$row;
      }



      if ($this->request->is('post')) {
          if($this->request->data['Aceptar']==0){
            $temp->VOL_DISPONIBILIDAD=0;

          }

          else{
            $temp->VOL_DISPONIBILIDAD=1;
          }

          $dir=$this->Volunteer->save($temp);

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
              ->template('index3')
              ->emailFormat('html')
              ->to($temp->VOL_EMAIL)
              ->from('voluntarios.dbd@gmail.com') //correo de
              ->subject('Aplicación Voluntarios')
              ->viewVars([
                'mensaje4' => 'Gracias por la ayuda. Se adjunta un manual']);
            $correo->attachments([
              'photo.pdf' => [
              'file' => '/home/camus/Escritorio/manual.pdf',
              'mimetype' => 'application/pdf'
              ]
              ]);

            if ($correo->send()) {
                return $this->redirect(array('controller' => 'Perfilvoluntario'));

            }else{
                echo "Ups error man";
            }
        }



      $this->set(compact('volunteer','voluntario', 'usuarios','tarea'));
      $this->set('_serialize', ['volunteer']);

  }

}
