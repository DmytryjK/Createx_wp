<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package woocomerce_1
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'woocomerce_1' ); ?></a>

	<header id="masthead" class="site-header header">
		<nav class="nav-top">
        	<div class="container">
				<div class="nav-phone">
					<span class="phone-text">
						Available 24/7 at
					</span>
					<a class="phone-link" href="tel:4055550128">(405) 555-0128</a>
				</div>
				<ul class="nav-list">
					<li class="nav-item">
						<a href="" class="nav-link">Delivery & returns</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link">Track order</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link">Blog</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link">Contacts</a>
					</li>
				</ul>
				<div class="wrapper">
					<div class="nav-lang">
						<span class="lang-flag">
							<img src="<?php echo bloginfo('template_url'); ?>/assets/icons/flag-usa.svg" alt="">
						</span>
						<select class="lang-select" name="">
							<option value="English">Eng / $</option>
						</select>
					</div>
					<div class="nav-authorization">
						<a class="authorization-login" href="#">Log in</a>
						<span>/</span>
						<a class="authorization-register" href="#">Register</a>
					</div>
				</div>
        	</div>
    	</nav> 

		<div class="container">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$woocomerce_1_description = get_bloginfo( 'description', 'display' );
				if ( $woocomerce_1_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $woocomerce_1_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<!-- <ul class="header-nav">
				
				<li class="nav-item">
					<a href="/shop/womens" class="nav-link" id="women">Women</a>
				</li>
				<li class="nav-item">
					<a href="/shop/womens" class="nav-link" id="men">Men</a>
				</li>
				<li class="nav-item">
					<a href="/shop/womens" class="nav-link" id="girls">Girls</a>
				</li>
				<li class="nav-item">
					<a href="/shop/womens" class="nav-link" id="boys">Boys</a>
				</li>
				<li class="nav-item">
					<a href="/shop/womens" class="nav-link nav-link_attention" id="sale">Sale</a>
				</li>
			</ul> -->

			<nav id="site-navigation" class="main-navigation header-nav">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
					<?php esc_html_e( 'Primary Menu', 'woocomerce_1' ); ?>
				</button>

				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>

			<label class="search-form">
				<?php aws_get_search_form( true ); ?>
				<!-- <input class="search-input" type="text">
				<button class="search-btn"></button> -->
			</label>
			<div class="user-info">
				<div class="user-favorite">
					<a class="favorite-link" href="#"></a>
					<span class="favorite-counter">2</span>
				</div>
				<span class="line"></span>
				<div class="user-cart">
					<a class="cart-link" href="<?php echo wc_get_cart_url(); ?>"></a>
					<span class="cart-counter">
						<a class="cart-customlocation cart-link" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo WC()->cart->get_cart_contents_count(); ?></a>
					</span> 
				</div>
			</div>
    	</div>

		<nav>
			<div class="nav-megamenu" data-name="sale">
				<div class="container">
					<ul class="nav-content">
						<li class="nav-content__popular">
							<ul class="popular-list">
								<li class="popular-list__item">
									<a class="popular-list__link" href="">New collection</a>
								</li>
								<li class="popular-list__item">
									<a class="popular-list__link" href="">Best Sellers</a>
								</li>
								<li class="popular-list__item">
									<a class="popular-list__link" href="">Plus Size</a>
								</li>
								<li class="popular-list__item">
									<a class="popular-list__link attention" href="">Sale up to 70%</a>
								</li>
							</ul>
						</li>
						<li class="nav-content__categories">
							<h3 class="nav-title categories__title">CLOTHES</h2>
							<ul class="categories-list">
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Coats</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Jackets</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Suits</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Dresses </a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Cardigans & sweaters</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sweatshirts & hoodies</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">T-shirts & tops</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Pants</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Jeans</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Shorts</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Skirts</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Lingerie & nightwear</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sportswear</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Swimwear</a>
								</li>
							</ul>
						</li>
						<li class="nav-content__categories">
							<h3 class="nav-title categories__title">SHOES</h2>
							<ul class="categories-list">
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Boots</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Flat shoes</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Heels</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sandals </a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Mules</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sliders</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Slippers</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sneakers</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Leather</a>
								</li>
							</ul>
						</li>
						<li class="nav-content__categories">
							<h3 class="nav-title categories__title">ACCESSORIES</h2>
							<ul class="categories-list">
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Bags & bagpacks</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Hats & scarves</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Hair accessories</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Belts</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Jewellery</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Watches</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sunglasses</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Purses</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Gloves</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Socks & tights</a>
								</li>
							</ul>
						</li>
					</ul>
					<div class="nav-offers">
						<img class="offers__img" src="<?php echo bloginfo('template_url'); ?>/assets/images/megamenu/image.png" alt="clothes for school">
						<p class="offers__descr">Back to school. Sale up to 50%</p>
						<a class="btn-transparent btn-transparent_small offers__link" href="">See offers</a>
					</div>
				</div>
			</div>
			<div class="nav-megamenu" data-name="women">
				<div class="container">
					<ul class="nav-content">
						<li class="nav-content__popular">
							<ul class="popular-list">
								<li class="popular-list__item">
									<a class="popular-list__link" href="">New collection</a>
								</li>
								<li class="popular-list__item">
									<a class="popular-list__link" href="">Best Sellers</a>
								</li>
								<li class="popular-list__item">
									<a class="popular-list__link" href="">Plus Size</a>
								</li>
								<li class="popular-list__item">
									<a class="popular-list__link attention" href="">Sale up to 70%</a>
								</li>
							</ul>
						</li>
						<li class="nav-content__categories">
							<h3 class="nav-title categories__title">CLOTHES</h2>
							<ul class="categories-list">
								<li class="categories-list__item">
									<a class="categories-list__link" href="./women-clothes.php">Coats</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Jackets</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Suits</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Dresses </a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Cardigans & sweaters</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sweatshirts & hoodies</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">T-shirts & tops</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Pants</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Jeans</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Shorts</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Skirts</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Lingerie & nightwear</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sportswear</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Swimwear</a>
								</li>
							</ul>
						</li>
						<li class="nav-content__categories">
							<h3 class="nav-title categories__title">SHOES</h2>
							<ul class="categories-list">
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Boots</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Flat shoes</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Heels</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sandals </a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Mules</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sliders</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Slippers</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sneakers</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Leather</a>
								</li>
							</ul>
						</li>
						<li class="nav-content__categories">
							<h3 class="nav-title categories__title">ACCESSORIES</h2>
							<ul class="categories-list">
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Bags & bagpacks</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Hats & scarves</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Hair accessories</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Belts</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Jewellery</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Watches</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sunglasses</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Purses</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Gloves</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Socks & tights</a>
								</li>
							</ul>
						</li>
					</ul>
					<div class="nav-offers">
						<img class="offers__img" src="<?php echo bloginfo('template_url'); ?>/assets/images/megamenu/image.png" alt="clothes for school">
						<p class="offers__descr">Back to school. Sale up to 50%</p>
						<a class="btn-transparent btn-transparent_small offers__link" href="">See offers</a>
					</div>
				</div>
			</div>
			<div class="nav-megamenu" data-name="men">
				<div class="container">
					<ul class="nav-content">
						<li class="nav-content__popular">
							<ul class="popular-list">
								<li class="popular-list__item">
									<a class="popular-list__link" href="">New collection</a>
								</li>
								<li class="popular-list__item">
									<a class="popular-list__link" href="">Best Sellers</a>
								</li>
								<li class="popular-list__item">
									<a class="popular-list__link" href="">Plus Size</a>
								</li>
								<li class="popular-list__item">
									<a class="popular-list__link attention" href="">Sale up to 70%</a>
								</li>
							</ul>
						</li>
						<li class="nav-content__categories">
							<h3 class="nav-title categories__title">CLOTHES</h2>
							<ul class="categories-list">
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Coats</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Jackets</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Suits</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Dresses </a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Cardigans & sweaters</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sweatshirts & hoodies</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">T-shirts & tops</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Pants</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Jeans</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Shorts</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Skirts</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Lingerie & nightwear</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sportswear</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Swimwear</a>
								</li>
							</ul>
						</li>
						<li class="nav-content__categories">
							<h3 class="nav-title categories__title">SHOES</h2>
							<ul class="categories-list">
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Boots</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Flat shoes</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Heels</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sandals </a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Mules</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sliders</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Slippers</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sneakers</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Leather</a>
								</li>
							</ul>
						</li>
						<li class="nav-content__categories">
							<h3 class="nav-title categories__title">ACCESSORIES</h2>
							<ul class="categories-list">
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Bags & bagpacks</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Hats & scarves</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Hair accessories</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Belts</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Jewellery</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Watches</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sunglasses</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Purses</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Gloves</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Socks & tights</a>
								</li>
							</ul>
						</li>
					</ul>
					<div class="nav-offers">
						<img class="offers__img" src="<?php echo bloginfo('template_url'); ?>/assets/images/megamenu/image.png" alt="clothes for school">
						<p class="offers__descr">Back to school. Sale up to 50%</p>
						<a class="btn-transparent btn-transparent_small offers__link" href="">See offers</a>
					</div>
				</div>
			</div>
			<div class="nav-megamenu" data-name="girls">
				<div class="container">
					<ul class="nav-content">
						<li class="nav-content__popular">
							<ul class="popular-list">
								<li class="popular-list__item">
									<a class="popular-list__link" href="">New collection</a>
								</li>
								<li class="popular-list__item">
									<a class="popular-list__link" href="">Best Sellers</a>
								</li>
								<li class="popular-list__item">
									<a class="popular-list__link" href="">Plus Size</a>
								</li>
								<li class="popular-list__item">
									<a class="popular-list__link attention" href="">Sale up to 70%</a>
								</li>
							</ul>
						</li>
						<li class="nav-content__categories">
							<h3 class="nav-title categories__title">CLOTHES</h2>
							<ul class="categories-list">
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Coats</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Jackets</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Suits</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Dresses </a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Cardigans & sweaters</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sweatshirts & hoodies</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">T-shirts & tops</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Pants</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Jeans</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Shorts</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Skirts</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Lingerie & nightwear</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sportswear</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Swimwear</a>
								</li>
							</ul>
						</li>
						<li class="nav-content__categories">
							<h3 class="nav-title categories__title">SHOES</h2>
							<ul class="categories-list">
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Boots</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Flat shoes</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Heels</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sandals </a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Mules</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sliders</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Slippers</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sneakers</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Leather</a>
								</li>
							</ul>
						</li>
						<li class="nav-content__categories">
							<h3 class="nav-title categories__title">ACCESSORIES</h2>
							<ul class="categories-list">
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Bags & bagpacks</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Hats & scarves</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Hair accessories</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Belts</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Jewellery</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Watches</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sunglasses</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Purses</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Gloves</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Socks & tights</a>
								</li>
							</ul>
						</li>
					</ul>
					<div class="nav-offers">
						<img class="offers__img" src="<?php echo bloginfo('template_url'); ?>/assets/images/megamenu/image.png" alt="clothes for school">
						<p class="offers__descr">Back to school. Sale up to 50%</p>
						<a class="btn-transparent btn-transparent_small offers__link" href="">See offers</a>
					</div>
				</div>
			</div>
			<div class="nav-megamenu" data-name="boys">
				<div class="container">
					<ul class="nav-content">
						<li class="nav-content__popular">
							<ul class="popular-list">
								<li class="popular-list__item">
									<a class="popular-list__link" href="">New collection</a>
								</li>
								<li class="popular-list__item">
									<a class="popular-list__link" href="">Best Sellers</a>
								</li>
								<li class="popular-list__item">
									<a class="popular-list__link" href="">Plus Size</a>
								</li>
								<li class="popular-list__item">
									<a class="popular-list__link attention" href="">Sale up to 70%</a>
								</li>
							</ul>
						</li>
						<li class="nav-content__categories">
							<h3 class="nav-title categories__title">CLOTHES</h2>
							<ul class="categories-list">
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Coats</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Jackets</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Suits</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Dresses </a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Cardigans & sweaters</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sweatshirts & hoodies</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">T-shirts & tops</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Pants</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Jeans</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Shorts</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Skirts</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Lingerie & nightwear</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sportswear</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Swimwear</a>
								</li>
							</ul>
						</li>
						<li class="nav-content__categories">
							<h3 class="nav-title categories__title">SHOES</h2>
							<ul class="categories-list">
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Boots</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Flat shoes</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Heels</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sandals </a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Mules</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sliders</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Slippers</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sneakers</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Leather</a>
								</li>
							</ul>
						</li>
						<li class="nav-content__categories">
							<h3 class="nav-title categories__title">ACCESSORIES</h2>
							<ul class="categories-list">
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Bags & bagpacks</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Hats & scarves</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Hair accessories</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Belts</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Jewellery</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Watches</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Sunglasses</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Purses</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Gloves</a>
								</li>
								<li class="categories-list__item">
									<a class="categories-list__link" href="">Socks & tights</a>
								</li>
							</ul>
						</li>
					</ul>
					<div class="nav-offers">
						<img class="offers__img" src="<?php echo bloginfo('template_url'); ?>/assets/images/megamenu/image.png" alt="clothes for school">
						<p class="offers__descr">Back to school. Sale up to 50%</p>
						<a class="btn-transparent btn-transparent_small offers__link" href="">See offers</a>
					</div>
				</div>
			</div>
		</nav>

		
		
	</header><!-- #masthead -->
