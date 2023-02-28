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
        <div class="pc pc--toppage">
                <div class="pc__content">
                        <h1 class="pc__logo"><img src=<?php echo get_theme_file_uri("./image/anne_logo.png")?> alt="">
                </h1>
                        <img src=<?php echo get_theme_file_uri("./image/guide.png")?> alt="" class="pc__guide">
                        <div class="pc__logo-line">
                                <div class="pc__logo-line-box">
                                        <img src=<?php echo get_theme_file_uri("./image/logo_line_black.png" ) ?> alt=""
                                                class="pc__illust pc__illust--logo">
                                        <img src=<?php echo get_theme_file_uri("./image/laceWhite.png") ?> alt="" class="pc__lace pc__lace--no-anime">
                                </div>
                        </div>
                        <div class="pc__illust-harry">
                                <img src=<?php echo get_theme_file_uri("./image/harry_illust.png") ?> alt="" class="pc__illust pc__illust--harry">
                        </div>
                        <div class="pc__illust-ruka">
                                <img src=<?php echo get_theme_file_uri("./image/ruka_illust_light.png") ?> alt="" class="pc__illust pc__illust--ruka">
                        </div>
                </div>
        </div>

    <div class="mobile">
<?php get_header();?>
        <main>
            <section class="news-detail">
                <div class="news-detail__inner">
                    <div class="news-detail__title-box">
                        <h2 class="news-detail__title">News</h2>
                    </div>
                    <div class="news-detail__card-box">
                        <?php if(have_posts()):?>
                        <?php while(have_posts()):?>
                        <?php the_post();?>
                        <div class="news-detail__card card">
                            <a href="<?php the_permalink();?>" class="card__detail">
                                <?php if(has_post_thumbnail()){
                                    the_post_thumbnail('thumbnail');}
                                    else{?><img src="<?php echo get_theme_file_uri('./image/icatch.png')?>" alt="" class="card__photo"><?php }?>
                                <div class="card__text-box">
                                    <div class="card__text">
                                        <h3 class="card__title"><?php if(mb_strlen($post->post_title)>20){
                                             $title=mb_substr($post->post_title,0,20);
                                             echo $title.'...';
                                            }else{
                                                    echo $post->post_title;
                                            };?></h3>
                                        <p class="card__date"><?php the_time('Y年n月j日');?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
             <?php endwhile;?>
            <?php else:?>
                <div class="card__text-none">
            <p>記事はありません。</p>
        </div>
            <?php endif;?>
                    </div>
                    <div class="news-detail__pagination">
                    <?php the_posts_pagination(
                        array(
                            'next_text'=>'>',
                            'prev_text'=>'<',
                        )
                    );?>
                    </div>
                </div>
            </section>
            <section class="keyword">
                <div class="keyword__inner">
                    <div class="keyword__content">
                        <img src=<?php echo get_theme_file_uri("./image/harry_illust.png")?> alt="" class="keyword__harry">
                        <div class="keyword__box">
                            <img src=<?php echo get_theme_file_uri("./image/hukidashi.png")?> alt="" class="keyword__comment">
                            <div class="keyword__search">
                                            <?php get_search_form();?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php get_footer();?>
    </div>
        <script src=<?php  echo get_theme_file_uri("./js/index.js")?>></script>
    <?php wp_footer();?>
</body>
</html>