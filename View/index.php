<?php
include("./header.php");
include("../config/database.php");
?>

<style>
    body {font-family: Arial, Helvetica, sans-serif;}

    /* Modal Content */
    #modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 40%;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.5s;
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }

    @keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
    }

    /* The Close Button */
    .close {
        color: white;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-header {
        padding: 2px 16px;
        background-color: #da0b0b;
        color: white;
    }

</style>

<body>
<?php
if (isset($_SESSION['co']) && !empty($_SESSION['co'] && $_SESSION['active'] == 1))
    echo " <div id='modal-content'>
    <div class='modal-header'>
      <span class='close'>&times;</span>
      <h2 style='text-align: center;'>You are now logged as " . $_SESSION['co'] ."</h2>
    </div>
  </div>";
else if (isset($_SESSION['co']) && !empty($_SESSION['co'] && $_SESSION['active'] == 0))
    echo " <div id='modal-content'>
    <div class='modal-header'>
      <span class='close'>&times;</span>
      <h2 style='text-align: center;'>Your account is not verified yet, please check your mail</h2>
    </div>    
  </div>";
unset ($_SESSION['co']);
?>

<?php
if (isset($_SESSION['login']) && isset($_SESSION['active']) && $_SESSION['active'] == 1){
    echo "<article style='height: 95%; background: white;'>
    <div class='leftside side'>
    <i class=\"fas fa-camera icone\" id=\"snap\" title='Take Picture' onclick='takeSnap()'></i>
    <i class=\"fas fa-download icone\" title='Save Picture'></i>
    <i class=\"fas fa-upload icone\" title='Upload Picture'></i>
    <i class=\"fab fa-facebook icone\" title='Share Picture'></i>
    <hr color='black'>
    <img src='../Image/snap.png' class='filter'>
    <img src='../Image/snap.png' class='filter'>
    </div>
    <div id=\"video-container\">
    <video id=\"camera-stream\" height=100%' width='100%' autoplay></video>
    </div>
    <div class='side' id='rightside'>RIGHTSIDE
 <!--   <canvas id=\"canvas\" width=\"300\" height=\"200\"></canvas> --> 
    </div>
    </article>
    <script src=\"../JS/script.js\"></script>";
    echo $_POST['url'];
}
else
    echo "<div role=\"alert\">
  <div class=\"bg-red text-white font-bold rounded-t px-4 py-2\">
    Danger
  </div>
  <div class=\"border border-t-0 border-red-light rounded-b bg-red-lightest px-4 py-3 text-red-dark\">
    <p>Something not ideal might be happening.</p>
  </div>
</div>";
?>


<script>
    var modal = document.getElementById('modal-content');
    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
        modal.style.display = "none";
    }
    setTimeout(function() {
        modal.style.display = "none";
    }, 5000);

    function takeSnap(){

        let div = document.getElementById('rightside');
        let canvas = document.createElement('canvas');
        canvas.id = "CursorLayer";
        canvas.width = 300;
        canvas.height = 200;
        canvas.style.zIndex = 8;
        canvas.style.position = "absolute";
        canvas.style.border = "1px solid";
        div.appendChild(canvas);
        let video = document.getElementById('camera-stream');
        let can = document.getElementById('CursorLayer');
        let context = can.getContext('2d');
        context.drawImage(video, 0, 0, 300, 200);
        let dataURL = can.toDataURL();
        post( "index.php", { url: dataURL } );
        console.log(dataURL);

    }
</script>
</body>
</html>
