<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no,address=no,email=no">
        <title>
                anne
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
                                        <img src=<?php echo get_theme_file_uri("./image/laceWhite.png") ?> alt="" class="pc__lace">
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
                        <section class="visual">
                        <img class="visual__pic" src=<?php echo get_theme_file_uri("./image/first.png")?> alt="">
                        </section>
                        <div class="harry-area">
                                <section class="limited">
                                        <div class="limited__inner">
                                                <h2 class="limited__main-title">
                                                        Limited edition<span class="limited__deco">期間限定</span>
                                                </h2>
                                                                                        <div class="limited__content">
                                                                                                                <?php
                                                                $args = array(
                                                                        'posts_per_page' => -1,
                                                                        'category_name' => 'limited'
                                                                );
                                                                $the_query = new WP_Query( $args );
                                                                if( $the_query->have_posts() ):
                                                                while( $the_query->have_posts() ): $the_query->the_post();
                                                        ?>
                                                        <a href=<?php the_permalink();?> class="limited__image">
                                                        <?php if(has_post_thumbnail()){
                                                                                        the_post_thumbnail('thumbnail');
                                                                                }else{?>
                                                                                <img src=<?php echo get_theme_file_uri("./image/icatch.png")?> alt=""
                                                                                        >
                                                                                        <?php
                                                                        }?>
                                                                        </a>
                                                        <?php
                                                        endwhile;
                                                        endif;
                                                        wp_reset_postdata();
                                                        ?>
                                                </div>
                                                <ul class="limited__btns"></ul>
