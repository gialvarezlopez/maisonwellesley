
<div id="holderTopBar" class="<?php echo (isset($navbar_pos_relative) && $navbar_pos_relative==true)?"relative":""; ?>">
    <div class="container" >
        <header id="main_menu">
            <div class="nav">
                <?php 
                    $mainLogos = get_field("sg_header","option"); 
                    $topLogo =  $mainLogos['logo'];
                ?>
                <div>
                    <img src="<?php echo $topLogo['url']; ?>" class="mg-fluidx logoTop"> 
                    <!-- <img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/home/icons/Logo_Nav_Y9929.png" class="mg-fluidx logoTop" /> -->
                </div>
                <div>
                    <?php /* if(!1){  //if(isset($full_home) && $full_home == true){ ?>
                        <div id="holder_items_menu">
                            <div class="holder-icon-main-menu">
                                <img class="icon-action-menu" id="icon-menu-open" src="<?php //echo get_stylesheet_directory_uri(); ?>images/icons/menu_open.png">
                                <img class="icon-action-menu" id="icon-menu-close" src="<?php //echo get_stylesheet_directory_uri(); ?>images/icons/menu_close.png">
                            </div>
                            
                            <div id="nav-parent">
                                <div class="holderMenuItems">
                                    <?php 
                                        
                                        $args = array(
                                            'theme_location' => 'header-menu',
                                            'menu_class'=>'h-menu',
                                            'menu_id'=> '',
                                            'add_li_class'  => 'nav-item'
                                        );
                                        wp_nav_menu($args);
                                        
                                        
                                    ?>
                                    <ul>
                                        <li><a href="about.php">about</a></li>
                                        <li><a href="centriverse.php">the centriverse </a></li>
                                        <li><a href="amenities.php">amenities</a></li>
                                        <li><a href="interiors.php">interiors</a></li>
                                        <li><a href="#">brochure</a></li>
                                        <li><a href="team.php">team</a></li>
                                        <li><a href="contact.php">contact</a></li>
                                        <li><a href="#" class="btn-link dark btn-open-register hvr-sweep-to-bottom">REGISTER NOW</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>  
                    <?php }else{ ?>                          
                        
                         <!-- <a href="#" class="btn-link white btn-open-register hvr-sweep-to-bottom hide-mobile" id="btn_top_register" data-id="demo-modal">REGISTER NOW</a> -->
                    <?php } */?>                     
                </div>
            </div>
        </header>
    </div>    
</div>


<?php /*
<div class="holderLogo">
    <div class='container'>
        <header id="main_menu">
            <?php 
                //$url_home = (get_home_url()); 
                $mainLogos = get_field("s_g_header","option"); 
                $topLogo =  $mainLogos['top_logo'];
            ?>
            <a href="#"><img src="<?php echo $topLogo['url']; ?>" class="logo_top"></a>
            <div id="holder_items_menu">
                <div class="holder-icon-main-menu">
                    <img class="icon-action-menu" id="icon-menu-open" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu_open.svg">
                    <img class="icon-action-menu" id="icon-menu-close" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menu_close.svg">
                </div>
                
                <div id="nav-parent">
                    <div class="holderMenuItems">
                        <?php 
                            $args = array(
                                'theme_location' => 'header-menu',
                                'menu_class'=>'h-menu',
                                'menu_id'=> '',
                                'add_li_class'  => 'nav-item'
                            );
                            wp_nav_menu($args);
                        ?>
                    </div>
                </div>
            </div>
            
        </header>
    </div>
</div>
*/ ?>