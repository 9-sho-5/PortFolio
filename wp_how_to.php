<!-- テンプレート呼び出し -->
<?php get_template_part(''); ?>

<!-- imgタグのsrc呼び出し -->
<img src="<?php echo get_template_directory_uri(); ?>/./assets/images/〇〇" alt="">

<!-- aタグのhref設定 -->
<a href="<?php echo esc_url(home_url('/')); ?>"></a>

<!-- SCFの呼び出し -->
<?php $data_ = SCF::get(''); ?>

<?php echo wp_get_attachment_image($fields[''], 'large'); ?>

<!-- レスポンシブ -->
<!-- 
    @media screen and (max-width: px) { // 指定のpx以下のスタイリング
    }
 -->