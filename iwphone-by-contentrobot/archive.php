<?php get_header(); ?>

<div id="mainwrapper" class="clearfix">
    <div id="maincontent">
        <?php if (have_posts()) : ?>
            <?php if (is_category()) { ?>
                <h1 class="sectiontitle">"<?php echo single_cat_title(); ?>" Posts</h1>
                <div class="sectiondesc"><?php echo category_description(); ?></div>
            <?php } elseif( is_tag() ) { ?>
                <h1 class="sectiontitle">"<?php single_tag_title(); ?>" Posts</h1>
                <div class="sectiondesc"><?php echo tag_description(); ?></div>
            <?php } elseif (is_day()) { ?>
                <h1 class="sectiontitle">Archive for <?php the_time('F jS, Y'); ?></h1>
            <?php } elseif (is_month()) { ?>
                <h1 class="sectiontitle">Archive for <?php the_time('F, Y'); ?></h1>
            <?php } elseif (is_year()) { ?>
                <h1 class="sectiontitle">Archive for <?php the_time('Y'); ?></h1>
            <?php /* If this is a search */ } elseif (is_search()) { ?>
                <h1 class="sectiontitle">Search Results</h1>
            <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                <h1 class="sectiontitle">Author Archive</h1>
            <?php } else { ?>
                <h1 class="sectiontitle">Blog Archives</h1>
            <?php } ?>
            <?php while (have_posts()) : the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
                    <div class="posthit" onclick="location.href='<?php the_permalink() ?>'">
                        <?php the_post_thumbnail( 'iwphone-thumb' ); ?><h2 id="post-<?php the_ID(); ?>" class="thetitle"><?php the_title(); ?></h2>
                        <div class="postinfo"><?php the_time('m.j.y') ?> by <?php the_author() ?></div>
                        <div class="entry">
                            <?php /*?><?php the_content(''); ?><?php */?>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" class="readmore">Read More&nbsp;&nbsp;<i class="icon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            
            <?php 
            $max_num_pages = $wp_query->max_num_pages;
            if($max_num_pages > 1) { 
            ?>
            <div class="prevnextnavigation clearfix">
                <div id="prevpage"><?php previous_posts_link('< Newer Posts', 0); ?></div>
                <div id="nextpage"><?php next_posts_link('Older Posts >', 0); ?></div>
            </div>
            <?php }else{ } ?>
        
        <?php else : ?>
            <div class="post">
                <div class="postnohit">
                    <h2 class="pagetitle">Not Found</h2>
                </div>
            </div>
        <?php endif; ?>
    </div><!-- close of maincontent -->
</div><!-- close of mainwrapper -->

<?php get_footer(); ?>