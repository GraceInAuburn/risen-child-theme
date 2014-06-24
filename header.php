<?php
/**
 * Theme Header
 *
 * Outputs <head> and header content (logo, tagline, navigation)
 */

?><!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<!--[if lte IE 8]><meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" /><![endif]-->
<title><?php wp_title( '' ); // wp_title is filtered by includes/customizations.php risen_title()
        ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
<link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196">
<link rel="icon" type="image/png" href="/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#2d89ef">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">

<?php wp_head(); // prints out JavaScript, CSS, etc. as needed by WordPress, theme, plugins, etc.
?>
<!--
 .d8888b.                                  8888888                 d8888          888
d88P  Y88b                                   888                  d88888          888
888    888                                   888                 d88P888          888
888        888d888 8888b.   .d8888b .d88b.   888   88888b.      d88P 888 888  888 88888b.  888  888 888d888 88888b.       .d8888b .d88b.  88888b.d88b.
888  88888 888P"      "88b d88P"   d8P  Y8b  888   888 "88b    d88P  888 888  888 888 "88b 888  888 888P"   888 "88b     d88P"   d88""88b 888 "888 "88b
888    888 888    .d888888 888     88888888  888   888  888   d88P   888 888  888 888  888 888  888 888     888  888     888     888  888 888  888  888
Y88b  d88P 888    888  888 Y88b.   Y8b.      888   888  888  d8888888888 Y88b 888 888 d88P Y88b 888 888     888  888 d8b Y88b.   Y88..88P 888  888  888
 "Y8888P88 888    "Y888888  "Y8888P "Y8888 8888888 888  888 d88P     888  "Y88888 88888P"   "Y88888 888     888  888 Y8P  "Y8888P "Y88P"  888  888  888
-->
</head>

<body <?php body_class(); ?>>

    <!-- Container Start -->

    <div id="container">

        <div id="container-inner">

            <!-- Header Start -->

            <header id="header">
                            <?php if (function_exists("ninja_annc_display")) { ninja_annc_display(83990); } ?>
                <div id="header-inner">

                    <div id="header-content">

                        <?php

                        $logo_classes = array();

                        if ( risen_option( 'logo_no_left_padding' ) ) {
                            $logo_classes[] = 'logo-no-left-padding';
                        }

                        if ( risen_option( 'logo_hidpi' ) || ! risen_option( 'logo' ) ) { // default always has Retina
                            $logo_classes[] = 'has-hidpi-logo';
                        }

                        ?>

                        <div id="logo"<?php if ( $logo_classes ) : ?> class="<?php echo implode( ' ', $logo_classes ); ?>"<?php endif; ?>>

                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">

                                <img src="<?php echo esc_url( risen_logo_url() ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="logo-regular">

                                <img src="<?php echo esc_url( risen_logo_url( 'hidpi' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="logo-hidpi">

                            </a>
                        </div>

                        <div id="top-right">

                            <div id="top-right-inner">

                                <div id="top-right-content">

                                    <div id="tagline">
                                            <a href="/aboutus/" style="color:#615145">
                                                <?php bloginfo( 'description' ); ?>
                                            </a>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Menu Start -->

                <nav id="header-menu">

                    <div id="header-menu-inner">

                        <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'header',
                            'menu_id'            => 'header-menu-links',
                            'menu_class'        => 'sf-menu',
                            'container'            => false, // don't wrap in div
                            'fallback_cb'        => false // don't show pages if no menu found - show nothing
                        ) );
                        ?>

                        <?php risen_icons( 'header' ); ?>

                        <div class="clear"></div>

                    </div>

                    <div id="header-menu-bottom"></div>

                </nav>

                <!-- Menu End -->

            </header>

            <!-- Header End -->
