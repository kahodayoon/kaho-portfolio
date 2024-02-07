<?php get_header(); ?> 
    <main>
      <div class="l-mainvisual--single">
        <div class="p-single-title wrapper">
          <h1 class="c-main-title"><a href="<?php echo home_url('/blog'); ?>">Blog</a></h1>
        </div>
      </div>
      <div class="wrap">
      <div class="p-blog-archive wrapper">
      <?php
        if( have_posts() ) :
          while( have_posts() ) :
            the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('p-blog'); ?>>
        <?php if (has_post_thumbnail()) : /* もしアイキャッチが登録されていたら */ ?>
        <a href="<?php echo esc_url(get_permalink()); ?>">
        <?php the_post_thumbnail('full',array( 'class' => 'p-blog__image' )); ?></a>
        <?php else: /* 登録されていなかったら */ ?>
        <a href="<?php echo esc_url(get_permalink()); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/dummy-image.jpg" alt="ダミー画像" class="p-blog__image"></a>
        <?php endif; ?>
        <h2 class="c-sub-title p-blog__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <!-- <ul class="post__meta"> -->
                    <li class="post__meta__item">
                        <date class="post__meta__date"><?php echo get_the_date(); ?></date>
                    </li>
          <?php the_content('',FALSE,''); ?>
          <a href="<?php the_permalink() ?>" class="more-link c-readmore p-blog__readmore u-paper-raise">もっと読む</a>
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
