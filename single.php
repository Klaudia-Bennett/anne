<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if(is_home()): ?>
        <?php bloginfo('name'); ?>
        <?php elseif(is_category()): ?>
        <?php single_cat_title(''); ?>
        <?php elseif(is_single()): ?>
        <?php the_title(); ?>
        <?php elseif(is_404()): ?>
        404-Error
        <?php endif; ?> | anne</title>

            <?php if( is_singular() ): ?>
<meta name="description" content="<?php echo get_the_excerpt(); ?>">
<?php else: ?>
<meta name="description" content="<?php bloginfo('description'); ?>">
<?php endif; ?>
<meta name="format-detection" content="telephone=no,
address=no,email=no">

    <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
            <script>
                (function (d) {
                        var config = {
                                kitId: 'kds1jsm',
                                scriptTimeout: 3000,
                                async: true
                        },
                                h = d.documentElement, t = setTimeout(function () { h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive"; }, config.scriptTimeout), tk = d.createElement("script"), f = false, s = d.getElementsByTagName("script")[0], a; h.className += " wf-loading"; tk.src = 'https://use.typekit.net/' + config.kitId + '.js'; tk.async = true; tk.onload = tk.onreadystatechange = function () { a = this.readyState; if (f || a && a != "complete" && a != "loaded") return; f = true; clearTimeout(t); try { Typekit.load(config) } catch (e) { } }; s.parentNode.insertBefore(tk, s)
                })(document);
        </script>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
<?php wp_body_open();?>
        <div class="pc pc--harry-ruka">
                <div class="pc__content">
                        <h1 class="pc__logo"><img src=<?php echo get_theme_file_uri("./image/anne_logo.png")?> alt="">
                        </h1>
                        <img src=<?php echo get_theme_file_uri("./image/guide.png")?> alt="" class="pc__guide">
            <div class="pc__illust-menu-detail">
                <img src=<?php echo get_theme_file_uri("./image/harry&ruka.png")?> alt="" class="pc__illust pc__illust--harry-ruka">
            </div>
            </div>
        </div>
            <div class="mobile">
        <?php get_header();?>
        <main>
            <article class="post" id="post-<?php the_ID();?>">
            <div class="post__inner">
                <?php if(has_post_thumbnail()){
                    the_post_thumbnail('thumbnail');}
                    ?>
                    <div class="post__content">
                <h1 class="post__title"><?php the_title();?></h1>
                <?php the_content();?>
                <time class="post__date"><?php the_time('Y年n月j日');?></time>
                </div>
                </div>
            </article>
        </main>
        <?php get_footer();?>
    </div>
    <script src=<?php echo get_theme_file_uri("./js/index.js")?>></script>
    <?php wp_footer();?>
</body>
</html>
