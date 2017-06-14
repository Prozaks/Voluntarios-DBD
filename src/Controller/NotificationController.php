<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Email\Email; // <-- Importante para utilizacion de correo electronico

/**
 * Notification Controller
 *
 * @property \App\Model\Table\NotificationTable $Notification
 */
class NotificationController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {

        $encargadoTable = $this-> loadModel('InCharge');


        $notificacion = $this->Notification->newEntity();

        $this->loadModel('Volunteer');
        $voluntarios= $this->Volunteer->newEntity();
        $voluntarios= $this->Volunteer->find('list');#->select(['VOL_ID', 'VOL_EMAIL'])->where(['VOL_ID'=> 15]);



        $this->loadModel('Emergency');
        $emergencias= $this->Emergency->newEntity();
        $emergencias= $this->Emergency->find('list')->order(['EMER_NOMBRE' => 'ASC']);


        $volunteerTable = $this-> loadModel('Volunteer');

        if ($this->request->is(['patch', 'post', 'put'])) {

            if ($this->request->data['TipoNot']=='0')
            {
                $tiponot='¿Te gustaría participar como voluntario?';
                $mensaje4='Entra a este link para confirmar o rechazar: localhost:8765/home';
            }

            else if ($this->request->data['TipoNot']=='1')
            {
                $tiponot='¡La tarea se ha complicado, se necesitan más voluntarios';
                $mensaje4='Entra a este link para enviar solicitudes: [AUN NO SE QUE ENLACE PONER]';
            }

            else if ($this->request->data['TipoNot']=='2')
            {
                $tiponot='Se requieren materiales extras';
            }

            $para=$this->request->data['Destinatario'];
            $to = $volunteerTable->get($para);

            $this->autoRender = false;

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
              ->template('index')
              ->emailFormat('html')
              ->to($to->VOL_EMAIL, $to->VOL_EMAIL)
              ->to($to->VOL_EMAIL, $to->VOL_EMAIL)
              ->from('voluntarios.dbd@gmail.com') //correo de
              ->subject($tiponot)
              ->viewVars([
                'mensaje1' => $this->request->data['Mensaje1'],
                'mensaje2' => $this->request->data['Mensaje2'],
                'mensaje3' => $this->request->data['Mensaje3'],
                'mensaje4' => $mensaje4]);
            $correo->attachments([
              'photo.pdf' => [
              'file' => '/home/camus/Escritorio/lab1ORGA.pdf',
              'mimetype' => 'application/pdf'
              ]
              ]);

            if ($correo->send()) {
                echo "Correo enviado";
            }else{
                echo "Ups error man";
            }
        }

        $this->set(compact('emergencias','voluntarios','notificacion'));
        $this->set('_serialize', ['notificacion']);

    }
}
