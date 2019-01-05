<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/js/semantic.min.js">
  	 $('.tabular.menu .item').tab({history:false});
  </script>
</head>
	<body>
		<div class="ui massive menu">
		  <a class="active item">
		    Home
		  </a>
		  <a class="item">
		    Messages
		  </a>
		  <div class="right menu">
		    <div class="ui simple dropdown item">
		      Language <i class="dropdown icon"></i>
		      <div class="menu">
		        <a class="item">English</a>
		        <a class="item">Russian</a>
		        <a class="item">Spanish</a>
		      </div>
		    </div>
		    <div class="item">
		        <div class="ui primary button">Sign Up</div>
		    </div>
		  </div>
		</div>
		<div class="ui menu">
		  <div class="ui category search item">
		    <div class="ui transparent icon input">
		      <input class="prompt" type="text" placeholder="Search books...">
		      <i class="search link icon"></i>
		    </div>
		    <div class="results"></div>
		  </div>
		</div>
		<div class="ui grid">
		  <div class="four wide column">
		    <div class="ui vertical fluid tabular menu">
		      <a class="active item">
		        Bio
		      </a>
		      <a class="item">
		        Pics
		      </a>
		      <a class="item">
		        Companies
		      </a>
		      <a class="item">
		        Links
		      </a>
		    </div>
		  </div>
		  <div class="twelve wide stretched column">
		    <div class="ui segment">
		      This is an stretched grid column. This segment will always match the tab height
		    </div>
		  </div>
		</div>

