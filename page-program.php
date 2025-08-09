<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/yoga.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/yoga.jpg" alt="diving" />
    </picture>
    <h1 class="sub-fv__title sub-fv__title--program">sports program<span>スポーツ講座</span></h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <span class="breadcrumbs__top"><a href="index.php">TOP</a></span>
        >
        <span class="breadcrumbs__page-title">スポーツ講座</span>
    </div>
</div>
<section class="program program-layout">
    <div class="program__inner inner">
        <h2 class="program__title section-title">スポーツ講座のご案内</h2>
        <!-- カテゴリー -->
        <div class="program__category category">
            <ul class="category__list">
                <li class="category__menu category__menu--current"><a>年間講座</a></li>
                <li class="category__menu"><a>短期講座</a></li>
                <li class="category__menu"><a>イベント</a></li>
            </ul>
        </div>
        <ul class="program__list intro-cards">
            <li class="program__list-card intro-card js-modal-trigger" data-modal-id="modal1">
                <figure class="intro-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/suguru.jpg" alt="卓球教室の様子" />
                </figure>
                <div class="intro-card__content">
                    <div class="intro-card__header">
                        <span class="intro-card__number"></span>
                        <!-- 自動連番 -->
                        <h3 class="intro-card__title">小中学生卓球教室</h3>
                    </div>
                    <dl class="intro-card__details">
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">開催日</dt>
                            <dd class="intro-card__text">月曜日　月３回</dd>
                        </div>
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">時間</dt>
                            <dd class="intro-card__text">18:30〜19:30</dd>
                        </div>
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">対象年齢</dt>
                            <dd class="intro-card__text">小学４〜中学３年性</dd>
                        </div>
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">講師</dt>
                            <dd class="intro-card__text">宅見直己　岡本まゆみ</dd>
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
            <li class="program__list-card intro-card js-modal-trigger" data-modal-id="modal2">
                <figure class="intro-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/works.jpg" alt="体操教室の様子" />
                </figure>
                <div class="intro-card__content">
                    <div class="intro-card__header">
                        <span class="intro-card__number"></span>
                        <!-- 自動連番 -->
                        <h3 class="intro-card__title">のびのびちびっこ体操 コアラ</h3>
                    </div>
                    <dl class="intro-card__details">
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">開催日</dt>
                            <dd class="intro-card__text">第1・3金曜日</dd>
                        </div>
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">時間</dt>
                            <dd class="intro-card__text">10:45〜11:45</dd>
                        </div>
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">対象年齢</dt>
                            <dd class="intro-card__text">親子（原則2・3歳児）1歳児でも歩行できれば参加可</dd>
                        </div>
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">講師</dt>
                            <dd class="intro-card__text">NPO法人ママ・ぷらす 認定講師</dd>
                        </div>
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">紹介文</dt>
                            <dd class="intro-card__text">テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト
                            </dd>
                        </div>
                    </dl>
                </div>
            </li>
            <li class="program__list-card intro-card js-modal-trigger" data-modal-id="modal3">
                <figure class="intro-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/works.jpg" alt="体操教室の様子" />
                </figure>
                <div class="intro-card__content">
                    <div class="intro-card__header">
                        <span class="intro-card__number"></span>
                        <!-- 自動連番 -->
                        <h3 class="intro-card__title">のびのびちびっこ体操 コアラ</h3>
                    </div>
                    <dl class="intro-card__details">
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">開催日</dt>
                            <dd class="intro-card__text">第1・3金曜日</dd>
                        </div>
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">時間</dt>
                            <dd class="intro-card__text">10:45〜11:45</dd>
                        </div>
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">対象年齢</dt>
                            <dd class="intro-card__text">親子（原則2・3歳児）1歳児でも歩行できれば参加可</dd>
                        </div>
                        <div class="intro-card__detail">
                            <dt class="intro-card__label">講師</dt>
                            <dd class="intro-card__text">NPO法人ママ・ぷらす 認定講師</dd>
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
    </div>
</section>
<!-- 申し込み状況 -->
<section class="entry-status entry-status-layout">
    <div class="entry-status__inner inner">
        <h2 class="entry-status__title section-title">講座別入会者数</h2>
        <div class="entry-status__pdf pdf">
            <embed-pdf src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/school.pdf" class="pdf__url">
            </embed-pdf>
        </div>
    </div>
    <div class="entry-status__btn common-btn">
        <a class="entry-status__btn-link common-btn__link" href="entry.html">お申し込みの流れ</a>
    </div>
</section>
<?php get_footer(); ?>