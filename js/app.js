$(document).foundation();
 
$('#take-video').click(function(){

		// Prefer camera resolution nearest to 1280x720.

		var constraints = { audio: false, video: { width: 1150, height: 647 } }; 

		navigator.mediaDevices.getUserMedia(constraints)
		.then(function(mediaStream) {
		  var video = document.querySelector('video');
		  video.srcObject = mediaStream;
		  video.onloadedmetadata = function(e) {

		    video.play();
		    console.log('ran function');
		  };
		})
		.catch(function(err) { console.log(err.name + ": " + err.message); }); // always check for errors at the end.


 });

