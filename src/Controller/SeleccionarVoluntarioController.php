<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Email\Email; 

/**
 * Address Controller
 *
 * @property \App\Model\Table\AddressTable $Address
 */
class SeleccionarVoluntarioController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {

        $valor =true;

        $this->loadModel('Volunteer');
        $voluntarios= $this->Volunteer->newEntity();
        $voluntarios= $this->Volunteer->find('list');

        $this->loadModel('Area');
        $areas= $this->Area->newEntity();
        $areas= $this->Area->find('list');
        
        $this->loadModel('Skill');
        $skill= $this->Skill->newEntity();
        $skill= $this->Skill->find('list');

        $this->loadModel('SkillVolunteer');
        $skillsVolunteer= $this->SkillVolunteer->newEntity();
        $skillsVolunteer= $this->SkillVolunteer->find('list');

        $this->loadModel('AreaVolunteer');
        $areasVolunteer= $this->AreaVolunteer->newEntity();
        $areasVolunteer= $this->AreaVolunteer->find('list');


        $this->loadModel('Volunteer');
       $voluntario = $this->paginate($this->Volunteer, ['limit' => 5, 'conditions' => []]);
        $this->set(compact('voluntario', 'valor')); 



    }

    public function initialize()   
    {
        parent::initialize();

       #$this->Auth->allow();
    }

    public function login() {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Usuario o contraseña incorrecto ¡Vuelve a intentar!'));
        }
    }

        public function enviar($id = null)
    {
        $this->loadModel('Volunteer');
        $voluntarios= $this->Volunteer->newEntity();
        $this->request->allowMethod(['post', 'enviar']);
        $voluntarios = $this->Volunteer->get($id);
        debug($voluntarios);
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
              ->to($voluntarios->VOL_EMAIL) 
              ->from('voluntarios.dbd@gmail.com') //correo de
              ->subject('Solicitud de reclutamiento'); 
/*
            $correo->attachments([
              'photo.pdf' => [
              'file' => '/home/camus/Escritorio/lab1ORGA.pdf',
              'mimetype' => 'application/pdf'
              ]
              ]);*/
            
            if ($correo->send()) {
                return $this->redirect(['action' => 'index']);
            }else{
                echo "Ups error man";
            }



        
    }
}
