$(document).foundation();

$(document).ready(function() {

var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;

$("#replay-btn").hide();
$("#webcam").hide();
// Anchor Link Scroll
var infovid = $('#info-vid');
var playbtn = $("#play-btn");
var confirmed = $('.confirmed');

confirmed.hide();


$("#down-btn").click(function(){

    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
       infovid.get(0).play();
    playbtn.hide();
    return false;
 
    
});





$(".take-video").click(function(){
	$(".callout").show();
	$(".take-video").hide();
	$(".video-btn").hide();
	
});

$("#upload").click(function(){
	$(".video-container").hide();
});

    if(!isMobile) {

infovid.on('ended',function(){
      $("#replay-btn").show();
    });

$("#replay-btn").click(function(){
	$("#replay-btn").hide();
	infovid.get(0).play();
});


playbtn.click(function(){
    infovid.get(0).play();
    playbtn.hide();
});

}

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

