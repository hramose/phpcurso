<nav class = "large-3 medium-4 columns" id = "actions-sidebar">
  <ul class = "side-nav">
    <li class = "heading">Acciones</li>
    <li><?= $this->Html->link ( 'Editar', [ 'action' => 'edit', $tipo->id] )?></li>
    <li><?= $this->Form->postLink ( 'Eliminar', [ 'action' => 'delete', $tipo->id ],
            ['confirm' => '¿Realmente desea eliminar?' ] )?></li>
    <li><?= $this->Html->link ( 'Tipos', [ 'action' => 'index' ] )?></li>
    <li><?= $this->Html->link ( 'Nuevo Tipo', [ 'action' => 'add' ] )?></li>
    <li><?= $this->Html->link ( 'Productos', [ 'controller' => 'Productos', 'action' => 'index' ] )?></li>
    <li><?= $this->Html->link ( 'Nuevo Producto', [ 'controller' => 'Productos', 'action' => 'add' ] )?></li>
  </ul>
</nav>
<div class = "tipos view large-9 medium-8 columns content">
  <h3><?= h ( $tipo->nombre ) ?></h3>
  <table class = "vertical-table">
    <tr>
      <th scope = "row" >Id</th>
      <td><?= $this->Number->format ( $tipo->id ) ?></td>
    </tr>
    <tr>
      <th scope = "row">Nombre</th>
      <td><?= h ( $tipo->nombre ) ?></td>
    </tr>
  </table>
  <div class = "related">
    <h4>Productos Relacionados</h4>
    <?php if ( !empty( $tipo->productos ) ): ?>
    <table cellpadding = "0" cellspacing = "0">
      <tr>
        <th scope = "col">Id</th>
        <th scope = "col">Nombre</th>
        <th scope = "col">Precio</th>
        <th scope = "col" class = "actions">Acciones</th>
      </tr>
      <?php foreach ( $tipo->productos as $productos ): ?>
      <tr>
        <td><?= h ( $productos->id ) ?></td>
        <td><?= h ( $productos->nombre ) ?></td>
        <td><?= h ( $productos->precio ) ?></td>
        <td class = "actions">
          <?= $this->Html->link('Ver', [ 'controller' => 'Productos', 'action' => 'view', $productos->id ] ) ?>
          <?= $this->Html->link('Editar', [ 'controller' => 'Productos', 'action' => 'edit', $productos->id ] ) ?>
          <?= $this->Form->postLink('Eliminar', [ 'controller' => 'Productos', 'action' => 'delete', $productos->id ],
              ['confirm' => '¿Realmente desea eliminar?' ] ) ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <?php endif; ?>
  </div>
</div>
