<?php get_header(); ?> 
    <main>
      <div class="l-mainvisual--single">
        <div class="p-single-title wrapper">
          <h1 class="c-main-title"><a href="<?php echo home_url('/blog'); ?>">BLOG</a></h1>
        </div>
      </div>
      <div class="p-single wrapper wrap">
      <?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="post__ttl"><?php the_title(); ?></h2>
                <ul class="post__meta">
                    <li class="post__meta__item">
                        <date class="post__meta__date"><?php echo get_the_date(); ?></date>
                    </li>
                    <li class="post__meta__item"><i class="fa fa-folder" aria-hidden="true"><?php the_category( ', ' ); ?></i></li>
                    <li class="post__meta__item"><i class="fa fa-tag" aria-hidden="true"><?php the_tags( '' ); ?></i></li>
                </ul>
                <?php the_post_thumbnail('medium', ['class' => 'p-single__image'] ); ?>
                <?php the_content(); ?>
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
        <div><?php previous_post_link(' %link', '« 前の記事へ'); ?></div>
        <div><?php next_post_link('%link ', '次の記事へ »'); ?></div>
      </div>
      </div>
    </main>
    <?php get_footer(); ?>