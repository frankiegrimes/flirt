"use strict";$(document).foundation(),$("#take-video").click(function(){var e={audio:!1,video:{width:1150,height:647}};navigator.mediaDevices.getUserMedia(e).then(function(e){var o=document.querySelector("#webcam");o.srcObject=e,o.onloadedmetadata=function(e){o.play(),console.log("ran function"),$("#webvideo-container").hide()}}).catch(function(e){console.log(e.name+": "+e.message)})});