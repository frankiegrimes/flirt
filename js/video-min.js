function getFileName(e){var t=new Date;return"RecordRTC-"+t.getUTCFullYear()+t.getUTCMonth()+t.getUTCDate()+"-"+getRandomString()+"."+e}function getRandomString(){if(window.crypto&&window.crypto.getRandomValues&&-1===navigator.userAgent.indexOf("Safari")){for(var e=window.crypto.getRandomValues(new Uint32Array(3)),t="",n=0,o=e.length;n<o;n++)t+=e[n].toString(36);return t}return(Math.random()*(new Date).getTime()).toString(36).replace(/\./g,"")}navigator.mediaDevices.getUserMedia({video:!0,audio:!0}).then(function(e){document.getElementById("webcam").muted=!0,document.getElementById("webcam").srcObject=e;var t={type:"video"},n=RecordRTC(e,t);n.startRecording();var o=5e3;setTimeout(function(){n.stopRecording(function(){var t=n.getBlob(),o=getFileName("webm"),a=new File([t],o,{type:"video/webm"}),r=new FormData;r.append("video-blob",a),r.append("video-filename",a.name),document.getElementById("desktop-video").innerHTML="Uploading to PHP using jQuery.... file size: ("+bytesToSize(a.size)+")",$.ajax({url:"https://webrtcweb.com/RecordRTC/",data:r,cache:!1,contentType:!1,processData:!1,type:"POST",success:function(e){if("success"===e){alert("successfully uploaded recorded blob");var t="https://webrtcweb.com/RecordRTC/uploads/"+a.name;document.getElementById("header").innerHTML='<a href="'+t+'" target="_blank">'+t+"</a>",document.getElementById("webcam").src=t,window.open(t)}else alert(e)}}),document.getElementById("webcam").srcObject=null,e.getTracks().forEach(function(e){e.stop()})})},5e3)});