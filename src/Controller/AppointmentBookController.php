<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Event\EventInterface;

/**
 * AppointmentBook Controller
 *
 * @property \App\Model\Table\AppointmentBookTable $AppointmentBook
 * @method \App\Model\Entity\AppointmentBook[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AppointmentBookController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $appointmentBook = $this->paginate($this->AppointmentBook);

        $this->set(compact('appointmentBook'));
    }

    /**
     * View method
     *
     * @param string|null $id Appointment Book id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $appointmentBook = $this->AppointmentBook->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('appointmentBook'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $appointmentBook = $this->AppointmentBook->newEmptyEntity();
        if ($this->request->is('post')) {
            $appointmentBook = $this->AppointmentBook->patchEntity($appointmentBook, $this->request->getData());
            if ($this->AppointmentBook->save($appointmentBook)) {
                $this->Flash->success(__('Contato cadastrado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível cadastrar o contato. Por favor, tente novamente.'));
        }
        $this->set(compact('appointmentBook'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Appointment Book id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $appointmentBook = $this->AppointmentBook->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $appointmentBook = $this->AppointmentBook->patchEntity($appointmentBook, $this->request->getData());
            if ($this->AppointmentBook->save($appointmentBook)) {
                $this->Flash->success(__('Contato editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível cadastrar o contato. Por favor, tente novamente.'));
        }
        $this->set(compact('appointmentBook'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Appointment Book id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $appointmentBook = $this->AppointmentBook->get($id);
        if ($this->AppointmentBook->delete($appointmentBook)) {
            $this->Flash->success(__('Contato apagado com sucesso.'));
        } else {
            $this->Flash->error(__('Não foi possível apagar o contato. Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
