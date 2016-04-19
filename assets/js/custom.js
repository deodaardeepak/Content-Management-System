
/*=============================================================
    Authour URI: www.binarytheme.com
    License: Commons Attribution 3.0

    http://creativecommons.org/licenses/by/3.0/

    100% Free To use For Personal And Commercial Use.
    IN EXCHANGE JUST GIVE US CREDITS AND TELL YOUR FRIENDS ABOUT US
   
    ========================================================  */



$(document).ready(function () {

           //SIDE MENU SCRIPTS
    
            $('.menu-close-icon').click(function (e) {
                e.preventDefault();
                $('#side-menu').animate({ left: '-250px'});
               
            });

            $('.menu-open-icon').click(function (e) {
                e.preventDefault();
                var left = $('#side-menu').offset().left
                if (left == -250) {
                    $('#side-menu').animate({ left: '0px', top: '0px' });
                }
                else {
                    $('#side-menu').animate({ left: '-250px'});
                }
               
            });

   

            /*====================================
             WRITE YOUR   SCRIPTS  BELOW
            ======================================*/

   });



