<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Address Controller
 *
 * @property \App\Model\Table\AddressTable $Address
 */
class PerfilvoluntarioController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $uid = $this->Auth->User('id');
        #debug($uid);

        $usersTable = $this-> loadModel('Users');

        #$voluntario = $usersTable->get($uid);
        #$nombrevolun=$voluntario->username;
        $this->set(compact('nombrevolun'));
    }

    public function initialize()
    {
        parent::initialize();

        $this->Auth->allow();
    }
}
