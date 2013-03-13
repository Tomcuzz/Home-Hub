<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>734 Home Status</title>
    
<!-- Mobile viewport optimized: h5bp.com/viewport -->
	  <meta name="viewport" content="width=device-width">

<!-- Main stylesheet imports bootstrap css and adds custom -->
    <link href="/assets/css/bootstrap-main.css" rel="stylesheet" />
    <link href="/assets/css/custom.css" rel="stylesheet" />
    <link href="/assets/css/bootstrap-responsive.css" rel="stylesheet" />
    <style type="text/css">
          body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <style>
    	/* To keep short panes open decently tall */
    	.tab-pane {min-height: 400px;}
    </style>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="./">734 Status</a>
         </div>
        </div>
       </div>
         <div class='container'>
        <div class='flash'></div>
		    		<div class="row">
							<div class="tabbable span12">
								<ul class="nav nav-tabs">
									<li><a data-toggle='tab' href='/'> Misc Info <i class='icon-eye-open'></i></a></li>
									<li class='active'><a href="/network/" data-toggle="tab">Networking <i class='icon-globe'></i></a></li>
									<li><a href="/new/">Tab 3</a></li>
								</ul>
<div class='container'>
<div class='flash'>
</div>
</div>
<div class='page-header'>
<h1>
All Logged Users
<small>Last Modified: 
<?
$filename = '/var/www/default/files/hostc.txt';
if (file_exists($filename)) {
    echo date ("d/m/y H:i", filemtime($filename));
}
?>
</small>
</h1>
</div>
<div class='row'>
<div class='span12'>
<table class='table table-bordered table-striped'>
<thead>
<tr>
<th width='20%'>Date</th>
<th width='20%'>IP Address</th>
<th width='20%'>MAC Address</th>
<th width='20%'>Brand</th>
<th width='20%'>Name</th>
</tr>
<?
mysql_connect("localhost", "status", "status") or
    die("Could not connect: " . mysql_error());
mysql_select_db("734status");

$result = mysql_query("SELECT Date, IP, MACAddress, Description, Name FROM network ORDER BY INET_ATON(IP)");

while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
?>    

<tr>
	<td><?=$row['Date']; ?></td>
    <td><?=$row['IP']; ?></td>
    <td><?=$row['MACAddress']; ?></td>
    <td><?=$row['Description']; ?></td>
    <td><?=$row['Name']; ?></td>
</tr> 
<?
}
mysql_free_result($result);
?>
</table>
</div>
</div>
<div class="well well-small">
<div class="row">
  <div class="span11">
  <h1>Add Known User:</h1>
<form method="post" action="./addmac.php" class="form-inline" >
      <input name="user_mac" class="span5" type="text"  placeholder="MAC Address" >
      <input name="user_name" class="span5" type="text"  placeholder="Friendly Name">
      <button type="submit" id="add" class="btn btn-primary"> <i class="icon-plus-sign icon-white"></i></button>
</form>
  </div>
</div>
</div>
</div>
</div>
      <hr>
    </div> <!-- .container -->

<!-- jQuery via Google + local fallback, see h5bp.com -->
  	<script>window.jQuery || document.write('<script src="assets/js/jquery.js"><\/script>')</script>
<!-- Bootstrap JS: compiled and minified -->
    <script src="/assets/js/bootstrap.min.js"></script>
  </body>
</html>