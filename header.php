<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Web-interface-for-MyTasks </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/new_style.css" rel="stylesheet">
    
</head>
<body>

<div class="container">
    <div class="row">
        <nav class="navbar navbar-inverse">
            
            <div class="navbar-header">
                <a class="navbar-brand" href="?main">Tasks PHP</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="?main">Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if (isLogin()): ?>
                    <li class="active"><a href="?users"><span class="glyphicon glyphicon-check"></span> Users</a></li>
                    <li class="active"><a href="?user=<?php echo $_SESSION['userId'];?>"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username']; ?></a></li>
                    <li class="active"><a href="?logout"><span class="glyphicon glyphicon-log-out">Logout</span></a></li>
                <?php else: ?>
                    <li class="active"><a href="?register"><span class="glyphicon glyphicon-plus"></span> Sign Up</a></li>
                    <li class="active"><a href="?login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>

    </div>
</div>
    
<div class="container">