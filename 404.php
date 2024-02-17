<?php get_header(); ?> 
<main>
      <div class="l-mainvisual--single">
        <div class="p-single-title wrapper">
          <h1 class="c-main-title">404 Error</h1>
        </div>
      </div>
      <div class="wrap">
        <div class="p-404 wrapper">
          <h2 class="p-404__h2">お探しのページは見つかりませんでした。</h2>
          <p class="p-404__p">あなたがアクセスしようとしたページは削除されたか、URLが変更されているため、見つけることができません。</br>
          トップページに移動するか、上部のメニューエリアから、引き続きサイトをお楽しみください。
          </p>
          <a class="p-404__top" href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページはこちら
          <svg width="300" height="65" viewBox="0 0 300 65" xmlns="http://www.w3.org/2000/svg">
          <rect x='0' y='0' fill='none' width='300' height='65'/>
          </svg></a>
        </div>
    </main>
    <a href="#" id="js-pagetop" class="c-pagetop"><span class="c-pagetop__arrow"></span></a>
    <?php get_footer(); ?>