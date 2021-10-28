var isMobile = false; //initiate as false
// device detection
if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
   || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
   isMobile = true;
}


window.onload = function (e) {
   /* $(".slider .content").addClass('slide-in'); */

   $('nav .dropdown-toggle').mouseenter(function () {
      if ($(window).width() > 768) {
         $(".large-dropdown .dropdown-menu").hide();
         let classArray = $(this).text().toLowerCase().split(" ");
         $(".large-dropdown ." + classArray[classArray.length - 1] + "-menu").show();
         $('.large-dropdown').addClass("open");
      }
      $('.large-dropdown img').prop('src', $(this).attr('img-src'));
   }).mouseleave(function () { });

   $('.dropdown-menu').mouseleave(function () {
      $(this).parent().removeClass("open");
   });

   $('nav li:not(.dropdown)').mouseenter(function () {
      $('.dropdown-menu').parent().removeClass("open");
   });

   $('.sub-dropdown-menu a').mouseenter(function () {
      if ($(this).parent().parent().hasClass('open')) {
         $('.large-dropdown img').prop('src', $(this).attr('img-src'));
      }
   })

   $('.sub-dropdown-menu a').click(function (e) {
      if (!$(this).parent().parent().hasClass('open')) e.preventDefault();
   });

   $('.large-dropdown .dropdown-toggle').mouseenter(function () {
      $('.large-dropdown .dropdown-toggle').siblings('.sub-dropdown-menu').removeClass('open');
      $('.large-dropdown .dropdown-toggle').siblings('.line').removeClass('selected');
      $('.large-dropdown img').prop('src', $(this).attr('img-src'));
      if ($(this).parents(".solutions-menu").length) {
         $("a#solutions-dropdown").attr('img-src', $(this).attr('img-src'));
      } else {
         $("a#served-dropdown").attr('img-src', $(this).attr('img-src'));
      }
      $(this).siblings('.sub-dropdown-menu').addClass('open');
      //console.log($(this).siblings('h2').css('display', 'inline'););
      $(this).siblings('.subtext').addClass('d-inline');
      // $(this).siblings('.line').addClass('selected');
      $(this).parent().siblings('.dropdown').css('pointer-events', 'none');
   }).mouseleave(function () {
      $('.large-dropdown .dropdown').css('pointer-events', 'auto');
      $('.subtext').removeClass('d-inline');
   });

   $(".large-dropdown a.dropdown-toggle").hover(function () {
      $(this).parent().siblings("li.dropdown").children("a.dropdown-toggle").addClass('faded');
   }, function () {
      $(this).parent().siblings("li.dropdown").children("a.dropdown-toggle").removeClass('faded');
      $('.large-dropdown .dropdown').css('pointer-events', 'auto');
   });

   $(".large-dropdown .sub-dropdown-menu a").hover(function () {
      $(this).parent().siblings("li").children("a").addClass('faded');
   }, function () {
      $(this).parent().siblings("li").children("a").removeClass('faded');
   });

   $('.large-dropdown .sub-dropdown-menu').mouseenter(function () {
      $(this).parent().siblings('.dropdown').css('pointer-events', 'none');
      $(this).prop('hovered', true);
   }).mouseleave(function () {
      $('.large-dropdown .dropdown').css('pointer-events', 'auto');
      $(this).removeClass('open');
      $(this).prop('hovered', false);
   });

   /*    $("#main .slider").on("mouseup", function () {
         if (!isMobile) {
            location.href = $(this).find('a.content').prop('href');
         }
      });
   
      $("#main .slider").on("touchend", function () {
         $("#main .slider").removeClass("touched");
         $(this).addClass("touched");
      });
   
      $("#main .slider .content").on("touchend", function () {
         if ($(this).parent().hasClass("touched")) {
            if ($(this).is("a")) {
               location.href = $(this).prop('href');
            } else {
               location.href = $(this).find('a.content').prop('href');
            }
         }
      });
   
      $("#main .slider .head").on("touchend", function () {
         $(this).parent().addClass("touched");
      });
   
      $(".footer .instagram").mouseenter(function () {
         $(this).prop("src", "/images/sm/ig-gr.png");
      }).mouseleave(function () {
         $(this).prop("src", "/images/sm/ig-bl.png");
      });
   
      $(".footer .linkedin").mouseenter(function () {
         $(this).prop("src", "/images/sm/li-gr.png");
      }).mouseleave(function () {
         $(this).prop("src", "/images/sm/li-bl.png");
      });
   
      $(".footer .facebook").mouseenter(function () {
         $(this).prop("src", "/images/sm/fb-gr.png");
      }).mouseleave(function () {
         $(this).prop("src", "/images/sm/fb-bl.png");
      }); */

   /*  $(document).on('click', '[data-toggle="lightbox"]', function (event) {
       event.preventDefault();
       $(this).ekkoLightbox();
    }); */

}
