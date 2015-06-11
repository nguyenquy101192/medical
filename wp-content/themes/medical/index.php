<?php
/**
 * Created by: QuyNH
 * Date: 2015/06/11
 */
?>

<?php get_header(); ?>

<!--search box-->
<section class="search-box">
    <form method="POST" action="#">
        <div class="search-content">
            <input type="text" name="search_content" placeholder="Nhập sản phẩm cần tìm..."
                   onfocus="this.placeholder=&quot;&quot;" onblur="this.placeholder=&quot;Nhập sản phẩm cần tìm...&quot;" />
            <button type="submit" name="search_submit"><span class="fa fa-search"></span></button>
        </div>
        <div class="categories-list">
            <select name="search-by-category">
                <option>Category 1</option>
                <option>Category 2</option>
                <option>Category 3</option>
                <option>Category 4</option>
                <option>Category 5</option>
            </select>
        </div>
    </form>
</section>
<!--end search box-->

<!--slider-->
<section class="slideshow-box">
    <div class="slider-viewport">
        <div class="slide-image">
            <img src="<?php echo bloginfo('template_directory');?>/images/banner.jpg" alt="banner" />
        </div>
    </div>
</section>
<!--end slider-->

<!--content area-->
<div class="content-area">
    <div class="wrapper-content">
        <div class="content-left">
            <section class="feature-box"></section>
            <div class="content-promotion-box"></div>
            <section class="newest-items-box"></section>
            <section class="equipment-items-box"></section>
            <section class="connection-box"></section>
        </div>
        <div class="content-right">
            <div class="contact-promotion-box"></div>
            <section class="best-selling-items-box"></section>
            <section class="videos-box"></section>
            <section class="calendar-viewer-box"></section>
            <section class="social-network-box"></section>
        </div>
    </div>
</div>
<!--end content area-->

<!--news area-->
<div class="news-area">
    <div class="wrapper-news">
        <section class="news-box"></section>
        <section class="logo-box"></section>
    </div>
</div>
<!--end news area-->

<?php get_footer(); ?>