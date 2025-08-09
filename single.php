<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/challenge-view.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/challenge-view.jpg" alt="メイン画像" />
    </picture>
    <h1 class="sub-fv__title">activities<span>活動報告</span></h1>
    <div class="sub-fv__overlay"></div>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-single-layout">
    <div class="breadcrumbs__inner inner">
        <span class="breadcrumbs__top"><a href="index.php">TOP</a></span>
        >
        <span class="breadcrumbs__page-title">活動報告記事</span>
    </div>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<section class="single-blog single-blog-layout">
    <div class="single-blog__inner inner">

        <?php
      // ------------------------------
      // データ取得ゾーン（ループ先頭でまとめる）
      // ------------------------------
      $date_machine = get_the_time('Y-m-d');   // 機械可読（datetime属性に使う）
      $date_human   = get_the_time('Y.m.d');   // 人間可読（画面表示に使う）
      $cats         = get_the_category();      // カテゴリー配列（空の可能性あり）
      $cat_name     = ! empty($cats) ? $cats[0]->name : ''; // 先頭カテゴリ名（なければ空）
      // アイキャッチ：有り→サムネ、無し→ダミー
      $fallback_src = get_theme_file_uri('/dist/assets/images/common/no-image.jpg');
    ?>
        <!-- 投稿日＋カテゴリー -->
        <div class="single-blog__meta">
            <!-- datetimeは機械可読、表示は人間可読 -->
            <time class="single-blog__date" datetime="<?php echo esc_attr( $date_machine ); ?>">
                <?php echo esc_html( $date_human ); ?>
            </time>

            <?php if ( $cat_name ) : ?>
            <p class="single-blog__category">
                <?php echo esc_html( $cat_name ); ?>
            </p>
            <?php endif; ?>
        </div>
        <!-- タイトル -->
        <h1 class="single-blog__title"><?php the_title(); ?></h1>
        <!-- メインビジュアル（アイキャッチ or 代替画像） -->
        <div class="single-blog__mv">
            <?php if ( has_post_thumbnail() ) : ?>
            <?php
        // 'large' はWordPressの中〜大サイズ。width/height属性は functions.php のフィルターで除去済み
        // classを付与してBEMでスタイルしやすく
        the_post_thumbnail( 'large', array( 'class' => 'single-blog__mv-img' ) );
        ?>
            <?php else : ?>
            <img class="single-blog__mv-img" src="<?php echo esc_url( $fallback_src ); ?>"
                alt="<?php the_title(); ?>のアイキャッチ画像">
            <?php endif; ?>
        </div>
        <!-- 本文（ブロックエディタの出力） -->
        <div class="single-blog__content entry-content">
            <?php
        // 記事本文を出力（エディタのHTMLを含む）
        the_content();
        // ページ分割（<!--nextpage-->）対応
        wp_link_pages( array(
          'before' => '<nav class="single-blog__pages">',
          'after'  => '</nav>',
          'link_before' => '<span class="single-blog__page-link">',
          'link_after'  => '</span>',
        ) );
      ?>
        </div>
        <div class="page-link">
            <div class="page-link__inner inner">
                <div class="page-link__flex">
                    <div class="page-link__prev">
                        <a href="">前の記事</a>
                    </div>
                    <div class="page-link__next">
                        <a href="">次の記事</a>
                    </div>
                </div>
                <div class="page-link__archive">
                    <a href="">活動報告一覧</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>