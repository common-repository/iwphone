<?php get_header(); ?>

<div id="mainwrapper" class="clearfix">
    <div id="maincontent">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
                    <div class="postnohit">
                        <div class="clearfix">
                            <?php the_post_thumbnail( 'iwphone-thumb' ); ?><h2 id="post-<?php the_ID(); ?>" class="thetitle"><?php the_title(); ?></h2>
                        </div>
                        <div class="entry clearfix <?php if (has_post_thumbnail()) { echo "withthumb";?><?php } ?>">
                            <?php the_content(); ?>
                        </div>
            		</div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
        	<div class="post">
                <div class="postnohit">
                    <h2 class="pagetitle">Not Found</h2>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>