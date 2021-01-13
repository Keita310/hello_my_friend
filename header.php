<?php
/**
 * header.php
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php echo get_bloginfo('title'); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">

    <meta name="keywords" content="" />
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>" />

    <!--<link rel="shortcut icon" href="img/material/favicon.ico">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_enqueue_script('bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery')); ?>
    <?php wp_enqueue_script('vue-js','https://cdn.jsdelivr.net/npm/vue@2.6.8/dist/vue.js', array('jquery')); ?>
    <?php wp_enqueue_script('vue-infinite-loading-js','https://unpkg.com/vue-infinite-loading@^2/dist/vue-infinite-loading.js', array('vue-js')); ?>
    <?php wp_enqueue_script('masonry-js','https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', array('jquery')); ?>
    <?php wp_enqueue_script('common-js', get_template_directory_uri() . '/js/common.js', array('jquery', 'bootstrap-js', 'vue-js', 'vue-infinite-loading-js', 'masonry-js')); ?>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="container">
        <div class="d-flex flex-row-reverse">
            <nav class="inline-menu">
                <?php wp_nav_menu(); ?>
            </nav>
            <div class="modal-menu" data-toggle="modal" data-target="#modal_menu">
                <i class="fas fa-bars"></i>
            </div>
        </div>

        <h1>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php echo get_bloginfo('title'); ?>
            </a>
        </h1>
<!--
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo_dark.png" alt="fixedstyleロゴ" title="fixedstyleロゴ" />
-->
    </header>

    <!-- モーダルメニュー -->
    <div class="modal fade" id="modal_menu" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span style="font-size: 50px;text-shadow: none;" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- 通常メニュー -->
                    <nav class="default-menu text-left">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Top</a></li>
                        <?php wp_nav_menu(); ?>
                    </nav>
                    <!-- カントリーメニュー -->
                    <nav class="country-menu text-left" style="display: none;">
                        <?php
                            $categories = get_categories([
                                'hide_empty' => false,
                                'order' => 'ASC',
                                'orderby' => 'term_order',
                                'exclude' => '1'
                            ]);
                            foreach ($categories as $category):
                        ?>
                            <li>
                                <a href="<?php echo get_category_link( $category->term_id ); ?>">
                                    <?php echo $category->name; ?>
                                </a>
                            </li>
                        <?php
                            endforeach;
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- モーダルメニュー -->

    <main>
