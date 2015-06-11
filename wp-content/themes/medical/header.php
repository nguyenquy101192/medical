<?php
/**
 * Created by: QuyNH
 * Created at: 2015/06/11
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="shortcut icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/images/favicon.ico"/>
    <title>
        <?php
        if (function_exists('is_tag') && is_tag()) {
            single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
        elseif (is_archive()) {
            wp_title(''); echo ' Archive - '; }
        elseif (is_search()) {
            echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
        elseif (!(is_404()) && (is_single()) || (is_page())) {
            wp_title(''); echo ' - '; }
        elseif (is_404()) {
            echo 'Not Found - '; }
        if (is_home()) {
            bloginfo('name'); echo ' - '; bloginfo('description'); }
        else {
            bloginfo('name'); }
        if ($paged>1) {
            echo ' - page '. $paged; }
        ?>
    </title>

    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/style.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery-1.9.1.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="header-logo">
        <?php get_option('logo_header'); ?>
        <img src="<?php echo bloginfo('template_directory');?>/images/logo.jpg" alt="logo" />
    </div>
    <div class="header-top-menu">
        <?php wp_nav_menu('Home Menu'); ?>
    </div>
</header>