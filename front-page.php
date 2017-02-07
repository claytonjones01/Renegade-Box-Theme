<?php acf_form_head(); ?>
<?php acf_form_head(); ?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    
    <!-- Adds home page's content -->
	<?php the_content(); ?>
    
    
    <!-- Item Categories - Post Content -->
    <?php $my_post = get_post(36);
    echo $my_post->post_content; ?>


    <!-- Contact Form - temp -->
    <h2>Contact Us</h2>
    <?php acf_form( array(
        'post_id' => $id,
		'post_title'	=> false,
		'post_label'	=> false,
        
		'submit_value'	=> 'Submit',
        'updated_message' => 'Message Sent.',
    )
    ); ?>

    <!-- Social Thumnail Row - Post Content -->
    <?php $my_post = get_post(57);
    echo $my_post->post_content; ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>