<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="http://localhost/nantesgherbee/wp-content/themes/blank/css/project.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="header">
	<div class="container">
		<div class="navbar">
		<div class="logo">
			<img src="http://localhost/nantesgherbee/wp-content/uploads/2021/04/logoname.png" width="200px">
		</div>
		<nav>
			<ul>
				<li><a href="http://localhost/nantesgherbee/home/">Home</a></li>
	            <li><a href="http://localhost/nantesgherbee/shop/">Products</a></li>
	            <li><a href="http://localhost/nantesgherbee/about/">About</a></li>
	            <li><a href="http://localhost/nantesgherbee/contact/">Contact</a></li>
	            <li><a href="http://localhost/nantesgherbee/my-account/">Account</a></li>
			</ul>
		</nav>
		<div class="cartlogo">
            <a href=http://localhost/nantesgherbee/cart-2>
			<img id="cartlogo" src="http://localhost/nantesgherbee/wp-content/uploads/2021/04/cartwhite.png" width="30px" height="30px"></a>
		</div>
		</div>
	</div>
	</div>
