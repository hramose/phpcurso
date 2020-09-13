<?php
namespace App\Controller;
use App\Controller\AppController;

class ProductosController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => [ 'Tipos' ]
        ];
        $productos = $this->paginate ( $this->Productos );

        $this->set ( compact ( 'productos' ) );
    }

    public function view ( $id = null )
    {
        $producto = $this->Productos->get ( $id, [
            'contain' => [ 'Tipos' ]
        ]);

        $this->set ( 'producto', $producto );
    }

    public function add()
    {
        $producto = $this->Productos->newEntity();
        if ( $this->request->is( 'post' ) ) {
            $producto = $this->Productos->patchEntity ( $producto, $this->request->getData() );
            if ( $this->Productos->save( $producto ) ) {
                $this->Flash->success ( 'Producto creado.' );
                return $this->redirect ( [ 'action' => 'index' ] );
            }
            $this->Flash->error ( 'Error al crear el producto.' );
        }
        $tipos = $this->Productos->Tipos->find ( 'list', [ 'limit' => 200 ] );
        $this->set ( compact ( 'producto', 'tipos' ) );
    }

    public function edit( $id = null )
    {
        $producto = $this->Productos->get ( $id, [
            'contain' => []
        ]);
        if ( $this->request->is ( [ 'patch', 'post', 'put' ] ) ) {
            $producto = $this->Productos->patchEntity ( $producto, $this->request->getData() );
            if ( $this->Productos->save( $producto ) ) {
                $this->Flash->success( 'Producto actualizado.' );
                return $this->redirect ( [ 'action' => 'index' ] );
            }
            $this->Flash->error( 'Error al actualizar el producto' );
        }
        $tipos = $this->Productos->Tipos->find ( 'list', [ 'limit' => 200 ] );
        $this->set ( compact ( 'producto', 'tipos' ) );
    }

    public function delete ( $id = null )
    {
        $this->request->allowMethod ( [ 'post', 'delete' ] );
        $producto = $this->Productos->get( $id );
        if ($this->Productos->delete( $producto ) ) {
            $this->Flash->success ( 'Producto eliminado.' );
        } else {
            $this->Flash->error ( 'Error al eliminar el producto.' );
        }
        return $this->redirect ( [ 'action' => 'index' ] );
    }
}
