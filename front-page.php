<?php get_header(); ?> 
    <main>
      <div class="l-mainvisual">
        <div class="p-top wrapper">
          <h1 class="c-main-title">Kaho<br>Portfolio</h1>
          <p class="c-text">お客様の大切なデザインを丁寧にコーディングします。</p>
        </div>
      </div>
      <section id="works" class="l-section wrapper js-fade">
        <h2 class="c-section-title">Works</h2>
        <?php
        $args = array(
          'post_type' => 'works', /* 取得したい投稿タイプ */
          'posts_per_page' => -1, /* 表示したい投稿の数 (すべての取得したい場合は「-1」) */
        );
        $the_query = new WP_Query($args); /* クエリの作成と発行をし、取得したデータを「$the_query」に格納 */
        ?>
       <div class="p-grid-works">
        <?php if ($the_query->have_posts()): /* もし、投稿がある場合 */ ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); /* 投稿のループ開始 */ ?>
          <li>
          <article id="post-<?php the_ID(); ?>" <?php post_class('p-blog'); ?>>
              <?php if (has_post_thumbnail()) : /* もしアイキャッチが登録されていたら */ ?>
              <a href="<?php echo esc_url(get_permalink()); ?>">
              <div class="p-readmore">
              <?php the_post_thumbnail('medium',array( 'class' => 'c-image-work' )); ?>
              </div>
              </a>
              <?php else: /* 登録されていなかったら */ ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/dummy-image.jpg" alt="ダミー画像" class="p-blog__image">
              <?php endif; ?>      
              </article>
          </li>
          <?php endwhile; /* 投稿のループ終了 */ ?>
          <?php else: /* もし、投稿がない場合 */ ?>
        </div>
        <p>まだ投稿がありません。</p>
      <?php endif; /* 投稿の条件分岐を終了 */ ?>
      <?php wp_reset_postdata(); /* クエリ(サブループ)のリセット */ ?>
      </section>

      <section id="skill" class="l-section wrapper js-fade">
        <h2 class="c-section-title">Skill</h2>
        <div class="p-grid-skill">
          <div class="p-skill">
            <img class="c-icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-html.png" alt="htmlのアイコン">
            <div>
              <p class="c-skill">html</p>
              <p class="c-text">デザインカンプに基づいたコーディングが可能です。</p>
            </div>
          </div>
          <div class="p-skill">
            <img class="c-icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-css.png" alt="cssのアイコン">
            <div>
              <p class="c-skill">css</p>
              <p class="c-text">cssを用いてデザインを忠実に再現します。</p>
            </div>
          </div>
          <div class="p-skill">
            <img class="c-icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-js.png" alt="JavaScriptのアイコン">
            <div>
              <p class="c-skill">JavaScript</p>
              <p class="c-text">jQueryを用いてアニメーションを実装できます。</p>
            </div>
          </div>
          <div class="p-skill">
            <img class="c-icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-sass.png" alt="sassのアイコン">
            <div>
              <p class="c-skill">Sass</p>
              <p class="c-text">状況に応じてFLOCSS等のcss設計を使ってコーディングします。</p>
            </div>
          </div>
          <div class="p-skill">
            <img class="c-icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-wordpress.png" alt="WordPressのアイコン">
            <div>
              <p class="c-skill">WordPress</p>
              <p class="c-text">お客様がサイトを更新できるよう、WordPress化することができます。</p>
            </div>
          </div>
          <div class="p-skill">
            <img class="c-icon" src="<?php echo get_template_directory_uri(); ?>/images/icon-github.png" alt="GitHubのアイコン">
            <div>
              <p class="c-skill">Git/GitHub</p>
              <p class="c-text">GitHubにてソースコードを共有できます。</p>
            </div>
          </div>
        </div>
      </section>
      <section id="about" class="l-section wrapper js-fade">
        <h2 class="c-section-title">About</h2>
        <div class="p-profile">
          <img class="c-image-about" src="<?php echo get_template_directory_uri(); ?>/images/profile.jpg" alt="顔写真">
          <div class="p-profile__text">
            <p class="c-text">初めまして。Kahoと申します。<br>Web
            サイトをコーディングしています。</p>
            <p class="c-text">普段は製薬関係の会社に勤めています。<br>エンジニアリングスクール「RaiseTech」の<br>WordPress副業コースを修了し、<br>現在もさらにパワーアップできるよう学習中です。</p>
            <p class="c-text">お客様に寄り添い、ご満足いただけるよう丁寧に対応いたします。<br>よろしくお願いいたします。</p>
            <div class="p-sns">
              <a href="https://twitter.com/kahodayoon" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/Link.png" alt="X(Twitter)" class="c-sns"></a>
              <a href="https://www.instagram.com/k_pic067/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/Instagram.png" alt="Instagram" class="c-sns"></a>
            </div>
          </div>
        </div>
      </section>
      <section id="blog" class="l-section wrapper u-mb js-fade">
        <h2 class="c-section-title"><a href="<?php echo home_url('/blog'); ?>">Blog</a></h2>
        <p>Kahoの日常記録です。</p>
        <p class="p-blog-link">もっと見たい方は<span class="c-span"><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" >Blog一覧</a></span>からご覧ください。</p>
            
      <?php
        $args = array(
          'post_type' => 'post', /* 取得したい投稿タイプ */
          'posts_per_page' => 3, /* 表示したい投稿の数 (すべての取得したい場合は「-1」) */
        );
        $the_query = new WP_Query($args); /* クエリの作成と発行をし、取得したデータを「$the_query」に格納 */
      ?>
      <?php if ($the_query->have_posts()): /* もし、投稿がある場合 */ ?>
        <div class="p-blog-archive">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); /* 投稿のループ開始 */ ?>
          <li>
          <article id="post-<?php the_ID(); ?>" <?php post_class('p-blog'); ?>>
              <?php if (has_post_thumbnail()) : /* もしアイキャッチが登録されていたら */ ?>
              <?php the_post_thumbnail('full',array( 'class' => 'p-blog__image' )); ?>
              <?php else: /* 登録されていなかったら */ ?>
              <a href="<?php echo esc_url(get_permalink()); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/dummy-image.jpg" alt="ダミー画像" class="p-blog__image"></a>
              <?php endif; ?>
              <!-- <?php //the_post_thumbnail('thumbnail', ['class' => 'p-blog__image'] ); ?> -->
              <h2 class="c-sub-title p-blog__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      <!-- <ul class="post__meta"> -->
                          <li class="post__meta__item">
                              <date class="post__meta__date"><?php echo get_the_date(); ?></date>
                          </li>
                <?php the_content('',FALSE,''); ?>
                <a href="<?php the_permalink() ?>" class="more-link c-readmore p-blog__readmore u-paper-raise">もっと読む</a>
              </article>
          </li>
          <?php endwhile; /* 投稿のループ終了 */ ?>
          </div>
      <?php else: /* もし、投稿がない場合 */ ?>
        <p>まだ投稿がありません。</p>
      <?php endif; /* 投稿の条件分岐を終了 */ ?>
      <?php wp_reset_postdata(); /* クエリ(サブループ)のリセット */ ?>

      </section>
      <section id="contact" class="l-section wrapper u-mb js-fade">
        <h2 class="c-section-title">Contact</h2>
        <!-- Contact Form 7による問い合わせフォーム -->
        <?php echo do_shortcode('[contact-form-7 id="604046c" title="Contact"]'); ?> 

      </section>
    </main>
    <a href="#" id="js-pagetop" class="c-pagetop"><span class="c-pagetop__arrow"></span></a>
    <?php get_footer(); ?>