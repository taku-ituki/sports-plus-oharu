<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/challenge-view.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/challenge-view.jpg" alt="メイン画像" />
    </picture>
    <div class="sub-fv__overlay"></div>
    <h1 class="sub-fv__title">activities<span>活動報告</span></h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <span class="breadcrumbs__top"><a href="index.php">TOP</a></span>
        >
        <span class="breadcrumbs__page-title">活動報告一覧</span>
    </div>
</div>
<div class="news news-layout">
    <div class="news__inner inner">
        <!-- お知らせのカテゴリー切り替え -->
        <div class="news__nav information-category">
            <nav class="news__nav-category information-category__nav">
                <a href="#">最新</a>
                <a href="#">講座</a>
                <a href="#">部活動地域連携</a>
                <a href="#">スポーツチャレンジ</a>
            </nav>
        </div>
        <?php if ( have_posts() ) : ?>
        <ul class="news__list news-list">
            <?php while ( have_posts() ) : the_post(); ?>
            <?php
      // ▼ここでカテゴリー配列を取得（※これを消すと表示できません）
      $cats = get_the_category();
      // 先頭のカテゴリ名を安全に取り出す（ない場合は空文字）
      $cat_name = ! empty( $cats ) ? $cats[0]->name : '';
    ?>
            <li class="news-list__item">
                <a href="<?php the_permalink(); ?>">
                    <div class="news-list__item-img">
                        <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail('full'); ?>
                        <?php else : ?>
                        <img src="<?php echo esc_url( get_theme_file_uri('/dist/assets/images/common/no-image.jpg') ); ?>"
                            alt="アイキャッチ画像未設定">
                        <?php endif; ?>
                    </div>
                    <div class="news-list__item-meta">
                        <time class="news-list__item-date" datetime="<?php echo esc_attr( get_the_time('Y-m-d') ); ?>">
                            <?php echo esc_html( get_the_time('Y.m.d') ); ?>
                        </time>
                        <?php if ( $cat_name ) : ?>
                        <p class="news-list__item-category">
                            <?php echo esc_html( $cat_name ); ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <h3 class="news-list__item-title"><?php the_title(); ?></h3>
                </a>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php else : ?>
        <p>記事が見つかりませんでした。</p>
        <?php endif; ?>
    </div>
    <!-- ページナビ -->
    <nav class="news__pagination">
        <div class="wp-pagenavi news__pagination-nav">
            <a rel="prev" href="#" class="previouspostslink news__pagination-arrow">
                <span>Previous</span>
            </a>
            <a href="#" class="page current"><span>1</span></a>
            <a href="#" class="page smaller">2</a>
            <a href="#" class="page smaller">3</a>
            <a href="#" class="page larger">4</a>
            <a href="#" class="page larger">5</a>
            <a href="#" class="page larger">6</a>
            <a rel="next" href="#" class="nextpostslink news__pagination-arrow">
                <span>Next</span>
            </a>
        </div>
    </nav>
</div>
<?php get_footer(); ?>