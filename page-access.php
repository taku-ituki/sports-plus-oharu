<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/centre.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/centre.jpg" alt="メインビューの画像" />
    </picture>
    <h1 class="sub-fv__title sub-fv__title--access">access<span>アクセス</span></h1>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <span class="breadcrumbs__top"><a href="index.php">TOP</a></span>
        >
        <span class="breadcrumbs__page-title">アクセス</span>
    </div>
</div>
<!-- 施設案内 -->
<section class="access access-layout">
    <div class="access__inner inner">
        <h2 class="access__title section-title">アクセス</h2>
        <!-- 施設情報 -->
        <div class="access__info access__info--page">
            <table class="access__table access-table">
                <tbody class="access-table__body">
                    <tr class="access-table__row">
                        <th class="access-table__label">住所</th>
                        <td class="access-table__data">
                            <div class="access-table__address">
                                <span>愛知県海部郡大治町大字北間島字藤田33-1</span>
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
        <!-- Google Map -->
        <div class="access__google access__google--page">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.1261931675376!2d136.8271740757655!3d35.17840717275375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600375fe844192dd%3A0x338b3aa92864acab!2z5aSn5rK755S657eP5ZCI5Z6L5Zyw5Z-f44K544Od44O844OE44Kv44Op44OWIOOCueODneODvOODhOODl-ODqeOCueOBiuOBiuOBr-OCiw!5e0!3m2!1sja!2sjp!4v1746776642662!5m2!1sja!2sjp"
                width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="access__google-street">
            <iframe
                src="https://www.google.com/maps/embed?pb=!4v1746776853645!6m8!1m7!1s776VaVFFjrnvt9Vu_1kt-w!2m2!1d35.17846326652397!2d136.8290860477036!3f96.9706700892413!4f-0.8768583490659125!5f0.6355906583154354"
                style="border: 0" allow="accelerometer; gyroscope; magnetometer; fullscreen" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- 公共交通機関 -->
        <div class="access__list-wrap">
            <h3 class="access__sub-title">公共交通機関でお越しの方</h3>
            <ul class="access__list">
                <li class="access__item">
                    <div class="access__item-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/bus-stop.jpg"
                            alt="東條バス停" />
                    </div>
                    <div class="access__item-text-block">
                        <h4 class="access__item-title">バス停留所</h4>
                        <div class="access__item-text">
                            <p><a
                                    href="https://kotsu.city.nagoya.jp/jp/pc/BUS/stand_top.html?name=%E6%9D%B1%E6%9D%A1">名古屋市営バス</a>・名鉄バスの東条バス停で下車
                            </p>
                            <p>名古屋市営バスの方は、<a
                                    href="https://www.kotsu.city.nagoya.jp/jp/pc/subway/station_bus.html?name=%E4%B8%AD%E6%9D%91%E5%85%AC%E5%9C%92">中村公園６番のりば</a>から大治西条行きに乗車します。
                            </p>
                            <p>名鉄バスの方は、<a
                                    href="https://www.meitetsu-bus.co.jp/rosen/meibc">名鉄バスセンター３階３番のりば</a>から津島行き（安松経由）か大坪行き（安松経由）に乗車します。
                            </p>
                        </div>
                    </div>
                </li>

                <li class="access__item access__item--arrow">
                    <div class="access__item-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/arrow.jpg" alt="矢印" />
                    </div>
                </li>

                <li class="access__item">
                    <div class="access__item-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/intersection.jpg"
                            alt="南側から見たスポセン" />
                    </div>
                    <div class="access__item-text-block">
                        <h4 class="access__item-title">「東條」交差点</h4>
                        <p class="access__item-text">「東條」の交差点を曲がります。東条信号機から北へ10分ほど向かいます。</p>
                    </div>
                </li>

                <li class="access__item access__item--arrow">
                    <div class="access__item-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/arrow.jpg" alt="矢印" />
                    </div>
                </li>

                <li class="access__item">
                    <div class="access__item-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/load.jpg"
                            alt="南側から見たスポセン" />
                    </div>
                    <div class="access__item-text-block">
                        <h4 class="access__item-title">道なりに進む</h4>
                        <p class="access__item-text">「東條」の交差点を曲がった後は道なりに進みます。（北へ10分ほど）</p>
                    </div>
                </li>

                <li class="access__item access__item--arrow">
                    <div class="access__item-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/arrow.jpg" alt="矢印" />
                    </div>
                </li>

                <li class="access__item">
                    <div class="access__item-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/spocen-west.jpg"
                            alt="南側から見たスポセン" />
                    </div>
                    <div class="access__item-text-block">
                        <h4 class="access__item-title">スポーツセンター南側</h4>
                        <p class="access__item-text">道なりに進んでいくと、大治町スポーツセンターが見えてきます。ドーム型の屋根が目印です。</p>
                    </div>
                </li>

                <li class="access__item access__item--arrow">
                    <div class="access__item-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/arrow.jpg" alt="矢印" />
                    </div>
                </li>

                <li class="access__item">
                    <div class="access__item-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/centre.jpg"
                            alt="スポーツセンター正面" />
                    </div>
                    <div class="access__item-text-block">
                        <h4 class="access__item-title">スポーツセンター西側（正面口）</h4>
                        <p class="access__item-text">スポーツセンターの西側が正面玄関です。入館後すぐに事務局があります。（スポーツセンター１階）</p>
                    </div>
                </li>

                <li class="access__item access__item--arrow">
                    <div class="access__item-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/arrow.jpg" alt="矢印" />
                    </div>
                </li>

                <li class="access__item">
                    <div class="access__item-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/genkan.jpg"
                            alt="スポーツセンター玄関" />
                    </div>
                    <div class="access__item-text-block">
                        <h4 class="access__item-title">下足室</h4>
                        <p class="access__item-text">正面玄関から入館すると下足室がございます。靴を脱いでお入りください。</p>
                    </div>
                </li>

                <li class="access__item access__item--arrow">
                    <div class="access__item-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/arrow.jpg" alt="矢印" />
                    </div>
                </li>

                <li class="access__item">
                    <div class="access__item-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/plus-board.jpg"
                            alt="案内看板" />
                    </div>
                    <div class="access__item-text-block">
                        <h4 class="access__item-title">案内看板</h4>
                        <p class="access__item-text">下足室を出るとすぐに案内看板がございます。</p>
                    </div>
                </li>

                <li class="access__item access__item--arrow">
                    <div class="access__item-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/arrow.jpg" alt="矢印" />
                    </div>
                </li>

                <li class="access__item">
                    <div class="access__item-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/plus.jpg"
                            alt="スポーツプラス事務局" />
                    </div>
                    <div class="access__item-text-block">
                        <h4 class="access__item-title">スポーツプラス事務局</h4>
                        <p class="access__item-text">スポーツプラスおおはるの事務局です。大きな旗が目印です！</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<?php get_footer(); ?>