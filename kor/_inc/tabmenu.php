<div class="__tp">
    <div class="bx">
        <div class="bef"></div>
        <ul>
            <?php if (strpos($_SERVER['REQUEST_URI'], "about") !== false) { ?>
                <li><a href="/kor/about/outline.php">행사개요</a></li>
                <li><a href="/kor/about/schedule.php">일정표</a></li>
                <li><a href="/kor/about/location.php">오시는길</a></li>
                <li><a href="/kor/about/map.php">MAP</a></li>
            <?php } else if (strpos($_SERVER['REQUEST_URI'], "lineup") !== false) { ?>
                <li class="on">
                    <a href="/kor/lineup/lineup_1013.php">
                        <span>10/13</span><br>BEAUTIFUL STAGE
                    </a>
                </li>
                <li>
                    <a href="/kor/lineup/lineup_1014.php">
                        <span>10/14</span><br>SOULFUL STAGE
                    </a>
                </li>
                <li>
                    <a href="/kor/lineup/lineup_1015.php">
                        <span>10/15</span><br>POWERFUL STAGE
                    </a>
                </li>
                <li>
                    <a href="/kor/lineup/lineup_1016.php">
                        <span>10/16</span><br>WONDERFUL STAGE
                    </a>
                </li>
            <?php } else if (strpos($_SERVER['REQUEST_URI'], "program") !== false) { ?>
                <li class="on">
                    <a href="/kor/program/main_stage.php">MAIN STAGE</a>
                </li>
                <li>
                    <a href="/kor/program/sub_stage.php">SUB STAGE</a>
                </li>
                <li>
                    <a href="/kor/program/side_event.php">부대 프로그램</a>
                </li>
            <?php }; ?>
        </ul>
    </div>
</div>