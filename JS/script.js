
window.onload = function() {

    // Normalize the letious vendor prefixed versions of getUserMedia.
    let video = document.getElementById('camera-stream');

    if (navigator.mediaDevices.getUserMedia) {
        // Request the camera.
        navigator.mediaDevices.getUserMedia({video: true})
            .then(function(stream) {
                video.srcObject = stream;
            })
            .catch(function() {
                console.log("Something went wrong!");
            });

    }
    else {
        alert('Sorry, your browser does not support getUserMedia');
    }

}
    // function takeSnap(){
    //
    //     let div = document.getElementById('rightside');
    //     let canvas = document.createElement('canvas');
    //     canvas.id     = "CursorLayer";
    //     canvas.width  = 300;
    //     canvas.height = 200;
    //     canvas.style.zIndex   = 8;
    //     canvas.style.position = "absolute";
    //     canvas.style.border   = "1px solid";
    //     div.appendChild(canvas);
    //     let video = document.getElementById('camera-stream');
    //     let can = document.getElementById('CursorLayer');
    //     let context = can.getContext('2d');
    //     context.drawImage(video, 0, 0, 300, 200);
    //     let dataURL = can.toDataURL();
    //     console.log(dataURL);
    //
    // }
