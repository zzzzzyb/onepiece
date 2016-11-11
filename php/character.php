<!DOCTYPE html>
<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="Content-Language" content="zh-CN"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="Author" content="zzzzzyb"/>
    <meta name="keywords" content="海贼王，动漫，主题网站，航海王，one-piece"/>
    <meta name="description" content="动漫主题网站"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>CHARACTER</title>
    <!--IE 兼容模式-->
    <link rel="stylesheet" href="css/cssreset.css">
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
    <link rel="stylesheet" href="css/op-main.css">
    <link rel="stylesheet" href="css/op-common.css">
    <link rel="stylesheet" href="css/animation.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <style>
        body {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: url(images/bg/character_bg.png);
            background-position: center;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: black;
            cursor: url(images/icon/cursor2.png), default;
        }

        a {
            cursor: url(images/icon/cursor2.png), default;
        }
    </style>
</head>
<body>
<!--style="display:none;"-->
<div id="op-wait">
    <div class="wait-container">
        <div class="wait-loading">
            <img src="images/icon/shipwheel.png">
        </div>
        <div class="loaderfont">
            <span>O</span>
            <span class="span2">N</span>
            <span class="span3">E</span>
            <span class="span4">-</span>
            <span class="span5">P</span>
            <span class="span6">I</span>
            <span class="span7">E</span>
            <span class="span8">C</span>
            <span class="span9">E</span>
        </div>
    </div>
</div>
<div id="common-container">
<div class="common-nav">
    <ul class="clearfix">
		<li class="nav-character">
			<a href="character.php">
				<img class="nav-on" src="images/nav/nav-character.png" alt="nav">
			</a>
			</li>
		<li class="nav-story">
			<a href="story.php">
				<img class="nav-on" src="images/nav/nav-story.png" alt="nav">
			</a>
		</li>
		<li class="nav-index">
			<a href="onepiece.php">
				<img class="nav-on" src="images/nav/nav-index.png" alt="nav">
			</a>
		</li>
		<li class="nav-peripheral">
			<a href="Related.php">
				<img class="nav-on" src="images/nav/nav-related.png" alt="nav">
			</a>
		</li>
		<li class="nav-about">
			<a href="about.php">
				<img class="nav-on" src="images/nav/nav-about.png" alt="nav">
			</a>
		</li>
	</ul>
</div>
    <div class="character-container clearfix">
        <div class="character-contentct">
            <div class="character-title"><img src="images/icon/character_title.png"></div>
            <div class="character-role qb "><img src="images/role/characterqb.jpg" alt="qb"></div>
            <div class="character-role lf show"><img src="images/role/characterlf.jpg" alt="lf"></div>
            <div class="character-role blk"><img src="images/role/characterblk.jpg" alt="blk"></div>
            <div class="character-role flq"><img src="images/role/characterflq.jpg" alt="flq"></div>
            <div class="character-role lb"><img src="images/role/characterlb.jpg" alt="lb"></div>
            <div class="character-role sl "><img src="images/role/charactersl.jpg" alt="sl"></div>
            <div class="character-role wsp"><img src="images/role/characterwsp.jpg" alt="wsp"></div>
            <div class="character-role xj"><img src="images/role/characterxj.jpg" alt="xj"></div>
            <div class="character-role nm"><img src="images/role/characternm.jpg" alt="nm"></div>
        </div>
        <div class="character-contentbt clearfix">
            <div class="character-menusprep clearfix"><img src="images/icon/toprep.png"></div>
            <div class="character-menus clearfix">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="character-option-item tjlf" roleindex="1" onclick="to(1);"><img
                                    src="images/role/character-tjlf.jpg" alt=""></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="character-option-item tjblk" roleindex="2" onclick="to(2);"><img
                                    src="images/role/character-tjblk.jpg" alt=""></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="character-option-item tjflq" roleindex="3" onclick="to(3);"><img
                                    src="images/role/character-tjflq.jpg" alt=""></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="character-option-item tjlb" roleindex="4" onclick="to(4);"><img
                                    src="images/role/character-tjlb.jpg" alt=""></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="character-option-item tjsl" roleindex="5" onclick="to(5);"><img
                                    src="images/role/character-tjsl.jpg" alt=""></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="character-option-item tjwsp" roleindex="6" onclick="to(6);"><img
                                    src="images/role/character-tjwsp.jpg" alt=""></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="character-option-item tjxj" roleindex="7" onclick="to(7);"><img
                                    src="images/role/character-tjxj.jpg" alt=""></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="character-option-item tjnm" roleindex="8" onclick="to(8);"><img
                                    src="images/role/character-tjnm.jpg" alt=""></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="character-option-item tjqb" roleindex="0" onclick="to(0);"><img
                                    src="images/role/character-tjqb.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="character-menusnext clearfix"><img src="images/icon/tonext.png"></div>

        </div>
    </div>
	   <footer>
        <div class="op-footer">
            <div class="op-footer-link">
                <ul class="clearfix">
                    <li>
                        <a href="https://one-piece.com/" target="_blank"><img src="images/op-link/link1.jpg" alt=""></a>
                    </li>
                    <li>
                        <a href="http://www.onepiece-film2016.com/" target="_blank"><img src="images/op-link/link2.png" alt=""></a>
                    </li>
                    <li>
                        <a href="http://www.toei-anim.co.jp/tv/onep/" target="_blank"><img src="images/op-link/link3.png" alt=""></a>
                    </li>
                </ul>
            </div>
            <div class="op-footer-web clearfix">
                <img src="images/icon/my-web.png" alt="onepiece"><span>Design And ReDevelop By Zzzzzzyb</span><span
                    style="margin-left:2em;">Made In 仙华村</span>
            </div>
        </div>
    </footer>
</div>
<script type="application/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/idangerous.swiper.min.js"></script>
<script src="js/CommonJs.js"></script>
<script>
        window.onload = function () {
            setTimeout('$("#op-wait").fadeOut();', 2000);
        }
    //初始化滚动
    var mySwiper = new Swiper('.swiper-container', {
        speed: 300,
        loop: true,
        updateOnImagesReady: true,
        simulateTouch: false,
        slidesPerView: 5
    });
    $(document).ready(function () {
        $(".character-menusprep").click(function () {
            mySwiper.swipePrev();
            $(".show").removeClass("show");
            var roleindex = parseInt($(".swiper-slide-active .character-option-item").attr("roleindex"));
            $(".character-role").eq(roleindex).addClass("show");
        });
        $(".character-menusnext").click(function () {
            mySwiper.swipeNext();
            $(".show").removeClass("show");
            var roleindex = parseInt($(".swiper-slide-active .character-option-item").attr("roleindex"));
            $(".character-role").eq(roleindex).addClass("show");
        });
    });
function to(roleindex){
    $(".show").removeClass("show");
    $(".character-role").eq(roleindex).addClass("show");
}

</script>
</body>
</html>