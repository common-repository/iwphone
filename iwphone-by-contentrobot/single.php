<?php get_header(); ?>

<div id="mainwrapper" class="clearfix">
    <div id="maincontent">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
                    <div class="postnohit">
                        <div class="clearfix">
                            <?php the_post_thumbnail( 'iwphone-thumb' ); ?><h2 id="post-<?php the_ID(); ?>" class="thetitle"><?php the_title(); ?></h2>
                            <div class="postinfo"><?php the_time('m.j.y') ?> by <?php the_author() ?></div>
                        </div>
                        <div class="entry clearfix <?php if (has_post_thumbnail()) { echo "withthumb";?><?php } ?>">
                            <?php the_content(); ?>
                        </div>
                        <div class="postmetadata alt">
                            <?php if ('open' == $post-> comment_status) : ?>
                                <div><strong>Interact:</strong><br>
                                <a href="<?php the_permalink() ?>#commentsicon" class="addcomment"><i class="icon-comment"></i>&nbsp;&nbsp;<?php comments_number( '<span>0</span>&nbsp;&nbsp;Comments', '<span>1</span>&nbsp;&nbsp;Comment', '<span>%</span>&nbsp;&nbsp;Comments' ); ?></a></div>
                            <?php endif; ?>
                            <div><strong>Share:</strong><br>
                            <a href="https://twitter.com/intent/tweet?url=<?php echo get_permalink() ?>&text=<?php the_title(); ?>" class="twittershare"><i class="icon-twitter"></i>&nbsp;&nbsp;Twitter</a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink() ?>&t=<?php the_title(); ?>" class="facebookshare"><i class="icon-facebook"></i>&nbsp;&nbsp;Facebook</a>
                            <a href="https://plus.google.com/share?url=<?php echo get_permalink() ?>" class="googleshare"><i class="icon-google-plus"></i>&nbsp;&nbsp;Google+</a>
                            <a href="http://www.linkedin.com/shareArticle?mini=true&<?php echo get_permalink() ?>&title=<?php the_title(); ?>&summary=<?php the_excerpt(); ?>" class="linkedinshare"><i class="icon-linkedin"></i>&nbsp;&nbsp;LinkedIn</a></div>
                        </div>
                        <div class="postmetadata">
                            <div><strong>Posted in:</strong><br><?php the_category( ' ' ) ?></div>
                            <?php if (get_the_tags()) : ?>
                                <div><strong>Tagged:</strong><br><?php the_tags( '', ' ', '' ); ?></div>
                            <?php endif; ?>
                        </div>
                        <?php comments_template(); ?>
                        <!--
                        <?php trackback_rdf(); ?>
                        -->
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