// capture camera and/or microphone
         navigator.mediaDevices.getUserMedia({ video: true, audio: true }).then(function(camera) {

             // preview camera during recording
             document.getElementById('webcam').muted = true;
             document.getElementById('webcam').srcObject = camera;

             // recording configuration/hints/parameters
             var recordingHints = {
                 type: 'video'
             };

             // initiating the recorder
             var recorder = RecordRTC(camera, recordingHints);

             // starting recording here
             recorder.startRecording();

             // auto stop recording after 5 seconds
             var milliSeconds = 5 * 1000;
             setTimeout(function() {

                 // stop recording
                 recorder.stopRecording(function() {
                     
                     // get recorded blob
                     var blob = recorder.getBlob();

                     // generating a random file name
                     var fileName = getFileName('webm');

                     // we need to upload "File" --- not "Blob"
                     var fileObject = new File([blob], fileName, {
                         type: 'video/webm'
                     });

                     var formData = new FormData();

                     // recorded data
                     formData.append('video-blob', fileObject);

                     // file name
                     formData.append('video-filename', fileObject.name);

                     document.getElementById('desktop-video').innerHTML = 'Uploading to PHP using jQuery.... file size: (' +  bytesToSize(fileObject.size) + ')';

                     // upload using jQuery
                     $.ajax({
                         url: 'https://webrtcweb.com/RecordRTC/', // replace with your own server URL
                         data: formData,
                         cache: false,
                         contentType: false,
                         processData: false,
                         type: 'POST',
                         success: function(response) {
                             if (response === 'success') {
                                 alert('successfully uploaded recorded blob');

                                 // file path on server
                                 var fileDownloadURL = 'https://webrtcweb.com/RecordRTC/uploads/' + fileObject.name;

                                 // preview the uploaded file URL
                                 document.getElementById('header').innerHTML = '<a href="' + fileDownloadURL + '" target="_blank">' + fileDownloadURL + '</a>';

                                 // preview uploaded file in a VIDEO element
                                 document.getElementById('webcam').src = fileDownloadURL;

                                 // open uploaded file in a new tab
                                 window.open(fileDownloadURL);
                             } else {
                                 alert(response); // error/failure
                             }
                         }
                     });

                     // release camera
                     document.getElementById('webcam').srcObject = null;
                     camera.getTracks().forEach(function(track) {
                         track.stop();
                     });

                 });

             }, milliSeconds);
         });

         // this function is used to generate random file name
         function getFileName(fileExtension) {
             var d = new Date();
             var year = d.getUTCFullYear();
             var month = d.getUTCMonth();
             var date = d.getUTCDate();
             return 'RecordRTC-' + year + month + date + '-' + getRandomString() + '.' + fileExtension;
         }

         function getRandomString() {
             if (window.crypto && window.crypto.getRandomValues && navigator.userAgent.indexOf('Safari') === -1) {
                 var a = window.crypto.getRandomValues(new Uint32Array(3)),
                     token = '';
                 for (var i = 0, l = a.length; i < l; i++) {
                     token += a[i].toString(36);
                 }
                 return token;
             } else {
                 return (Math.random() * new Date().getTime()).toString(36).replace(/\./g, '');
             }
         }