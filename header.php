<!DOCTYPE html>
<html lang="ja">
<?php wp_head(); ?>

<body>
    <!-- ページトップボタン -->
    <button class="top-button js-top-button"><span></span>TOP</button>
    <header class="header layout-header">
        <div class="header__inner">
            <h1 class="header__logo">
                <a href="index.html">
                    <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/logo.svg" alt="ロゴ" />
                </a>
            </h1>
            <nav class="header__nav">
                <ul class="header__nav-list">
                    <li class="header__nav-modal-wrap">
                        <p>実施事業</p>
                        <ul class="header__nav-modal">
                            <li class="header__nav-modal-item">
                                <a href="program.html"><span>スポーツ講座</span></a>
                            </li>
                            <li class="header__nav-modal-item">
                                <a href="partnership.html"><span>部活動地域連携</span></a>
                            </li>
                            <li class="header__nav-modal-item">
                                <a href="challenge.html"><span>スポーツチャレンジ</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__nav-modal-wrap">
                        <p>施設案内</p>
                        <ul class="header__nav-modal">
                            <li class="header__nav-modal-item">
                                <a href="access.html"><span>アクセス</span></a>
                            </li>
                            <li class="header__nav-modal-item">
                                <a href="faq.html"><span>よくあるご質問 </span></a>
                            </li>
                            <li class="header__nav-modal-item">
                                <a href="support.html"><span>賛助団体</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="header__nav-item">
                        <a href="entry.html"><span>入会案内</span></a>
                    </li>
                    <li class="header__nav-item">
                        <a href="archive-blog.html"><span>活動報告</span></a>
                    </li>
                    <li class="header__nav-item">
                        <a href="application.html"><span>各種申請用紙</span></a>
                    </li>
                    <li class="header__nav-item header__nav-item--access">
                        <a href="mailto:spplus-oharu@clovernet.ne.jp">お問い合わせ</a>
                    </li>
                </ul>
            </nav>
            <button class="header__hamburger js-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="header__drawer js-drawer">
                <nav class="header__drawer-nav">
                    <ul class="header__drawer-list">
                        <li class="header__drawer-item">
                            <p class="header__drawer-accordion-title js-drawer-accordion">実施事業</p>
                            <ul class="header__drawer-accordion-list">
                                <li class="header__drawer-accordion-item">
                                    <a href="program.html">スポーツ講座</a>
                                </li>
                                <li class="header__drawer-accordion-item">
                                    <a href="partnership.html">部活動地域連携</a>
                                </li>
                                <li class="header__drawer-accordion-item">
                                    <a href="challenge.html">スポーツチャレンジ</a>
                                </li>
                            </ul>
                        </li>
                        <li class="header__drawer-item">
                            <p class="header__drawer-accordion-title js-drawer-accordion">施設案内</p>
                            <ul class="header__drawer-accordion-list">
                                <li class="header__drawer-accordion-item">
                                    <a href="access.html">アクセス</a>
                                </li>
                                <li class="header__drawer-accordion-item">
                                    <a href="faq.html">よくあるご質問 </a>
                                </li>
                                <li class="header__drawer-accordion-item">
                                    <a href="support.html">賛助団体</a>
                                </li>
                            </ul>
                        </li>
                        <li class="header__drawer-item">
                            <a href="entry.html"><span>入会案内</span></a>
                        </li>
                        <li class="header__drawer-item">
                            <a href="archive-blog.html">活動報告</a>
                        </li>
                        <li class="header__drawer-item">
                            <a href="application.html">各種申請用紙</a>
                        </li>
                        <li class="header__drawer-item header__drawer-item--access">
                            <a href="mailto:spplus-oharu@clovernet.ne.jp">お問い合わせ</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>