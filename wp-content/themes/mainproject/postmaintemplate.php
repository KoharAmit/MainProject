<?php
/**
 * Template Name:Main Post template
 * Template Post Type: post
 */
get_header();
?>
<!--now we add our content-->
<!--if we are just using the default content editor then we only need to create a loop to display the post content. -->
<main class="main-project">
    <?php
     if(have_posts()):
       while(have_posts()) : the_post();
        the_content();
       endwhile;
    else:
        echo "<p>Sorry, no posts are found</p>";
    endif;
    ?>
</main>
<?php
get_footer();
?>