<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo "Gestión de Cableado Estructurado" ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap');
		echo $this->Html->css('bootstrap-theme');

		echo $this->Html->script('jquery');
		echo $this->Html->script('bootstrap');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Gestión de Cableado Estructurado</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Inicio</a></li>
							<li><a href="#about">Acerca de</a></li>
							<li><a href="#contact">Contacto</a></li>
						</ul>
					</div><!-- /.nav-collapse -->
				</div><!-- /.container -->
			</div><!-- /.navbar -->
		</div><br><br><br><br>

		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<div class="container">
				<div class="row row-offcanvas row-offcanvas-right">
					<?php echo $this->fetch('content'); ?>
					<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
						<div class="list-group">
							<a href="#" class="list-group-item active">Link</a>
							<a href="#" class="list-group-item">Link</a>
							<a href="#" class="list-group-item">Link</a>
							<a href="#" class="list-group-item">Link</a>
							<a href="#" class="list-group-item">Link</a>
							<a href="#" class="list-group-item">Link</a>
							<a href="#" class="list-group-item">Link</a>
							<a href="#" class="list-group-item">Link</a>
							<a href="#" class="list-group-item">Link</a>
							<a href="#" class="list-group-item">Link</a>
						</div>
					</div>
				</div>
			</div>
		<div id="footer">
			<div class="container">
				<hr>
				<p>Práctica de Redes de Computadores III</p>
			</div>
		</footer>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
