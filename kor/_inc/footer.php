<script src="/js/tap.js"></script>
<script src="/js/subV.js"></script>
<script src="https://unpkg.com/aos%402.3.1/dist/aos.js"></script>

<script>
    subV('SMUF 소개', '오시는길');
</script>


<footer>

    <div id="topBtn">
        <img src="/img/icon/topBtnArrow.png" alt="">
        TOP
    </div>

    <div class="w">
        <div class="wave" style="background-image: url(/img/g_wave.png);"></div>
    </div>
    <div class="wrap" max="1280">

        <div class="sn">
            <div class="fa snn">
                <a href="https://www.facebook.com/seoulmusicfestival" target="_blank">
                    <img src="/img/f_m1.png" alt="">
                </a>
            </div>
            <div class="in snn">
                <a href="https://www.instagram.com/seoulmusicfesta/" target="_blank">
                    <img src="/img/f_m2.png" alt="">
                </a>
            </div>
        </div>

        <div class="c">
            <div class="l">
                <img src="/img/logo/smf_logoW.png" alt="">
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

    <!-- ... existing HTML ... -->
    <div id="like_button_container"></div>
    <!-- ... existing HTML ... -->

</footer>

<!-- React를 실행. -->
<!-- 주의: 사이트를 배포할 때는 "development.js"를 "production.min.js"로 대체하세요. -->
<script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
<script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>

<!-- 만든 React 컴포넌트를 실행. -->
<script src="/js/like_button.js"></script>



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