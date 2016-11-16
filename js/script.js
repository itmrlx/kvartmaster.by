// fancybox
jQuery.fn.getTitle = function() { 
  var arr = jQuery("a.fancybox");
  jQuery.each(arr, function() {
    var title = jQuery(this).children("img").attr("title");
    jQuery(this).attr('title',title);
  })
}
var thumbnails = jQuery("a:has(img)").not(".nolightbox").filter( function() { return /\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr('href')) }); // Find .post>a>img and create fancybox image gallery
var posts = jQuery(".gallery-slider"); //find post
posts.each(function() {
  jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","slide"+posts.index(this)).getTitle()
});
jQuery("a.fancybox").fancybox({ // fancybox on
  helpers : {
    overlay : {
      locked : false // try changing to true and scrolling around the page
    }
  }
});

// portfolio slider
$('.image-portfolio').slick({
  infinite: true,
  dots: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
  {
    breakpoint: 993,
    settings: {
      slidesToShow: 2,
    }
  },
  {
    breakpoint: 769,
    settings: {
      slidesToShow: 1,
    }
  },
  ]
});
$('.image-portfolio-video').slick({
  infinite: true,
  dots: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
  {
    breakpoint: 993,
    settings: {
      slidesToShow: 2,
    }
  },
  {
    breakpoint: 769,
    settings: {
      slidesToShow: 1,
    }
  },
  ]
});
$('.our-blog-slider').slick({
  infinite: true,
  dots: false,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
  {
    breakpoint: 993,
    settings: {
      slidesToShow: 2,
    }
  },
  {
    breakpoint: 769,
    settings: {
      slidesToShow: 1,
    }
  },
  ]
});

// tabs
(function($) {
	$(function() {
		$('ul#nav-tab').on('click', 'li:not(.active)', function() {
			event.preventDefault(); // not go to tab content
			$(this)
			.addClass('active').siblings().removeClass('active').closest('.portfolio-container')
			.find('.tabs-pane').removeClass('active').css('display','none')
			.eq($(this).index()).addClass('active').css('display','block');
		});
	});
})(jQuery);

$( window ).load(function() {
	$('.tabs-pane').css('display','none');
	$('.tabs-pane.active').css('display','block');
});

// send forms
function sendMyForm(formid, myfile, mytext) {
  jQuery(document).ready(function($) {
    $('#'+formid).submit(function() {
      var str = $(this).serialize();
      $.ajax({
        type: 'POST',
        url: '/mail/'+myfile+'.php',
        data: str,
        success: function(msg){
          if(msg == 'OK'){
            result = '<h3 class="centered">'+mytext+'</h3>';
            $('#'+formid).html(result);
          }else{
            result = 'нее';
            $('#'+formid).html(result);
          }
        }
      });
      return false;
    });
  });
};

sendMyForm('myform', 'mail', 'Спасибо, скоро мы с Вами свяжемся!');
sendMyForm('fform', 'mail', 'Спасибо, скоро мы с Вами свяжемся!');
sendMyForm('fform2', 'mail', 'Спасибо, скоро мы с Вами свяжемся!');

// burger menu
$('.burger-menu').click(function () {
  $(this).toggleClass('active');
  $('.pro-menu').slideToggle();
});

// slow scroll menu
$(document).ready(function(){
  $(".pro-menu li").on("click","a.scroll", function (event) {
    event.preventDefault();
    var id  = $(this).attr('href'),
    top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 500);
  });
});

// titles
function simpleTitle(argument) {
  $('.simple-title').html(argument);
}
function raschetTitle(argument) {
  $('.raschet-title').html(argument);
}

// comand slider
$('.comand-slider').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 7000,
  dots: false,
  responsive: [
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 1,
      }
    },
  ]
});

// review slider
$('.rev-slider').slick({
  infinite: true,
  arrows: false,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 7000,
  dots: true,
  responsive: [
    {
      breakpoint: 769,
      settings: {
        slidesToShow: 1,
      }
    },
  ]
});