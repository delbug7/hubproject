<?php defined('_HUBACCES') or header('Location: /index.php'); ?>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="site/css/login.css">

</head>
<body>

<div>
    <img class="background-image" src="https://preview.ibb.co/nmzZRw/bg_image.png">


    <div class="page">

        <div class="picture-user">
            <img src="https://image.ibb.co/k13VYb/user_alt.png" alt="user">
        </div>

        <div class="text-login">
            <span>Dashboard Login</span>
        </div>

        <div class="input-forms">
            <form action="index.php" method="post">
                <input class="input-login" type="text" placeholder="Your login" name="pseudo">
                <input class="input-password" type="password" placeholder="Your password" name="password">
                <div class="button">
                    <button class="button-login" type="submit">Login</button>
                </div>
            </form>
            <a href="../index.php">Revenir en arrière !</a>
        </div>


    </div>
</div>



</body>
</html>
