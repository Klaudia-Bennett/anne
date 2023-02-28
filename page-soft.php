<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <title>
                soft serve | anne
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
                <img src=<?php echo get_theme_file_uri("./image/soft_illust.png");?> alt="" class="pc__illust pc__illust--soft">
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
                            Soft serve
                            <span class="menu-detail__deco">ソフトクリーム</span>
                        </h2>
                        <p class="menu-detail__explain">
                            甘さ控えめながらも濃厚なミルク感。<br>
                            北海道生乳を使用した、なめらかソフトクリームです。<br>
                            カップ , コーン or カップ&コーンの<br>3種類の中からお選びください。
                        </p>
                    </div>
                    <div class="menu-detail__cate">
                        <div class="menu-detail__inner">
                        <?php
                        $group = SCF::get('soft');
                        foreach ($group as $fields ) :
                            $image = $fields['soft-photo'];
                        ?>
                            <div class="menu-detail__menu">
                            <img src=<?php echo  wp_get_attachment_url($image); ?> alt="" class="menu-detail__photo">

                                <ul class="menu-detail__list">
                                    <li class="menu-detail__price">
                                        <?php echo $fields['soft-name']; ?><span><?php echo $fields['soft-price']; ?></span></li>
                                    <li class="menu-detail__price">
                                        <?php echo $fields['soft-name2']; ?><span><?php echo $fields['soft-price2']; ?></span></li>
                                    <li class="menu-detail__price">
                                        <?php echo $fields['soft-name3']; ?><span><?php echo $fields['soft-price3']; ?></span></li>
                                    <li class="menu-detail__price">
                                        <?php echo $fields['soft-name4']; ?><span><?php echo $fields['soft-price4']; ?></span></li>
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
    <script src=<?php echo get_theme_file_uri("./js/index.js")?>></script>
        <?php wp_footer();?>
</body>

</html>