<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/support.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/support.jpg" alt="メイン画像" />
    </picture>
    <div class="sub-fv__overlay"></div>
    <h1 class="sub-fv__title">support group<span>賛助団体</span></h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <span class="breadcrumbs__top"><a href="index.php">TOP</a></span>
        >
        <span class="breadcrumbs__page-title">賛助団体</span>
    </div>
</div>
<section class="support support-layout">
    <div class="support_inner inner">
        <h2 class="support__title section-title">リンク</h2>
        <div class="support__oharu">
            <h3 class="support__sub-title"><span>ご助成団体</span></h3>
            <div class="support__oharu-link">
                <a href="https://www.town.oharu.aichi.jp/" target="blank">
                    <h3 class="support__link-title"><span>大治町</span></h3>
                    <div class="support__card">
                        <div class="support__card-img">
                            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/haruchan.png"
                                alt="大治町ホームページリンク" />
                        </div>
                        <p class="support__card-text">
                            大治町スポーツセンター施設内にスポーツプラスおおはるの事務所を置かせていただいており、講座など活動の拠点にさせていただいています。また、PRに大治町公式ホームページを活用させていただいています。
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="support__group">
            <h3 class="support__sub-title"><span>ご協力団体</span></h3>
            <ul>
                <li class="support__group-link">
                    <a href="https://www.aichi-sports.or.jp/wsc/index.html" target="_blank">
                        <h3 class="support__link-title"><span>愛知県スポーツ協会</span></h3>
                        <div class="support__card">
                            <div class="support__card-img">
                                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/sports.jpg"
                                    alt="大治町ホームページリンク" />
                            </div>
                            <p class="support__card-text">
                                運営および活動やスポーツ活動全般について支援を受けています。また、愛知県スポーツ協会の主催する研修会に積極的に参加させていただいています。</p>
                            <p></p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>
<?php get_footer(); ?>