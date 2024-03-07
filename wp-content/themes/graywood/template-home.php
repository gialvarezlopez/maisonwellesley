<?php
    /*
     * Template Name: Template Home
     */
?>

<?php  get_header(); ?>

    <!-- Menu Section -->
    <?php $full_home = true;?>
    <?php include("inc/nav.php"); ?>

        <!-- Hero Section -->
        <?php $data_hero = get_field("h_hero_1");?>
        <?php $is_active_hero = $data_hero['active']; ?>
        <?php if($is_active_hero) { ?>
            <section class="h_video">

                <div class="content-full-video">
                    <video class="playerembed" id="playerembed" autoplay="true" loop muted="false" controls  poster="<?php echo $data_hero['image']['sizes']['hero_v1']; ?>">
                        <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/maison_wellesley_hd.mp4" type="video/mp4">
                        <!-- <source src="<?php //echo get_stylesheet_directory_uri(); ?>/videos/Unified_Rebrand_logo-animation_v2.ogg" type="video/ogg"> -->
                        Your browser does not support the video tag.
                    </video>
                </div>
            </section>
        <?php  } ?>

        <!-- Hero Section -->
        <!--
        <?php //$data_hero = get_field("h_hero_1");?>
        <?php //$is_active_hero = $data_hero['active']; ?>
        <?php /* if($is_active_hero) { ?>
            <section id="holder_hero" >
                <div class="hero-image x-hidden bg-triangle"  style="
                    background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)),  
                    url('<?php echo $data_hero['image']['sizes']['hero_v1']; ?>')">
                    <div class="container">
                        <div class="hero-text">
                            
                            <div class="single-item-rtlx plx" data-aos="fade-up">
                                <div class="big_logo_hero"><img src="<?php echo $data_hero['logo_1']['url']; ?>" class="img-fluid"></div>    
                                <div class="element-info" >

                                    <?php if($data_hero['slogan']) { ?>
                                        <img src="<?php echo $data_hero['slogan']['url']; ?>" class="img-fluid"> 
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } */?>
        -->

        <!-- Navbar -->
        <section class="h_bar-logo" >
            <div class="container">
                <div class="wrap">
                    <div class="empty"></div>
                    <div data-aos="fade-right"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new/logo-maison-black.png" class="img-fluid"></div>
                    <div class="holder_register" data-aos="fade-right" data-aos-delay="200">REGISTER <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new/bar.png" class="img-fluid btn-open-register"></div>
                </div>
            </div>
        </section>

        <!-- Hero Section 2 -->
        <?php $data_hero_2 = get_field("h_hero_2");?>
        <?php $is_active_hero_2 = $data_hero_2['active']; ?>
        <?php if($is_active_hero_2) { ?>
            <section id="holder_hero" >
                <div class="hero-image x-hidden bg-triangle"  style="
                    background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)),  
                    url('<?php echo $data_hero_2['image']['sizes']['hero_v1']; ?>')">
                    <div class="container">
                        <div class="hero-text">
                            
                            <div class="single-item-rtlx plx" data-aos="fade-up">
                                <div class="big_logo_hero"><img src="<?php echo $data_hero_2['logo_1']['url']; ?>" class="img-fluid"></div>    
                                <div class="element-info" >
                                    <?php if($data_hero_2['heading']) { ?>
                                        <h1><?php echo $data_hero_2['heading']; ?></h1>
                                    <?php } ?> 
                                    <?php if($data_hero_2['sub_heading']) { ?>
                                        <h2><?php echo $data_hero_2['sub_heading']; ?></h2> 
                                    <?php } ?>
                                    <!--
                                    <br>
                                    <div class="holder-link">
                                        <a href="#" class="btn-link dark  btn-open-register" data-id="demo-modal">ENTER NOW</a>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>


        <!-- Intro -->
        <?php $data_intro = get_field("h_intro");?>
        <?php $is_active_intro = $data_intro['active']; ?>   
        <?php if($is_active_intro) { ?>
            <section class="h_intro">
                <div class="container">
                    <div class="bg" style="background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url('<?php echo $data_intro['image']['sizes']['single_v1']; ?>')">
                        <?php if($data_intro['heading']) { ?>
                            <h1><?php echo $data_intro['heading']; ?></h1> 
                        <?php } ?>
                    </div>
                    <div class="info">
                        <?php echo $data_intro['description']; ?>
                        <?php if( $data_intro['link'] ) { ?>
                            <div class="holder-link">
                                <br>
                                <?php echo printBtn($data_intro['link'], "btn-link white  hvr-sweep-to-bottom"); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        <?php } ?> 
        
        
        <?php $data_neighbourhood = get_field("h_neighbourhood");?>
        <?php $is_active_neighbourhood = $data_neighbourhood['active']; ?>
  

            <section class="h_location">
                <div class="container">
                    <div class="flex-layout middle betweenX">
                        <!-- Location -->
                        <?php $data_location = get_field("h_location");?>
                        <?php $is_active_location = $data_location['active']; ?>   
                        <?php if($is_active_location) { ?>
                            <div class="left" data-aos="zoom-in-down">
                                <img src="<?php echo $data_location['map']['url']; ?>" class="img-fluid">
                            </div>
                        <?php } ?>

                        <?php if($is_active_neighbourhood) { ?>

                            <div class="right">
                                <?php if($data_neighbourhood['heading']) { ?>
                                    <h1 class="text-center"><?php echo $data_neighbourhood['heading']; ?></h1>
                                <?php } ?>

                                <?php if($data_neighbourhood['description']) { ?>
                                    <div class="text-center"><?php echo $data_neighbourhood['description']; ?></div>
                                <?php } ?>

                                
                                <div class="counters">
                                    <div class="holder_numbers">
                                        <?php if($data_neighbourhood['score']) { ?>
                                            <?php 
                                                foreach($data_neighbourhood['score'] as $item => $elem)
                                                {
                                                   ?>
                                                    <div class="item">
                                                        <div class="score" data-count="<?php echo $elem['value']; ?>"><?php echo $elem['value']; ?></div>
                                                        <div class="name"><?php echo $elem['label']; ?></div>
                                                    </div>
                                                   <?php
                                                }
                                            ?>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            
                        <?php } ?>
                    </div>
                </div>
            </section>
        
       <!-- Series and comming soon -->
        <?php //$data_partners = get_field("h_partners");?>
        <?php $list = $data_neighbourhood['gallery']; //var_dump($list); ?>
        <?php if($list) { ?>
            <section class="h_neighbourhood">
                <div class="container">
                    <div class="grid-series" >
                        <?php 
                            foreach($list as $value )
                            {
                                //if($value['active']) {
                                ?>
                                    <div class="child" data-aos="zoom-in">
                                        <div class="project_wrapper">
                                            <img class="poster img-fluid" src="<?php echo $value['sizes']['gallery_v2']; ?>" class="img-fluid">
                                        </div>
                                    </div>
                                <?php
                                //}
                            }
                        ?>

                    </div>
                </div>
            </section>
        <?php } ?>                                         


       <?php $data_the_core = get_field("h_the_core"); ?> 
        <?php if($data_the_core) { ?>
            <section class="h_the_core">
                <div class="container">
                    <div class="info" data-aos="fade-up">
                        <?php if($data_the_core['logo']) { ?>
                            <div><img src="<?php echo $data_the_core['logo']['url']; ?>"></div>
                        <?php } ?>
                        <?php if($data_the_core['heading']) { ?>
                            <h1><?php echo $data_the_core['heading']; ?></h1>
                        <?php } ?>
                        <?php if($data_the_core['description']) { ?>
                            <?php echo $data_the_core['description']; ?>
                        <?php } ?>
                        <?php if( $data_the_core['link'] ) { ?>
                                <div class="holder-link">
                                    <br>
                                    <?php echo printBtn($data_the_core['link'], "btn-link dark  btn-open-register hvr-sweep-to-bottom"); ?>
                                </div>
                        <?php } ?>
                    </div>
                </div>
            </section> 

            <?php $listAmenities = $data_the_core['amenities_gallery']; ?>
            <?php  if($listAmenities) {  //var_dump($listAmenities); ?>
                <section class="h_neighbourhood amenities_list">
                    <div class="container">
                        <div class="grid-series" >
                            <?php 
                            foreach($listAmenities as $value )
                            {
                                //if($value['active']) {
                                ?>
                                    <div class="child" data-aos="zoom-in">
                                        <div class="project_wrapper">
                                            <img class="poster img-fluid" src="<?php echo $value['sizes']['gallery_v1']; ?>" class="img-fluid" data-aos="fade-up">
                                        </div>
                                        <div class="title"><h3><?php echo $value['title']; ?></h3></div>
                                    </div>
                                <?php
                                //}
                            }
                            ?>
                        </div>
                    </div>
                </section>
            <?php } ?>

            <!-- Hero Section -->
            <?php $suite = $data_the_core['suite']; ?>
            <?php if($suite) { ?>
                <section id="holder_hero" >
                    <div class="hero-image x-hidden bg-triangle"  style="
                        background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)),  
                        url('<?php echo $suite['image']['sizes']['hero_v1']; ?>')">
                        <div class="container">
                            <div class="hero-text">
                                
                                <div class="single-item-rtlx plx" data-aos="fade-up">
                                    <div class="big_logo_hero"><img src="<?php echo $suite['logo_1']['url']; ?>" class="img-fluid"></div>    
                                    <div class="element-info" >

                                        <?php  if($suite['heading']) { ?>
                                            <h1><?php echo $suite['heading']; ?></h1>
                                        <?php } ?> 


                                        <!--
                                        <br>
                                        <div class="holder-link">
                                            <a href="#" class="btn-link dark  btn-open-register" data-id="demo-modal">ENTER NOW</a>
                                        </div>
                                        -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php } ?>

       <?php } ?>

       
       <?php $data_investments = get_field('h_investments'); ?>
        <?php if($data_investments) { ?>
            <section class="h_invesment">
                <div class="container">
                    <div class="flex-layout middle betweenX">
                        <div class="left" data-aos="zoom-in-down">
                            <?php if($data_investments['logo']) { ?>
                                <img src="<?php echo $data_investments['logo']['url']; ?>" class="img-fluid">
                            <?php } ?>
                        </div>
                        <div class="right brown" data-aos="zoom-in-down">
                            <?php if($data_investments['heading']) { ?>
                                <h1><?php echo $data_investments['heading']; ?></h1>
                            <?php } ?>

                            <?php if($data_investments['description']) { ?>
                                <?php echo $data_investments['description']; ?>
                            <?php } ?>

                            <?php if( $data_investments['link_1'] ) { ?>
                                <div class="holder-link">
                                    <br>
                                    <?php echo printBtn($data_investments['link_1'], "btn-link dark  btn-open-register hvr-sweep-to-bottom"); ?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php } ?>                                     


<?php get_footer(); ?>
