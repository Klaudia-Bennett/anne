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
                                ボードゲームご利用詳細
                            </h3>
                            <div class="board-game__price-detail">
                                <p class="board-game__number">お１人様・１時間</p>
                                <p class="board-game__price">平日　：３００円<br>
                                    土日祝：４００円</p>
                            </div>
                            <p class=" board-game__explain">ボードゲームをご利用の際は、<br>メニューの中から１つ以上選び、<br
                                    class="board-game__break">ご注文してください。<br>
                                先にレジの方にて、<br class="board-game__break-small">受付をお願いいたします。<br>
                                料金は前払いです。</p>
                            <div class="board-game__link">
                                <img src=<?php echo get_theme_file_uri("./image/qr.jpg");?> alt="" class="board-game__qr">
                                <div class="board-game__url">
                                    <p>ボードゲーム検索はこちら！</p>
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
                    <h3 class="pop-game__title">人気ゲーム紹介</h3>
                    <div class="pop-game__card-box">
                        <div class="pop-game__card card">
                            <img src="https://dm0una2imrs80.cloudfront.net/small_light(d…bp)/picture_6f217859-1925-4a07-82a2-b57df530e0a7." alt="" class="card__photo">
                            <div class="card__text-box">
                                <dl class="card__text">
                                    <dt class="card__title">ペンギンパーティ</dt>
                                    <dd class="card__text">プレイ人数：2〜6人</dd>
                                    <dd class="card__text">難易度：かんたん</dd>
                                    <dd class="card__text">所要時間：15分前後</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="pop-game__card card">
                            <img src="https://dm0una2imrs80.cloudfront.net/small_light(d…/picture_528b067a-d603-4af0-9e4d-403bcf8f2823.JPG" alt="" class="card__photo">
                            <div class="card__text-box">
                                <dl class="card__text">
                                    <dt class="card__title">宝石の煌めき</dt>
                                    <dd class="card__number">プレイ人数：2〜4人</dd>
                                    <dd class="card__difi">難易度：ふつう</dd>
                                    <dd class="card__time">所要時間：30分前後</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="pop-game__card card">
                            <img src="https://dm0una2imrs80.cloudfront.net/small_light(d…/picture_8c4654b4-3962-41a3-b3a1-0ddcfca6357b.jpg" alt="" class="card__photo">
                            <div class="card__text-box">
                                <dl class="card__text">
                                    <dt class="card__title">インカの黄金</dt>
                                    <dd class="card__number">プレイ人数：3〜8人</dd>
                                    <dd class="card__difi">難易度：かんたん</dd>
                                    <dd class="card__time">所要時間：20分前後</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="pop-game__card card">
                            <img src="	https://dm0una2imrs80.cloudfront.net/small_light(d…/picture_5ad07232-6dc9-4875-9514-5f8dd5ebf9a6.jpg" alt="" class="card__photo">
                            <div class="card__text-box">
                                <dl class="card__text">
                                    <dt class="card__title">コヨーテ</dt>
                                    <dd class="card__number">プレイ人数：2人～10人</dd>
                                    <dd class="card__difi">難易度：かんたん</dd>
                                    <dd class="card__time">所要時間：20分～30分</dd>
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