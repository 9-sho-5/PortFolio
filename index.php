<?php
/*
Template Name: メインページ
*/
?>
<? get_header(); ?>

<main>
    <section id="box1" class="box" data-section-name="Top">
        <div class="img-wrap">
            <img src="<?php echo get_template_directory_uri(); ?>/./assets/images/main_img.jpg" alt="">
        </div>
        <h1>PROTFOLIO</h1>
    </section>

    <section id="box2" class="box" data-section-name="Intro">

    </section>

    <section id="box3" class="box" data-section-name="Works">

    </section>
    <section id="box4" class="box" data-section-name="Links">
        <ul id="sns-wrap">
            <li>
                <a href="https://www.instagram.com/ho_sho_/" class="instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/tr1ruqbc7uy7gq1" class="twitter">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="https://github.com/9-sho-5" class="github">
                    <i class="fa-brands fa-github"></i>
                </a>
            </li>
        </ul>
    </section>
</main>

<?php get_footer();