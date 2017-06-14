<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Address Controller
 *
 * @property \App\Model\Table\AddressTable $Address
 */
class PerfiladministradorController extends AppController
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

        #$admin = $usersTable->get($uid);
        #$nombreadmin=$admin->username;
        $this->set(compact('nombreadmin'));
    }

    public function initialize()
    {
        parent::initialize();

        $this->Auth->allow();
    }
}
