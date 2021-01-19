<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Orti
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv='X-UA-Compatible' content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--    <meta name="description" content="">-->
    <!--    <meta name="author" content="">-->
    <!--    -->
    <!--    <link rel="shortcut icon" href="favicon.png">-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,800,900&display=swap&subset=cyrillic"
          rel="preload stylesheet" as="style">
    <!--    <link rel="stylesheet" href="./css/styles.css">-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary">
		<?php esc_html_e( 'Skip to content', 'orti' ); ?></a>
    <header class="main-header">
        <div class="wrapper main-header__wrap">
            <p class="main-header__logolink">
				<?php the_custom_logo(); ?>
            </p>
<!--            <nav class="main-navigation">-->
<!--                <ul class="main-navigation__list">-->
<!--                    <li>-->
<!--                        <a href="services.html">Услуги</a>-->
<!--                    </li>-->
<!--                    <li class="active">-->
<!--                        <a href="trainers.html">Тренеры</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="schedule.html">Расписание</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="prices.html">Цены</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="contacts.html">Контакты </a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </nav>-->
            <?php
                wp_nav_menu([
	                'theme_location'       => 'menu-header',
	                'container'            => 'nav',
	                'container_class'      => 'main-navigation',
	                'menu_class'           => 'main-navigation__list',
	                'items_wrap'           => '<ul class="%2$s">%3$s</ul>',
                ]);
            ?>


                    <?php
	                if (is_active_sidebar('orti-contacts-header')) {
		                dynamic_sidebar('orti-contacts-header');
	                }
	                ?>
<!--            <address class="main-header__widget widget-contacts">-->
<!---->
<!--                <a href="tel:88007003030" class="widget-contacts__phone">-->
<!--                    8 800 700 30 30-->
<!--                </a>-->
<!--                <p class="widget-contacts__address"> Приречная 11-->
<!--                </p>-->
<!--            </address>-->
            <button class="main-header__mobile">
                <span class="sr-only">Открыть мобильное меню</span>
            </button>
        </div>
    </header>
