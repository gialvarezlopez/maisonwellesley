jQuery(document).ready(function($)
//$(document).ready(function()
{

    AOS.init({
        duration: 1200,
    })

    if($('.score').length > 0){
        $('.score').countUp({
            complete: function() {
                //$this.text(this.countNum);
                
            }
        });
    }
    


    

    if($(".slide_amenities").length > 0)
    {
        var $status = $('.pagingInfo_active');
        var $total = $('.pagingInfo_total');
        var $slickElement = $('.slide_amenities');

        $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
            //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
            var i = (currentSlide ? currentSlide : 0) + 1;
            //$status.text(i + '/' + slick.slideCount);
            $status.text(i);
            $total.text(slick.slideCount);
            console.log(i)
        });

        $slickElement.slick({
            /*
                dots: true,
                infinite: true,
                autoplay: true,
                arrows: true,
                speed: 500,
                fade: true,
                slidesToShow: 3,
                slidesToScroll: 1,
            */
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: true,
            prevArrow: $('#unparalleled_arrow_left'),
            nextArrow: $('#unparalleled_arrow_right'),
            responsive: [
                
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        variableWidth: false,
                        //dots: true,
                        //arrows: false,
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        variableWidth: false,
                        //dots: true,
                        //arrows: false,
                    }
                },
                
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        variableWidth: false,
                        //arrows: false,
                    }
                },
                /*
                {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    //arrows: false,
                }
                }
                */
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]

            //cssEase: 'linear',
            //pauseOnFocus: false,
            //pauseOnHover: false,
        });
    }
    if( $(".slice_outdoor").length > 0 )
    {
        var $OutdoorStatus = $('.outdoor_pagingInfo_active');
        var $OutdooTotal = $('.outdoor_pagingInfo_total');
        var $OutdoorSlickElement = $('.slice_outdoor');

        $OutdoorSlickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
            //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
            var i = (currentSlide ? currentSlide : 0) + 1;
            //$status.text(i + '/' + slick.slideCount);
            $OutdoorStatus.text(i);
            $OutdooTotal.text(slick.slideCount);

            //console.log(i)
        });
        $OutdoorSlickElement.slick({
            /*
            dots: false,
            infinite: false,
            autoplay: false,
            arrows: false,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            pauseOnFocus: false,
            pauseOnHover: false,
            */
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: true,
            prevArrow: $('#outdoor_arrow_left'),
            nextArrow: $('#outdoor_arrow_right'),
        });
        
        /*
        var quotes = $(".element-info");
        var quoteIndex = -1;
        
        function showNextQuote() {
            ++quoteIndex;

            console.log(quoteIndex % quotes.length);
            
            quotes.eq(quoteIndex % quotes.length)
                .fadeInUp(2000)
                .delay(2000)
                .fadeOut(2000, showNextQuote);

            
            
        }
        setTimeout(showNextQuote(), 200);
        */

        //showNextQuote();

        //setTimeout("console.log('Hello World!');", 500);
        /*
        var quotes = $(".element-info");
        var quoteIndex = -1;

        function doSomething() {
            quotes.hide().removeClass("animated fadeInUp");
            ++quoteIndex;

            quotes.eq(quoteIndex % quotes.length).show().addClass('animated fadeInUp');
            //console.log("10 seconds");
            setTimeout(doSomething, 4000);
        }
        
        setTimeout(doSomething, 1);
        */

    }

    //==========================================
    //Modal Booking Form
    //==========================================
    $("body").on("click",".btn-open-register", function(event){
        //alert();
        event.preventDefault();
        $(".modal-overlay, #holderPopupBooking").show();
        $("body").addClass("no-scrollbar");

        //$(".details-modal").show();
    });

    $("body").on("click","#closePopupBooking", function(event){
        event.preventDefault();
        $(".modal-overlay, #holderPopupBooking").hide();
        /*
        $("#holder_form_booking form")[0].reset();
        $("#book_slots").empty();
        $("#from, #to").attr("disabled", true);
        */
        $("body").removeClass("no-scrollbar");
    });


     $("input[name='are_you_realtor']").change(function() {
        var buttonVal = $(this).val();
        if(buttonVal == "YES"){
            $("#holder_name_realtor").show();
        }else{
            $("#holder_name_realtor").hide();
            $("#holder_name_realtor").find("#name_realtor").val("");
        }
    })


    //==============================================================
    //Menu
    //==============================================================
    function myFunction(x) {
        if (x.matches) { // If media query matches
            $("header #icon-menu-open, .holder-icon-main-menu").show();
            $("header #icon-menu-close").hide();
            $("#nav-parent").hide().addClass("mobile-menu");
        } else {
            $("header #icon-menu-open, header #icon-menu-close, .holder-icon-main-menu").hide();
            $("#nav-parent").show().removeClass("mobile-menu");
        }
    }
    
    var x = window.matchMedia("(max-width: 990px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes

    $('.icon-action-menu').on('click', function(e)
    {
        var subMenu = $("#nav-parent");
        if(subMenu.is(':visible'))
        {
            subMenu.slideUp();
            $('.icon-action-menu').hide();
            $("header #icon-menu-open").show();
        } else {
            subMenu.slideDown();
            $('.icon-action-menu').hide();
            $("header #icon-menu-close").show();
        }
    });

    //jQuery(document).ready(function() {
		
	//});


    //========================================
    //Page is loaded
    //========================================
    let arrPoster =[];
    //$(window).load(function(){
    $(window).on("load", function (e) {
        $(".block-flex").each(function(){
            let posterWidth = $(this).find(".poster").width();
            let posterNaturalWidth = $(this).find(".poster").get(0).naturalWidth;
            //console.log(posterNaturalWidth);
            arrPoster.push({'width': posterWidth, "naturalWidth": posterNaturalWidth});
        });

        console.log(arrPoster);
        resizeImages();

        
        
        $(".gform_wrapper .gfield_required").each(function(){
            //$(this).html("*");
            //console.log("1");
        })

        $(".gform_body div.gfield").each(function(){
            //let label = $(this).find("label").detach();
            //$(this).append(label);
        })
        
        

    });
    
    
    $(window).on('resize', function(){
        //console.log("1");
       
        //console.log(arrPoster);
        resizeImages();
        
    });

    function resizeImages(){
        $(".block-flex").each(function(index){
            let arrPosition = (arrPoster[index]);
            if(arrPosition)
            {
                let number = index+1;
                let originalWidthPoster = (arrPosition.naturalWidth);

                let currentWidthPoster = $(".block-0"+number).find(".poster").width();

                let percentReduced = ((originalWidthPoster - currentWidthPoster)/originalWidthPoster)*100;


                //let diffence = originalWidthPoster - currentWidthPoster;
                //console.log(diffence);
                if(percentReduced > 0)
                {
                    $(this).find(".resize-img").each(function(){
                        //let widthFloat = $(this).find("img").width();
                        //let newSize =  widthFloat - diffence;
                        let newSize = 100 - percentReduced;
                        let result = $(this).find("img").css({"max-width":newSize+"%"});
                        console.log(percentReduced);
                        //console.log(newSize);
                    }) 
                }
                 
            }      
        });
    }


})

