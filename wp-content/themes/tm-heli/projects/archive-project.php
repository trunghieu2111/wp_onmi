<?php
/**
 * The Template for displaying project archives, including the main showcase page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/projects/archive-project.php
 *
 * @author 		WooThemes
 * @package 	Projects/Templates
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

global $projects_loop;

// Store column count for displaying the grid
if ( empty( $projects_loop['columns'] ) )
	$projects_loop['columns'] = apply_filters( 'projects_loop_columns', 3 );

get_header( 'projects' ); ?>

	<?php
		/**
		 * projects_before_main_content hook
		 *
		 * @hooked projects_output_content_wrapper - 10 (outputs opening divs for the content)
		 */
		do_action( 'projects_before_main_content' );
	?>

		<?php if ( have_posts() ) : ?>

			<?php
				/**
				 * projects_before_loop hook
				 *
				 */
				do_action( 'projects_before_loop' );
			?>

			<div class="projects columns-<?php echo esc_attr($projects_loop['columns']); ?>">

			<?php projects_project_loop_start(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php projects_get_template_part( 'content', 'project' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php projects_project_loop_end(); ?>

			</div><!-- .projects -->

			<?php
				/**
				 * projects_after_loop hook
				 *
				 * @hooked projects_pagination - 10
				 */
				do_action( 'projects_after_loop' );
			?>

		<?php else : ?>

			<?php projects_get_template( 'loop/no-projects-found.php' ); ?>

		<?php endif; ?>

	<?php
		/**
		 * projects_after_main_content hook
		 *
		 * @hooked projects_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'projects_after_main_content' );
	?>

	<?php
		/**
		 * projects_sidebar hook
		 *
		 * @hooked projects_get_sidebar - 10
		 */
		do_action( 'projects_sidebar' );
	?>

    <script>
        (function ($) {
            $(window).on('load', function () {
                $('.projects-masonry.projects')
                    .css('display', 'block')
                    .isotope({
                        itemSelector: '.type-project',
                        masonry: {
                            gutter: 15
                        }
                    });

                // Initialize zoom
                $('.projects-masonry.projects li .project-icon-zoom').on('click', function () {
                    var items = [{
                        src: $(this).parents('.type-project').find('figure img').attr('src')
                    }];

                    $('.projects-masonry.projects li').each(function () {
                        var src = $(this).find('figure img').attr('src');

                        if (items[0].src != src) {
                            items.push({
                                src: src
                            });
                        }
                    });

                    $.magnificPopup.open({
                        items: items,
                        gallery: {
                            enabled: true
                        },
                        type: 'image',
                        removalDelay: 500,
                        callbacks: {
                            beforeOpen: function() {
                                this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                                this.st.mainClass = 'mfp-zoom-in';
                            }
                        },
                    });

                    return false;
                });
            });
        })(jQuery);
    </script>

<?php get_footer( 'projects' ); ?>
