<?php
session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory System App</title>
    <!-- Page Icon -->
    <link rel="icon" href="../../src/img/logo.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../src/css/bootstrap/bootstrapcss.css">
    <script src="../../src/css/bootstrap/bootstrapjquery.js"></script>
    <script src="../../src/css/bootstrap/bootstrapproper.js"></script>
    <script src="../../src/css/bootstrap/bootstarp.js"></script>
    <!-- My CSS and SCRIPT -->
    <link rel="stylesheet" href="../../src/css/style.css">
    <link rel="stylesheet" href="../../src/css/w3css.css">
    <script src = "../../src/js/script.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
<div id="sidebar-wrapper">
    <nav class = "sidebar-nav">
        <div class = "py-4" style = "border-bottom:1px solid gray;">
            <img src="../../src/img/default1.jpg" class="rounded-circle shadow-sm mx-auto d-block bg-white p-1" alt="Profile" style = "width:155px;height:155px">
        <h3 class = "text-white text-center"><?php  echo $_SESSION['fullname']??"UNKWON"?></h3>
        <p style="line-height:5px" class = "text-white text-center"><?php  echo $_SESSION['adminLevel']??"Guest"?></p>
        </div>
        <div class="w3-bar-block m-2 text-white">
           <a style = "text-decoration:none" href="dashboard.php"><button class="w3-bar-item w3-button w3-hover-aqua py-3 rounded"><i class="fa fa-dashboard w3-margin-right"></i>Dashboard</button></a>
            <button class="collapse w3-bar-item w3-button w3-hover-aqua py-3 rounded" data-toggle="collapse" data-target="#blogs"><i class="fa fa-book w3-margin-right"></i>Products</i><i style = "float:right" class = "fa fa-angle-down"></i></button>
                <ul class="sub-menu collapse text-white" id="blogs" style = "padding-left:15px">
                  <a style = "text-decoration:none" href="create-blog.php" class="w3-bar-item w3-hover-aqua py-2 rounded"><i class="fa fa-angle-right fa-fw"></i>Create</a>
                  <a style = "text-decoration:none" href="manage-blog.php" class="w3-bar-item w3-hover-aqua py-2 rounded"><i class="fa fa-angle-right fa-fw"></i>Manage</a>
                </ul>
      
                <a style = "text-decoration:none" href="manage-user.php"><button class="w3-bar-item w3-button w3-hover-aqua py-3 rounded"><i class="fa fa-user w3-margin-right"></i>Admin</button></a>
                
        </div>
        <div class="sidebar-footer card-footer">
            <span class="text-white w3-small">&copy; Copyright 2020, John Paul Vistal</span>
        </div>
    </nav>
</div>
</html>
