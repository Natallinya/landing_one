<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>
<html class="no-js ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Главная</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <script>
        !function(a){var b=/iPhone/i,c=/iPod/i,d=/iPad/i,e=/(?=.*\bAndroid\b)(?=.*\bMobile\b)/i,f=/Android/i,g=/(?=.*\bAndroid\b)(?=.*\bSD4930UR\b)/i,h=/(?=.*\bAndroid\b)(?=.*\b(?:KFOT|KFTT|KFJWI|KFJWA|KFSOWI|KFTHWI|KFTHWA|KFAPWI|KFAPWA|KFARWI|KFASWI|KFSAWI|KFSAWA)\b)/i,i=/IEMobile/i,j=/(?=.*\bWindows\b)(?=.*\bARM\b)/i,k=/BlackBerry/i,l=/BB10/i,m=/Opera Mini/i,n=/(CriOS|Chrome)(?=.*\bMobile\b)/i,o=/(?=.*\bFirefox\b)(?=.*\bMobile\b)/i,p=new RegExp("(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)","i"),q=function(a,b){return a.test(b)},r=function(a){var r=a||navigator.userAgent,s=r.split("[FBAN");return"undefined"!=typeof s[1]&&(r=s[0]),s=r.split("Twitter"),"undefined"!=typeof s[1]&&(r=s[0]),this.apple={phone:q(b,r),ipod:q(c,r),tablet:!q(b,r)&&q(d,r),device:q(b,r)||q(c,r)||q(d,r)},this.amazon={phone:q(g,r),tablet:!q(g,r)&&q(h,r),device:q(g,r)||q(h,r)},this.android={phone:q(g,r)||q(e,r),tablet:!q(g,r)&&!q(e,r)&&(q(h,r)||q(f,r)),device:q(g,r)||q(h,r)||q(e,r)||q(f,r)},this.windows={phone:q(i,r),tablet:q(j,r),device:q(i,r)||q(j,r)},this.other={blackberry:q(k,r),blackberry10:q(l,r),opera:q(m,r),firefox:q(o,r),chrome:q(n,r),device:q(k,r)||q(l,r)||q(m,r)||q(o,r)||q(n,r)},this.seven_inch=q(p,r),this.any=this.apple.device||this.android.device||this.windows.device||this.other.device||this.seven_inch,this.phone=this.apple.phone||this.android.phone||this.windows.phone,this.tablet=this.apple.tablet||this.android.tablet||this.windows.tablet,"undefined"==typeof window?this:void 0},s=function(){var a=new r;return a.Class=r,a};"undefined"!=typeof module&&module.exports&&"undefined"==typeof window?module.exports=r:"undefined"!=typeof module&&module.exports&&"undefined"!=typeof window?module.exports=s():"function"==typeof define&&define.amd?define("isMobile",[],a.isMobile=s()):a.isMobile=s()}(this);
    </script>
    <link rel="stylesheet" href="../dist/main.css" type="text/css">
</head>

<body>

<div class="site-body">
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src="../dist/img/slider1.png"></div>
            <div class="swiper-slide"><img src="../dist/img/slider2.png"></div>
            <div class="swiper-slide"><img src="../dist/img/slider3.png"></div>
            ...
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>


    </div>
    <div class="center-body">
        <header class="site-header">
            <div class="wrapper">
                <div class="menu"><ul>
                        <li><a href="#"></a>home</li>
                        <li><a href="#"></a>about us</li>
                        <li><a href="#"></a>services</li>
                        <li><a href="#"></a>portfolio</li>
                        <li><a href="#"></a>team</li>
                        <li><a href="#"></a>price</li>
                        <li><a href="#"></a>blog</li>
                        <li><a href="#"></a>contact</li>
                        <li class="exit"></li>
                    </ul></div>
              <div class="logo"></div>

            </div>
        </header>
        <div class="main_title">
            <p>CREATIVE AGENCY <span class="viol">DESIGN</span></p>
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown <br>
            printer took a galley of type and scrambled it to make a type specimen book.

        </div>
        <fieldset class="main_actions">
            <button>get started</button>
            <button class="take">take a tour</button>

        </fieldset>
        <div class="about"></div>
        <footer class="site-footer">

                <div class="footer__inner">
                    куку
                </div>

        </footer>
    </div>
</div>
<script src="../dist/main.js"></script>
<script>
    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        //autoplay:3000,
        // If we need pagination
        pagination: '.swiper-pagination',


        // And if we need scrollbar

    })
</script>
</body>
</html>
