<script charset="UTF-8" class="daum_roughmap_loader_script" src="../../../ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<script charset="UTF-8">
    new daum.roughmap.Lander({
        "timestamp": "1662429907801",
        "key": "2bmk8",
    }).render();
</script>

<script src="../../js/tap.js"></script>
<script src="../../js/subV.js"></script>
<script src="../../../unpkg.com/aos%402.3.1/dist/aos.js"></script>

<script>
    subV('SMUF 소개', '오시는길');
</script>


<footer>

    <div id="topBtn">
        <img src="../../img/icon/topBtnArrow.png" alt="">
        TOP
    </div>

    <div class="w">
        <div class="wave" style="background-image: url(../../img/g_wave.png);"></div>
    </div>
    <div class="wrap" max="1280">

        <div class="sn">
            <div class="fa snn">
                <a href="https://www.facebook.com/seoulmusicfestival" target="_blank">
                    <img src="../../img/f_m1.png" alt="">
                </a>
            </div>
            <div class="in snn">
                <a href="https://www.instagram.com/seoulmusicfesta/" target="_blank">
                    <img src="../../img/f_m2.png" alt="">
                </a>
            </div>
        </div>

        <div class="c">
            <div class="l">
                <img src="../../img/logo/smf_logoW.png" alt="">
            </div>

            <div class="rb">

                <div class="add">
                    <span>주소 : 서울시 강남구 도산대로 30길 13-9</span>
                    <span>연락처:070-4170-0944</span>
                    <span>이메일 : seoulmusicfestival@gmail.com</span>
                </div>

                <div class="co">
                    Copyright © 2022 SEOUL MUSIC FESTIVAL. All right reserved.
                </div>

            </div>

        </div>
    </div>

</footer>

<script>
    $('#topBtn').click(function() {
        $('html').animate({
            'scrollTop': "0"
        }, 300);
    });

    function topBtnPlus() {
        let yOffset = $(window).scrollTop() + $(window).height();
        let footer, footerWaveHeight;

        if (window.location.pathname.split('../../index.html')[2] == "about") {
            footer = $('footer').offset().top;
            footerWaveHeight = $('footer').height();
        } else {
            footer = $('footer .w').offset().top;
            footerWaveHeight = $('footer .w').height();
        }

        if ($(window).scrollTop() > 0) {
            $('#topBtn').css({
                'opacity': 1,
                'visibility': 'visible'
            })
        } else {
            $('#topBtn').css({
                'opacity': 0,
                'visibility': 'hidden'
            })
        }

        if (window.location.pathname.split('../../index.html')[2] == "about") {
            if (yOffset >= footer) {
                $('#topBtn').css({
                    'transform': `translateY(-100%)`,
                    'bottom': '100%',
                    'position': 'absolute'
                });
            } else {
                $('#topBtn').css({
                    'transform': `none`,
                    'bottom': '5%',
                    'position': 'fixed'
                });
            }
        } else {
            if (yOffset >= footer) {
                $('#topBtn').css({
                    'transform': `translateY(calc(-${footerWaveHeight}px - 30%))`,
                    'bottom': '100%',
                    'position': 'absolute'
                });
            } else {
                $('#topBtn').css({
                    'transform': `none`,
                    'bottom': '5%',
                    'position': 'fixed'
                });
            }
        }
    }

    $(window).load(function() {
        topBtnPlus();
    });
    window.addEventListener('scroll', topBtnPlus);
    window.addEventListener('resize', topBtnPlus);
</script>
<script>
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);

    window.addEventListener('resize', () => {
        vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    });

    AOS.init({
        duration: 600
    });
</script>