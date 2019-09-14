<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'JR consultores-Prueba');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('style.css','bootstrap.min','bootstrap-theme.min'));
		echo $this->Html->script(array('jquery.min', 'bootstrap.min'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/cakephp-2.10.18">
      <?php echo  $this->Html->image('logo.png', array( 'width' => '140', 'heigth' => '70', 'alt' =>'JR', 'title' => 'Inicio' ) ); 
 ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li><?php echo $this->Html->link('Usuario', array('controller' => 'personas','action' => 'index')); ?></li>
        <li><?php echo $this->Html->link('Mascotas', array('controller' => 'mascotas','action' => 'index')); ?></li>
        <li><?php echo $this->Html->link('Tipos mascotas', array('controller' => 'tipomascotas','action' => 'index')); ?></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Crear<span class="caret"></span></a>
          <ul class="dropdown-menu">	
            <li><?php echo $this->Html->link('Nuevo Usuario', array('controller' => 'personas','action' => 'nuevo')); ?></li>
            <li role="separator" class="divider"></li>
            <li><?php echo $this->Html->link('Nueva Mascotas', array('controller' => 'mascotas','action' => 'nuevo')); ?></li>
            <li role="separator" class="divider"></li>
            <li><?php echo $this->Html->link('Nuevo tipo Mascotas', array('controller' => 'tipomascotas','action' => 'nuevo')); ?></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div id="container">
		<!--<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'https://cakephp.org'); ?></h1>
		</div>
		-->
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<div class="col-md-12">
				
			</div>
		</div>
		<!--
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'https://cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
		-->
	</div>
	<?php //echo $this->element('sql_dump'); ?>
</body>
</html>
