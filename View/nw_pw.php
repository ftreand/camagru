<?php
include("header.php");

?>

<body>
<div class="nw_pw">
    <div class="user"><i class="fas fa-user icon"></i></div>
    <h1>Forget Password<h1>
            <form action="../Redirection/nw_pw.php" method="POST">
                <p>Username</p>
                <input type="text" name="login" placeholder="Enter Username">
                <input type="text" name="mail" placeholder="Enter Email">
                <input type="submit" name="" value="Send New Password">
            </form>

</div>

</body>
</head>
</html>