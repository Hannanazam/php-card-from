


$(document).ready(function() {
    $('.forgot_password').hide();
     $('.forget_pass_btn').click(function() {
        $('.customer-inner.login-customer').hide();
        $('.create_account').hide();
        $('.forgot_password').fadeToggle('fast');
        $('.signin_title').text('CUSTOMER FORGOT PASSWORD :');
        });
   
        $('.forgot_password_login').click(function() {
            $('.create_account').hide();
            $('.forgot_password').hide();
            $('.customer-inner.login-customer').fadeToggle('fast');
            $('.signin_title').text('CUSTOMER LOGIN :');
        });


    $('.navbar-toggler').hide();
    $('.acc-sign-in').click(function() {
        $('.wrapper-overlay').show();
        $('.sidebar_offset').addClass('open');
        $('.cart_sidebar').hide();
        $('.signin_sidebar').show();
        
    });
    $('.cart').click(function() {
        $('.wrapper-overlay').show();
        $('.sidebar_offset').addClass('open');
        $('.cart_sidebar').show();
        $('.signin_sidebar').hide();
    });
    $('.close_icon').click(function() {
        $('.wrapper-overlay').hide();
        $('.open').removeClass('open');
        $('.open').addClass('sidebar_offset');
    });
    $('.wrapper-overlay').click(function() {
        $('.wrapper-overlay').hide();
        $('.open').removeClass('open');
        $('.open').addClass('sidebar_offset');
    });


    // $(".dropdown-menu").hide("fast")
    // $(this).find(".dropdown-toggle").hover(function() {
    //     $(this).find(".dropdown-menu").fadeToggle("fast")
    // });
    $('.chevron_icon').hide();
    $(".navigation_menu .dropdown-menu").hide()
        if($(window).width() >= 550){
    $(this).find(".nav-dropdown-toggle").hover(function() {
        $(this).find(".dropdown-menu").fadeToggle("fast")
        $(this).find(".nav-link").toggleClass('active')
    });
        }
        else if($(window).width() <= 550){
            $(".nav-dropdown-toggle .chevron_icon").click(function() {
                $(this).parent().find(".dropdown-menu").slideToggle("fast")
                $(this).toggleClass('rotate-lg')
            });
        }
        else{
            console.log('trigger')
        }
    // $('.nav-dropdown-toggle').hover(function(){ 

    //     var elem_id = $(this).attr('data-id');
    //     // console.log(elem_id)
    //     $("#" + elem_id).toggleClass('d-block');
       
        // $('.dropdown-toggle', this).trigger('click'); 
        // if($(window).width() <= 550){
        //     // $('.chevron_icon' , this).toggleClass('rotate-lg');
        // $('.dropdown-menu' , this).toggleClass('show');
        // }
        // else{
        //     console.log('trigger')
        
        // }
    //   });
 
      $(window).scroll(function(){
        if($(this).scrollTop() > 100){
            $('.navigation_menu nav').addClass('sticky')
        } else{
            $('.navigation_menu nav').removeClass('sticky')
        }
    });
    
   
 
 
        if($(window).width() <= 550){
            $(window).scroll(function(){
                if($(this).scrollTop() >= 0){
                    $('.navigation_menu nav').removeClass('sticky')
                } else{
                    $('.navigation_menu nav').addClass('sticky')
                }
            });
           $('.input_area').hide();
           $('.navigation_menu .navbar-toggler').addClass('setontop');
           $('.acc-links.acc-sign-in').html('<i class="far fa-user"></i>');
           $('.btn.icon-search').click(function() {
           $('.input_area').fadeToggle();
           $('.input_area').html('<div class="d-flex" style="width: 100%;position: absolute;left: 0px;top:40px"><input type="search" placeholder="Search" class="header-search__input" aria-label="Search Site"autocomplete="off" style="width: 100%;"><i class="fas fa-search" style="margin-top: 5px;"></i></div>');
           });
           $('.navbar-toggler').show();
           $(".navbar-toggler.setontop").click(function() {
               $(".navbar_child.navbar-collapse").toggleClass('open-sidemenu');
               
            });
            $('.child_para').hide();
            $('.footer_content .main_heading').click(function() {
            $(this).next('.child_para').slideToggle();
            $(this).find('.float-right').toggleClass('rotate');
            });
        } 
        else{
        //   alert(456);
        }
   
        $('.icon-mode:nth-child(3)').addClass('active')
        $('.icon-mode').click(function() {
            $('.icon-mode').removeClass('active');
            $(this).addClass('active');
        });
      
        $('.grid-2').click(function() {
            $('.products_cards .display_set').removeClass('col-lg-2');
            $('.products_cards .display_set').removeClass('col-lg-3');
            $('.products_cards .display_set').removeClass('col-lg-4');
            $('.products_cards .display_set').addClass('col-lg-6');
            $('.products_cards .display_set').removeClass('col-md-2');
            $('.products_cards .display_set').removeClass('col-md-3');
            $('.products_cards .display_set').removeClass('col-md-4');
            $('.products_cards .display_set').addClass('col-md-6');
        });
        $('.grid-3').click(function() {
            $('.products_cards .display_set').removeClass('col-lg-2');
            $('.products_cards .display_set').removeClass('col-lg-3');
            $('.products_cards .display_set').removeClass('col-lg-6');
            $('.products_cards .display_set').addClass('col-lg-4');
            $('.products_cards .display_set').removeClass('col-md-2');
            $('.products_cards .display_set').removeClass('col-md-3');
            $('.products_cards .display_set').removeClass('col-md-6');
            $('.products_cards .display_set').addClass('col-md-4');
        });
        $('.grid-4').click(function() {
            $('.products_cards .display_set').removeClass('col-lg-2');
            $('.products_cards .display_set').removeClass('col-lg-4');
            $('.products_cards .display_set').removeClass('col-lg-6');
            $('.products_cards .display_set').addClass('col-lg-3');
            $('.products_cards .display_set').removeClass('col-md-2');
            $('.products_cards .display_set').removeClass('col-md-4');
            $('.products_cards .display_set').removeClass('col-md-6');
            $('.products_cards .display_set').addClass('col-md-3');
        });
        $('.grid-5').click(function() {
            $('.products_cards .display_set').removeClass('col-lg-3');
            $('.products_cards .display_set').removeClass('col-lg-4');
            $('.products_cards .display_set').removeClass('col-lg-6');
            $('.products_cards .display_set').addClass('col-lg-2');
            $('.products_cards .display_set').removeClass('col-md-3');
            $('.products_cards .display_set').removeClass('col-md-4');
            $('.products_cards .display_set').removeClass('col-md-6');
            $('.products_cards .display_set').addClass('col-md-2');
        });
        if($(window).width() <= 992){
            $('.icon-mode:nth-child(2)').addClass('active')
            $('.icon-mode:nth-child(3)').removeClass('active')
            $('.grid-5').hide();
        }
        else{
            console.log('grid set');
        }
        if($(window).width() <= 550){
            $('.products_cards .display_set.col-sm-12').css('width','50%');
            $('.sorting_area .left_column').removeClass('d-flex');
            $('.sorting_area .left_column').hide();
            $('.pagination_section.d-flex').removeClass('justify-content-between');
            $('.pagination_section.d-flex').addClass('justify-content-center');
            $('.pagination_section.d-flex .para').hide();
            $('.chevron_icon').show();
        }
        else{
            console.log('sorting area hide');
        }

        $('.go-to-top-button').hide();
        $(window).scroll(function(){
            if($(this).scrollTop() >= 500){
                $('.go-to-top-button').fadeIn();
            } else{
                $('.go-to-top-button').fadeOut();
            }
        });

        $(".product_detail .slider_img img").click(function(){
            var checked= $(this).attr("src");
            $(".product_detail .main_img img").attr("src",checked).hide().fadeIn();
        })

        $(".accordian-text").hide();
        $(".accordian-title").click(function () {
            $(this).find(".fa-chevron-down").parent().toggleClass("rotate-180");
            // $(this).find(".fa-chevron-up").toggleClass("fa-chevron-down");
            var elem_id = $(this).attr("data-id");
            $("#" + elem_id).slideToggle('fast');
        });
      
     

        $('.create_account').hide();
        $('.create_an_account').click(function() {
        $('.customer-inner.login-customer').hide();
        $('.create_account').fadeToggle('fast');
        $('.signin_title').text('CUSTOMER CREATE ACCOUNT :');
        });
     
        
        $('.create_login').click(function() {
            $('.create_account').hide();
            $('.customer-inner.login-customer').fadeToggle('fast');
            $('.signin_title').text('CUSTOMER LOGIN :');
        });

        $(".toggle_password i").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $("#customer_password");
            if (input.attr("type") == "password") {
              input.attr("type", "text");
            } else {
              input.attr("type", "password");
            }
          });
        $(".toggle_password_register i").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $("#customer_password_register");
            if (input.attr("type") == "password") {
              input.attr("type", "text");
            } else {
              input.attr("type", "password");
            }
          });
          $(".card_img_top").mouseover(function(){
  
            var a = $(this).attr('data-org');
            this.src= a }).mouseout(function(){
             var b = $(this).attr('data-img');
             this.src= b});

             $(".sizes_label input").change(function () {
                 var a = $(this).val();
                 $(".size_output").text(a);
             })
            //  $('.slider_image1').hide();
            //  $(".item").mouseenter(function () {
            //      $(this).find('.slider_image').hide();
            //      $(this).find('.slider_image1').fadeToggle();
            //  }).mouseout(function () {
            //     $('.slider_image' , this).fadeToggle();
            //     $('.slider_image1' , this).hide();
            // });
             
     

});
   
function increaseCount(a, b) {
    var input = b.previousElementSibling;
    var value = parseInt(input.value, 10);
    value = isNaN(value) ? 0 : value;
    value++;
    input.value = value;
}

function decreaseCount(a, b) {
    var input = b.nextElementSibling;
    var value = parseInt(input.value, 10);
    if (value > 1) {
        value = isNaN(value) ? 0 : value;
        value--;
        input.value = value;
    }
}