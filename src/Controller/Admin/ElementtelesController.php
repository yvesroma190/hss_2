<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
/**
 * Elementteles Controller
 *
 * @property \App\Model\Table\ElementtelesTable $Elementteles
 *
 * @method \App\Model\Entity\Elementtele[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ElementtelesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Offreteles'],
        ];
        $elementteles = $this->paginate($this->Elementteles);

        $this->set(compact('elementteles'));
    }

    /**
     * View method
     *
     * @param string|null $id Elementtele id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $elementtele = $this->Elementteles->get($id, [
            'contain' => ['Offreteles'],
        ]);

        $this->set('elementtele', $elementtele);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $elementtele = $this->Elementteles->newEmptyEntity();
        if ($this->request->is('post')) {
            $elementtele = $this->Elementteles->patchEntity($elementtele, $this->request->getData());
            if ($this->Elementteles->save($elementtele)) {
                $this->Flash->success(__('The elementtele has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The elementtele could not be saved. Please, try again.'));
        }
        $offreteles = $this->Elementteles->Offreteles->find('list', ['limit' => 200]);
        $this->set(compact('elementtele', 'offreteles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Elementtele id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $elementtele = $this->Elementteles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $elementtele = $this->Elementteles->patchEntity($elementtele, $this->request->getData());
            if ($this->Elementteles->save($elementtele)) {
                $this->Flash->success(__('The elementtele has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The elementtele could not be saved. Please, try again.'));
        }
        $offreteles = $this->Elementteles->Offreteles->find('list', ['limit' => 200]);
        $this->set(compact('elementtele', 'offreteles'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Elementtele id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $elementtele = $this->Elementteles->get($id);
        if ($this->Elementteles->delete($elementtele)) {
            $this->Flash->success(__('The elementtele has been deleted.'));
        } else {
            $this->Flash->error(__('The elementtele could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
