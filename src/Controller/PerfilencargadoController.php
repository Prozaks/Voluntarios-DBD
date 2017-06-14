<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Address Controller
 *
 * @property \App\Model\Table\AddressTable $Address
 */
class PerfilencargadoController extends AppController
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

        #$encargado = $usersTable->get($uid);
        #$nombreencar=$encargado->username;
        $this->set(compact('nombreencar'));
    }

    public function initialize()
    {
        parent::initialize();

        $this->Auth->allow();
    }
}
