<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <title>
                cake tin | anne
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
<body>
    <div class="pc pc--menu">
        <div class="pc__content">
            <h1 class="pc__logo"><img src=<?php echo get_theme_file_uri("./image/anne_logo.png")?> alt=""></h1>
            <img src=<?php echo get_theme_file_uri("./image/guide.png")?> alt="" class="pc__guide">
            <div class="pc__illust-menu-detail">
                <img src=<?php echo get_theme_file_uri("./image/cake_tin_illust.png")?> alt="" class="pc__illust">
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
                            Canned cake
                            <span class="menu-detail__cake">ケーキ缶</span>
                        </h2>
                        <p class="menu-detail__explain">
                            当店自慢のクレープを、お持ち帰りしやすい形で、<br>
                            缶ケーキにしました。
                            期間限定のケーキ缶もあるので、<br>
                            是非チェックしてみてください！
                        </p>
                    </div>
                    <div class="menu-detail__cate">
                        <div class="menu-detail__inner">
                        <?php
                        $group = SCF::get('cake');
                        foreach ($group as $fields ) :
                            $image = $fields['cake-photo'];
                        ?>
                            <div class="menu-detail__menu">
                                <img src=<?php echo  wp_get_attachment_url($image); ?> alt="" class="menu-detail__photo">
                                <ul class="menu-detail__list">
                                        <li class="menu-detail__price">
                                        <?php echo $fields['cake-name']; ?><span><?php echo $fields['cake-price']; ?></span></li>
                                        <li class="menu-detail__price">
                                        <?php echo $fields['cake-name2']; ?><span><?php echo $fields['cake-price2']; ?></span></li>
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
    <script src=<?php echo get_theme_file_uri("./js/index.js");?>></script>
        <?php wp_footer();?>
</body>

</html>