<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <title>
                anne | crepe
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
                <img src=<?php echo get_theme_file_uri("./image/crepe_illust1.png")?> alt="" class="pc__illust pc__illust--crepe">
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
                            Crepe<span class="menu-detail__deco">????????????</span>
                        </h2>
                        <p class="menu-detail__explain">??????????????????????????????????????????<br
                                class="menu-detail__break">???????????????????????????????????????????????????<br>
                            ???????????????????????????????????????<br>????????????????????????????????????????????????????????????<br>????????????????????????????????????????????????????????????????????????
                        </p>
                    </div>
                    <div class="menu-detail__cate">
                        <div class="menu-detail__inner">
                            <div class="menu-detail__title-box">
                                <h3 class="menu-detail__title">
                                    <p>Fruits</p>
                                </h3>
                            </div>
                            <?php
                        $group = SCF::get('crepe');
                        foreach ($group as $fields ) :
                            $image = $fields['crepe-photo'];
                        ?>
                            <div class="menu-detail__menu">
                                <img src=<?php echo  wp_get_attachment_url($image); ?> alt="" class="menu-detail__photo">
                                <ul class="menu-detail__list">
                                    <li class="menu-detail__price">
                                        <?php echo $fields['crepe-name']; ?><span><?php echo $fields['crepe-price']; ?></span></li>
                                    <li class="menu-detail__price">
                                        <?php echo $fields['crepe-name2']; ?><span><?php echo $fields['crepe-price2']; ?></span>
                                    </li>
                                    <li class="menu-detail__price"><?php echo $fields['crepe-name3']; ?><span><?php echo $fields['crepe-price3']; ?></span></li>
                                    <li class="menu-detail__price">
                                        <?php echo $fields['crepe-name4']; ?><span><?php echo $fields['crepe-price4']; ?></span>
                                    </li>
                                </ul>
                            </div>
                        <?php
                        endforeach;
                        ?>
                        </div>
                    </div>
                    <div class="menu-detail__cate menu-detail__cate--japan">
                        <div class="menu-detail__japan">
                            <div class="menu-detail__inner">
                                                            <?php
                        $group = SCF::get('japanese');
                        foreach ($group as $fields ) :
                            $image = $fields['japanese-photo'];
                        ?>
                                <div class="menu-detail__menu">
                                    <img src=<?php echo  wp_get_attachment_url($image); ?> alt="" class="menu-detail__photo">
                                    <ul class="menu-detail__list">
                                    <li class="menu-detail__price">
                                        <?php echo $fields['japanese-name']; ?><span><?php echo $fields['japanese-price']; ?></span></li>
                                    <li class="menu-detail__price">
                                        <?php echo $fields['japanese-name2']; ?><span><?php echo $fields['japanese-price2']; ?></span>
                                    </li>
                                    <li class="menu-detail__price"><?php echo $fields['japanese-name3']; ?><span><?php echo $fields['japanese-price3']; ?></span></li>
                                    <li class="menu-detail__price">
                                        <?php echo $fields['japanese-name4']; ?><span><?php echo $fields['japanese-price4']; ?></span>
                                    </li>
                                    </ul>
                                </div>
                            <?php
                        endforeach;
                        ?>
                            </div>
                        </div>
                    </div>
                    <div class="menu-detail__cate">
                        <div class="menu-detail__inner">
                            <div class="menu-detail__title-box">
                                <h3 class="menu-detail__title">
                                    <p>Plane</p>
                                </h3>
                            </div>
                             <?php
                        $group = SCF::get('plane');
                        foreach ($group as $fields ) :
                            $image = $fields['plane-photo'];
                        ?>
                            <div class="menu-detail__menu">
                                <img src=<?php echo  wp_get_attachment_url($image); ?> alt="" class="menu-detail__photo">
                                <ul class="menu-detail__list">
                                        <li class="menu-detail__price">
                                        <?php echo $fields['plane-name']; ?><span><?php echo $fields['plane-price']; ?></span></li>
                                    <li class="menu-detail__price">
                                        <?php echo $fields['plane-name2']; ?><span><?php echo $fields['plane-price2']; ?></span>
                                    </li>
                                    <li class="menu-detail__price"><?php echo $fields['plane-name3']; ?><span><?php echo $fields['plane-price3']; ?></span></li>

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
                                    <p>Deli Crepe</p>
                                </h3>
                            </div>
                        <?php
                        $group = SCF::get('deli');
                        foreach ($group as $fields ) :
                            $image = $fields['deli-photo'];
                        ?>
                            <div class="menu-detail__menu">
                                <img src=<?php echo  wp_get_attachment_url($image); ?> alt="" class="menu-detail__photo">
                                <ul class="menu-detail__list">
                                        <li class="menu-detail__price">
                                        <?php echo $fields['deli-name']; ?><span><?php echo $fields['deli-price']; ?></span></li>
                                </ul>
                            </div>
                            <?php
                        endforeach;
                        ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="set-menu">
                <div class="set-menu__inner">
                    <div class="set-menu__content">
                        <h3 class="set-menu__title">??????????????????</h3>
                        <div class="set-menu__item">
                            <div class="set-menu__text">
                                <p>??????????????????<span>80???</span></p>
                                <p>???????????????<span>100???</span></p>
                                <p>??????????????????????????????<span>150???</span></p>
                                <p>??????<span>150???</span></p>
                                <p>???????????????<span>50???</span></p>
                            </div>
                            <div class="set-menu__text">
                                <p>?????????<span>100???</span></p>
                                <p>??????????????????<span>120???</span></p>
                                <p>????????????<span>140???</span></p>
                                <p>??????????????????<span>150???</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="set-menu__content">
                        <h3 class="set-menu__title">???????????????????????????150???</h3>
                        <div class="set-menu__item">
                            <div class="set-menu__text">
                                <p>????????????<span>HOT/ICED</span></p>
                                <p>??????<span>HOT/ICED</span></p>
                                <p>???????????????<span>HOT/ICED</span></p>
                                <p>??????????????????100???<br>
                                    ????????????????????????<span>ICED</span></p>
                                <p>??????????????????100???<br>
                                    ????????????????????????<span>ICED</span></p>
                                <p>?????????<span>HOT/ICED</span></p>
                            </div>
                            <div class="set-menu__text">
                                <p>????????????<span>HOT/ICED</span></p>
                                <p>????????????????????????<span>ICED</span></p>
                                <p>??????????????????<span>ICED</span></p>
                                <p>???????????????????????????<span>ICED</span></p>
                                <p>?????????????????????<span>ICED</span></p>
                                <p>??????????????????<span>ICED</span></p>
                                <p>??????????????????<span>HOT</span></p>
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