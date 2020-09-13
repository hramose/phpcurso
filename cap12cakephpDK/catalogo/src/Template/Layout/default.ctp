<?php $appDescription = 'Catálogo';?>
<!DOCTYPE html>
<html>
<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $appDescription ?>:
    <?= $this->fetch('title') ?>
  </title>
  <?= $this->Html->meta('icon') ?>

  <?= $this->Html->css('base.css') ?>
  <?= $this->Html->css('cake.css') ?>

  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
</head>
<body>
  <nav class="top-bar expanded" data-topbar role="navigation">
    <ul class="title-area large-3 medium-4 columns">
      <li class="name">
        <h1><a href=""><?= $this->Html->link($appDescription, '/') ?></a></h1>
      </li>
    </ul>
    <div class="top-bar-section">
      <ul class="left">
        <li><?= $this->Html->link('Tipos', ['controller' => 'Tipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link('Productos', ['controller' => 'Productos', 'action' => 'index']) ?></li>
      </ul>
    </div>
  </nav>
  <?= $this->Flash->render() ?>
  <div class="container clearfix">
    <?= $this->fetch('content') ?>
  </div>
  <footer></footer>
</body>
</html>
