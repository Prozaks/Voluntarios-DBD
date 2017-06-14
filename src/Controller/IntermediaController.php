<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Address Controller
 *
 * @property \App\Model\Table\AddressTable $Address
 */
class IntermediaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $uid = $this->Auth->User('id');

        $usersTable = $this-> loadModel('Users');
        $user = $usersTable->get($uid); 
        $volunteer=null;
        if ($this->request->is(['patch', 'post', 'put'])) {
            if($user->group_id==1){
                return $this->redirect(['controller'=>'perfiladministrador','action' => 'index']);
            }
            if($user->group_id==2){
                return $this->redirect(['controller'=>'perfilencargado','action' => 'index']);

            }
            if($user->group_id==3){
                return $this->redirect(['controller'=>'perfilvoluntario','action' => 'index']);
            }


        }
        $this->set(compact('temp','area', 'volunteer'));
        $this->set('_serialize', ['volunteer']);
    }

    public function initialize()   
    {
        parent::initialize();

       #$this->Auth->allow();
    }

    public function login() {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            $this-> loadModel('Users');

            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Usuario o contraseña incorrecto ¡Vuelve a intentar!'));
        }
    }
}
