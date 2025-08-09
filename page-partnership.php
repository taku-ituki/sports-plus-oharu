<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/valley.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/valley.jpg" alt="diving" />
    </picture>
    <div class="sub-fv__overlay"></div>
    <h1 class="sub-fv__title sub-fv__title--challenge">club partnership<span>部活動地域連携</span></h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <span class="breadcrumbs__top"><a href="index.php">TOP</a></span>
        >
        <span class="breadcrumbs__page-title">部活動地域連携</span>
    </div>
</div>
<!-- 部活動地域連携 -->
<section class="partnership partnership-layout">
    <div class="inner partnership__inner">
        <h2 class="partnership__title section-title">部活動地域連携</h2>
        <nav class="partnership__toc toc">
            <div class="partnership__tok-title toc__title">【目次】</div>
            <ul class="partnership__toc-list toc__list">
                <li class="partnership__toc-item toc__item"><a href="#club" class="toc__link">部活動地域連携とは？</a></li>
                <li class="partnership__toc-item toc__item"><a href="#area-club"
                        class="toc__link">「部活動」・「地域クラブ」・「クラブチーム」との違い</a></li>
                <li class="partnership__toc-item toc__item"><a href="#ongoing-activities"
                        class="toc__link">実施中の地域クラブ活動</a></li>
                <li class="partnership__toc-item toc__item"><a href="#support-members" class="toc__link">賛助会員の募集</a>
                </li>
            </ul>
        </nav>
        <div class="partnership__bg-color">
            <h3 class="partnership__sub-title partnership__sub-title--color" id="club">部活動地域連携とは？</h3>
            <div class="partnership__text">
                <p>今まで中学校の部活動は、学校の教育活動の一環として行うことが基本でした。これからは、学習指導要領の改訂等により、休日の部活動を段階的に地域クラブ等へ移行していくことが求められています。そこで、大治町では学校と地域が連携して地域クラブ活動を実施していきます。
                </p>
            </div>
            <div class="partnership__btn common-btn">
                <a class="partnership__btn-link common-btn__link" href="faq.html#partnership">「部活動地域連携」に関するQ&A</a>
            </div>
        </div>
        <h3 class="partnership__sub-title" id="area-club">「部活動」・「地域クラブ」・「クラブチーム」との違い</h3>
        <div class="partnership__img">
            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/bukatudou.jpg" alt="部活動地域連携とは" />
        </div>
        <div class="partnership__difference-cards">
            <div class="partnership__difference-card">
                <h4 class="partnership__difference-card-title">学校部活動</h4>
                <p class="partnership__difference-card-text">学校の教員が指導し、学校の施設内で実施される活動。主に放課後や休日に行われ、教員の負担が大きいのが課題です。</p>
            </div>
            <div class="partnership__difference-card">
                <h4 class="partnership__difference-card-title">地域クラブ活動</h4>
                <p class="partnership__difference-card-text">地域の指導者が主体となり、地域施設を活用して行う活動。多世代が関われる持続可能な新しい部活動の形です。</p>
            </div>
            <div class="partnership__difference-card">
                <h4 class="partnership__difference-card-title">クラブチーム</h4>
                <p class="partnership__difference-card-text">学校外で専門指導者が活動を主導し、競技力向上を目的とした活動。費用や保護者のサポートが求められます。</p>
            </div>
        </div>
        <h3 class="partnership__sub-title" id="ongoing-activities">実施中の地域クラブ活動</h3>
        <ul class="partnership__list intro-cards">
            <li class="partnership__list-card intro-card js-modal-trigger" data-modal-id="modal1">
                <figure class="intro-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/baseball.jpg" alt="野球の様子" />
                </figure>
                <div class="intro-card__content">
                    <div class="intro-card__header">
                        <span class="intro-card__number"></span>
                        <!-- 自動連番 -->
                        <h3 class="intro-card__title">野球</h3>
                    </div>
                    <dl class="intro-card__details">
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">開催日</dt>
                            <dd class="intro-card__text">第1・3金曜日</dd>
                        </div>
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">時間</dt>
                            <dd class="intro-card__text">8:45〜11:45</dd>
                        </div>
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">開催場所</dt>
                            <dd class="intro-card__text">大治町営野球場</dd>
                        </div>
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">講師</dt>
                            <dd class="intro-card__text">好生館病院軟式野球部</dd>
                        </div>
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">紹介文</dt>
                            <dd class="intro-card__text">テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト
                            </dd>
                        </div>
                    </dl>
                </div>
            </li>
            <!-- 2件目以降も同様に繰り返し -->
            <li class="partnership__list-card intro-card js-modal-trigger" data-modal-id="modal2">
                <figure class="intro-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/hand4.jpg" alt="" />
                </figure>
                <div class="intro-card__content">
                    <div class="intro-card__header">
                        <span class="intro-card__number"></span>
                        <!-- 自動連番 -->
                        <h3 class="intro-card__title">男子ハンドボール</h3>
                    </div>
                    <dl class="intro-card__details">
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">開催日</dt>
                            <dd class="intro-card__text">第1・3金曜日</dd>
                        </div>
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">時間</dt>
                            <dd class="intro-card__text">8:45〜11:45</dd>
                        </div>
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">開催場所</dt>
                            <dd class="intro-card__text">大治中学校運動場</dd>
                        </div>
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">講師</dt>
                            <dd class="intro-card__text">山口拓馬　氏</dd>
                        </div>
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">紹介文</dt>
                            <dd class="intro-card__text">テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト
                            </dd>
                        </div>
                    </dl>
                </div>
            </li>
        </ul>
        <div class="partnership__support-wrap">
            <h3 class="partnership__sub-title" id="support-members">賛助会員の募集</h3>
            <div class="partnership__support">
                <div class="partnership__support-lead">
                    <p class="partnership__support-text">
                        スポーツプラスおおはるの賛助会員になって部活動地域連携のサポーターになっていただき、 企業名等を練習用Tシャツに印刷して生徒へ配布します。<br />
                        生徒たちに応援してくださる地元企業を知る機会として紹介していきます。
                    </p>
                </div>
                <div class="partnership__support-shirt">
                    <h4 class="partnership__support-title">サポーターTシャツについて</h4>
                    <p class="partnership__support-text">Tシャツの前後を12分割し、協力いただける企業様の名称を印刷します。</p>
                    <ul class="partnership__support-list">
                        <li class="partnership__support-item">【前後】（ひと枠）：縦10cm×横10cm　10万円</li>
                        <li class="partnership__support-item">上部2列・下部2列：各8万円</li>
                        <li class="partnership__support-item">【袖】（ひと枠）：縦5cm×横8cm　5万円</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>