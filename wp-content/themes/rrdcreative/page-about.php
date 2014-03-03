<?php
/* Template for the About page */
get_header(); 
?>

</div>

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>


    <div id="about-wrapper" style="background: url('<?php echo $image[0] ?>') 50% 50% no-repeat">


        <div id="about-wrapper-btn">

        <?php 
            $args = array( 'post_parent' => '0', 'post_type' => 'about_boxes', 'orderby' => 'menu_order', 'order' => 'ASC');

            $loop = new WP_Query( $args );

            // Get buttons
            
            $i=1;  
            while ( $loop->have_posts() ) : $loop->the_post();
                $btn_img = get_field('box_image');
                $margin_x = (get_field('box_positon_x') - 1)*310;
                $margin_y = (get_field('box_positon_y') - 1)*255;
                
                echo '<div id= "about-btn'.$i.'" class="about-btn" '. 
                        'style = "background-image:url('.$btn_img[url].');'.
                        ' margin-top:'.$margin_y.'px; margin-left:'.$margin_x.'px;"></div>';
                $i++;
            endwhile;
    
           // Get boxes  
           $j=1;  
           while ( $loop->have_posts() ) : $loop->the_post();
             
                $padding_x = (get_field('pop-up_positon_x') - 1)*310;
                $padding_y = (get_field('pop-up_positon_y') - 1)*255;
                echo '<div class = "content-dropdown" id="content-dropdown'.$j.'" style = "padding-top:'.$padding_y.'px; padding-left:'.$padding_x.'px;">';

                $size_x = get_field('pop-up_columns')*310 - 42;
                $size_y = get_field('pop-up_rows')*255 - 30;

                echo '<div class = "box_container" id="box-container'.$j.'" style = "width:'.$size_x.'px; height:'.$size_y.'px;">';

                $close_margin_x = get_field('pop-up_columns')*310 - 65;
                echo '<div class = "close_btn" id= "content-dropdown-closebtn'.$j.'" style = "margin-left:'.$close_margin_x.'px;">';
                ?>
            
                <img src="<?php bloginfo('template_url');?>/images/close_link.png" width="28" height="28" />
                </div>
                
                <div class="title"><?php the_title(); ?></div>
                
                <div class="content_box"><?php the_field('pop-up_content'); ?></div>
                
                </div>
                </div>
        <?php
                $j++;
           endwhile;
       ?>    
    </div>





<!--------------------resposive content---------------------->          
    <div id="ipad-display">

        <div id="about_summary">

            <div id="about_summary_content">
            
                <?php  
                while ( $loop->have_posts() ) : $loop->the_post();
                ?>
                
                
                
                <div class="title"><?php the_title(); ?></div>
                
                <div class="responsive_box"><?php the_field('responsive_content'); ?></div>
                
                <?php
                   endwhile;
                ?>    

                 



               </div>


                </div>

              </div>

       </div>
                  <!--Buffer Bottom------------------------------------------------------------------------->   
        <div id= "BufferBottom"></div> 
 
<?php 
get_footer(); 
?>
