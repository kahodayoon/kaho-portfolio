<?php get_header(); ?> 
<main>
      <div class="l-mainvisual--single">
        <div class="p-single-title wrapper">
          <h1 class="c-main-title"><a href="<?php echo home_url('/privacy-policy'); ?>">Privacy Policy</a></h1>
        </div>
      </div>
      <div class="wrap">
      <?php
        if( have_posts() ) :
          while( have_posts() ) :
            the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('p-privacy--page wrapper'); ?>>
          <?php the_content('',FALSE,''); ?>
        </article>
        <?php endwhile;
       else :
        ?><p>表示する記事がありません</p><?php
       endif;
        ?>        
    </main>
    <a href="#" id="js-pagetop" class="c-pagetop"><span class="c-pagetop__arrow"></span></a>
    <?php get_footer(); ?>