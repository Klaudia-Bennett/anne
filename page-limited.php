<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <title>
limited edition & animal sweets | anne
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
    <div class="pc pc--menu">
        <div class="pc__content">
            <h1 class="pc__logo">
                <img src=<?php echo get_theme_file_uri("./image/anne_logo.png")?> alt="">
            </h1>
            <img src=<?php echo get_theme_file_uri("./image/guide.png")?> alt="" class="pc__guide">
            <div class="pc__illust-menu-detail">
                <img src=<?php echo get_theme_file_uri("./image/bear_illust.png")?> alt="" class="pc__illust pc__illust--bear">
            </div>
        </div>
    </div>
    <div class="mobile mobile--limited">
        <?php get_header();?>
        <main>
                                            <section class="limited">
                                        <div class="limited__inner">
                                                <h2 class="limited__main-title">
                                                        Limited edition<span class="limited__deco">期間限定</span>
                                                </h2>
                                                <div class="limited__content">
                                                                                                                <?php
                                                                $args = array(
                                                                        'posts_per_page' => -1,
                                                                        'category_name' => 'limited'
                                                                );
                                                                $the_query = new WP_Query( $args );
                                                                if( $the_query->have_posts() ):
                                                                while( $the_query->have_posts() ): $the_query->the_post();
                                                        ?>
                                                        <a href=<?php the_permalink();?> class="limited__image">
                                                        <?php if(has_post_thumbnail()){
                                                                                        the_post_thumbnail('thumbnail');
                                                                                }else{?>
                                                                                <img src=<?php echo get_theme_file_uri("./image/icatch.png")?> alt=""
                                                                                        >
                                                                                        <?php
                                                                        }?>
                                                                        </a>
                                                        <?php
                                                        endwhile;
                                                        endif;
                                                        wp_reset_postdata();
                                                        ?>
                                                </div>
                                                <ul class="limited__btns"></ul>
                                        </div>
                                </section>
            <section class="menu-detail menu-detail--limited">
                <div class="menu-detail__content">
                    <div class="menu-detail__inner">
                        <h2 class="menu-detail__main-title">
                            Animal sweets
                            <span class="menu-detail__animal">アニマルスイーツ</span>
                        </h2>
                        <p class="menu-detail__explain">
                            当店の看板キャラクターである、<br>ハリーくんとルカちゃんをスイーツにしました！<br>
                            期間限定で、他の動物にも出会えるかも！？
                        </p>
                    </div>
                    <div class="menu-detail__cate">
                        <div class="menu-detail__inner">
                        <?php
                        $group = SCF::get('animal');
                        foreach ($group as $fields ) :
                            $image = $fields['animal-photo'];
                        ?>
                        <div class="menu-detail__menu">
                            <img src="<?php echo wp_get_attachment_url($image); ?>" alt="" class="menu-detail__photo">
                            <ul class="menu-detail__list">
                                <li class="menu-detail__price"><?php echo $fields['animal-name']; ?><span><?php echo $fields['animal-price']; ?></span></li>
                            </ul>
                        </div>
                        <?php
                        endforeach;
                        ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php get_footer();?>
    </div>
    <script src=<?php echo get_theme_file_uri("./js/limited.js")?>></script>
        <?php wp_footer();?>
</body>

</html>