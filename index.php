<?php get_header(); ?> 
    <main>
      <div class="l-mainvisual">
        <div class="p-top wrapper">
          <h1 class="c-main-title">Kaho<br>Portfolio</h1>
          <p class="c-text">お客様の大切なデザインを丁寧にコーディングします。</p>
        </div>
      </div>
      <section id="works" class="l-section wrapper js-fade">
        <h2 class="c-section-title">WORKS</h2>
        <div class="p-grid-works">
          <a href="single-work.html">
          <div class="p-readmore"> 
            <img class="c-image-work" src="images/work1.png" alt="作品例1">
          </div></a>
          <div class="p-readmore">
            <img class="c-image-work" src="images/350x350.png" alt="作品例2">
          </div>
          <div class="p-readmore">
            <img class="c-image-work" src="images/350x350.png" alt="作品例3">
          </div>
        </div>
      </section>
      <section id="skills" class="l-section wrapper js-fade">
        <h2 class="c-section-title">SKILLS</h2>
        <div class="p-grid-skills">
          <div class="p-skill">
            <img class="c-icon" src="images/icon-html.png" alt="htmlのアイコン">
            <div>
              <p class="c-skill">html</p>
              <p class="c-text">デザインカンプに基づいたコーディングが可能です。</p>
            </div>
          </div>
          <div class="p-skill">
            <img class="c-icon" src="images/icon-css.png" alt="cssのアイコン">
            <div>
              <p class="c-skill">css</p>
              <p class="c-text">cssを用いてデザインを忠実に再現します。</p>
            </div>
          </div>
          <div class="p-skill">
            <img class="c-icon" src="images/icon-js.png" alt="JavaScriptのアイコン">
            <div>
              <p class="c-skill">JavaScript</p>
              <p class="c-text">jQueryを用いてアニメーションを実装できます。</p>
            </div>
          </div>
          <div class="p-skill">
            <img class="c-icon" src="images/icon-sass.png" alt="sassのアイコン">
            <div>
              <p class="c-skill">Sass</p>
              <p class="c-text">状況に応じてFLOCSS等のcss設計を使ってコーディングします。</p>
            </div>
          </div>
          <div class="p-skill">
            <img class="c-icon" src="images/icon-wordpress.png" alt="WordPressのアイコン">
            <div>
              <p class="c-skill">WordPress</p>
              <p class="c-text">お客様がサイトを更新できるよう、WordPress化することができます。</p>
            </div>
          </div>
          <div class="p-skill">
            <img class="c-icon" src="images/icon-github.png" alt="GitHubのアイコン">
            <div>
              <p class="c-skill">Git/GitHub</p>
              <p class="c-text">GitHubにてソースコードを共有できます。</p>
            </div>
          </div>
        </div>
      </section>
      <section id="about" class="l-section wrapper js-fade">
        <h2 class="c-section-title">ABOUT</h2>
        <div class="p-profile">
          <img class="c-image-about" src="images/profile.jpg" alt="顔写真">
          <div class="p-profile__text">
            <p class="c-text">初めまして。Kahoと申します。<br>Web
            サイトをコーディングしています。</p>
            <p class="c-text">普段は製薬関係の会社に勤めています。<br>エンジニアリングスクール「RaiseTech」の<br>WordPress副業コースを修了し、<br>現在もさらにパワーアップできるよう学習中です。</p>
            <p class="c-text">お客様に寄り添い、ご満足いただけるよう丁寧に対応いたします。<br>よろしくお願いいたします。</p>
            <div class="p-sns">
              <a href="https://twitter.com/kahodayoon" target="_blank"><img src="images/Link.png" alt="X(Twitter)" class="c-sns"></a>
              <a href="https://www.instagram.com/k_pic067/" target="_blank"><img src="images/Instagram.png" alt="Instagram" class="c-sns"></a>
            </div>
          </div>
        </div>
      </section>
      <section id="blog" class="l-section wrapper u-mb js-fade">
        <h2 class="c-section-title">BLOG</h2>
        <p>BLOGは<span class="c-span"><a href="home.html" target="_blank">こちら</a></span>からご覧いただけます。日常記録です。</p>
      </section>
      <section id="contact" class="l-section wrapper u-mb js-fade">
        <h2 class="c-section-title">CONTACT</h2>
        <form action="" method="post" class="p-contact">
          <div class="p-form">
            <input id="name" class="c-input-text js-input" type="text" required>
            <label class="c-label js-label" for="name">お名前</label>
          </div>
          <div class="p-form">
            <input id="email" class="c-input-text js-input" type="email" required>
            <label class="c-label js-label" for="email">メールアドレス</label>
          </div>
          <div class="p-form">     
            <textarea id="message" class="c-textarea" name="message" cols="50" rows="10" required></textarea>
            <label class="c-label--message js-label" for="message">お問い合わせ内容</label>
          </div>
          <div class="p-form">
            <button class="c-submit" type="submit" value="Submit">送信</button>
         </div>
        </form>       
      </section>
    </main>
    <button id="js-pagetop" class="c-pagetop"><span class="c-pagetop__arrow"></span></button>
    <?php get_footer(); ?>