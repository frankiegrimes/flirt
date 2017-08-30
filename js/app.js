$(document).foundation();

$("#replay-btn").hide();
// Anchor Link Scroll
var infovid = $('#info-vid');

$("#down-btn").click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
    
});

$("#down-btn").click(function(){
	infovid.get(0).play();
});

$(".take-video").click(function(){
	$(".callout").show();
	$(".take-video").hide();
});

$("#upload").click(function(){
	$(".video-container").hide();
});

infovid.on('ended',function(){
      $("#replay-btn").show();
    });

$("#replay-btn").click(function(){
	$("#replay-btn").hide();
	infovid.get(0).play();
});

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
                $(this).attr("src", "assets/img/xenia  .jpg");
            }                         
        );                         
    });


// Record Video Function
 
$('.take-video').click(function(){

		// Prefer camera resolution nearest to 1280x720.

		var constraints = { audio: false, video: { width: 1150, height: 647 } }; 

		navigator.mediaDevices.getUserMedia(constraints)
		.then(function(mediaStream) {
		  var video = document.querySelector('#webcam');
		  
		  video.srcObject = mediaStream;
		  video.onloadedmetadata = function(/*e*/) {

		    video.play();
		    $('#webvideo-container').hide();

		  };
		})
		.catch(function(err) { document.console.log(err.name + ": " + err.message); }); // always check for errors at the end.


 });





