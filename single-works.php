<?php get_header(); ?> 
    <main>
      <div class="l-mainvisual--single">
        <div class="p-single-title wrapper">
          <h1 class="c-main-title"><a href="<?php echo home_url('/works'); ?>">WORKS</a></h1>
        </div>
      </div>
      <!-- <h2 class="c-sub-title p-work--title wrapper">架空サイト（Cafe）</h2>
      <img class="c-image-site wrapper u-mb" src="images/work1.png" alt="PCの作品画像">
      <div class="p-work wrapper">
        <section class="p-work__section">
          <h3 class="p-work__h3">使用したスキル</h3>
          <p class="p-work__text">HTML,CSS,JavaScript</p>
        </section>
        <section class="p-work__section">
          <h3 class="p-work__h3">工夫点</h3>
          <p class="p-work__text">工夫した点を記述します。工夫した点を記述します。工夫した点を記述します。工夫した点を記述します。工夫した点を記述します。</p>
        </section>
        <section class="p-work__section">
          <h3 class="p-work__h3">URL</h3>
          <p><a class="p-work__link">サイトのURL</a></p>
        </section>
      </div> -->
      <div class="p-single wrapper wrap">
      <?php
    if( have_posts() ) :
        while( have_posts() ) :
            the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2 class="c-sub-title p-work--title"><?php the_title(); ?></h2>
                <?php the_post_thumbnail('medium', ['class' => 'p-single__image'] ); ?>
        <section class="p-work__section">
          <h3 class="p-work__h3">使用したスキル</h3>
          <p class="p-work__text">
            <?php
              $terms = get_the_terms($post->ID, 'skill');
              if ($terms) :
                  foreach ($terms as $term) {
                      echo '<span>' . $term->name . '</span>';
                  }
              endif;
            ?>
          </p>
        </section>
        <section class="p-work__section">
          <h3 class="p-work__h3">工夫点</h3>
          <p class="p-work__text"><?php the_content(); ?></p>
        </section>
        <section class="p-work__section">
          <h3 class="p-work__h3">URL</h3>
          <p><a class="p-work__link">サイトのURL</a></p>
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
        <div><?php previous_post_link(' %link', '« 前の記事へ'); ?></div>
        <div><?php next_post_link('%link ', '次の記事へ »'); ?></div>
      </div>
      </div>
    </main>
    <?php get_footer(); ?>