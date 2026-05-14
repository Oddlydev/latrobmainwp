<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package latrobeweb
 */

get_header();
?>

<header class="entry-header">
    <h1 class="entry-title">Test</h1>

    <h2 class="bg-blue-500 text-white p-4">
        Tailwind test
    </h2>
</header>

<?php
get_footer();
