<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Address Controller
 *
 * @property \App\Model\Table\AddressTable $Address
 */
class HomeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {

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
                return $this->redirect(['controller'=>'intermedia','action'=>'index']);
            }
            $this->Flash->error(__('Usuario o contraseña incorrecto ¡Vuelve a intentar!'));
        }
    }
}
