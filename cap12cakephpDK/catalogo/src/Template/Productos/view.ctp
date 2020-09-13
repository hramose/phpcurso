<nav class = "large-3 medium-4 columns" id = "actions-sidebar">
  <ul class = "side-nav">
    <li class = "heading">Acciones</li>
    <li><?= $this->Html->link( 'Editar', [ 'action' => 'edit', $producto->id ] ) ?> </li>
    <li><?= $this->Form->postLink ( 'Eliminar', [ 'action' => 'delete', $producto->id ],
            [ 'confirm' => '¿Realmente desea eliminar?' ] ) ?> </li>
    <li><?= $this->Html->link ( 'Productos', [ 'action' => 'index' ] ) ?> </li>
    <li><?= $this->Html->link ( 'Nuevo Producto', [ 'action' => 'add' ] ) ?> </li>
    <li><?= $this->Html->link ( 'Tipos', [ 'controller' => 'Tipos', 'action' => 'index' ] ) ?> </li>
    <li><?= $this->Html->link ( 'Nuevo Tipo', [ 'controller' => 'Tipos', 'action' => 'add' ] ) ?> </li>
  </ul>
</nav>
<div class = "productos view large-9 medium-8 columns content">
  <h3><?= h($producto->id) ?></h3>
  <table class = "vertical-table">
    <tr>
      <th scope = "row">Nombre</th>
      <td><?= h( $producto->nombre ) ?></td>
    </tr>
    <tr>
      <th scope = "row">Tipo</th>
      <td><?= $producto->has( 'tipo' ) ? $this->Html->link ( $producto->tipo->nombre,
              [ 'controller' => 'Tipos', 'action' => 'view', $producto->tipo->id ] ) : '' ?></td>
    </tr>
    <tr>
      <th scope = "row">Id</th>
      <td><?= $this->Number->format ( $producto->id ) ?></td>
    </tr>
    <tr>
      <th scope = "row">Precio</th>
      <td><?= $this->Number->format ( $producto->precio ) ?></td>
    </tr>
  </table>
</div>
