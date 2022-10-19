<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header();
?>
    <?php require( get_stylesheet_directory() . '/module/slider.php' ); ?>
    <div class="l-container">
        <?php require( get_stylesheet_directory() . '/module/intro.php' ); ?>
        <?php require( get_stylesheet_directory() . '/module/showroom.php' ); ?>
        <?php require( get_stylesheet_directory() . '/module/rock.php' ); ?>

        <?php require( get_stylesheet_directory() . '/module/rock_intro.php'); ?>
    </div>
<?php
get_footer();

