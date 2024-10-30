<?php get_header(); ?>

<div id="mainwrapper" class="clearfix">
    <div id="maincontent">
        <div id="post-error" <?php post_class('post'); ?>>
            <div class="postnohit">
                <div class="clearfix">
                    <h2 id="post-error" class="thetitle">Not Found</h2>
                </div>
                <div class="entry clearfix">
                	<div id="erroricon" >
                		<p class="alert">Sorry, the page you were looking for could not be found.</p>
	                    <span id="erroricon" class="icon-stack icon-3x">
					  		<i class="icon-circle icon-stack-base icon-3x alert"></i>
					  		<i class="icon-exclamation icon-light icon-3x"></i>
						</span>
					</div>
                </div>
    		</div>
        </div>
    </div>
</div>

<?php get_footer(); ?>