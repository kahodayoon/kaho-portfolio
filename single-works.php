<?php get_header(); ?> 
    <main>
      <div class="l-mainvisual--single">
        <div class="p-single-title wrapper">
          <h1 class="c-main-title"><a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>">Works</a></h1>
        </div>
      </div>
      <div class="p-single wrapper wrap">
      <?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="c-sub-title p-work--title"><?php the_title(); ?></h2>
        <section class="p-work__section">
        <img src="<?php the_field("site_image"); ?>" >
          <h3 class="p-work__h3">使用したスキル</h3>
          <p class="p-work__text">
          <?php echo the_field( "skill" );?>
          </p>
        </section>
        <section class="p-work__section">
          <h3 class="p-work__h3">工夫点</h3>
          <p class="p-work__text">
          <?php echo the_field( "idea" );?>
          </p>
        </section>
        <section class="p-work__section">
          <h3 class="p-work__h3">URL</h3>
          <p><a class="p-work__link"  href="<?php echo the_field( "site_url" );?>"　 target=”_blank”><?php echo the_field( "site_url" );?></a></p>
        </section>
                
                <?php $args = array (
                    'before' => '<div class="page-split">',
                    'after' => '</div>',
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                    );
                    wp_link_pages( $args );
                ?>
            </div>
        <?php endwhile;
    else :
    ?><p>表示する記事がありません</p><?php
    endif; ?>
      <div class="wp-pagenavi-single">
        <div><?php previous_post_link(' %link', '« 前の作品へ'); ?></div>
        <div><?php next_post_link('%link ', '次の作品へ »'); ?></div>
      </div>
      </div>
    </main>
    <?php get_footer(); ?>