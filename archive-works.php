<?php get_header(); ?> 
    <main>
      <div class="l-mainvisual--single">
        <div class="p-single-title wrapper">
          <h1 class="c-main-title"><a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>">Works</a></h1>
        </div>
      </div>
      <div class="wrap">
      <div class="wrapper">
      <?php
        if( have_posts() ) :
          while( have_posts() ) :
            the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('p-archive-work'); ?>>
        <?php if (has_post_thumbnail()) : ?>
        <a href="<?php echo esc_url(get_permalink()); ?>">
        <div class="p-readmore">
        <?php the_post_thumbnail('full',array( 'class' => 'c-archive-image p-archive-work__image' )); ?>
        </div></a>
        <?php else:  ?>
        <a href="<?php echo esc_url(get_permalink()); ?>">
        <div class="p-readmore">
        <img  src="<?php echo esc_url( get_template_directory_uri() . '/images/dummy-image.jpg' ) ?>" alt="ダミー画像" class="c-archive-image">
        </div></a>
        <?php endif; ?>
        <div class="p-archive-work--summary">
          <h2 class="c-sub-title p-archive-works__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="p-archive-work--skill">
            <h3 class="p-archive-work__h3">スキル</h3>
            <p class="p-archive-work__text">
            <?php echo the_field( "skill" );?>
            </p>
          </div>
        </div>

        </article>
        <?php endwhile;
       else :
        ?><p>表示する記事がありません</p><?php
       endif;
        ?>        
      </div>
      <?php wp_pagenavi(); ?>
      </div>
    </main>
    <?php get_footer(); ?>