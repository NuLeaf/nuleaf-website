<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
﻿<html>
    <head>
        <meta http-equiv="description" content="NuLEAF Technologies" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php if (isset($page_title)) { echo 'NuLEAF Technologies - ' . $page_title; } else { echo 'NuLEAF Technologies'; } ?></title>
  
        <link rel="shortcut icon" href="images/favicon.ico">

        <link type="text/css" rel="stylesheet" href="css/main.css?v=1.1">
        <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 

        <noscript>Please enable JavaScript for website's full functionality.</noscript>
    </head>
    <body>
        <div id="header">
            <a href="index.php"><img id="logo" src="images/banner.jpg" /></a>

            <span id="search">
                <input type="text" class="form-control search-bar" placeholder="Search">
                <button type="submit" class="btn btn-default" id="search-button" onclick="location.href='search.php'">Submit</button>
            </span>
        </div>

        <div id="navbar">
            <a class="nav-link" href="index.php">Home</a>
            <a class="nav-link" href="about.php">About</a>
            <a class="nav-link" href="faq.php">FAQ</a>
            <a class="nav-link" href="teams.php">Teams</a>
            <a class="nav-link" href="members.php">Members</a>
        </div>

        <div class="content-container" id="index-content">
