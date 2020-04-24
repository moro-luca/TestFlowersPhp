<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Opportunities Controller
 *
 * @property \App\Model\Table\OpportunitiesTable $Opportunities
 * @method \App\Model\Entity\Opportunity[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OpportunitiesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $opportunities = $this->paginate($this->Opportunities);

        $this->set(compact('opportunities'));
    }

    /**
     * View method
     *
     * @param string|null $id Opportunity id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $opportunity = $this->Opportunities->get($id, [
            'contain' => ['Flowers'],
        ]);

        $this->set('opportunity', $opportunity);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $opportunity = $this->Opportunities->newEmptyEntity();
        if ($this->request->is('post')) {
            $opportunity = $this->Opportunities->patchEntity($opportunity, $this->request->getData());
            if ($this->Opportunities->save($opportunity)) {
                $this->Flash->success(__('The opportunity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opportunity could not be saved. Please, try again.'));
        }
        $this->set(compact('opportunity'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Opportunity id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $opportunity = $this->Opportunities->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $opportunity = $this->Opportunities->patchEntity($opportunity, $this->request->getData());
            if ($this->Opportunities->save($opportunity)) {
                $this->Flash->success(__('The opportunity has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The opportunity could not be saved. Please, try again.'));
        }
        $this->set(compact('opportunity'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Opportunity id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $opportunity = $this->Opportunities->get($id);
        if ($this->Opportunities->delete($opportunity)) {
            $this->Flash->success(__('The opportunity has been deleted.'));
        } else {
            $this->Flash->error(__('The opportunity could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
