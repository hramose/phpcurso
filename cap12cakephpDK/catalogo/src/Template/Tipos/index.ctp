<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Actions</li>
        <li><?= $this->Html->link('Nuevo Tipo', ['action' => 'add']) ?></li>
        <li><?= $this->Html->link('Productos', ['controller' => 'Productos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link('Nuevo Producto', ['controller' => 'Productos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipos index large-9 medium-8 columns content">
    <h3>Tipos</h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col" class="actions">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipos as $tipo): ?>
            <tr>
                <td><?= $this->Number->format($tipo->id) ?></td>
                <td><?= h($tipo->nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link('Ver', ['action' => 'view', $tipo->id]) ?>
                    <?= $this->Html->link('Editar', ['action' => 'edit', $tipo->id]) ?>
                    <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $tipo->id], ['confirm' => '¿Realmente quiere eliminar?']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . 'primero') ?>
            <?= $this->Paginator->prev('< ' . 'anterior') ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('siguiente' . ' >') ?>
            <?= $this->Paginator->last('último' . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => 'Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}}']) ?></p>
    </div>
</div>
