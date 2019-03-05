<?php
include("header.php");
?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    /* Popup container - can be anything you want */
    .popup {
        position: relative;
        display: inline-block;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* The actual popup */
    .popup .popuptext {
        visibility: hidden;
        width: 160px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 8px 0;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -80px;
    }

    /* Popup arrow */
    .popup .popuptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
    }

    /* Toggle this class - hide and show the popup */
    .popup .show {
        visibility: visible;
        -webkit-animation: fadeIn 1s;
        animation: fadeIn 1s;
    }

    /* Add animation (fade in the popup) */
    @-webkit-keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
    }

    @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity:1 ;}
    }
</style>

<body>
<?php
if (isset($_SESSION['error'])){
    echo "<div class='popup'>
            <span class='popuptext' id='myPopup'>" . $_SESSION['error'] ."</span>
        </div>";
}
?>
<div class="create_loginbox" style="height: 680px;">
    <div class="user"><i class="fas fa-user icon"></i></div>
    <h1>Modif Account<h1>
            <p style="font-size: 16px;color:darkred;">Complete only if you want to change info</p>
            <form action="../Redirection/modif_account.php" method="POST">
                <p>Username</p>
                <input type="text" name="login" placeholder="Enter New Username">
                <p>E-mail</p>
                <input type="text" name="mail" placeholder="Enter New Mail">
                <p>E-mail confirmation</p>
                <input type="text" name="mail2" placeholder="Confirm New Mail">
                <p>Password</p>
                <input type="password" name="passwd1" placeholder="Enter New Password">
                <p>Password Confirmation</p>
                <input type="password" name="passwd2" placeholder="Confirm New Password">
                <input type="submit" name="" value="Modif Account"><br>
            </form>

</div>

</body>
</head>
</html>