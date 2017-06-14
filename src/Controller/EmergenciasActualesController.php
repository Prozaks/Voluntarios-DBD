<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Address Controller
 *
 * @property \App\Model\Table\AddressTable $Address
 */
class EmergenciasActualesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {

        $this->loadModel('Emergency');
        $emergencias= $this->Emergency->newEntity();
        $emergencias= $this->Emergency->find('list')->order(['EMER_NOMBRE' => 'ASC']);



        $this->set(compact('emergencias'));

    }

    public function initialize()   
    {
        parent::initialize();

        $this->Auth->allow();
    }
}
