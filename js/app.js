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

infovid.on('ended',function(){
      $("#replay-btn").show();
    });

$("#replay-btn").click(function(){
	$("#replay-btn").hide();
	infovid.get(0).play();
});
// Record Video Function
 
$('#take-video').click(function(){

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





