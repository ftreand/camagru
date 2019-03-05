<?php
include("header.php");
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
<!-- changer avec variable de session -->
<?php
if (isset($_SESSION) && !empty($_SESSION['error'])) {
    if ($_SESSION['error'] === 'pw')
        echo '<div id="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2 style="text-align: center;">Password invalid, require at least one uppercase and lowercase letter, a number and a special character (ex: @#$...)</h2>
        </div>  
            </div>';
    if ($_SESSION['error'] === 'pwl')
        echo '<div id="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2 style="text-align: center;">Password to short, min 8 characters</h2>
        </div>  
            </div>';
    if ($_SESSION['error'] === 'login')
        echo '<div id="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2 style="text-align: center;">User already exists</h2>
        </div>  
            </div>';
    if ($_SESSION['error'] === 'mail')
        echo '<div id="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2 style="text-align: center;">E-mail already used or invalid</h2>
        </div>  
            </div>';
    unset($_SESSION['error']);
}
?>
<div class="create_loginbox">
    <div class="user"><i class="fas fa-user icon"></i></div>
    <h1>Create Account<h1>
            <form action="../Redirection/create_account.php" method="POST">
                <p>Username</p>
                <input type="text" name="login" placeholder="Enter Username">
                <p>E-mail</p>
                <input type="text" name="mail" placeholder="Enter Mail">
                <p>E-mail confirmation</p>
                <input type="text" name="mail2" placeholder="Confirm Mail">
                <p>Password</p>
                <input type="password" name="passwd1" placeholder="Enter Password">
                <p>Password Confirmation</p>
                <input type="password" name="passwd2" placeholder="Confirm Password">
                <input type="submit" name="" value="Create Account"><br>
            </form>

</div>
<script>
    var modal = document.getElementById('modal-content');
    var span = document.getElementsByClassName("close")[0];

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