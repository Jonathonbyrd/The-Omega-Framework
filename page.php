<?php
/**
 * @Author	Jonathon byrd
 * @link http://www.5twentystudios.com
 * @Package Wordpress
 * @SubPackage HTML5_Boilerplate
 * @copyright Proprietary Software, Copyright Byrd Incorporated. All Rights Reserved
 * @Since 1.0.0
 * 
 */

get_header(); ?>

<div class="main eighty left" role="main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="post" id="post-<?php the_ID(); ?>">
    <header>
      <h2><?php the_title(); ?></h2>
    </header>
  
    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
  
  </article>
  <?php endwhile; endif; ?>
  <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

  <?php comments_template(); ?>

</div>

<?php get_footer(); ?>
