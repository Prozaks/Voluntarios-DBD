<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Address Controller
 *
 * @property \App\Model\Table\AddressTable $Address
 */
class SelectEmergenciaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
        public function index()
    {
        $this->loadModel('Emergency');
        $emergency= $this->Emergency->newEntity();
        $emergency= $this->Emergency->find('list')->select(['EMER_NOMBRE'])->order(['EMER_NOMBRE' => 'ASC']);

        $id='view';
        $this->loadModel('Skill');

        $skill= $this->Skill->newEntity();


        if ($this->request->is('post','patch','put')) {
            $this->Flash->success(__('Consultando Emergencia'));
            $idMision=$this->request->data['Emergencias'];
            $final=$id . '/' . $idMision;
            return $this->redirect(['controller'=>'emergency','action' => $final]);
        }
        $this->set(compact('skill','emergency'));
        $this->set('_serialize', ['skill']);
    }

    public function initialize()
    {
        parent::initialize();

        $this->Auth->allow();
    }
}
