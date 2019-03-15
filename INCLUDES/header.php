<?php include "db.php" ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title>TODO APP</title>
</head>
<body>
<div class="container main_body">
    <div class="row" style="margin-top:70px";>
        <div class="col-md-10 col-md-offset-1">
        <h1 class = "heading" style ="text-align:center" >Todo List</h1>
        <br><br>

<form action="search.php" method="post">
  <div class="form-group" >
  <div class = "row" style="margin: 50px 100px";>
    <div class ="col-sm-10">
    <input type="text" name="search" class="form-control" placeholder="Search Task Title">
  </div>
  <button type="submit" name ="find" class="btn btn-primary">Search</button>
  </div>
  </div>
  
</form>