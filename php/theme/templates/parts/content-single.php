<?php 
    /**
     * php/theme/templates/parts/content-single.php
     * @package scottshealy
     * @author Scott Shealy
     * @version 1.0.0
     * @copyright 03/2021
    **/
?>

<!-- CONTENT-SINGLE -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_content(); ?>
</article>