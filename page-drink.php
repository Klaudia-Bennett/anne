<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <title>
               drink | anne
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
            <h1 class="pc__logo"><img src=<?php echo get_theme_file_uri("./image/anne_logo.png");?> alt=""></h1>
            <img src=<?php echo get_theme_file_uri("./image/guide.png")?> alt="" class="pc__guide">
            <div class="pc__illust-menu-detail">
                <img src=<?php echo get_theme_file_uri("./image/drink_illust.png");?> alt="" class="pc__illust">
            </div>
        </div>
    </div>
    <div class="mobile">
        <?php get_header();?>
        <main>
            <section class="menu-detail">
                <div class="menu-detail__content">
                    <div class="menu-detail__inner">
                        <h2 class="menu-detail__main-title">
                            Drink<span class="menu-detail__deco">ドリンク</span>
                        </h2>
                        <p class="menu-detail__explain">
                            タピオカティーや、コーヒー、紅茶、ソフトドリンクまで<br>
                            様々なお飲み物をご用意しております。
                        </p>
                    </div>
                    <div class="menu-detail__cate">
                        <div class="menu-detail__inner">
                            <div class="menu-detail__title-box">
                                <h3 class="menu-detail__title">
                                    <p>Tapioca tea</p>
                                </h3>
                            </div>
                        <?php
                        $group = SCF::get('tapioca');
                        foreach ($group as $fields ) :
                            $image = $fields['tapioca-photo'];
                        ?>
                            <div class="menu-detail__menu">
                            <img src=<?php echo  wp_get_attachment_url($image); ?> alt="" class="menu-detail__photo">

                                <ul class="menu-detail__list">
                                    <li class="menu-detail__price"><span class="menu-detail__price-cate"><?php echo $fields['tapioca-base']; ?></span>
                                    </li>
                                    <li class="menu-detail__price">
                                    <?php echo $fields['tapioca-name']; ?><span><?php echo $fields['tapioca-price']; ?></span></li>
                                    <li class="menu-detail__price">
                                    <?php echo $fields['tapioca-name2']; ?><span><?php echo $fields['tapioca-price2']; ?></span></li>
                                    <li class="menu-detail__price">
                                    <?php echo $fields['tapioca-name3']; ?><span><?php echo $fields['tapioca-price3']; ?></span></li>
                                    <li class="menu-detail__price">
                                    <?php echo $fields['tapioca-name4']; ?><span><?php echo $fields['tapioca-price4']; ?></span></li>
                                    <li class="menu-detail__price">
                                    <?php echo $fields['tapioca-name5']; ?><span><?php echo $fields['tapioca-price5']; ?></span></li>
                                </ul>
                            </div>
                            <?php
                        endforeach;
                        ?>
                        </div>
                    </div>
                    <div class="menu-detail__cate">
                        <div class="menu-detail__inner">
                            <div class="menu-detail__title-box">
                                <h3 class="menu-detail__title">
                                    <p>Coffee & Tea</p>
                                </h3>
                            </div>
                            <div class="menu-detail__menu">
                                <img src=<?php echo get_theme_file_uri("./image/drink3.jpg");?> alt="" class="menu-detail__photo">
                                <ul class="menu-detail__list">
                                    <li class="menu-detail__price menu-detail__price--cate">
                                        コーヒー<span>HOT/ICED　330円</span></li>
                                    <li class="menu-detail__price">カフェラテ<span>HOT/ICED　350円</span></li>
                                    <li class="menu-detail__price">カフェモカ<span>HOT/ICED　380円</span></li>
                                    <li class="menu-detail__price">キャラメルマキアート<span>HOT/ICED　400円</span></li>
                                    <li class="menu-detail__price">紅茶<span>HOT/ICED　330円</span></li>
                                    <li class="menu-detail__price">ウーロン茶<span>HOT/ICED　250円</span></li>
                                    <li class="menu-detail__price">宇治抹茶ラテ<span>HOT/ICED　350円</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="menu-detail__cate">
                        <div class="menu-detail__inner">
                            <div class="menu-detail__title-box">
                                <h3 class="menu-detail__title">
                                    <p>Soft drink</p>
                                </h3>
                            </div>
                            <div class="menu-detail__menu">
                                <ul class="menu-detail__list">
                                    <li class="menu-detail__price menu-detail__price--cate">
                                        オーガニック<br>
                                        100%オレンジジュース<span>ICED　300円</span></li>
                                    <li class="menu-detail__price">オーガニック<br>
                                        100%アップルジュース<span>ICED　300円</span></li>
                                    <li class="menu-detail__price">カルピス<span>HOT/ICED　250円</span></li>
                                    <li class="menu-detail__price">ミルク<span>HOT/ICED　250円</span></li>
                                    <li class="menu-detail__price">チョコミルク<span>HOT/ICED　350円</span></li>
                                    <li class="menu-detail__price">ハニーレモン<span>HOT　330円</span></li>
                                    <li class="menu-detail__price">レモンスカッシュ<span>ICED　300円</span></li>
                                    <li class="menu-detail__price">メロンソーダ<span>ICED　300円</span></li>
                                    <li class="menu-detail__price">ストロベリーソーダ<span>ICED　300円</span></li>
                                    <li class="menu-detail__price">マンゴーソーダ<span>ICED　300円</span></li>
                                    <li class="menu-detail__price">ピーチソーダ<span>ICED　300円</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="set-menu">
                <div class="set-menu__inner">
                    <div class="set-menu__content">
                        <h3 class="set-menu__title">＋トッピング</h3>
                        <div class="set-menu__item">
                            <div class="set-menu__text">
                                <p>タピオカ<span>150円</span></p>
                                <p>ホイップ<span>80円</span></p>
                                <p>ソフトクリーム<span>200円</span></p>
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