</div>
                                </section>
                                <section class="news">
                                        <div class="news__inner">
                                                <h2 class="news__title">
                                                        <img src=<?php echo get_theme_file_uri("./image/newsTitle.png")?> alt="">
                                                </h2>
                                                <ul class="news__list">
                                                                                                                                                                                        <?php
                                                                $args = array( 'posts_per_page' => 3);
                                                                $the_query = new WP_Query( $args );
                                                                if( $the_query->have_posts() ):
                                                                while( $the_query->have_posts() ): $the_query->the_post();
                                                        ?>
            <li class="news__item">
                                                                <a href="<?php the_permalink();?>" class="news__link">
                                                                        <img src=<?php echo get_theme_file_uri("./image/frame1.png")?> alt=""
                                                                                class="news__frame">
                                                                        <div class="news__content unit">
                                                                                <div class="unit__icatch">
                                                                                <?php if(has_post_thumbnail()){
                                                                                        the_post_thumbnail('thumbnail');
                                                                                }else{?>
                                                                                <img src=<?php echo get_theme_file_uri("./image/icatch.png")?> alt=""
                                                                                        >
                                                                                        <?php
                                                                                        }?>
                                                                                </div>
                                                                                <dl class="unit__text">
                                                                                        <dt class="unit__title"><?php if(mb_strlen($post->post_title)>20){
                                                                                                $title=mb_substr($post->post_title,0,20);
                                                                                        echo $title.'...';
}else{
        echo $post->post_title;
};?>
                                                                                        </dt>
                                                                                        <dd class="unit__date">
                                                                                                <?php the_time('Y年n月j日');?></dd>
                                                                                </dl>
                                                                        </div>
                                                                </a>
                                                        </li>

                                                        <?php
                                                        endwhile;
                                                        endif;
                                                        wp_reset_postdata();
                                                        ?>
                                                </ul>
                                                <a href=<?php echo home_url('/news/')?> class="news__btn">News list →</a>
                                        </div>
                                </section>
                                <section class="intro">
                                        <div class="intro__inner">
                                                <h2 class="intro__title">
                                                        アニマルスイーツって？
                                                </h2>
                                                <p class="intro__text">クレープやプリンの上に<br
                                                                class="intro__text-break">可愛い動物のキャラクターが<br>
                                                        トッピングされているスイーツです。<br>
                                                        パティシエが愛情が込めて作った<br class="intro__text-break">動物たちは様々な表情で<br>
                                                        お客様を魅了するでしょう♪</p>
                                                <h2 class="intro__title">キャラクター紹介</h2>
                                                <dl class="intro__item chara">
                                                        <dt><img src=<?php echo get_theme_file_uri("./image/harry.png")?> alt=""
                                                                        class="chara__photo chara__photo--left">
                                                        </dt>
                                                        <dt class="chara__name">ハリー</dt>
                                                        <dd class="chara__about">2020年の子年に誕生。<br
                                                                        class="chara__about-break">誕生から現在まで<br>
                                                                当店の看板ハリネズミとして<br class="chara__about-break">働いています♪</dd>
                                                </dl>
                                                <dl class="intro__item chara">
                                                        <dt><img src=<?php echo get_theme_file_uri("./image/ruka.png")?> alt=""
                                                                        class="chara__photo chara__photo--right"></dt>
                                                        <dt class="chara__name">ルカ</dt>
                                                        <dd class="chara__about">ハリーくんのお友達が欲しいという<br
                                                                        class="chara__about-break">願いから生まれました。<br>
                                                                今日もハリーくんと仲良く、<br>
                                                                お店のメインキャラクターとして<br class="chara__about-break">働いています♪
                                                        </dd>
                                                </dl>
                                                <dl class="intro__item chara">
                                                        <dt><img src=<?php echo get_theme_file_uri("./image/limited_intro.png")?> alt=""
                                                                        class="chara__photo chara__photo--left">
                                                        </dt>
                                                        <dt class="chara__name">期間限定</dt>
                                                        <dd class="chara__about">期間限定でちょっと変わった動物や、<br>
                                                                いつもとは違うハリーとルカに出会えるかも！</dd>
                                                </dl>
                                        </div>
                                        <a href=<?php echo home_url('/about/');?> class="intro__btn">About us →</a>
                                </section>
                        </div>
                        <div class="ruka-area">
                                <section class="etc">
                                        <h2 class="etc__title">
                                                他にもこんな商品が…！
                                        </h2>
                                        <article class="etc__item cake">
                                                <div class="cake__box">
                                                        <img src=<?php echo get_theme_file_uri("./image/caketin1.png")?> alt=""
                                                                class="cake__photo cake__photo--first">
                                                        <img src=<?php echo get_theme_file_uri("./image/caketin2.png")?> alt=""
                                                                class="cake__photo cake__photo--second">
                                                </div>
                                                <div class="cake__inner">
                                                        <h3 class="cake__title">ケーキ缶</h3>
                                                        <p class="cake__detail">たくさんの果物を使用したミルクレープ缶や、<br>
                                                                チーズクリームを使用したオレオ缶があります。<br>
                                                                他にも期間限定で特別なケーキ缶が売っているかも…！</p>
                                                </div>
                                        </article>
                                        <article class="etc__item deli">
                                                <div class="deli__box">
                                                        <img src=<?php echo get_theme_file_uri("./image/deli1.png")?> alt=""
                                                                class="deli__photo deli__photo--first">
                                                        <img src=<?php echo get_theme_file_uri("./image/deli2.png")?> alt=""
                                                                class="deli__photo deli__photo--second">
                                                </div>
                                                <div class="deli__inner">
                                                        <h3 class="deli__title">デリクレープ</h3>
                                                        <p class="deli__detail">甘味だけではなく塩味も取り扱っております。<br>
                                                                ヘルシーな野菜と共に、<br>クレープ生地を味わうことができます！</p>
                                                </div>
                                        </article>
                                </section>
                                <section class="menu">
                                        <div class="menu__inner">
                                                <h2 class="menu__title">
                                                        <img src=<?php echo get_theme_file_uri("./image/menu_titile.png")?> alt="">
                                                </h2>
                                                <ul class="menu__list">
                                                        <li class="menu__item menu__item--animal"><a href=<?php echo home_url('/limited/');?>><img
                                                                                src=<?php echo get_theme_file_uri("./image/limited.png")?> alt=""></a>
                                                        </li>
                                                        <li class="menu__item menu__item--caketin"><a href=<?php echo home_url('/cake/')?>><img
                                                                                src=<?php echo get_theme_file_uri("./image/caketin.png")?> alt=""></a>
                                                        </li>
                                                        <li class="menu__item menu__item--crepe"><a href=<?php echo home_url('/crepe/')?>><img
                                                                                src=<?php echo get_theme_file_uri("./image/allcrepe.png")?> alt=""></a>
                                                        </li>
                                                        <li class="menu__item menu__item--drink"><a href=<?php echo home_url('/drink/')?>><img
                                                                                src=<?php echo get_theme_file_uri("./image/drink.png")?> alt=""></a></li>
                                                        <li class="menu__item menu__item--soft"><a href=<?php echo home_url('/soft/');?>><img
                                                                                src=<?php echo get_theme_file_uri("./image/soft.png")?> alt=""></a></li>
                                                </ul>
                                        </div>
                                </section>
                                <section class="store store--toppage">
                                        <div class="store__inner">
                                                <h2 class="store__title">
                                                        <img src=<?php echo get_theme_file_uri("./image/storeTitile.png")?> alt="">
                                                </h2>
                                                <div class="store__content">
                                                        <img src=<?php echo get_theme_file_uri("./image/out.png")?> alt="" class="store__photo">
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
                                                                <dt class="info__title">対応<br
                                                                                class="info__title-break">クレジット
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
                                                                        <span
                                                                                class="store__text-small">（※アニマルクレープは袋に入れることはできません。）</span>
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
                        </div>
                </main>
                <?php get_footer();?>
        </div>
                        <script src=<?php  echo get_theme_file_uri("./js/index.js")?>></script>
                <?php wp_footer();?>
</body>

</html>