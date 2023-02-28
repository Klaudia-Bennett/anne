<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <title>
                store information | anne
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
            <section class="store store--page">
                <div class="store__inner">
                    <div class="store__title-box">
                        <h2 class="store__title-deep">
                            Store info
                        </h2>
                    </div>
                    <div class="store__content">
                        <img src=<?php echo get_theme_file_uri("./image/out.png");?> alt="" class="store__photo">
                        <dl class="store__info info">
                            <dt class="info__title">住所</dt>
                            <dd class="info__detail">
                                〒453-0015<br>愛知県名古屋市中村区椿町10-4<br>サン・タウン名駅椿北館１階
                            </dd>
                        </dl>
                        <dl class="store__info info">
                            <dt class="info__title">電話番号</dt>
                            <dd class="info__detail">052-526-7377</dd>
                        </dl>
                        <dl class="store__info info">
                            <dt class="info__title">営業時間</dt>
                            <dd class="info__detail">12時00分〜19時00分</dd>
                        </dl>
                        <dl class="store__info info">
                            <dt class="info__title">定休日</dt>
                            <dd class="info__detail">月曜日</dd>
                        </dl>
                        <dl class="store__info info">
                            <dt class="info__title">対応<br class="info__title-break">クレジット
                            </dt>
                            <dd class="info__detail">クレジットカード・交通IC・ID<br>
                                楽天Edy・Paypay・UnionPay</dd>
                        </dl>
                        <div class="store__info">
                            <p class="store__text">40席以上のイートインスペース有　
                                <br class="store__text-break">全席禁煙
                            </p>
                            <p class="store__text">
                                テイクアウト可
                                <br><span class="store__text-small">（※アニマルクレープは袋に入れることはできません。）</span>
                            </p>
                            <p class="store__text store__text--middle">
                                席のご予約はボードーゲームのみ<br>お電話で承っております
                            </p>
                        </div>
                                                                                <div class="store__gmap"><iframe
                                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3261.5045607456823!2d136.87642661554503!3d35.168974865501255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60037799a8ca2997%3A0xdc4b57910f0e9bf9!2z44Kv44Os44O844OX44K544O744OJ44O744Ki44Oz44OM!5e0!3m2!1sja!2sjp!4v1673932070470!5m2!1sja!2sjp"
                                                                        width="100%" height="100%" style="border:0;"
                                                                        allowfullscreen="" loading="lazy"
                                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php get_footer();?>
    </div>
    <?php wp_footer();?>
    <script src=<?php echo get_theme_file_uri("./js/index.js");?>></script>
</body>
</html>