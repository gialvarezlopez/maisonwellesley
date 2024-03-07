<?php
//Implement Cookie with HTTPOnly and Secure flag in WordPress

function y9929_settings(){
	//Featured Image
	add_theme_support('post-thumbnails');

	//===================
	//Sizes custom
    //===================
    add_image_size('hero_v1', 1480,818, true); //Crop with true 
    add_image_size('single_v1', 660,372, true); //Crop with true 
    //add_image_size('single_v2', 832,576, true); //Crop with true
    add_image_size('gallery_v1', 472,768, true); //Crop with true, Amenities
    add_image_size('gallery_v2', 472,340, true); //Crop with true , Neighbourhood 
}

add_action('after_setup_theme','y9929_settings');

/* CSS and JS */
function y9929_styles(){
	//==============================
	//Add style page
	//==============================
    
    //wp_enqueue_style("bootstrap","https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css");
	wp_enqueue_style("fonts", get_template_directory_uri().'/fonts/stylesheet.css',array(),'1.0.0');
    wp_enqueue_style("reset", get_template_directory_uri().'/css/reset.css',array(),'1.0.0');


    //Visual Percent
    //wp_enqueue_style("preload-css", get_template_directory_uri().'/assets/visual-percent-preloader/percent-preloader.css');
    //wp_enqueue_script('preload-js',get_template_directory_uri()."/assets/visual-percent-preloader/percent-preloader.min.js", array('jquery'), '1.0.0', true);
    

    //slick
    wp_enqueue_style("slick-css", get_template_directory_uri().'/assets/slick/slick.css');
    wp_enqueue_script('slike-js',get_template_directory_uri()."/assets/slick/slick.js", array('jquery'), '1.0.0', true);

    //Animations
    wp_enqueue_style("animate.min.css", 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css',array(),'1.0.0');


    //<!-- Animation scrolling -->
    wp_enqueue_style("aos.css", 'https://unpkg.com/aos@next/dist/aos.css',array(),'1.0.0');
    wp_enqueue_script('aos.jss','https://unpkg.com/aos@next/dist/aos.js', array('jquery'), true);

    //waypoints libs
    wp_enqueue_script('waypoints.js','https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js', array('jquery'), true);
    wp_enqueue_script('countup.js',get_template_directory_uri()."/assets/jquery-number-counter-on-scroll/jquery.countup.min.js", array('jquery'), '1.0.0', true);

    //Main theme CSS
    wp_enqueue_style("theme", get_template_directory_uri().'/css/theme.css',array(),'1.0.4');


    //==============================
	//Main Scripts
	//==============================
    wp_enqueue_script('script-js',get_template_directory_uri()."/js/script.js", array('jquery'), '1.0.0', true);


    //Ajax
	wp_localize_script( 'scripts', 'ajax_var', array(
        'url'    => admin_url( 'admin-ajax.php' ),
        'nonce'  => wp_create_nonce( 'my-ajax-nonce' ),
    ) );
    
}
add_action("wp_enqueue_scripts", "y9929_styles");


/*
function register_my_session(){
    if( ! session_id() ) {
        
        ini_set('session.cookie_secure', "1"); 
        ini_set('session.cookie_httponly', "1"); 
        ini_set('session.cookie_samesite','None'); 
        
        session_start();
    }
}

add_action('init', 'register_my_session');
*/

/*Menus*/
function y9929_menus(){
    register_nav_menus( array(
        'header-menu' => 'Header Menu',
    ));
}
add_action("init","y9929_menus" );


//add_action('acf/init', 'my_acf_op_init');

if( function_exists('acf_add_options_page') ) {
    
    $parent =  acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    
    // Add sub page.
    $child = acf_add_options_page(array(
        'page_title'  => __('Register Form'),
        'menu_title'  => __('Register Form'),
        'parent_slug' => $parent['menu_slug'],
    ));

    /*
    $child = acf_add_options_page(array(
        'page_title'  => __('Footer'),
        'menu_title'  => __('Footer'),
        'parent_slug' => $parent['menu_slug'],
    ));
    */

    /*

    $child = acf_add_options_page(array(
        'page_title'  => __('Google Analytics'),
        'menu_title'  => __('Google Analytics'),
        'parent_slug' => $parent['menu_slug'],
    ));

    $child = acf_add_options_page(array(
        'page_title'  => __('Google Tag Manager'),
        'menu_title'  => __('Google Tag Manager'),
        'parent_slug' => $parent['menu_slug'],
    ));
    */
}



function printBtn($arrLink, $defaultClasses, $noModal="")
{
    
    $classLink = "";
    $openTarget = "";
    $link = $arrLink;
    if ($link) {
        //echo $link['url'];
        if ($link['url'] == "#" && $noModal == "") {
            $classLink = "btn-open-register";
        } else {
            $openTarget = "target='" . $link['target'] . "'";
        }

        $btnLink = "<a href='" . $link['url'] . "' class='".$defaultClasses." ". $classLink . "' " . $openTarget . ">" . $link['title'] . "</a>";
        return $btnLink;
    }
    
}


function ww_load_dashicons(){
    wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'ww_load_dashicons');








/*
//===============================================================================================
//After submit on register form the data is sent to https://api.baker-re.com/lead
//===============================================================================================
function wpf_dev_process_entry_save( $fields, $entry, $form_id, $form_data ) {
    // Only run on my form with ID = 4117

    $dataForm = get_field("g_f_form", "option"); 
    if($dataForm[0]->ID)
    {
        if ( absint( $form_data['id'] ) !== $dataForm[0]->ID ) {
                return $fields;
        } 
        $firstName = $fields[1]['value']; //First Name
        $lastName = $fields[2]['value']; //Last Name
        $email = $fields[3]['value']; //Email
        $phone = $fields[14]['value']; //Phone Number
        $postalCode = $fields[6]['value']; //Posta Code
        $HowDidHearAboutUs = $fields[7]['value']; //How did you hear about us?
        $bedroomType = $fields[8]['value']; //Bedroom Type
        $areYouWorkingWithRealtor = strtolower($fields[9]['value']);//Are you working with a Realtor?
        $areYouWorkingWithRealtor = ($areYouWorkingWithRealtor=="yes")?true:false;
        $areYouRealtor = strtolower($fields[10]['value']);//Are you a Realtor?
        $areYouRealtor = ($areYouRealtor=="yes")?true:false;
        $realtorName = $fields[13]['value'];//Are you a Realtor? //Please enter your realtor’s name

        //Get data from admin
        $api_contact_form = get_field("api_contact_form", "option"); 
        $key = $api_contact_form['key'];
        $secret = $api_contact_form['secret'];
        $projectids = $api_contact_form['projectids'];
        $leadsource = $api_contact_form['leadsource'];
        $language__c = $api_contact_form['language__c'];
        $opt_in_type__c = $api_contact_form['opt_in_type__c'];

        $arrData = array(
            "key" => $key,
            "secret" => $secret,
            "projectIds" =>["$projectids"],
            "FirstName" => $firstName,
            "LastName" => $lastName,
            "LeadSource" => $leadsource, 
            "Email" => $email,
            "Phone" => $phone,
            "PostalCode" => $postalCode,
            "Unit_Type__c" => $bedroomType,
            "How_Did_You_Hear_About_Us__c" => $HowDidHearAboutUs,
            "Are_You_a_Realtor__c" => $areYouRealtor,
            "Are_You_Working_With_a_Realtor__c" => $areYouWorkingWithRealtor,
            "Realtor_Name__c" => $realtorName,
            "Language__c" => $language__c,
            "Opt_In_Type__c" => $opt_in_type__c,
            "ads__referral_url__c" => "",
            "ads__landing_url__c" => ""
        );

        $isError = setCurlPhp($arrData);
        if($isError != "")
        {
            //There was an error to print this message if you want to show the end user
            echo "There is an error: ".$isError;
        }
    }else{
        //No contact form detected
    }
}
add_action( 'wpforms_process_entry_save', 'wpf_dev_process_entry_save', 10, 4 );

function setCurlPhp($arrData)
{   
    $api_contact_form = get_field("api_contact_form", "option"); 
    $endpoint = $api_contact_form['url_end-point'];

    $curl = curl_init();
    $url = $endpoint; //"https://api.baker-re.com/lead";

    $data = $arrData;
    //It convert in to JSON 
    $json = json_encode($data);
    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_SSL_VERIFYHOST => false,
      CURLOPT_SSL_VERIFYPEER => false,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $json,
      CURLOPT_HTTPHEADER => array(
        "content-type: application/json",
      ),
    ));
    $response = curl_exec($curl);

    $err = curl_error($curl);
    curl_close($curl);
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
        //var_dump($response);
        $data = (array) (json_decode($response));
        if(isset($data['error']) && $data['error'] != ""){
            $data = $data['error']; //Theres is an error
        }
    }

    return $data;
}

*/
