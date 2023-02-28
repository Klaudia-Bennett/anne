<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <title>
            about us | anne
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
            <h1 class="pc__logo"><img src=<?php echo get_theme_file_uri("./image/anne_logo.png")?> alt=""></h1>
            <img src=<?php echo get_theme_file_uri("./image/guide.png")?> alt="" class="pc__guide">
            <div class="pc__illust-menu-detail">
                <img src=<?php echo get_theme_file_uri("./image/harry&ruka.png")?> alt="" class="pc__illust pc__illust--harry-ruka">
            </div>
        </div>
    </div>
    <div class="mobile">
<?php get_header();?>
        <main>
            <section class="about-us">
                <div class="about-us__inner">
                    <h2 class="about-us__title">A<span>b</span>out us</h2>
                    <div class="about-us__photo-box">
                        <img src=<?php echo get_theme_file_uri("./image/about1.png")?> alt="" class="about-us__photo about-us__photo--first">
                        <img src=<?php echo get_theme_file_uri("./image/about2.png")?> alt="" class="about-us__photo about-us__photo--second">
                        <img src=<?php echo get_theme_file_uri("./image/about3.png")?> alt="" class="about-us__photo about-us__photo--third">
                    </div>
                    <div class="about-us__unit">
                        <h3 class="about-us__unit-title">
                            クレープス・ド・アンヌについて
                        </h3>
                        <p class="about-us__unit-text">
                            名古屋駅西口から約徒歩５分にある<br class="about-us__break">クレープ・タピオカ専門店です。<br>
                            クレープやタピオカドリンクはもちろん！<br>
                            他にも、当店のメインキャラクターである<br>ハリーやルカをトッピングした<br>
                            アニマルスイーツやケーキ缶などの<br class="about-us__break">商品も取り扱っております♪<br>
                            また、スイーツやドリンクを片手に、<br>多くの種類のボードゲームで
                            遊ぶこともできます！
                        </p>
                    </div>
                </div>
            </section>
            <section class="character">
                <div class="character__inner">
                    <div class="character__title-box">
                        <h2 class="character__title">Characters</h2>
                    </div>
                    <div class="character__card-box">
                        <img src=<?php echo get_theme_file_uri("./image/character1.png")?> alt="" class="character__card">
                        <img src=<?php echo get_theme_file_uri("./image/character2.png")?> alt="" class="character__card">
                    </div>
                </div>
            </section>
            <section class="intro-detail">
                <div class="intro-detail__inner">
                    <h2 class="intro-detail__title">〜今までに登場した仲間たち〜</h2>
                    <div class="intro-detail__item">
                    <div class="intro-detail__photo-box intro-detail__photo-box--first">
                        <img src=<?php echo get_theme_file_uri('./image/before1.jpg');?> alt="" class="intro-detail__photo intro-detail__photo--first">
                    </div>
                    <p class="intro-detail__text">Christmas</p>
                    </div>
                    <div class="intro-detail__item">
                    <p class="intro-detail__text">Summer</p>
                    <div class="intro-detail__photo-box intro-detail__photo-box--second">
                        <img src=<?php echo get_theme_file_uri('./image/before2.jpg');?> alt="" class="intro-detail__photo intro-detail__photo--second">
                    </div>
            </div>
                                <div class="intro-detail__item">
                    <div class="intro-detail__photo-box intro-detail__photo-box--third">
                        <img src=<?php echo get_theme_file_uri('./image/before3.jpg');?> alt="" class="intro-detail__photo intro-detail__photo--third">
                    </div>
                    <p class="intro-detail__text">Valentine day</p>
            </div>
                    <div class="intro-detail__item">
                    <p class="intro-detail__text">White day</p>
                    <div class="intro-detail__photo-box intro-detail__photo-box--fourth">
                        <img src=<?php echo get_theme_file_uri('./image/before4.jpg');?> alt="" class="intro-detail__photo intro-detail__photo--fourth">
            </div>
                    </div>
                </div>
            </section>
        </main>
        <?php get_footer();?>
    </div>
    <script src=<?php  echo get_theme_file_uri("./js/about.js")?>></script>
        <?php wp_footer();?>
</body>

</html>