<?php get_header(); ?>
<!-- メインビュー -->
<section class="sub-fv sub-fv-layout">
    <picture class="sub-fv__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/spo.jpg"
            media="(max-width: 767px)" />
        <img src="<?php echo get_theme_file_uri(); ?>/dist/assets/images/common/spo.jpg" alt="diving" />
    </picture>
    <div class="sub-fv__overlay"></div>
    <h2 class="sub-fv__title sub-fv__title--entry">program entry<span>講座お申込の流れ</span></h2>
</section>
<!-- パンくずリスト -->
<div class="breadcrumbs breadcrumbs-blog-layout">
    <div class="breadcrumbs__inner inner">
        <span class="breadcrumbs__top"><a href="index.php">TOP</a></span>
        >
        <span class="breadcrumbs__page-title">入会案内（講座）</span>
    </div>
</div>
<section class="entry entry-layout">
    <div class="entry__inner inner">
        <h2 class="entry__title section-title">講座ご参加までの流れ</h2>
        <p class="entry__lead">ご参加までの流れを4つのステップに分けてご案内します。</p>
        <ul class="entry__steps">
            <li class="entry__step">
                <div class="entry__step-label">step 1</div>
                <div class="entry__step-content">
                    <h3 class="entry__step-heading">講座を選ぶ・内容を確認する</h3>
                    <p class="entry__step-text">
                        パンフレットやホームページで講座をチェックし、受講したい講座を決めます。<br />
                        開講日・対象者・時間なども事前に確認しましょう。
                    </p>
                    <a class="entry__link" href="program.html">講座を見る</a>
                </div>
            </li>
            <li class="entry__step">
                <div class="entry__step-label">step 2</div>
                <div class="entry__step-content">
                    <h3 class="entry__step-heading">申込み手続きをする</h3>
                    <p class="entry__step-text">
                        継続会員・新規会員で申込み開始時期が異なります。<br />
                        申込みは、窓口での提出が必要です。申込書は窓口で受け取るか、
                        <a class="entry__link" href="application.html" target="_blank" rel="noopener noreferrer">こちら</a>
                        から入会申込書ダウンロードしてご持参ください。<br />抽選対象の講座もございますので、ご注意ください。
                    </p>
                </div>
            </li>
            <li class="entry__step">
                <div class="entry__step-label">step 3</div>
                <div class="entry__step-content">
                    <h3 class="entry__step-heading">年会費・参加費を支払う</h3>
                    <p class="entry__step-text">
                        年会費（一般3,000円／65歳以上2,200円）と、講座の参加費（月・3ヶ月単位）を支払います。<br />
                        ※納入後の返金はできません。
                    </p>
                </div>
            </li>
            <li class="entry__step">
                <div class="entry__step-label">STEP 4</div>
                <div class="entry__step-content">
                    <h3 class="entry__step-heading">講座に参加する</h3>
                    <p class="entry__step-text">
                        決められた日時・場所に参加し、動きやすい服装で準備を整えましょう。<br />
                        楽しく健康づくりと地域交流を始めましょう！
                    </p>
                </div>
            </li>
        </ul>
    </div>
</section>
<!-- 入会手続きの詳細 -->
<section class="membership-info membership-info-layout">
    <div class="membership-info__inner inner">
        <h2 class="entry__title section-title">入会手続・費用</h2>
        <div class="membership-info__section membership-info__section--blue">
            <h2 class="membership-info__title">入会手続きの方法</h2>
            <dl class="membership-info__definition-list">
                <div class="membership-info__definition">
                    <dt class="membership-info__term">継続会員受付</dt>
                    <dd class="membership-info__desc">令和6年度と同一講座に限り、令和7年2月6日（木）以降の各講座開催日時から受付します。</dd>
                </div>
                <div class="membership-info__definition">
                    <dt class="membership-info__term">新規会員受付</dt>
                    <dd class="membership-info__desc">
                        令和7年2月20日（火）13:30〜15:00に受付します。<br />※定員を超えた場合は抽選となり、整理券を13:00より配布します。</dd>
                </div>
                <div class="membership-info__definition">
                    <dt class="membership-info__term">随 時 受 付</dt>
                    <dd class="membership-info__desc">令和7年3月以降、定員に空きがある場合に随時受付します。</dd>
                </div>
            </dl>
            <dl class="membership-info__definition-list">
                <div class="membership-info__definition">
                    <dt class="membership-info__term">場所</dt>
                    <dd class="membership-info__desc">大治町スポーツセンター内　スポーツプラスおおはる窓口</dd>
                </div>
                <div class="membership-info__definition">
                    <dt class="membership-info__term">方法</dt>
                    <dd class="membership-info__desc"><a href="application.html">申込書は窓口にて配布またはホームページからダウンロード可能です。</a>
                    </dd>
                </div>
                <div class="membership-info__definition">
                    <dt class="membership-info__term">注意</dt>
                    <dd class="membership-info__desc">原則として本人・保護者のみ受付。電話・FAX・メールでは受付できません。</dd>
                </div>
            </dl>
        </div>
        <!-- 年会費・参加費 -->
        <div class="membership-info__section membership-info__section--orange">
            <h2 class="membership-info__title">年会費・参加費</h2>
            <p class="membership-info__text">入会には、年会費（保険料を含む）＋参加費が必要です。</p>
            <table class="membership-info__table">
                <thead>
                    <tr>
                        <th>区分</th>
                        <th>年会費（10月以降）</th>
                        <th>参加費</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>中学生以下</td>
                        <td>1,500円（1,000円）</td>
                        <td rowspan="3">
                            月単位 1回500円（コアラクラスのみ800円）<br />
                            ※講座単位であり月単位<br />
                            ※昼講座は2か月単位、夜講座は3か月単位
                        </td>
                    </tr>
                    <tr>
                        <td>一般（高校生以上）</td>
                        <td>3,000円（2,000円）</td>
                    </tr>
                    <tr>
                        <td>65歳以上（2025年4月1日現在）</td>
                        <td>2,200円（1,500円）</td>
                    </tr>
                </tbody>
            </table>
            <div class="membership-info__notes">
                <ol class="membership-info__note-list">
                    <li class="membership-info__note">申し込み時、年会費と参加費2か月分（夜講座は3か月分）を納入してください。</li>
                    <li class="membership-info__note">一度納入された費用は、理由のいかんを問わず返金できません。</li>
                    <li class="membership-info__note">年会費の有効期間は、令和7年4月末までです。</li>
                    <li class="membership-info__note">各講座の申込は、継続会員が優先です。定員になり次第締め切ります。</li>
                    <li class="membership-info__note">暴風警報等発令時には中止となる場合があります。</li>
                </ol>
            </div>
        </div>
        <!-- 賛助会員 -->
        <div class="membership-info__section membership-info__section--pink">
            <h2 class="membership-info__title">賛助会員の募集</h2>
            <table class="membership-info__table">
                <thead>
                    <tr>
                        <th>区分</th>
                        <th>年会費</th>
                        <th>備考</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>個人</td>
                        <td>1口 3,000円</td>
                        <td rowspan="2">当クラブの趣旨に賛同し、活動を支援していただける方</td>
                    </tr>
                    <tr>
                        <td>法人および団体</td>
                        <td>1口 10,000円</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="membership-info__btn common-btn">
            <a class="membership-info__btn-link common-btn__link" href="application.html">各種申込書はこちら</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>