<?php
/**
 * Template Name: Homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SCIS
 */

get_header(); ?>

<!-- Banner -->
<?php get_template_part('template-parts/hero/content', 'static'); ?>

<!-- Main Header -->
<?php get_template_part('template-parts/info/content', 'main'); ?>

<!-- Sub Header -->
<?php get_template_part('template-parts/info/content', 'sub'); ?>

<!-- Points of pride / info -->
<?php get_template_part('template-parts/info/content', 'three-column'); ?>

<!-- Spotlight -->
<?php get_template_part('template-parts/info/content', 'spotlight'); ?>

<!-- News -->
<?php get_template_part('template-parts/news/content', 'featured'); ?>

<?php // get_template_part('template-parts/news/content', 'three-column'); ?>

<!-- Events -->
<?php get_template_part('template-parts/events/content', 'three-column'); ?>

<!-- Video -->
<?php get_template_part('template-parts/info/content', 'video'); ?>



<?php
get_footer();