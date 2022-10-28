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
            <figure class="itm01">이미지1</figure>
            <figure class="itm02">이미지2</figure>
            <figure class="itm02">이미지3</figure>
        </div>
        <div class="slogn">
            <h2>dkdkdkjdkjfjkldklj</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore laborum debitis aut.</p>
        </div>
    </section>
</main>




<?php
include_once(G5_THEME_PATH.'/tail.php');