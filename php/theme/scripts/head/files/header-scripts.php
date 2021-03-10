<?php 
    /**
     * php/theme/scripts/head/files/header-scripts.php
     * @package scottshealy
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 03/2021
    **/
?>

<!-- FAVICON -->
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/icons/"/>

<!-- FONTS -->
<!-- FONT-AWESOME -->
<?php include(get_template_directory()."/php/theme/scripts/external/font-awesome/header.php"); ?>

<!-- FRAMEWORK -->
<!-- WP-HEAD -->
<?php wp_head(); ?>

<!-- GOOGLE-ANALYTICS -->
<?php include(get_template_directory()."/php/theme/scripts/external/google-analytics/header.php"); ?>

<!-- STYLESHEET -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.min.css"/>