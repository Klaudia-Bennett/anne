<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <title>
                boardgame | anne
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
            <section class="board-game">
                <div class="board-game__inner">
                    <div class="board-game__title-box">
                        <h2 class="board-game__title">
                            Board game
                        </h2>
                    </div>
                    <div class="board-game__detail">
                        <div class="board-game__detail-inner">
                            <h3 class="board-game__attention">
                                ?????????????????????????????????
                            </h3>
                            <div class="board-game__price-detail">
                                <p class="board-game__number">????????????????????????</p>
                                <p class="board-game__price">????????????????????????<br>
                                    ????????????????????????</p>
                            </div>
                            <p class=" board-game__explain">??????????????????????????????????????????<br>?????????????????????????????????????????????<br
                                    class="board-game__break">??????????????????????????????<br>
                                ???????????????????????????<br class="board-game__break-small">????????????????????????????????????<br>
                                ???????????????????????????</p>
                            <div class="board-game__link">
                                <img src=<?php echo get_theme_file_uri("./image/qr.jpg");?> alt="" class="board-game__qr">
                                <div class="board-game__url">
                                    <p>???????????????????????????????????????</p>
                                    <a href="https://boardgame35.
wixsite.com/website" target="_blank" class="board-game__domain">https://boardgame35.
                                        wixsite.com/website</a>
                                </div>
                            </div>
                        </div>
                        <img src=<?php echo get_theme_file_uri("./image/harry_illust2.png");?> alt="" class="board-game__illust">
                    </div>
                </div>
            </section>
            <section class="pop-game">
                <div class="pop-game__inner">
                    <h3 class="pop-game__title">?????????????????????</h3>
                    <div class="pop-game__card-box">
                        <div class="pop-game__card card">
                            <img src="https://dm0una2imrs80.cloudfront.net/small_light(d???bp)/picture_6f217859-1925-4a07-82a2-b57df530e0a7." alt="" class="card__photo">
                            <div class="card__text-box">
                                <dl class="card__text">
                                    <dt class="card__title">????????????????????????</dt>
                                    <dd class="card__text">??????????????????2???6???</dd>
                                    <dd class="card__text">????????????????????????</dd>
                                    <dd class="card__text">???????????????15?????????</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="pop-game__card card">
                            <img src="https://dm0una2imrs80.cloudfront.net/small_light(d???/picture_528b067a-d603-4af0-9e4d-403bcf8f2823.JPG" alt="" class="card__photo">
                            <div class="card__text-box">
                                <dl class="card__text">
                                    <dt class="card__title">??????????????????</dt>
                                    <dd class="card__number">??????????????????2???4???</dd>
                                    <dd class="card__difi">?????????????????????</dd>
                                    <dd class="card__time">???????????????30?????????</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="pop-game__card card">
                            <img src="https://dm0una2imrs80.cloudfront.net/small_light(d???/picture_8c4654b4-3962-41a3-b3a1-0ddcfca6357b.jpg" alt="" class="card__photo">
                            <div class="card__text-box">
                                <dl class="card__text">
                                    <dt class="card__title">??????????????????</dt>
                                    <dd class="card__number">??????????????????3???8???</dd>
                                    <dd class="card__difi">????????????????????????</dd>
                                    <dd class="card__time">???????????????20?????????</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="pop-game__card card">
                            <img src="	https://dm0una2imrs80.cloudfront.net/small_light(d???/picture_5ad07232-6dc9-4875-9514-5f8dd5ebf9a6.jpg" alt="" class="card__photo">
                            <div class="card__text-box">
                                <dl class="card__text">
                                    <dt class="card__title">????????????</dt>
                                    <dd class="card__number">??????????????????2??????10???</dd>
                                    <dd class="card__difi">????????????????????????</dd>
                                    <dd class="card__time">???????????????20??????30???</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php get_footer();?>
    </div>
    <script src=<?php echo get_theme_file_uri("./js/index.js");?>></script>
        <?php wp_footer();?>
</body>
</html>