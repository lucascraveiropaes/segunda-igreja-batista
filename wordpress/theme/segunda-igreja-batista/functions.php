<?php
	function get_navbar($id) {
	/*
		The 'id' variable represents the position on the navbar that must be active
	*/
?>
    <!-- Top menu -->
	<nav class="navbar" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.html">
					<img src="assets/img/logo.png">
				</a>
			</div>
			<div class="collapse navbar-collapse" id="top-navbar-1">
				<ul class="nav navbar-nav navbar-right">
					<li <?php if($id==1) echo 'class="active"'; ?>>
						<a href="<?php echo get_home_url(); ?>">
							<i class="fa fa-home"></i>
							<br>Início
						</a>
					</li>
					<li <?php if($id==2) echo 'class="active"'; ?>>
						<a href="<?php echo get_home_url(); ?>/eventos">
							<i class="fa fa-camera"></i>
							<br>Eventos
						</a>
					</li>
					<li <?php if($id==3) echo 'class="active"'; ?>>
						<a href="<?php echo get_home_url(); ?>/pastorais">
							<i class="fa fa-book"></i>
							<br>Pastorais
						</a>
					</li>
					<li class="dropdown <?php if($id==4) echo 'active'; ?>">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000">
							<i class="fa fa-users"></i>
							<br>Ministérios <span class="caret"></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-left" role="menu">
							<li>
								<a href="index.html">Ministério das Crianças</a>
							</li>
							<li>
								<a href="index-2.html">Ministério de Louvor</a>
							</li>
						</ul>
					</li>
					<li <?php if($id==5) echo 'class="active"'; ?>>
						<a href="<?php echo get_home_url(); ?>/sobre">
							<i class="fa fa-user"></i>
							<br>Sobre
						</a>
					</li>
					<li <?php if($id==6) echo 'class="active"'; ?>>
						<a href="<?php echo get_home_url(); ?>/contato">
							<i class="fa fa-envelope"></i>
							<br>Contato
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
<?php
	}
	add_theme_support('category-thumbnails');
	add_theme_support('post-thumbnails');
	add_theme_support( 'title-tag' );
 	/* Changing Post Into Pastoral */
	function change_post_label() {
	    global $menu;
	    global $submenu;
	    $menu[5][0] = 'Pastoral';
	    $submenu['edit.php'][5][0] = 'Pastorais';
	    $submenu['edit.php'][10][0] = 'Adicionar Pastoral';
	    echo '';
	}
	function change_post_into_pastoral() {
	    global $wp_post_types;
	    $labels = &$wp_post_types['post']->labels;
	    $labels->name = 'Pastorais';
	    $labels->singular_name = 'Pastoral';
	    $labels->add_new = 'Adicionar Pastoral';
	    $labels->add_new_item = 'Adicionar Pastoral';
	    $labels->edit_item = 'Editar Pastoral';
	    $labels->new_item = 'Pastoral';
	    $labels->view_item = 'Ver Pastoral';
	    $labels->search_items = 'Buscar Pastorais';
	    $labels->not_found = 'Nenhuma Pastoral encontrada';
	    $labels->not_found_in_trash = 'Nenhuma Pastoral encontrada no Lixo';
	    $labels->all_items = 'Todas as Pastorais';
	    $labels->menu_name = 'Pastorais';
	    $labels->name_admin_bar = 'Pastorais';
	    $wp_post_types['post']->menu_icon = 'dashicons-admin-comments';
	}
	 
	add_action( 'admin_menu', 'change_post_label' );
	add_action( 'init', 'change_post_into_pastoral' );
 	/* Change the excerpt lenght */
	function excerpt_new_lenght($length) {
		return 30;
	}
	add_filter('excerpt_length', 'excerpt_new_lenght');
 	/* Removing Tags */
 	function myprefix_unregister_tags() {
	    unregister_taxonomy_for_object_type('post_tag', 'post');
	}
	add_action('init', 'myprefix_unregister_tags');
 	/* Hiding Help Box */
	function hide_help() {
	    echo '<style type="text/css">
	            #contextual-help-link-wrap { display: none !important; }
	          </style>';
	}
	add_action('admin_head', 'hide_help');
 	/* Adding Credits */
	function remove_footer_admin () {
	  	echo 'Desenvolvidor por <a href="http://lucascraveiropaes.com" target="_blank">Lucas Craveiro Paes</a>';
	}
	add_filter('admin_footer_text', 'remove_footer_admin');
	/* Removing Comments for Good */
	add_action( 'admin_menu', 'my_remove_admin_menus' );
	function my_remove_admin_menus() {
	    remove_menu_page( 'edit-comments.php' );
	}
	add_action('init', 'remove_comment_support', 100);
	function remove_comment_support() {
	    remove_post_type_support( 'post', 'comments' );
	    remove_post_type_support( 'page', 'comments' );
	}
	function mytheme_admin_bar_render() {
	    global $wp_admin_bar;
	    $wp_admin_bar->remove_menu('comments');
	}
	add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );
?>