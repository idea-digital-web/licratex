<nav class="site-header_nav">
	<div class="site-header_nav--contact">
		<i class="fa fa-phone">
		</i>
		<span>0212-2152713 / 0414-3993475 </span>
	</div>
	<div class="site-header_nav--contact">
		<i class="fa fa-envelope-o">
		</i>
		<span><?php bloginfo('admin_email'); ?></span>
	</div>
	<div class="site-header_nav--welcome">
		<span>
			<?php if ( is_user_logged_in() ) {?>
			<?php global $current_user; wp_get_current_user(); if ($current_user->user_firstname == true): ?>
			¡Bienvenido <?php echo ''. $current_user->user_firstname .'!'; else: ?>
			¡Bienvenido!<?php endif?>
		</span>
		<nav class="site-header_nav--nav">
			<ul>
				<li>
					<a href="#" data-toggle="dropdown" role="button" >Mi Cuenta <span class="caret" ></span></a>
					<ul">
						<?php if (current_user_can('administrator')): ?>
						<li><a href="<?php bloginfo('home');?>/gestion-vendedores/">Vendedores (Cambiar - Gestionar)</a></li>
						<?php endif ?>
						<?php if (	current_user_can('administrator') || current_user_can('vendor')): ?>
						<li><a href="<?php bloginfo('home');?>/modulo-de-ventas-vendedor/">Ventas (Gestionar Pedidos)</a></li>
						<?php endif ?>
						<?php if (	current_user_can('administrator') || current_user_can('despachador')): ?>
						<li><a href="<?php bloginfo('home');?>/modulo-de-despacho/">Despacho</a></li>
						<?php endif ?>
						<?php if (current_user_can('administrator')): ?>
						<li><a href="<?php bloginfo('home');?>/gestion-de-precios/">Precios</a></li>
						<?php endif ?>
						<?php if (current_user_can('administrator')): ?>
						<li><a href="<?php bloginfo('home');?>/wp-admin/">Panel Administrador</a></li>
						<?php endif ?>
						<li><a href="<?php bloginfo('home');?>/mi-cuenta/view-order">Mis Pedidos</a></li>
						<li><a href="<?php bloginfo('home');?>/mi-cuenta/edit-account/">Editar Datos</a></li>
						<li><a href="<?php echo wp_logout_url();?>" >Cerrar Sesión</a></li>
					</ul>
				</li>
			</ul>
		</nav>
		<?php } else {?>
		<div class="site-header_nav--login">
			<a href="<?php bloginfo('home');?>/mi-cuenta" title="">
				<i class="fa fa-sign-in"></i>
				<i class="icon-signin"></i>Iniciar Sesión / Registrarse
			</a>
		</div>
		<?php };?>
	</div>
	<div class="site-header_nav--social">
		<a href="https://www.facebook.com/Ferrenobrega-1873956566164126/" target="_blank"><i class="fa fa-facebook-official"></i></a>
		<a class="" href="http://twitter.com/ferrenobregave" target="_blank"><i class="fa fa-twitter"></i></a>
		<a class="" href="https://www.instagram.com/ferrenobregave/" target="_blank"><i class="fa fa-instagram"></i></a>
	</div>
</nav>