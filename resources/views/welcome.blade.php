<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../index.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">                <!-- csrf-tokenはuser情報取られないようにする -->
<title>合同会社　ウィズ訪問看護ステーション　HP</title>
<!-- Scripts -->
<script src="{{ secure_asset('js/app.js') }}" defer></script>    <!-- Laravel標準で用意されているJavascriptを読み込み -->
                                                                     <!-- asset('ファイルパス')はpublicディレクトリのhttpパスを返す関数 -->
                                                                     <!-- secure_assetはpublic下httpsパスを返す関数-->
<!----------------------------------------------------------------------------------------------->
<link rel="stylesheet" href="https://87c1ac065f9145e183015d2ea2786408.vfs.cloud9.us-east-2.amazonaws.com/css/layout.css">
<!----------------------------------------------------------------------------------------------->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<!----------------------------------------------------------------------------------------------->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!----------------------------------------------------------------------------------------------->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
 integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!----------------------------------------------------------------------------------------------->
</head>
<html>
    <!-- トップに戻るボタン -->
<!-- <div id="back-top"><a href="#">トップに戻る ▲</a></div> -->

<!-- header -->
<div class="header">
    <div class="logo">
        <a href="https://with_nurse.com/" target="_blank"><span><img src="https://with-nurse.com/library/images/with-logo2.png" alt="ロゴ写真"></span></a>
    </div>

    <nav class="global-nav">
        <ul class="global-nav_list" style="list-style: none;">
            <li class="global-nav_access"></li><a href="https://with-nurse.com/#access"><span>交通アクセス</span></a></li>
        </ul>
    </nav>
</div>

