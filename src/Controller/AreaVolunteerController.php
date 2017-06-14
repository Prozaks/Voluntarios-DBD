<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AreaVolunteer Controller
 *
 * @property \App\Model\Table\AreaVolunteerTable $AreaVolunteer
 */
class AreaVolunteerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $areaVolunteer = $this->paginate($this->AreaVolunteer);

        $this->set(compact('areaVolunteer'));
        $this->set('_serialize', ['areaVolunteer']);
    }

    /**
     * View method
     *
     * @param string|null $id Area Volunteer id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $areaVolunteer = $this->AreaVolunteer->get($id, [
            'contain' => []
        ]);

        $this->set('areaVolunteer', $areaVolunteer);
        $this->set('_serialize', ['areaVolunteer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $areaVolunteer = $this->AreaVolunteer->newEntity();
        if ($this->request->is('post')) {
            $areaVolunteer = $this->AreaVolunteer->patchEntity($areaVolunteer, $this->request->data);
            if ($this->AreaVolunteer->save($areaVolunteer)) {
                $this->Flash->success(__('The area volunteer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The area volunteer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('areaVolunteer'));
        $this->set('_serialize', ['areaVolunteer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Area Volunteer id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $areaVolunteer = $this->AreaVolunteer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $areaVolunteer = $this->AreaVolunteer->patchEntity($areaVolunteer, $this->request->data);
            if ($this->AreaVolunteer->save($areaVolunteer)) {
                $this->Flash->success(__('The area volunteer has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The area volunteer could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('areaVolunteer'));
        $this->set('_serialize', ['areaVolunteer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Area Volunteer id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $areaVolunteer = $this->AreaVolunteer->get($id);
        if ($this->AreaVolunteer->delete($areaVolunteer)) {
            $this->Flash->success(__('The area volunteer has been deleted.'));
        } else {
            $this->Flash->error(__('The area volunteer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
