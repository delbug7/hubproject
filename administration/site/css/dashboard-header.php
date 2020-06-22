<?php
defined('_HUBACCES') or header('Location: /index.php');
$hex = \Config::$site_color;
list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
?>
<style>
    /* -----------------------------------------------------
      Body
    -------------------------------------------------------- */
    body {
        margin: 0;
        padding: 0;
        color: #646360;
        font-size: 16px;
        font-family: 'Roboto', sans-serif;
        background-color: #eee;
    }

    *, *::after, *::before {
        -ms-box-sizing: border-box;
        -o-box-sizing: border-box;
        box-sizing: border-box;
    }

    ::-moz-selection {
        background: #b3d4fc;
        text-shadow: none;
    }

    ::selection {
        background: #b3d4fc;
        text-shadow: none;
    }

    a {
        color: #03a9f4;
        outline: none;
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }

    .overlay {
        display: none;
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.285);
        z-index: 1001;
    }

    .logo-icon {
        display: inline-block;
        text-decoration: none;
    }
    .logo-icon img {
        margin-top: 10px;
        display: block;
        border-radius: 50%;
    }

    /* -----------------------------------------------------
    Clearfix
    -------------------------------------------------------- */
    .clearfix {
        *zoom: 1;
    }
    .clearfix::after {
        content: '';
        display: table;
        line-height: 0;
        clear: both;
    }

    /* -----------------------------------------------------
       Header
    -------------------------------------------------------- */
    header {
        display: block;
        position: fixed;
        top: 0px;
        left: 0px;
        width: 100%;
        background-color: #fff;
        z-index: 1000;
    }
    header .header {
        width: 100%;
        height: 64px;
        color: #fff;
        padding: 0 20px;
        background-color: #3f51b5;
        box-shadow: 0px 1px 8px rgba(0, 0, 0, 0.3);
    }
    header .header-btn {
        cursor: pointer;
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 38px;
        margin: 12px 0;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    header .header-btn.header-slider {
        float: left;
    }
    header .header-btn i {
        vertical-align: middle;
    }
    @media only screen and (max-width: 480px) {
        header .header{
            padding: 0 12px;
            text-align: center;
        }
        header .header-btn {
            background-color: rgba(0, 0, 0, 0.175);
        }
    }

    /* -----------------------------------------------------
       Nav
    -------------------------------------------------------- */
    nav {
        overflow-y: auto;
        position: fixed;
        top: 0px;
        left: -250px;
        width: 250px;
        height: 100%;
        color: #fff;
        background-color: #f9f9f9;
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
        opacity: 0.9;
        z-index: 1002;
    }
    nav .menu-left-title {
        display: block;
        background-color: #3f51b5;
    }
    nav .menu-left-title .logo {
        padding: 1.7em 1em;
    }
    nav .menu-left-title .logo .logo-text {
        display: inline-block;
        color: #fff;
        font-size: 1.2em;
        vertical-align: 12px;
        margin-left: 8px;
        text-decoration: none;
    }
    nav .menu-items li {
        display: block;
        position: relative;
    }
    nav .menu-items li a {
        display: block;
        width: 100%;
        font-size: 1rem;
        color: #5c5c5c;
        padding: .625em 1.3em;
        text-decoration: none;
    }
    nav .menu-items li a:hover {
        background-color: rgba(0, 0, 0, 0.1);
    }
    nav.open {
        left: 0px;
        box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.275);
        opacity: 1;
    }

</style>