<div id="content">
    <div class="top-pic"><img src="https://with-nurse.com/library/images/top1.png" alt="top写真"></div>
    <div id="inner-content" class="wrap cf">

    <!-- イベント情報 -->
    <section class="area-box">
        <div class="common-wrap">
            <ul class="anker-link-list clear" style="list-style: none;">
                <li><a href="#greeting"><br class="sp-only">訪問看護について<i>▼</i></a></li>
                <li><a href="#about"><br class="sp-only">ウィズ訪問看護ステーションについて<i>▼</i></a></li>
                <li><a href="#access"><br class="sp-only">アクセス<i>▼</i></a></li>
            </ul>
        </div>
    </section><!-- .area-box -->

    <!-- 訪問看護サービスについて -->
    <div id="greeting" class="anker-link"></div>
    <section class="area-box greeting">
        <div class="common-wrap">
            <h2 class="main-title kc-text01 m80"><span>訪問看護について</span><i>Visiting Nursing</i></h2>
            <hr class="m40">
            <div class="col m80">
                <p>
                    訪問看護は、「住み慣れた我が家・地域で、病気や障がいを持っていても自分らしく暮らしたい」「人生最後を自宅で迎えたい」と望んでいる方を支えるため、看護師などがご自宅に訪問し、ご自宅での生活を安楽に送ることができるように支援を行うサービスです。その中で、ご利用者様が「どう生きたいか」「どう暮らせたら安心か」ということを一緒に考えていきます。
                </p>
            </div>
        </div>
    </section>


    <!-- サービス内容 -->
    
    <section id="service" class="area-box about">
        <div class="common-wrap">
            <h2 class="main-title kc-text01 m80"><span>サービス内容</span></h2>
            <hr class="m40">

            <!-- 業務内容 -->
            <div id="workinfo" class="workinfo">
                <ul class="col workinfo-box" style="list-style: none;">
                    <li class="col2">
                        <h3>健康状態の観察</h3>
                        <figure class="t_center"><img src="" alt=""></figure>
                        <p>
                            体温・脈拍・血圧などのチェック、病気や障がいの状態観察
                        </p>
                    </li>
                    <li class="col2">
                        <h3>治療継続のための看護</h3>
                        <figure class="t_center"><img src="" alt=""></figure>
                        <p>
                            医療機器やカテーテルの管理、床ずれの予防・処置、主治医の指示による処置、お薬の管理・相談
                        </p>
                    </li>
                    <li class="col2">
                        <h3>療養生活上の看護</h3>
                        <figure class="t_center"><img src="" alt=""></figure>
                        <p>
                            食事・水分・栄養摂取の管理とケア、排泄のコントロールなどの排泄ケア、入浴介助などの清潔ケア
                        </p>
                    </li>
                    <li class="col2">
                        <h3>認知症や精神疾患の方への看護</h3>
                        <figure class="t_center"><img src="" alt=""></figure>
                        <p>
                            対応方法・コミュニケーション、生活のリズムの調整
                        </p>
                    </li>

                </ul>
                <ul class="col m80 workinfo-box" style="list-style: none;">
                    <li class="col2">
                        <h3>リハビリテーション</h3>
                        <figure class="t_center"><img src="" alt=""></figure>
                        <p>
                            自立支援のための生活リハビリテーション、生活環境の整備、<br>福祉用具の利用相談
                        </p>
                    </li>
                    <li class="col2">
                        <h3>ターミナルケア</h3>
                        <figure class="t_center"><img src="" alt=""></figure>
                        <p>
                            苦痛の緩和、心理面の支援
                        </p>
                    </li>
                    <li class="col2">
                        <h3>ご家族様への介護支援</h3>
                        <figure class="t_center"><img src="" alt=""></figure>
                        <p>
                            介護方法のアドバイス、介護負担の軽減、不安や心配事についての相談
                        </p>
                    </li>
                    <li class="col2">
                        <h3>多職種連携</h3>
                        <figure class="t_center"><img src="" alt=""></figure>
                        <p>
                            主治医やケアマネジャー、福祉用具事業者その他関係者との連絡調整
                        </p>
                    </li>
                </ul>
            </div>

        </div>
    </section><!-- .area-box -->


    <!-- 訪問看護が始まるまでの流れ -->
    <section id="kaigo" class="area-box caregiving">
        <div class="common-wrap">
            <h2 class="main-title kc-text01 m80"><span>ご利用までの流れ</span></h2>


            <div class="careplan-flow">
                <h2 class="circletitle">ご利用していただける方</h2>
                <p class="m80">乳幼児から高齢者までの日常生活の支援、急変時の対応、在宅での看取りの支援を必要とする方</p>
                
                <h2 class="circletitle">利用までの流れ</h2>
                <div>
                    <ul class="flowlist" style="list-style: none;">
                        <li>①相談</li>
                        <li>②依頼</li>
                        <li>③面談・契約</li>
                        <li>④医師より指示書の交付</li>
                        <li>⑤利用開始</li>
                    </ul>
                    <figure><img src="" alt="利用までの流れ"></figure>
                </div>

            </div>

        </div>
    </section><!-- .area-box -->


    <!-- ウィズ訪問看護ステーションについて -->
    <div id="about" class="anker-link"></div>
    <section class="area-box about">
        <div class="common-wrap">
            <h2 class="main-title kc-text01 m80"><span>ウィズ訪問看護ステーションに<br class="sp-only">ついて</span></h2>
            <hr class="m40">
            <div class="about-box">
                <p class="fontmiddle">
                    ウィズ訪問看護ステーションは、「住み慣れたわが家で自分らしく暮らしたい」という思いを支えるため、看護師等が訪問し、心安らかに過ごしていただけるようケアを行います
                </p>
            </div>
        </div>
    </section>

    <!-- スタッフの紹介 -->
    <section id="greeting" class="area-box greeting">
        <div class="common-wrap">
            <h2 class="main-title kc-text01 m80"><span>ごあいさつ</span><i>Greeting</i></h2>
            <hr class="m40">
            <div class="col">
                <div class="col2">
                    <div class="greeting-ph">
                        <figure><img src="" alt="代表兼管理者"></figure>
                        <ul style="list-style: none;">
                            <li>ウィズ訪問看護ステーション</li>
                            <li class="name">所長　</li>
                        </ul>
                    </div>
                </div>
                <div class="col2">
                    <p>
                        訪問看護ステーションゆめは2021年1月に開設しました。徳島市、小松島市、板野郡を拠点に活動しております。。職員は、病院で働いていた看護師、在宅にて看護をしていた方など、それぞれの経験を生かした看護サービスを提供しています。「住み慣れたわが家で自分らしく暮らしたい」という思いを支えるため、これからも日々励んでまいります。
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- 会社概要 -->
    <section id="companyinfo" class="area-box">
        <div class="common-wrap">
            <table class="table-design01">
                <tbody>
                    <tr>
                        <th>所在地</th>
                        <td>
                            〒770-0000　徳島県徳島市XXXXXXXXXXXXXXXXXXX
                        </td>
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td>090-0000-0000</td>
                    </tr>
                    <tr>
                        <th>訪問地域</th>
                        <td>徳島市、小松島市、阿南市北部、板野郡</td>
                    </tr>
                    <tr>
                        <th>営業日・営業時間</th>
                        <td>
                            月～土（日祝・年末年始を除く）<br>
                            8：30～17：30
                        </td>
                    </tr>
                    <tr>
                        <th>サービス提供時間</th>
                        <td>
                            9：00～16：30<br>
                            ※緊急時には、時間外でも電話による相談や臨時訪問を行う24時間対応の体制をとっています
                        </td>
                    </tr>
                    <tr>
                        <th>体制</th>
                        <td>
                            看護職員：2.5名（常勤2名、非常勤1名）<br>
                            理学療法士：0名<br>
                            作業療法士：0名<br>
                            ケアマネージャー：1名<br>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>


    <!-- 担当地域 -->
    <section id="workarea" class="area-box workarea">
        <div class="common-wrap">
            <h2 class="main-title kc-text01 m80"><span>担当地域</span><i>Area</i></h2>
            <hr class="m40">
            <p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6610.575877943293!2d134.5533710426923!3d34.06213233422197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35536d59ffb0aabb%3A0x788b5c5e5830426f!2z44CSNzcwLTA5Mzkg5b6z5bO255yM5b6z5bO25biC44GL44Gh44Gp44GN5qmL77yT5LiB55uu!5e0!3m2!1sja!2sjp!4v1593086910932!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </p>
        </div>
    </section><!-- .area-box -->


    <!-- アクセスマップ -->
    <div id="access" class="anker-link"></div>
    <section class="area-box accessmap">
        <div class="common-wrap">
            <!-- map、リンクなどの共通情報テンプレ -->
            <!-- アクセス -->
<section class="area-box box-access">
    <div class="col">

        <div class="col2 last-col">
            <h2 class="main-title"><span>アクセス</span><i>Access</i></h2>
            <div class="access-info">
                <p>
                    《ウィズ訪問看護ステーション》<br>
                    〒770-0000<br>
                    徳島県徳島市
                </p>
                <dl>
                    <dt>お車</dt>
                    <dd>JR「徳島駅」より車で10分</dd>
                </dl>
            </p>
        </div>
    </div>
    <div class="col2 googlemap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6610.575877943293!2d134.5533710426923!3d34.06213233422197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35536d59ffb0aabb%3A0x788b5c5e5830426f!2z44CSNzcwLTA5Mzkg5b6z5bO255yM5b6z5bO25biC44GL44Gh44Gp44GN5qmL77yT5LiB55uu!5e0!3m2!1sja!2sjp!4v1593086910932!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
    </section><!-- .area-box -->        </div>
    </section><!-- .area-box -->
</main>

</div><!-- #inner-content -->
</div><!-- #content -->



<!-- フッター -->
<footer>
    <small>(c)2021 合同会社　ウィズ訪問看護ステーション</small>
</footer>



       
</section>
        <!-- 検索窓 -->

</html>
</html>