<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/spo.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/spo.jpg" alt="メイン画像" />
    </picture>
    <div class="sub-fv__overlay"></div>
    <h1 class="sub-fv__title">application<span>各種申請用紙</span></h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs">
    <div class="breadcrumbs__inner inner">
        <span class="breadcrumbs__top"><a href="index.php">TOP</a></span>
        >
        <span class="breadcrumbs__page-title">各種申請用紙</span>
    </div>
</div>
<!-- 各種申請用紙 -->
<section class="application application-layout">
    <div class="inner application__inner">
        <h2 class="application__title section-title">各種申請用紙</h2>
        <p class="application__description">
            スポーツプラスおおはるの講座に関する各種申請用紙がダウンロードできます。<br />
            プリントアウトしてご記入いただき、スポーツプラスおおはる事務所へ持参されることで、各種お手続きがスムーズに行えます。
        </p>
        <!-- パンフレット -->
        <div class="application__section">
            <h3 class="application__sub-title">パンフレット</h3>
            <ul class="application__list">
                <li class="application__item">
                    <a
                        href="https://inasougo.com/wp-content/uploads/2025/04/404ac5ac067b8856c425c9e7a227c452.pdf">2025年度パンフレット</a>
                </li>
            </ul>
        </div>
        <!-- スポーツ講座 -->
        <div class="application__section">
            <h3 class="application__sub-title">スポーツ講座申込関係</h3>
            <ul class="application__list">
                <li class="application__item">
                    <a
                        href="http://sportsp.wp.xdomain.jp/wp-content/uploads/0c7b8713eeb7fea8eb82c04d381db654.pdf">令和７年度一般会員入会申込書</a>
                </li>
                <li class="application__item">
                    <a
                        href="http://sportsp.wp.xdomain.jp/wp-content/uploads/4d46ea84a4e8f4bf1a9a3907113e832a.pdf">休講届</a>
                </li>
            </ul>
        </div>
        <!-- 部活動地域連携 -->
        <div class="application__section">
            <h3 class="application__sub-title">部活動地域連携</h3>
            <ul class="application__list">
                <li class="application__item">
                    <a
                        href="http://sportsp.wp.xdomain.jp/wp-content/uploads/0c7b8713eeb7fea8eb82c04d381db654.pdf">部活動地域連携（仮）</a>
                </li>
            </ul>
        </div>
        <!-- スポーツチャレンジ -->
        <div class="application__section">
            <h3 class="application__sub-title">スポーツチャレンジ</h3>
            <ul class="application__list">
                <li class="application__item">
                    <a
                        href="http://sportsp.wp.xdomain.jp/wp-content/uploads/0c7b8713eeb7fea8eb82c04d381db654.pdf">スポーツチャレンジ（仮）</a>
                </li>
            </ul>
        </div>
        <!-- 会報 -->
        <div class="application__section">
            <h3 class="application__sub-title">会報</h3>
            <ul class="application__list">
                <li class="application__item">
                    <a
                        href="http://sportsp.wp.xdomain.jp/wp-content/uploads/0c7b8713eeb7fea8eb82c04d381db654.pdf">会報（仮）</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<?php get_footer(); ?>