<?php
include("header.php");
if (isset($_SESSION["login"])) {
    header("Location: ./index.php");
}
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
if (isset($_SESSION) && !empty($_SESSION['error']))
    echo ' <div id="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2 style="text-align: center;">Username or password incorrect</h2>
    </div>
    
  </div>';
unset($_SESSION['error']);
?>
<div class="loginbox">
    <div class="user"><i class="fas fa-user icon"></i></div>
    <h1>Login Here<h1>
            <form action="../Redirection/login.php" method="POST">
                <p>Username</p>
                <input type="text" name="login" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="passwd" placeholder="Enter Password">
                <input type="submit" name="" value="Login">
                <a href="create.php">Create an account</a><br/>
                <a href="nw_pw.php">Forgot password ?</a>
            </form>

</div>
<script>
    let modal = document.getElementById('modal-content');
    let span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
        modal.style.display = "none";
    }
    setTimeout(function() {
        modal.style.display = "none";
    }, 5000);
</script>
</body>
</head>
</html>