<nav class = "large-3 medium-4 columns" id = "actions-sidebar">
  <ul class = "side-nav">
    <li class = "heading">Acciones</li>
    <li><?= $this->Html->link ( 'Productos', [ 'action' => 'index' ] ) ?></li>
    <li><?= $this->Html->link ( 'Tipos', [ 'controller' => 'Tipos', 'action' => 'index' ] ) ?></li>
    <li><?= $this->Html->link ( 'Nuevo Tipo', [ 'controller' => 'Tipos', 'action' => 'add' ] ) ?></li>
  </ul>
</nav>
<div class = "productos form large-9 medium-8 columns content">
  <?= $this->Form->create ( $producto ) ?>
  <fieldset>
    <legend>Nuevo Producto</legend>
    <?php
      echo $this->Form->control ( 'nombre' );
      echo $this->Form->control ( 'precio' );
      echo $this->Form->control ( 'tipo_id', [ 'options' => $tipos ] );
    ?>
  </fieldset>
  <?= $this->Form->button( 'Crear' ) ?>
  <?= $this->Form->end() ?>
</div>
