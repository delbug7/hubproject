<?php defined('_HUBACCES') or header('Location: /index.php'); ?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Dashboard</title>
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="/administration/site/css/dashboard-header.css">
            <?php require_once HUBPATH_SITEDIR . DIRECTORY_SEPARATOR. 'css' .DIRECTORY_SEPARATOR. 'dashboard-main.php'?>
        </head>
        <body>

            <nav>
                <div class="menu-left-title">
                    <div class="logo">
                        <a class="logo-icon" href="index.php"><img alt="logo-icon" src="/site/images/logo/logo.png" width="50"></a>
                        <a class="logo-text" href="index.php"><?= \Config::$site_name ?><br><br>Admin Panel</a>
                    </div>
                </div>
                <ul class="menu-items">
                    <li><a href="index.php?page=dashboard">Dashboard</a></li>
                    <li><a href="index.php?page=module">Module</a></li>
                    <li><a href="index.php?page=pages">Pages</a></li>
                    <li><a href="index.php?page=setting">Paramètre</a></li>
                    <li><a href="site/disconnect.php">Déconnexion</a></li>
                </ul>
            </nav>

            <header>
                <div class="header clearfix">
                    <div class="header-btn header-slider">
                        <i class="material-icons">menu</i>
                    </div>
                    <div class="logo-icon">
                        <a href="index.php"><img alt="logo" src="/site/images/logo/logo.png" width="50"></a>
                    </div>
                </div>
            </header>

            <main role="main" class="main">
                <?php require_once $textMain;?>
            </main>

            <footer></footer>
            <div class="overlay"></div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="site/js/dashboard.js">

                //# sourceURL=pen.js
            </script>

        </body>

    </html>