<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SCIS_Two
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

    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#content"><?php esc_html_e( 'Skip to content', 'scis_two' ); ?></a>

        <header id="masthead" class="site-header">
            <div class="global-header">
                <!-- White Nav Bar -->
                <div class="row">
                    <div class="columns small-5 large-8 fiu"><a href="https://www.fiu.edu/"><span
                                class="show-for-large-up">Florida International University</span><span
                                class="hide-for-large-up"><img alt=" " class="logo"
                                    src="https://digicdn.fiu.edu/v1/_assets/images/fiu-main-logo.png" /></span></a>
                    </div>

                    <!-- Portal Menu -->
                    <div class="columns small-7 large-4 text-right">
                        <div class="global-nav-wrapper">
                            <nav aria-label="FIU Quick Links" class="top-bar global-nav" data-topbar="">
                                <div class="top-bar-section">
                                    <ul class="right">
                                        <li class="has-dropdown show-for-large-up" id="portals"><a
                                                aria-label="FIU Portals" href="#" role="button">
                                                <p aria-hidden="true" class="fa fa-lock"></p><span>FIU Portals</span>
                                            </a>
                                            <ul class="dropdown">
                                                <li><a href="https://my.fiu.edu" target="_blank">MyFIU</a></li>
                                                <li><a href="https://canvas.fiu.edu" target="_blank">FIU Canvas</a></li>
                                                <li><a href="http://panthermail.fiu.edu/" target="_blank">Student
                                                        Email</a></li>
                                                <li><a href="http://mail.fiu.edu/" target="_blank">Faculty/Staff
                                                        Email</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>

                        <!-- White Nav Bar, Search & Menu Buttons -->
                        <div class="global-tools"><a aria-label="Search Icon" href="#" id="search" role="button">
                                <p aria-hidden="true" class="fa fa-search"></p><span>Search</span>
                            </a><a aria-label="Menu Icon" href="#" id="menu" role="button">
                                <p aria-hidden="true" class="fa fa-bars"></p><span>Menu</span>
                            </a></div>
                    </div>
                </div>
            </div>

            <!-- Blue Nav Bar -->
            <nav aria-label="Website Main Navigation" class="regular-nav" data-topbar="">
                <div class="row">
                    <div class="columns logo">
                        <div class="row">
                            <div class="logo-wrapper show-for-medium-up medium-2 columns">
                                <!-- Site Logo -->
                                <? the_custom_logo(); ?>
                            </div>
                            <div class="small-12 medium-10 columns site-label-container">
                                <!-- Site Tittle -->
                                <p class="site-label"><span></span><a href="index.html"><?php bloginfo( 'name' ); ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Nav Links -->
                <div class="top-bar-section show-for-large-up row">
                    <ul class="navigation-links">
                        <? 		
                            wp_nav_menu( array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'walker'        => new Custom_Walker_Nav_Menu_Top
                                ) 
                            );
                        ?>
                    </ul>

                </div>
            </nav>

            <!-- Mobile Nav Menu -->
            <aside aria-label="Main Menu for Mobile Devices" class="overlay-container menu">
                <div class="row menu-close">
                    <div class="small-8 large-4 columns logo"></div>
                    <div class="small-2 columns text-right"><a class="fa fa-close" href="#" role="button"><span
                                class="hide">Close</span></a></div>
                </div>
                <div class="row parent-sites"><span></span></div>
                <div class="row small-collapse">
                    <div class="columns">
                        <ul class="main-nav">
                            <li class="child-site-name"><a
                                    href="index.html"><span><?php bloginfo( 'name' ); ?></span></a></li>
                            <? 		
                            wp_nav_menu( array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'walker'        => new Custom_Walker_Nav_Menu_Top
                                ) 
                            );
                        ?>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        <ul class="quicklinks mobile">
                            <li><span>FIU Portals</span></li>
                            <li><a href="https://my.fiu.edu" target="_blank">MyFIU</a></li>
                            <li><a href="https://canvas.fiu.edu" target="_blank">FIU Canvas</a></li>
                            <li><a href="http://panthermail.fiu.edu/" target="_blank">Student Email</a></li>
                            <li><a href="http://mail.fiu.edu/" target="_blank">Faculty/Staff Email</a></li>
                        </ul>
                    </div>
                </div>
            </aside>

            <!-- Search Overlay -->
            <aside aria-label="Site Search" class="overlay-container search">
                <div class="row menu-close">
                    <div class="small-12 columns text-right"><a class="fa fa-close" href="#" role="button"><span
                                class="hide">Close</span></a></div>
                </div>
                <div class="row">
                    <div class="search-wrapper">
                        <div id="cse" style="width: 100%;"></div>
                    </div>
                </div>
        </header>

        <div id="content" class="site-content">