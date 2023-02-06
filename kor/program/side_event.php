<!DOCTYPE html>
<html lang="ko">
<?php include "../_inc/config.php"; ?>

<body>
    <?php include "../_inc/header.php"; ?>
    <main class="_program side_event _sub">

        <div class="__subw">
            <div class="wave" style="background-image: url(/img/w_wave_148.png);"></div>
        </div>

        <div class="wrap" max="1280">
            <?php include "../_inc/tabmenu.php"; ?>
        </div>

        <div class="swiper se_slide">

            <div class="btnlist">
                <button class="prev"></button>
                <button class="next"></button>
            </div>

            <div class="swiper-wrapper">

                <div class="swiper-slide culture">

                    <div class="wrap" max="1280">

                        <dl class="t_2">
                            <dt>한류를 선도하는 다양한 대중문화를 경험하는</dt>
                            <dd>K-Culture 체험Zone</dd>
                        </dl>

                    </div>

                    <div class="imgbx">

                        <div class="wrap" max="1280">

                            <div class="img">
                                <img src="/img/sub/program/side_event_img01.jpg" alt="">
                            </div>

                            <ul class="cont">
                                <li>
                                    <h2>일시</h2>
                                    <p>2022년 10월 13일(목) ~ 16(일) 12:00 ~ 19:00</p>
                                </li>
                                <li>
                                    <h2>장소</h2>
                                    <p>노들스퀘어</p>
                                </li>
                                <li>
                                    <h2>내용</h2>
                                    <p>
                                        VR을 통해 한류를 선도하는 대중문화를 경험하는<br>
                                        K-Culture 체험 프로그램
                                    </p>
                                </li>
                            </ul>

                            <div class="list_b">

                                <ul class="list">
                                    <li>
                                        <div class="b_x">
                                            <div class="icon">
                                                <img src="/img/sub/program/culture_icon_music.png" alt="">
                                            </div>
                                            <p>뮤직</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b_x">
                                            <div class="icon">
                                                <img src="/img/sub/program/culture_icon_concert.png" alt="">
                                            </div>
                                            <p>공연</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b_x">
                                            <div class="icon">
                                                <img src="/img/sub/program/culture_icon_travel.png" alt="">
                                            </div>
                                            <p>여행</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b_x">
                                            <div class="icon">
                                                <img src="/img/sub/program/culture_icon_lecture.png" alt="">
                                            </div>
                                            <p>강의</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="b_x">
                                            <div class="icon">
                                                <img src="/img/sub/program/culture_icon_enter.png" alt="">
                                            </div>
                                            <p>예능</p>
                                        </div>
                                    </li>
                                </ul>

                            </div>

                        </div>

                        <div class="obj">
                            <div class="oo o1">
                                <img src="/img/sub/program/culture_icon1.png" alt="">
                            </div>
                            <div class="oo o2">
                                <img src="/img/sub/program/culture_icon2.png" alt="">
                            </div>
                            <div class="oo o3">
                                <img src="/img/sub/program/culture_icon3.png" alt="">
                            </div>
                            <div class="oo o4">
                                <img src="/img/sub/program/culture_icon4.png" alt="">
                            </div>
                            <div class="oo o5">
                                <img src="/img/sub/program/culture_icon5.png" alt="">
                            </div>
                        </div>

                    </div>


                </div>

                <div class="swiper-slide beuity">

                    <div class="wrap" max="1280">

                        <dl class="t_2">
                            <dt>K-Beauty를 이끄는 국내 뷰티 브랜드 총집합</dt>
                            <dd>SMUF Beauty Zone</dd>
                        </dl>

                    </div>

                    <div class="imgbx">

                        <div class="wrap" max="1280">

                            <div class="img">
                                <img src="/img/sub/program/side_event_img02.jpg" alt="">
                            </div>

                            <ul class="cont">
                                <li>
                                    <h2>일시</h2>
                                    <p>2022년 10월 13일(목) ~ 16(일) 12:00 ~ 19:00</p>
                                </li>
                                <li>
                                    <h2>장소</h2>
                                    <p>노들스퀘어</p>
                                </li>
                                <li>
                                    <h2>내용</h2>
                                    <p>
                                        VR을 통해 한류를 선도하는 대중문화를 경험하는<br>
                                        K-Culture 체험 프로그램
                                    </p>
                                </li>
                            </ul>
                            <div class="brand">
                                <h2>참가브랜드</h2>
                                <div class="img">
                                    <img src="/img/sub/program/brand_logo.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="obj">
                            <div class="oo o1">
                                <img src="/img/sub/program/beauty_icon1.png" alt="">
                            </div>
                            <div class="oo o2">
                                <img src="/img/sub/program/beauty_icon2.png" alt="">
                            </div>
                            <div class="oo o3">
                                <img src="/img/sub/program/beauty_icon3.png" alt="">
                            </div>
                            <div class="oo o4">
                                <img src="/img/sub/program/beauty_icon4.png" alt="">
                            </div>
                            <div class="oo o5">
                                <img src="/img/sub/program/beauty_icon5.png" alt="">
                            </div>
                            <div class="oo o6">
                                <img src="/img/sub/program/beauty_icon6.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "../_inc/footer.php"; ?>
    <script>
        new Swiper('.se_slide', {
            loop: true,
            autoHeight: true,
            navigation: {
                nextEl: '._program.side_event .se_slide .btnlist .next',
                prevEl: '._program.side_event .se_slide .btnlist .prev',
            },
        });
    </script>
</body>

</html>