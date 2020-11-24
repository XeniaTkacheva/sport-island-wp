<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Orti
 */

get_header();
?>

    <!--	<main id="primary" class="site-main">-->
    <main class="main-content">
        <div class="wrapper">
            <h1 class="main-heading">404</h1>


            <section class="error-404 not-found">
                <header class="page-header">
                    <h2 class="page-title schedule__h"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'orti' ); ?></h2>
                </header><!-- .page-header -->

                <div class="page-content">
                    <p class="schedule-page__h"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'orti' ); ?></p>

					<?php
					get_search_form();
					?>

                </div><!-- .page-content -->
            </section><!-- .error-404 -->
        </div>

    </main><!-- #main -->

<?php
get_footer();
