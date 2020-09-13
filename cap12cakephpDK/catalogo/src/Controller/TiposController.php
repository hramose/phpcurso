<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tipos Controller
 *
 * @property \App\Model\Table\TiposTable $Tipos
 */
class TiposController extends AppController
{

    public $paginate = ['maxLimit' => 10];

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tipos = $this->paginate($this->Tipos);
        $this->set(compact('tipos'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipo = $this->Tipos->get($id, [
            'contain' => ['Productos']
        ]);

        $this->set('tipo', $tipo);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipo = $this->Tipos->newEntity();
        if ($this->request->is('post')) {
            $tipo = $this->Tipos->patchEntity($tipo, $this->request->getData());
            if ($this->Tipos->save($tipo)) {
                $this->Flash->success('Tipo guardado.');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Error al guardar el tipo');
        }
        $this->set(compact('tipo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipo = $this->Tipos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipo = $this->Tipos->patchEntity($tipo, $this->request->getData());
            if ($this->Tipos->save($tipo)) {
                $this->Flash->success('Tipo actualizado.');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('Error al actualizar el tipo');
        }
        $this->set(compact('tipo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete ( $id = null )
    {
        $this->request->allowMethod ( [ 'post', 'delete' ] );
        $tipo = $this->Tipos->get( $id );
        if ( $this->Tipos->delete( $tipo ) ) {
            $this->Flash->success ( 'Tipo eliminado.');
        } else {
            $this->Flash->error ( 'Error al eliminar el tipo.');
        }
        return $this->redirect ( [ 'action' => 'index' ] );
    }
}
