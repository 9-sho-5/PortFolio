<?php
/*
Template Name: メインページ
*/
?>
<? get_header(); ?>

<main>
    <section class="box top" data-section-name="Top">
        <div class="img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/./assets/images/main_img.jpg" alt="">
        </div>
        <h1>PROTFOLIO</h1>
    </section>

    <section class="box" data-section-name="Intro">
        <div class="content">
            <div class="name-wrap">
                <!-- <span>楠瀬 法生</span> -->
                <h2 class="kana">HOSHO KUSUNOSE</h2>
            </div>
            <div class="card">
                <div class="card-front"></div>
                <div class="card-back">
                    <p>@Life is Tech!<br>"ほしょ"</p>
                </div>
            </div>
            <p class="introduction">
                2001年、11月生まれのさそり座。
                <br>
                <br>
                高校3年生のある日、instagramでとある投稿を見てプログラミングに興味を持ち、「ものづくり」にどハマりする。
                <br>
                <br>
                大学入学後の2020年4月から2021年3月まで、株式会社divにて、TECH::CAMPの教養コースでWebアプリケーション(Ruby on Rails)のメンターとして従事し、社会人を中心に技術的メンタリングを行う。
                <br>
                そして2020年7月から、Life is Tech!でiPhone・Webサービスコースのメンターとして従事し、新しい技術や知識に触れる。
                <br>
                また、2021年6月から業務委託として株式会社Relie、CountLead合同会社にてWordPressを使用したWeb開発業務に従事する。
                <br>
                <br>
                プログラミング以外にも、、、
                <br>
                billageOSAKAにて、idemo合同会社代表の塩野さんと共に"ノーコードコミュニティ"を2021年12月に結成し、月に1回ノーコードツール(Bubble・STUDIO)を使用してイベントを行う。

            </p>
            <h3>Biography</h3>
            <div class="year_ladder">
                <div class="year_item">
                    <span class="year">2020年</span>
                    <div class="month-wrap">
                        <div class="month"><span>4月-</span><p>株式会社div TECH::CAMP 教養コース プログラミングメンター</p></div>
                        <div class="month"><span></span><p>技術：HTML,CSS,JavaScript,SQL,Ruby(Ruby on Rails)</p></div>
                    </div>
                </div>
                <div class="year_item">
                    <span class="year">2020年</span>
                    <div class="month-wrap">
                        <div class="month"><span>7月-</span><p>ライフイズテック株式会社 Life is Tech! iPhone・Webサービスメンター</p></div>
                        <div class="month"><span></span><p>技術：Swift,HTML,CSS,JavaScript,Ruby(Sinatra)</p></div>
                    </div>
                </div>
                <div class="year_item">
                    <span class="year">2021年</span>
                    <div class="month-wrap">
                        <div class="month"><span>-3月</span><p>株式会社div 退社</p></div>
                    </div>
                </div>
                <div class="year_item">
                    <span class="year">2021年</span>
                    <div class="month-wrap">
                        <div class="month"><span>6月-</span><p>株式会社Relie、CountLead合同会社 にて WordPressを使用したWeb制作業に従事</p></div>
                        <div class="month"><span></span><p>技術：HTML,CSS,JavaScript,PHP,WordPress</p></div>
                    </div>
                </div>
                <div class="year_item">
                    <span class="year">2021年</span>
                    <div class="month-wrap">
                        <div class="month"><span>12月-</span><p>billageOSAKAにてidemo合同会社代表 塩野さんと共にノーコードコミュニティ結成</p></div>
                        <div class="month"><span></span><p>毎月ノーコードツール(Bubble,STUDIO)を使用したイベントを行う</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="box" data-section-name="Works">
        <div class="content">
            <h4>Works</h4>
            <div class="item-wrap">
                <div class="item">
                    <a href="">
                        <img src="https://images.unsplash.com/photo-1508515053963-70c7cc39dfb5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80" alt="">
                        <span>公開可能</span>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="https://images.unsplash.com/photo-1602514528996-27155b6b7bb7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80" alt="">
                        <span>公開可能</span>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="https://images.unsplash.com/photo-1589251204996-3367cc27f084?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1110&q=80" alt="">
                        <span>非公開</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="box" data-section-name="Blogs">
        <div class="content">
            <h4>Blogs</h4>
            <div class="item-wrap">
            <?php
                $post_args = array(
                    'post_type' => 'blogs', // タクソノミー名の指定
                    'posts_per_page' => 6, // ←出力したい投稿の数。-1と書くと「ぜんぶ」という指定になる
                    'orderby' => 'date', // ←何を基準に並びかえるか。ここでは投稿順
                    'order' =>'DECS', // ←並びかえかた。ここでは「降順」と指定
                );

                $wp_query = new WP_Query( $post_args );
                if( $wp_query->have_posts() ):
                    // 投稿（1個あたり）の内容ここから
                    while( $wp_query->have_posts() ) : $wp_query->the_post(); 
            ?>
                <div class="item">
                    <a href="<?php the_permalink() ?>">
                        <img src="" alt="">
                    </a>
                </div>
            <?php
                        // 投稿（1個あたり）の内容ここまで
                    endwhile; 
                endif;
            ?>
            </div>
        </div>
    </section>

    <section class="box" data-section-name="Links">
        <ul id="sns-wrap">
            <li>
                <a href="https://www.instagram.com/ho_sho_/" class="instagram" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/tr1ruqbc7uy7gq1" class="twitter" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="https://github.com/9-sho-5" class="github" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-github"></i>
                </a>
            </li>
            <li>
                <a href="https://qiita.com/sho_Mc" class="qiita" target="_blank" rel="noopener noreferrer">
                    <i class="fa-solid fa-pen"></i>
                </a>
            </li>
        </ul>
    </section>
</main>

<?php get_footer();