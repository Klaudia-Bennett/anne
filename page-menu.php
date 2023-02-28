<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <title>
                menu | anne
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
        <div class="pc">
                <div class="pc__content">
                        <h1 class="pc__logo"><img src=<?php echo get_theme_file_uri("./image/anne_logo.png")?> alt=""></h1>
                        <img src=<?php echo get_theme_file_uri("./image/guide.png")?> alt="" class="pc__guide">
                        <div class="pc__menu-slide">
                                <div class="pc__slide pc__slide--first">
                                        <img src="<?php echo get_theme_file_uri("./image/crepe_illust1.png") ?>" alt="">
                                        <img src="<?php echo get_theme_file_uri("./image/illust1.png") ?>" alt="">
                                        <img src="<?php echo get_theme_file_uri("./image/illust2.png") ?>" alt="">
                                        <img src="<?php echo get_theme_file_uri("./image/crepe_illust4.png") ?>" alt="">
                                        <img src="<?php echo get_theme_file_uri("./image/illust3.png") ?>" alt="">
                                </div>
                                <div class="pc__slide pc__slide--second">
                                        <img src="<?php echo get_theme_file_uri("./image/soft_illust.png") ?>" alt="">
                                        <img src="<?php echo get_theme_file_uri("./image/crepe_illust2.png") ?>" alt="">
                                        <img src="<?php echo get_theme_file_uri("./image/illust1.png") ?>" alt="">
                                        <img src="<?php echo get_theme_file_uri("./image/crepe_illust1.png") ?>" alt="">
                                        <img src="<?php echo get_theme_file_uri("./image/crepe_illust5.png") ?>" alt="">
                                </div>
                                <div class="pc__slide pc__slide--third">
                                        <img src="<?php echo get_theme_file_uri("./image/illust4.png") ?>" alt="">
                                        <img src="<?php echo get_theme_file_uri("./image/crepe_illust4.png") ?>" alt="">
                                        <img src="<?php echo get_theme_file_uri("./image/illust3.png") ?>" alt="">
                                        <img src="<?php echo get_theme_file_uri("./image/crepe_illust3.png") ?>" alt="">
                                        <img src="<?php echo get_theme_file_uri("./image/crepe_illust2.png") ?>" alt="">
                                </div>
                        </div>
                </div>
        </div>
        <div class="mobile">
                <?php get_header();?>
                <main class="main">
                        <section class="menu menu--cate">
                                <div class="menu__inner">
                                        <div class="menu__title-box">
                                                <h2 class="menu__title-deep">Menu</h2>
                                        </div>
                                        <ul class="menu__list">
                                                <li class="menu__item menu__item--animal"><a href=<?php echo home_url('/limited/')?>><img
                                                src=<?php echo get_theme_file_uri("./image/limited.png")?> alt=""></a>
                                                </li>
                                                <li class="menu__item menu__item--caketin"><a href=<?php echo home_url('/cake/')?>><img
                                                src=<?php echo get_theme_file_uri("./image/caketin.png")?> alt=""></a>
                                                </li>
                                                <li class="menu__item menu__item--crepe"><a href=<?php echo home_url('/crepe/')?>><img
                                                src=<?php echo get_theme_file_uri("./image/allcrepe.png")?> alt=""></a>
                                                </li>
                                                <li class="menu__item menu__item--drink"><a href=<?php echo home_url('/drink/')?>><img
                                                src=<?php echo get_theme_file_uri("./image/drink.png")?> alt=""></a>
                                                </li>
                                                <li class="menu__item menu__item--soft"><a href=<?php echo home_url('/soft/')?>><img
                                                src=<?php echo get_theme_file_uri("./image/soft.png")?> alt=""></a></li>
                                        </ul>
                                </div>
                        </section>
                </main>
                <?php get_footer();?>
        </div>
        <script src=<?php echo get_theme_file_uri("./js/menu.js");?>></script>
                <?php wp_footer();?>
</body>

</html>