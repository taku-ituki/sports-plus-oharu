<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/faq-sp.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/faq-pc.jpg" alt="メイン画像" />
    </picture>
    <h1 class="sub-fv__title">sports program<span>スポーツ講座</span></h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <span class="breadcrumbs__top"><a href="index.php">TOP</a></span>
        >
        <span class="breadcrumbs__page-title">スポーツ講座記事</span>
    </div>
</div>
<section class="single-blog single-blog-layout">
    <div class="single-blog__inner inner">
        <div class="single-blog__meta">
            <time class="single-blog__date" datetime="2023-08-14">2023.08.14</time>
            <p class="single-blog__category">カテゴリ</p>
        </div>
        <h1 class="single-blog__title">タイトルタイトルタイトルタイトルタイトルタイトルタイトル</h1>
        <div class="single-blog__mv">
            <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-dumy-mv.jpg" alt="省略" />
        </div>
        <div class="single-blog__content">
            <h2>h2タグですh2タグですh2タグですh2タグですh2タグです</h2>
            <h3>h3タグですh3タグですh3タグですh3タグですh3タグです</h3>
            <h4>h4タグですh4タグですh4タグですh4タグですh4タグです</h4>
            <h5>h5タグですh5タグですh5タグですh5タグですh5タグです</h5>
            <h6>h6タグですh6タグですh6タグですh6タグですh6タグです</h6>
            <p>
                テキストテキストテキストテキストテキスト<strong>強調テキスト強調テキスト</strong>テキストテキストテキスト<a href="#">リンクリンクリンクリンクリンク</a>テキストテキストテキスト
                <a href="#" target="_blank" rel="noopener">外部リンク外部リンク外部リンク外部リンク</a>テキストテキストテキストテキストテキスト
            </p>
            <ul>
                <li>リストリストリストリスト</li>
                <li>リストリストリストリストリストリストリストリストリストリストリストリストリストリスト</li>
                <li>リストリストリスト</li>
                <li>リストリストリストリスト</li>
                <li>リストリストリストリストリスト</li>
            </ul>
            <ol>
                <li>リストリストリストリスト</li>
                <li>リストリスト</li>
                <li>リストリストリスト</li>
                <li>リストリストリストリスト</li>
                <li>リストリストリストリストリストリストリストリストリストリスト</li>
            </ol>
            <figure>
                <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/blog-dumy.jpg" alt="省略" />
            </figure>
        </div>
    </div>
</section>
<?php get_footer(); ?>