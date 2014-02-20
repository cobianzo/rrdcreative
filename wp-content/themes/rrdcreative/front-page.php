<?php get_header(); ?>
<div id="nav">
        <a href="#hero">
        <div id="btn" style="background-image: url(<?php bloginfo('template_url');?>/images/return_background.png);">Some of our clients:</div></a>
        <?php 
            $args = array( 'post_parent' => '0', 'post_type' => 'clients', 'orderby' => 'menu_order', 'order' => 'ASC');

            $loop = new WP_Query( $args );

            $i=1;  
            while ( $loop->have_posts() ) : $loop->the_post();
                echo '<a href="#work'.$i.'"><div id="btn">';        
                the_title();
                echo '</div></a>'; 
                $i++;
            endwhile;
            wp_reset_postdata();
        ?>



    </div>	
</div>   
<!--Buffer Top------------------------------------------------------------------------->
<div id="BufferTop"></div>

<?php $home_bg = get_field('background_image'); ?>

    <!--Hero------------------------------------------------------------------------->    
    <div id="hero" style="background:url(<?php echo $home_bg[url]; ?>) 50% 50% no-repeat; background-size: cover;" class="contentConstantsLine">
        <div id="summarylite">
            <div>
                <?php the_content(); ?>
            </div>
        </div>  
    </div>

  

<?php     
    $i=1;  
    
    while ( $loop->have_posts() ) : $loop->the_post();?>
    
        <div style="position:relative;">
        <div class="sectionContainer">
            <div id="summary">
                <div class="title"><?php the_title();?></div>
                <?php echo '<div id="see_more_index_'.$i.'" style="width:auto; display:none;">' ?>
                    Read More <img src="<?php bloginfo('template_url'); ?>/images/readmore_arrow.png" width="13" height="7" alt="read more">
                </div>
                <?php 
                    echo '<div id="container'.$i.'">';
                    ?>
                <div class="text"><?php the_field('content'); ?></div>      
                <div class="text">
                        <a class="viewmore" href="<?php the_permalink(); ?>">view more</a>
                </div>
                </div>
            </div>
        </div>
        </div>
        
        <a href="<?php the_permalink(); ?>">
            <?php 
            
                $bg_img = get_field('background_image');
                $img_x = get_field('background_image_x'); 
                $img_y = get_field('background_image_y');       
                echo '<div id="work'.$i.'" class="contentConstantsLine" style="background:url('.$bg_img[url].') '.$img_x.'% '.$img_y.'% no-repeat; background-size: cover;"></div>'; 
            ?>
        </a>
    <?php    
        $i++;
    endwhile;
    wp_reset_postdata();
    
get_footer(); 
?>
