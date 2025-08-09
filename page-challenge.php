<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/challengetop.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/challengetop.jpg" alt="diving" />
    </picture>
    <div class="sub-fv__overlay"></div>
    <h1 class="sub-fv__title">sports challenge<span>スポーツチャレンジ</span></h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <span class="breadcrumbs__top"><a href="index.php">TOP</a></span>
        >
        <span class="breadcrumbs__page-title">スポーツチャレンジ</span>
    </div>
</div>
<!-- 目次 -->
<section class="challenge challenge-layout">
    <div class="challenge__inner inner">
        <nav class="toc">
            <div class="toc__title">【目次】</div>
            <ul class="toc__list">
                <li class="toc__item">
                    <a href="#challenge" class="toc__link">「スポーツチャレンジ」とは</a>
                </li>
                <li class="toc__item">
                    <a href="#oharu" class="toc__link">「大治小学校」募集要項</a>
                </li>
                <li class="toc__item">
                    <a href="#oharu-south" class="toc__link">「大治南小学校」募集要項</a>
                </li>
                <li class="toc__item">
                    <a href="#oharu-west" class="toc__link">「大治西小学校」募集要項</a>
                </li>
                <li class="toc__item">
                    <a href="#spring" class="toc__link">「春休みスポーツチャレンジ」募集要項</a>
                </li>
                <li class="toc__item">
                    <a href="#summer" class="toc__link">「夏休みスポーツチャレンジ」募集要項</a>
                </li>
                <li class="toc__item">
                    <a href="#challenge-date" class="toc__link">「申込状況・日程」</a>
                </li>
            </ul>
        </nav>
        <!-- スポーツチャレンジとは -->
        <div class="challenge__intro-wrapper">
            <div class="challenge__intro inner">
                <h2 class="challenge__title section-title" id="challenge">「スポーツチャレンジ」とは</h2>
                <p class="challenge__intro">
                    スポーツチャレンジは、体力、コミュニケーション力向上を目指して行います。球技を中心に楽しく遊んだりコーディネーショントレーニングで体の動きを高めたりします。原則、毎月２回、１回２時間、自校の体育館で行います。５月〜３月で７月と９月は熱中症の関係で行わず、８月と３月にはスポーツセンターでいろいろなスポーツ体験や３校ドッヂボール大会を行います。
                </p>
                <ul class="challenge__img-list">
                    <li class="challenge__item-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/baseball.jpg"
                            alt="スポーツチャレンジの様子" />
                    </li>
                    <li class="challenge__item-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/baseball.jpg"
                            alt="スポーツチャレンジの様子" />
                    </li>
                    <li class="challenge__item-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/baseball.jpg"
                            alt="スポーツチャレンジの様子" />
                    </li>
                </ul>
                <div class="partnership__btn common-btn">
                    <a class="partnership__btn-link common-btn__link" href="faq.html#spochalle">「スポーツチャレンジ」に関するQ&A</a>
                </div>
            </div>
        </div>
        <!-- 大治小学校 -->
        <div class="challenge__item" id="oharu">
            <h2 class="challenge__title section-title">「大治小学校」<br />募集要項</h2>
            <div class="challenge__pdf pdf">
                <embed-pdf src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/challenge.pdf"
                    class="pdf__url"></embed-pdf>
            </div>
        </div>
        <!-- 大治南小学校 -->
        <div class="challenge__item" id="oharu-south">
            <h2 class="challenge__title section-title">「大治南小学校」<br />募集要項</h2>
            <div class="challenge__pdf pdf">
                <embed-pdf src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/challenge.pdf"
                    class="pdf__url"></embed-pdf>
            </div>
        </div>
        <!-- 大治西小学校 -->
        <div class="challenge__item" id="oharu-west">
            <h2 class="challenge__title section-title">「大治西小学校」<br />募集要項</h2>
            <div class="challenge__pdf pdf">
                <embed-pdf src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/challenge.pdf"
                    class="pdf__url"></embed-pdf>
            </div>
        </div>
        <!-- 春休みスポーツチャレンジ -->
        <div class="challenge__item" id="spring">
            <h2 class="challenge__title section-title">「春休みスポーツチャレンジ」<br />募集要項</h2>
            <div class="challenge__pdf pdf">
                <embed-pdf src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/challenge.pdf"
                    class="pdf__url"></embed-pdf>
            </div>
        </div>
        <!-- 春休みスポーツチャレンジ -->
        <div class="challenge__item" id="summer">
            <h2 class="challenge__title section-title">「夏休みスポーツチャレンジ」<br />募集要項</h2>
            <div class="challenge__pdf pdf">
                <embed-pdf src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/challenge.pdf"
                    class="pdf__url"></embed-pdf>
            </div>
        </div>
        <!-- 申込状況・日程 -->
        <div class="challenge__item" id="challenge-date">
            <h2 class="challenge__title section-title">申込状況・日程</h2>
            <div class="challenge__pdf pdf">
                <embed-pdf src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/challenge.pdf"
                    class="pdf__url"></embed-pdf>
            </div>
        </div>
        <!-- 申し込み・お問い合わせ -->
        <div class="challenge__info">
            <h2 class="challenge__title section-title">申し込み・問い合わせ先</h2>
            <table class="challenge__access-table access__table">
                <tbody class="access-table__body">
                    <tr class="access-table__row">
                        <th class="access-table__label">問い合わせ先</th>
                        <td class="access-table__data">
                            <div class="access-table__address">
                                <span>スポーツプラスおおはる事務所</span>
                                <span>（大治町スポーツセンター内 1階）</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="access-table__row">
                        <th class="access-table__label">TEL</th>
                        <td class="access-table__data">052-217-6211</td>
                    </tr>
                    <tr class="access-table__row">
                        <th class="access-table__label">営業時間</th>
                        <td class="access-table__data">
                            <div class="access-table__time">
                                <span class="access-table__day">月・木</span>
                                <span class="access-table__hour">9:00～17:00</span>
                            </div>
                            <div class="access-table__time">
                                <span class="access-table__day">日・火・金</span>
                                <span class="access-table__hour">9:00～12:00</span>
                            </div>
                        </td>
                    </tr>
                    <tr class="access-table__row">
                        <th class="access-table__label">休日</th>
                        <td class="access-table__data">水 ・ 土 ・ 祝日の翌日 ・ 年末年始（１２/２９～１/３）</td>
                    </tr>
                    <tr class="access-table__row">
                        <th class="access-table__label">メール</th>
                        <td class="access-table__data"><a
                                href="mailto:spplus-oharu@clovernet.ne.jp">spplus-oharu@clovernet.ne.jp</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- //inner -->
</section>
<?php get_footer(); ?>]