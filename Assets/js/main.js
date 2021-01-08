$(document).ready(function () {
    let $menu = $('.profiledropdown');
    $('.profiledropdown').hide();
    $('#prodropdown').on('click',function(){
        
        if($menu.is(':visible')){
            $('.profiledropdown').hide();
           
        }else{
            $('.profiledropdown').show();
           
        }
        
    });
    $('#add').on('click',function(){
        $('#add_task').append('<input type="text" name="tasks[]">');
    });
    $('#sidenav').on('click', function () {

        // let listLenght = $('.sidenav').find("li").length;

        let classFind = $(this).hasClass('col-lg-1');

        if(classFind){

            $(this).removeClass('col-lg-1');
            
            $(this).addClass('col-lg-2');
            
            $('#centerdiv').removeClass('col-lg-11');

            $('#centerdiv').addClass('col-lg-10');

            $('.detailnav').css({"display" : 'inline-block'});

            // $('.detailnav').fadeIn('slow');

        }else{

            $(this).removeClass('col-lg-2');

            $(this).addClass('col-lg-1');

            $('#centerdiv').removeClass('col-lg-10');

            $('#centerdiv').addClass('col-lg-11');

            $('.detailnav').css({"display" : 'none'});

            // $('.detailnav').fadeOut('fast');

        }
        
    });
    
});



