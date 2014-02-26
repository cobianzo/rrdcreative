<?php get_header(); ?>
<div id="nav">
        <a href="<?php bloginfo('url');?>">
        <div id="btn" style="background-image: url(<?php bloginfo('template_url');?>/images/return_background.png);">
            <img src="<?php bloginfo('template_url');?>/images/return_arrow.png" width="7" height="13" alt="read more"> Return to home page
        </div>
        </a>
        <?php 
            $args = array( 'post_parent' => $post->ID, 'post_type' => 'clients', 'orderby' => 'menu_order', 'order' => 'ASC');

            $loop = new WP_Query( $args );
            
            if ($loop->found_posts>1){

                $i=1;  
                while ( $loop->have_posts() ) : $loop->the_post();
                    echo '<a href="#'.$i.'_work1"><div id="btn">';        
                    the_title();
                    echo '</div></a>'; 
                    $i++;
                endwhile;
                wp_reset_postdata();
            }
        ?>



</div>	
</div>    <!--Header-->
<!--Buffer Top------------------------------------------------------------------------->
<div id="BufferTop"></div>

<?php     
    $i=1;  
    $client_title = get_the_title();
    
    while ( $loop->have_posts() ) : $loop->the_post();?>
    
        <div style="position:relative;">
        <div class="sectionContainer">
            <div id="summaryexpand">
                <?php if ($i == 1) { ?>
                    <div class="title"><?php echo $client_title; ?></div>
                 <?php };?>   
                <div class="textlead"><?php the_title(); ?></div>
                <div id="see_more<?php echo $i;?>">
                    Read More <img src="<?php bloginfo('template_url');?>/images/readmore_arrow.png" width="13" height="7" alt="read more">
                </div>
                <div id="more_text<?php echo $i;?>">
                    <?php echo strip_tags(get_field('content')); ?>
                <br></div> 
            </div>
        </div>
        </div>
        
        <?php 
        
        $bg_img = get_field('background_image');
        $img_x = get_field('background_image_x'); 
        $img_y = get_field('background_image_y');       
        echo '<div id="'.$i.'_work1" class="contentConstants" style="background:url('.$bg_img[url].') '.$img_x.'% '.$img_y.'% no-repeat; background-size: cover;"></div>'; 

        $attachments = new Attachments( 'my_attachments' );
        $j = 2;
        if( $attachments->exist() ) : 
            while( $attachments->get() ) :
            echo '<div style="position:relative"><div class="sectionContainer"></div></div>';
            echo '<div id="'.$i.'_work'.$j.'" class="contentConstants" style="background:url('.$attachments->url().') 50% 50% no-repeat; background-size: cover;"></div>'; 
            $j++;
            endwhile;
        endif;
        
        ?>
               
            

    <?php 
        $i++;
    endwhile;
    wp_reset_postdata();
    
get_footer(); 
?>
