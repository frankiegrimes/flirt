$(document).foundation();

$(document).on('closed.zf.reveal', '[data-reveal]', function() {
  $("video").each(function () { this.pause(); });
});

$(document).ready(function() {

       


$("#webcam").hide();
// Anchor Link Scroll
var infovid = $('#info-vid');
var confirmed = $('.confirmed');
var videobtn = $('.vid-b');
var cameraimg = $('.take-video img');
var n = 0;

confirmed.hide();


$("#down-btn").click(function(){

    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
       infovid.get(0).play();
    return false;
 
    
});

$(".read-more-button").click(function(){
    $(".read-more-button").hide();
});

$(".read-less-button").click(function(){
    $(".read-more-button").show();
});

$(window).scroll(function() {

    
   var hT = infovid.offset().top,
       hH = infovid.outerHeight(),
       wH = $(window).height(),
       wS = $(this).scrollTop();
   if ( ((wS > (hT+hH-wH)) && (n === 0)) ){
       infovid.get(0).play();
       n+=1;
   }
});



$(".take-video").click(function(){
	$(".callout").show();
	$(".take-video").hide();
	$(".video-btn").hide();
    $(".example-button").hide();
	
});

$("#upload").click(function(){
	$(".video-container").hide();
});

videobtn.hover(
    function() {
        cameraimg.addClass('is-hovered');
    },
    function(){
        cameraimg.removeClass('is-hovered');
    }
    );

cameraimg.hover(
    function() {
        videobtn.addClass('is-hovered');
    },
    function(){
        videobtn.removeClass('is-hovered');
    }
    );

// Animate Gif function

$(function() {

        $("#declan").hover(
            function() {
                $(this).attr("src", "assets/gif/declan.gif");
            },
            function() {
                $(this).attr("src", "assets/img/declan.jpg");
            }                         
        ); 

        $("#esther").hover(
            function() {
                $(this).attr("src", "assets/gif/esther.gif");
            },
            function() {
                $(this).attr("src", "assets/img/esther.jpg");
            }                         
        );   

        $("#kathrin").hover(
            function() {
                $(this).attr("src", "assets/gif/kathrin.gif");
            },
            function() {
                $(this).attr("src", "assets/img/kathrin.jpg");
            }                         
        );              

        $("#pavel").hover(
            function() {
                $(this).attr("src", "assets/gif/pavel.gif");
            },
            function() {
                $(this).attr("src", "assets/img/pavel.jpg");
            }                         
        );              

        $("#pia").hover(
            function() {
                $(this).attr("src", "assets/gif/pia.gif");
            },
            function() {
                $(this).attr("src", "assets/img/pia.jpg");
            }                         
        );              

        $("#rafael").hover(
            function() {
                $(this).attr("src", "assets/gif/rafael.gif");
            },
            function() {
                $(this).attr("src", "assets/img/rafael.jpg");
            }                         
        );              

        $("#regina").hover(
            function() {
                $(this).attr("src", "assets/gif/regina.gif");
            },
            function() {
                $(this).attr("src", "assets/img/regina.jpg");
            }                         
        );              

        $("#sophia").hover(
            function() {
                $(this).attr("src", "assets/gif/sophia.gif");
            },
            function() {
                $(this).attr("src", "assets/img/sophia.jpg");
            }                         
        );              

        $("#tumay").hover(
            function() {
                $(this).attr("src", "assets/gif/tumay.gif");
            },
            function() {
                $(this).attr("src", "assets/img/tumay.jpg");
            }                         
        );              

        $("#wera").hover(
            function() {
                $(this).attr("src", "assets/gif/wera.gif");
            },
            function() {
                $(this).attr("src", "assets/img/wera.jpg");
            }                         
        );              

        $("#xenia").hover(
            function() {
                $(this).attr("src", "assets/gif/xenia.gif");
            },
            function() {
                $(this).attr("src", "assets/img/xenia.jpg");
            }                         
        );                         
    });




var button = document.getElementById('choosefile-label');
var input  = document.getElementById('choosefile');



button.addEventListener('click', function (e) {
    e.preventDefault();
    
    input.click();
});

input.addEventListener('change', function () {
   button.innerText = this.value; 
   confirmed.show();
});

/* Record Video Function
 
$('.take-video').click(function(){

	if(!isMobile) {

		// Prefer camera resolution nearest to 1280x720.

		var constraints = { audio: false, video: { width: 1150, height: 647 } }; 

		navigator.mediaDevices.getUserMedia(constraints)
		.then(function(mediaStream) {
		  var video = document.querySelector('#webcam');
		  
		  video.srcObject = mediaStream;
		  video.onloadedmetadata = function(/*e) {

		  	$("#webcam").show();
		    video.play();
		    $('#webvideo-container').hide();

		  };
		})
		.catch(function(err) { document.console.log(err.name + ": " + err.message); }); // always check for errors at the end.

	}
 });



*/

});

