<nav class = "large-3 medium-4 columns" id = "actions-sidebar">
  <ul class = "side-nav">
    <li class = "heading">Acciones</li>
    <li><?= $this->Html->link( 'Nuevo Producto', [ 'action' => 'add' ] ) ?></li>
    <li><?= $this->Html->link( 'Tipos', [ 'controller' => 'Tipos', 'action' => 'index' ] ) ?></li>
    <li><?= $this->Html->link( 'Nuevo Tipo', ['controller' => 'Tipos', 'action' => 'add' ] ) ?></li>
  </ul>
</nav>
<div class = "productos index large-9 medium-8 columns content">
  <h3>Productos</h3>
  <table cellpadding = "0" cellspacing = "0">
    <thead>
      <tr>
        <th scope = "col"><?= $this->Paginator->sort ( 'id' )?></th>
        <th scope = "col"><?= $this->Paginator->sort ( 'nombre' )?></th>
        <th scope = "col"><?= $this->Paginator->sort ( 'precio' )?></th>
        <th scope = "col"><?= $this->Paginator->sort ( 'tipo_id' )?></th>
        <th scope = "col" class = "actions">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ( $productos as $producto ): ?>
      <tr>
        <td><?= $this->Number->format ( $producto->id )?></td>
        <td><?= h( $producto->nombre ) ?></td>
        <td><?= $this->Number->format ( $producto->precio ) ?></td>
        <td>
          <?= $producto->has('tipo') ?
          $this->Html->link ( $producto->tipo->nombre, [ 'controller' => 'Tipos', 'action' => 'view', $producto->tipo->id ] ) : '' ?>
        </td>
        <td class = "actions">
          <?= $this->Html->link ( 'Ver', [ 'action' => 'view', $producto->id ] ) ?>
          <?= $this->Html->link ( 'Editar', [ 'action' => 'edit', $producto->id ] ) ?>
          <?= $this->Form->postLink ( 'Eliminar', [ 'action' => 'delete', $producto->id ],
              [ 'confirm' => '¿Realmente desea eliminar?' ] ) ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <div class = "paginator">
    <ul class = "pagination">
      <?= $this->Paginator->first ( '<< ' . 'primero' ) ?>
      <?= $this->Paginator->prev ( '< ' . 'anterior' ) ?>
      <?= $this->Paginator->numbers() ?>
      <?= $this->Paginator->next( 'siguiente' . ' >' ) ?>
      <?= $this->Paginator->last( 'último' . ' >>' ) ?>
    </ul>
    <p><?= $this->Paginator->counter ( [ 'format' => 'Página {{page}} de {{pages}}, mostrando {{current}} de {{count}}' ] )?></p>
    </div>
</div>
