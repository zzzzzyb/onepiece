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
    <title>ONE-PIECE</title>
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
            background-image: url(images/bg/onepiece_bg.png);
            background-position: center;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: black;
            cursor: url(images/icon/cursor1.png), default;
        }

        a {
            cursor: url(images/icon/cursor1.png), default;
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
<!--<div id="op-welcome">-->
<!--<div id="op-welcome-go"></div>-->
<!--<div id="op-welcome-we"></div>-->
<!--<div id="op-welcome-mingo"></div>-->
<!--</div>-->
<div id="op-container" class="clearfix">
    <div class="op-left">
        <div class="op-nav">
            <div class="op-nav-index">
                <img src="images/icon/onepiece-logo.png" alt="logo">
            </div>
            <ul class="op-navlist clearfix">
                <li class="op-nav-character">
                    <a href="character.php">
                        <img class="op-nav-out" src="images/nav/op-character.png" alt="">
                        <img class="op-nav-on" src="images/nav/op-characteron.png" alt="">
                    </a>
                </li>
                <li class="op-nav-story">
                    <a href="story.php">
                        <img class="op-nav-out" src="images/nav/op-story.png" alt="">
                        <img class="op-nav-on" src="images/nav/op-storyon.png" alt="">
                    </a>
                </li>
                <li class="op-nav-peripheral">
                    <a href="Related.php">
                        <img class="op-nav-out" src="images/nav/op-related.png" alt="">
                        <img class="op-nav-on" src="images/nav/op-relatedon.png" alt="">
                    </a>
                </li>
                <li class="op-nav-about">
                    <a href="about.php">
                        <img class="op-nav-out" src="images/nav/op-about.png" alt="">
                        <img class="op-nav-on" src="images/nav/op-abouton.png" alt="">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="op-right">
        <div class="op-role-container">
            <div class="op-role-flq"><img src="images/role/franky.png" alt="role"></div>
            <div class="op-role-xjs"><img src="images/role/sanji.png" alt="role"></div>
            <div class="op-role-lb"><img src="images/role/robin.png" alt="role"></div>
            <div class="op-role-blk"><img src="images/role/brook.png" alt="role"></div>
            <div class="op-role-wsp"><img src="images/role/usopp.png" alt="role"></div>
            <div class="op-role-nm"><img src="images/role/nami.png" alt="role"></div>
            <div class="op-role-sl"><img src="images/role/zoro.png" alt="role"></div>
            <div class="op-role-qb"><img src="images/role/chopper.png" alt="role"></div>
            <div class="op-role-lf"><img class="outimg" src="images/role/luffy.png" alt="role"><img class="hoverimg"
                                                                                                    src="images/role/role-big.png"
                                                                                                    alt="role"></div>
        </div>
    </div>
    <div style="clear: both;"></div>
	  <div class="op-news clearfix">
        <div class="op-news-left">
            <div class="news-left-head"><img src="images/icon/newhead.png"></div>
            <div class="news-left-body">
                <ul>
				<?php
					$newsxml = new DOMDocument(); 
					$newsxml->load("data/news.xml"); 
					$newsitemDom = $newsxml->getElementsByTagName("newsitem"); 
					
					$newsnum=0;
					foreach($newsitemDom as $newsitem){ 
					if($newsnum==3)break;
					$newslink = $newsitem->getElementsByTagName("newslink"); 
					$newscontent = $newsitem->getElementsByTagName("newscontent"); 
					echo '<li><a href="'.$newslink->item(0)->nodeValue.'" target="_blank">'.$newscontent->item(0)->nodeValue.'</a></li>';
					$newsnum=$newsnum+1;
					} 
					?>
                </ul>
            </div>
        </div>
        <div class="op-news-right">
            <div class="news-right-lunbo">
                <div class="op-swiper">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"><img src="images/op-swiper-1.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="images/op-swiper-2.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="images/op-swiper-3.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="images/op-swiper-4.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="images/op-swiper-5.jpg" alt=""></div>
                            <div class="swiper-slide"><img src="images/op-swiper-6.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    <div class="message-board">
        <div class="board-box clearfix">
            <div class="board-header"></div>
            <div class="board-input">
                <div>
                    <textarea id="msgdata" placeholder="输入你想说的话吧~"></textarea>
                </div>
                <div id="sendmessage"></div>
            </div>
            <div class="board-show">
                <ul id="message-list">
                   <?php
						$msgxml = new DOMDocument(); 
						// 加载Xml文件 
						$msgxml->load("data/msg.xml"); 
						// 获取所有的msgitem标签 
						$msgitemDom = $msgxml->getElementsByTagName("msgitem"); 
						// 循环遍历msgitem标签 
						//加载条数
						$loadnum=0;
						foreach($msgitemDom as $item){ 
						if($loadnum==9)break;
						// 获取time标签Node 
						$time = $item->getElementsByTagName("time"); 
						$content = $item->getElementsByTagName("content"); 
						/** 
						* 要获取Title标签的Id属性要分两部走 
						* 1. 获取title中所有属性的列表也就是$title->item(0)->attributes 
						* 2. 获取title中id的属性，因为其在第一位所以用item(0) 
						* 
						* 小提示： 
						* 若取属性的值可以用item(*)->nodeValue 
						* 若取属性的标签可以用item(*)->nodeName 
						* 若取属性的类型可以用item(*)->nodeType 
						*/ 
						$headnum=mt_rand(1,9);
						echo '<li class="clearfix"><div class="item-left"><img src="images/icon/headimg' . $headnum .'.png" alt="headimg"></div><div class="item-right"><div class="msgvalue"><span>' . $content->item(0)->nodeValue . '</span></div><div class="msgdate clearfix"><span>'. $time->item(0)->nodeValue .'</span></div></div></li>';

						$loadnum=$loadnum+1;
						} 
						?>
                </ul>
            </div>
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
<a id="gotop" href="#op-container"></a>

<div id="msgtip"><img src="images/icon/msgnoneinput.png"></div>
<script type="application/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/CommonJs.js"></script>
<script>
    window.onload = function () {
        setTimeout('$("#op-wait").fadeOut(); $("#op-welcome").css("opacity","0").removeClass("show");$(".op-role-container div").addClass("show");', 2000);
    }
    $(document).ready(function () {
        $("#op-welcome-go").click(function () {
            $("#op-welcome").addClass("show");
            $(document).scrollTop(0);
        });
        $(document).scroll(function () {
            if ($(document).scrollTop() >= 200) {
                $("#gotop").addClass("show");
            } else {
                $("#gotop").removeClass("show");
            }
        });
        $("#sendmessage").click(function () {
            var mydata = $.trim($("#msgdata").val());
            if (mydata == "") {
                $("#msgtip").addClass("show");
				$('#msgtip img').attr('src','images/icon/msgnoneinput.png')
                setTimeout("$('#msgtip').removeClass('show');", 1500);
                return false;
            }
			var headimg = Math.ceil(Math.random() * 10), html = "", now = new Date();
			if (headimg == 10 || headimg == 0)headimg = 1;
			var curdate=(now.getMonth() + 1) + '月' + now.getDate() + '号' + now.getHours() + ':' + now.getMinutes();
            $(".board-show").scrollTop(0);
            $.ajax({
                type: "POST",
                url: "api/savemsg.php",
                dataType: "text",
                data: {MyMsg: mydata,MyTime:curdate},
                success: function (data) {
                    if (data=="OK") {
						$("#msgtip").addClass("show");
						$('#msgtip img').attr('src','images/icon/msgupok.png')
						setTimeout("$('#msgtip').removeClass('show');", 1500);
						if ($("#message-list li").length == 15) {
                            $("#message-list li").last().remove();
                        }
                        html = '<li class="clearfix"><div class="item-left"><img src="images/icon/headimg' + headimg + '.png" alt="headimg"></div><div class="item-right"><div class="msgvalue"><span>' + mydata + '</span></div><div class="msgdate clearfix"><span>' +curdate+ '</span></div></div></li>';
                        $("#message-list").prepend(html);
						$("#msgdata").val("");
                    }
                }
            });
        });
    });
    //初始化滚动
       var mySwiper = new Swiper('.swiper-container', {
           autoplay: 3000,
           speed: 300,
           loop: true,
           slidesPerView : 2,
           updateOnImagesReady: true,
           autoplayDisableOnInteraction: false
       });
</script>
</body>
</html>