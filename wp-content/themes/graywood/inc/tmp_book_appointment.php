<div class="modal-overlay" style=""></div>
<div id="holderPopupBooking" class="" style="">
	<div class="contentPopup">

        <div class="holderTitleModal">
            <div><h1 class="title  bar-yellow" style="margin-bottom: 0px;">Register Now</h1></div>
            <!--<div><a href="#" id="closePopupBooking" class="closePopup"><img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/close_modal.png"></a></div>-->
            <div><a href="#" id="closePopupBooking" class="closePopup"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/close-brown.png"> </a></div>
        </div>
		
        
		<div class="content_body">
            <div id="holder_form_booking" class="holder_form_booking">
                <div class="fields">

                    <div class="infoForm elementForm"> <?php //echo get_field("srf_description", "option"); ?> </div>

                    <?php //echo do_shortcode('[wpforms id="20" title="false"]'); ?>
                    <?php $srf_form_id = get_field("srf_form_id","option");  ?>
                    <?php 
                    if($srf_form_id){
                        echo do_shortcode('[gravityform id="'.$srf_form_id.'" title="false" description="false" ajax="true"]'); 
                    }
                    ?>

                    <!-- <div id="holderLogoSentForm"><img src="<?php //echo get_stylesheet_directory_uri(); ?>/images/reside.png"></div> -->
                </div>   
            </div>
	    </div>
        
	</div>
</div>





