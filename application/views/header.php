<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Search-NSE Rashid</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<style type="text/css">
		nav {
			background-color: #E0F2FF !important;
		}
		body {
			background-image: linear-gradient(to bottom, #ecf8e8, #e3f8ee, #ddf7f5, #dcf5fb, #e0f2ff);
			min-height: 100vh;
		}
		.input-group {
			background-color : white !important;
			border-radius: 10px !important;
		}
		#result {
			background-color : white;
			border-radius: 10px;
			padding: 20px;
		}
		.well {
			background-color:  #E9ECEF;
		}
		.item{
			padding: 10px;
		}
		.item-bg-1{
			padding: 10px;
			border-radius: 10px;
			background-color:  #E9ECEF;
		}
		.item-bg-2{
			padding: 10px;
			border-radius: 10px;
			background-color:  #DCF4FB;
		}
		.sugesstions {
			position: relative;
			background-color : white;
			border-radius: 10px;
			padding: 20px;
			text-align: left;
			max-height: 240px;
			overflow-y: scroll;
		}
		p {
			font-size: 24px;
			font-weight: 200;
		}
		p > h1 {
			font-size: 55px;
			font-weight: bold;
		}
		p > h1 {
			font-size: 30px;
			font-weight: bold;
		}
	</style>
</head>
<body>
<nav class="navbar">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link"><h3>Stocks</h3></a>
    </li>
  </ul>
  <ul class="navbar-nav float-right">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url() ?>index.php/riafy/logout">Logout</a>
    </li>
  </ul>
</nav>
<div class="container">
