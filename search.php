<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <title>
                anne | news
</title>
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
            <h1 class="pc__logo"><img src=<?php echo get_theme_file_uri("./image/anne_logo.png");?> alt=""></h1>
        <img src=<?php echo get_theme_file_uri("./image/guide.png")?> alt="" class="pc__guide">
            <div class="pc__illust-menu-detail">
                <img src=<?php echo get_theme_file_uri("./image/harry&ruka.png")?> alt="" class="pc__illust pc__illust--harry-ruka">
            </div>
        </div>
    </div>
    <div class="mobile">
<?php get_header();?>
<main>
    <section class="news">
        <div class="news__inner">
                    <h2 class="news__search-title">「<?php echo get_search_query(); ?>」の検索結果です♪</h2>
                                                                    <ul class="news__list">
            <?php if(have_posts()):?>
            <?php while(have_posts()):?>
            <?php the_post();?>
            <li class="news__item">
                                                                <a href="<?php the_permalink();?>" class="news__link">
                                                                        <img src=<?php echo get_theme_file_uri("./image/frame1.png")?> alt=""
                                                                                class="news__frame">
                                                                        <div class="news__content unit">
                                                                                <div class="unit__icatch">
                                                                                <?php if(has_post_thumbnail()){
                                                                                        the_post_thumbnail('thumbnail');
                                                                                }else{?>
                                                                                <img src=<?php echo get_theme_file_uri("./image/icatch.png")?> alt=""
                                                                                        >
                                                                                        <?php
                                                                                        }?>
                                                                                </div>
                                                                                <dl class="unit__text">
                                                                                        <dt class="unit__title"><?php if(mb_strlen($post->post_title)>20){
                                                                                                $title=mb_substr($post->post_title,0,20);
                                                                                        echo $title.'...';
}else{
        echo $post->post_title;
};?>
                                                                                        </dt>
                                                                                        <dd class="unit__date">
                                                                                                <?php the_time('Y年n月j日');?></dd>
                                                                                </dl>
                                                                        </div>
                                                                </a>
                                                        </li>
                                                        <?php
                                                        endwhile;?>
                                                                    <?php else:?>
                <div class="card__text-none">
            <p>大変申し訳ございません。<br>入力された内容が含まれる記事は存在しておりません。</p>
        </div>
                                                        <?php endif;
                                                        wp_reset_postdata();
                                                        ?>
                                                </ul>
</div>
    </section>
            </main>
                    <?php get_footer();?>
    </div>
        <script src=<?php  echo get_theme_file_uri("./js/index.js")?>></script>
    <?php wp_footer();?>
            </body>
            </html>