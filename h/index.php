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
        !function (a) {
            var b = /iPhone/i, c = /iPod/i, d = /iPad/i, e = /(?=.*\bAndroid\b)(?=.*\bMobile\b)/i, f = /Android/i, g = /(?=.*\bAndroid\b)(?=.*\bSD4930UR\b)/i, h = /(?=.*\bAndroid\b)(?=.*\b(?:KFOT|KFTT|KFJWI|KFJWA|KFSOWI|KFTHWI|KFTHWA|KFAPWI|KFAPWA|KFARWI|KFASWI|KFSAWI|KFSAWA)\b)/i, i = /IEMobile/i, j = /(?=.*\bWindows\b)(?=.*\bARM\b)/i, k = /BlackBerry/i, l = /BB10/i, m = /Opera Mini/i, n = /(CriOS|Chrome)(?=.*\bMobile\b)/i, o = /(?=.*\bFirefox\b)(?=.*\bMobile\b)/i, p = new RegExp("(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)", "i"), q = function (a, b) {
                return a.test(b)
            }, r = function (a) {
                var r = a || navigator.userAgent, s = r.split("[FBAN");
                return "undefined" != typeof s[1] && (r = s[0]), s = r.split("Twitter"), "undefined" != typeof s[1] && (r = s[0]), this.apple = {
                    phone: q(b, r),
                    ipod: q(c, r),
                    tablet: !q(b, r) && q(d, r),
                    device: q(b, r) || q(c, r) || q(d, r)
                }, this.amazon = {
                    phone: q(g, r),
                    tablet: !q(g, r) && q(h, r),
                    device: q(g, r) || q(h, r)
                }, this.android = {
                    phone: q(g, r) || q(e, r),
                    tablet: !q(g, r) && !q(e, r) && (q(h, r) || q(f, r)),
                    device: q(g, r) || q(h, r) || q(e, r) || q(f, r)
                }, this.windows = {
                    phone: q(i, r),
                    tablet: q(j, r),
                    device: q(i, r) || q(j, r)
                }, this.other = {
                    blackberry: q(k, r),
                    blackberry10: q(l, r),
                    opera: q(m, r),
                    firefox: q(o, r),
                    chrome: q(n, r),
                    device: q(k, r) || q(l, r) || q(m, r) || q(o, r) || q(n, r)
                }, this.seven_inch = q(p, r), this.any = this.apple.device || this.android.device || this.windows.device || this.other.device || this.seven_inch, this.phone = this.apple.phone || this.android.phone || this.windows.phone, this.tablet = this.apple.tablet || this.android.tablet || this.windows.tablet, "undefined" == typeof window ? this : void 0
            }, s = function () {
                var a = new r;
                return a.Class = r, a
            };
            "undefined" != typeof module && module.exports && "undefined" == typeof window ? module.exports = r : "undefined" != typeof module && module.exports && "undefined" != typeof window ? module.exports = s() : "function" == typeof define && define.amd ? define("isMobile", [], a.isMobile = s()) : a.isMobile = s()
        }(this);
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
                <div class="menu">
                    <ul>
                        <li class="drop"><a href="#"></a>home
                            <div class="triangle"></div>
                            <div class="dropdownContain">

                                <ul >
                                    <li class="drop_item"> Home1</li>
                                    <li class="drop_item ">  Home2</li>
                                </ul>

                            </div>

                        </li>
                        <li class="drop"><a href="#"></a>about us

                            <div class="triangle"></div>
                            <div class="dropdownContain">

                                    <ul >
                                        <li class="drop_item"> Who we are</li>
                                        <li class="drop_item">  Adwards</li>
                                        <li class="drop_item">  Clients</li>
                                        <li class="drop_item ">  Career</li>
                                    </ul>

                            </div>


                        </li>

                        <li class="drop"><a href="#"></a>services
                            <div class="triangle"></div>
                            <div class="dropdownContain">

                                <ul >
                                    <li class="drop_item"> Services1</li>
                                    <li class="drop_item"> Services2</li>
                                    <li class="drop_item"> Services3</li>
                                    <li class="drop_item"> Services4</li>
                                    <li class="drop_item ">Services5</li>
                                </ul>

                            </div></li>
                        <li class="drop"><a href="#"></a>portfolio
                            <div class="triangle"></div>
                            <div class="dropdownContain">

                                <ul >
                                    <li class="drop_item"> Work1</li>
                                    <li class="drop_item "> Work2</li>
                                    <li class="drop_item ">  Work3</li>
                                    <li class="drop_item "> Work4</li>
                                </ul>

                            </div></li>
                        <li class="drop"><a href="#"></a>team
                            <div class="triangle"></div>
                            <div class="dropdownContain">

                                <ul >
                                    <li class="drop_item"> Team1</li>
                                    <li class="drop_item"> Team2</li>

                                </ul>

                            </div></li>
                        <li class="drop"><a href="#"></a>price
                            <div class="triangle"></div>
                            <div class="dropdownContain">

                                <ul >
                                    <li class="drop_item"> Price1</li>
                                    <li class="drop_item"> Price2</li>
                                    <li class="drop_item"> Price3</li>
                                    <li class="drop_item"> Price4</li>
                                    <li class="drop_item ">Price5</li>
                                </ul>

                            </div></li>
                        <li class="drop"><a href="#"></a>blog
                            <div class="triangle"></div>
                            <div class="dropdownContain">

                                <ul >
                                    <li class="drop_item"> Blog1</li>
                                    <li class="drop_item">  Blog2</li>
                                    <li class="drop_item">  Blog3</li>

                                </ul>

                            </div></li>
                        <li class="drop"><a href="#"></a>contact
                            <div class="triangle"></div>
                            <div class="dropdownContain">

                                <ul >
                                    <li class="drop_item"> Contact1</li>

                                </ul>

                            </div></li>
                        <li class="exit"></li>
                    </ul>
                </div>
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
        <div class="picture_about"></div>
        <div class="about">
            <div class="title_about">
                <div class="line"></div>
                <span class="we_are">We are </span><span class="bloom">bloom</span><br>
                creative agency

            </div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                essentially unchanged.</p>
            <button class="color">read more</button>
        </div>
    </div>
    <div class="border_line"></div>

    <div class="scills">
        <div class="scills_icon">
            <div class="pict_scills1"></div>
            <p>create</p> Lorem Ipsum has been the industry's standardu text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book.
        </div>
        <div class="scills_icon">
            <div class="pict_scills2"></div>
            <p>startup</p> Lorem Ipsum has been the industry's standardu text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book.
        </div>
        <div class="scills_icon none_margin">
            <div class="pict_scills3"></div>
            <p>speed</p> Lorem Ipsum has been the industry's standardu text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book.
        </div>

    </div>
    <div class="picture_action"></div>
    <div class="mobile">A mobile first digital products lab.
        <button>learn more</button>
    </div>
    <div class="services">
        <div class="title_services_inner">
            <div class="title_line">
                <div class="line"></div>
                <p class="title">services</p>
            </div>

            <div class="strategy services_icon hover_service">
                <div class="show_more"><p class="title_show">strategy</p>
                    <div class="line_show"></div>
                    <span>Lorem Ipsum has been the industry's standard dummy text ever since make a type specimen book.</span>
                    <div class="pointer"></div>
                </div>
                <p class="main_p">strategy</p></div>
            <div class="experince services_icon hover_service">
                <div class="show_more"><p class="title_show">user experince</p>
                    <div class="line_show"></div>
                    <span>Lorem Ipsum has been the industry's standard dummy text ever since make a type specimen book.</span>
                    <div class="pointer"></div>
                </div>
                <p class="main_p">user experince</p></div>
            <div class="technology services_icon hover_service">
                <div class="show_more"><p class="title_show">new technology</p>
                    <div class="line_show"></div>
                    <span>Lorem Ipsum has been the industry's standard dummy text ever since make a type specimen book.</span>
                    <div class="pointer"></div>
                </div>
                <p class="main_p">new technology</p></div>
            <div class="cms services_icon hover_service">
                <div class="show_more"><p class="title_show">cms</p>
                    <div class="line_show"></div>
                    <span>Lorem Ipsum has been the industry's standard dummy text ever since make a type specimen book.</span>
                    <div class="pointer"></div>
                </div>
                <p class="main_p">cms</p></div>

            <div class="smart_tv hover_service ">
                <div class="show_more"><p class="title_show">smart tv app design</p>
                    <div class="line_show"></div>
                    <span>Lorem Ipsum has been the industry's standard dummy text ever since make a type specimen book.</span>
                    <div class="pointer"></div>
                </div>
                <p class="main_p">smart tv app design</p></div>

            <div class="all_services"><p>all services</p>
                <div class="line_small"></div>
            </div>
        </div>
    </div>
    <div class="border_line"></div>
    <div class="support"> <div class="text_support">
            <p>Great Support System</p> Lorem Ipsum has been the industry's standardu text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            <ul><li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li>Morbi quis felis in arcu congue posuere.</li>
                <li>Vivamus euismod felis ut lacus dictum condimentum.</li>
                <li>Praesent laoreet orci commodo dictum aliquet.</li></ul></div>
        <div class="pict_support"></div> </div>
    <div class="contact">Contact with us for start your dream project
        <button class="color change">Contact us</button></div>
    <portfolio>
        <div class="title_line">
            <div class="line"></div>
            <p class="title">portfolio</p>
        </div>
    </portfolio>
    <footer class="site-footer">

        <div class="footer__inner">
            куку
        </div>

    </footer>
</div>

<script src="../dist/main.js"></script>
<script>
    var mySwiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
//          autoplay:3000,
        // If we need pagination
        pagination: '.swiper-pagination'


        // And if we need scrollbar

    })
</script>
</body>
</html>
