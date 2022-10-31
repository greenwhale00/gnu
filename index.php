<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>


<main class="main_page">
    <section class="main_visual">
        <div class="main_slide">
            <figure class="itm01"></figure>
            <figure class="itm02"></figure>
            <figure class="itm03"></figure>
        </div>
        <div class="slogan">
            <h2>미래를 선도하는 기업, 듀크린</h2>
            <p>
                집진기의 새로운 가치를 더하는 참 된 기업<br />우리는, 당신의 미래를 더욱 더 건강하게 만듭니다.<br />쾌적한 작업환경으로, Dust and Clean! DUCLEAN!
            </p>
        </div>
    </section>
    <section class="service">
        <div class="inner flex">

            <div class="left">
                <h3>news &amp; notice <a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=notice">
                        <i class="xi-plus"></i></a></h3>
                <? echo latest("theme/money001", "qa",5, 25);?>
            </div>

            <div class="center">
                <!-- * 카카오맵 - 지도퍼가기 -->
                <!-- 1. 지도 노드 -->
                <div style="width: 400px" id="daumRoughmapContainer1667184292612"
                    class="root_daum_roughmap root_daum_roughmap_landing">
                </div>

                <!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
                <script charset="UTF-8" class="daum_roughmap_loader_script"
                    src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

                <!-- 3. 실행 스크립트 -->
                <script charset="UTF-8">
                new daum.roughmap.Lander({
                    "timestamp": "1667184292612",
                    "key": "2caug",
                    //"mapWidth": "640",
                    "mapHeight": "200"
                }).render();
                </script>
            </div>
            <div class="right">
                <? include_once(G5_THEME_PATH.'/customer.php');?>
            </div>
        </div>


    </section>
</main>




<?php
include_once(G5_THEME_PATH.'/tail.php');