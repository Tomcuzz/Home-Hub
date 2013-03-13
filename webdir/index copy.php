<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>734 Home Status</title>
    
<!-- Mobile viewport optimized: h5bp.com/viewport -->
	  <meta name="viewport" content="width=device-width">

<!-- Main stylesheet imports bootstrap css and adds custom -->
    <link href="assets/css/bootstrap-main.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet" />
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
      </div>
          <div class='container'>
        <div class='flash'></div>
		    		<div class="row">
							<div class="tabbable span12">
								<ul class="nav nav-tabs">
									<li class='active'><a data-toggle='tab' href='#Misc'> Misc Info <i class='icon-eye-open'></i></a></li>
									<li><a href="#Network" data-toggle="tab">Networking <i class='icon-globe'></i></a></li>
									<li><a href="#Tab3" data-toggle="tab">Tab 3</a></li>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="Misc">
                <div class='tab-content'>
                    <div class='tab-pane active' id='0'>
          <div class='container'>
<div class="row-fluid">
    <div class="span12">
        <div class="hero-unit">
            <h1>Flat 734</h1>
            <h2>Our Very Own HomePage!</h2>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span3">
            <h2>Service Status</h2>
            <p>Check wether our favourite sites are accessible from within our network, if they aren't then the internet has probably imploded!</p>
            <p><b>Site Status:</b></p>
            <ul>
                                                    <li>Google - <?
	                                                    $info[0]["address"]="google.com";
	                                                    $info[0]["port"]="80";
	                                                    $infocount = 0;
	                                                    $timeout = 2;
	                                                    	echo '<table>';
	                                                    		for ($i=0; $i<=$infocount; $i++){
		                                                $fp = @fsockopen ($info[$i]["address"], $info[$i]["port"], $errno, $errstr, $timeout);
		                                                if ($fp) {
			                                                echo "<strong>UP</strong>";
			                                                }else{
				                                        echo "<strong>DOWN</strong>";
				                                             }
				                                             }
				                                           echo "</tr></table>";?>
				                                        </li>
				                                    <li>Reddit - <?
					                                    $info[0]["address"]="reddit.com";
					                                    $info[0]["port"]="80";
					                                    $infocount = 0;
					                                    $timeout = 2;
					                                    	echo '<table>';
					                                    	for ($i=0; $i<=$infocount; $i++){
						                                $fp = @fsockopen ($info[$i]["address"], $info[$i]["port"], $errno, $errstr, $timeout);
						                                if ($fp) {
							                                echo "<strong>UP</strong>";
							                            }else{
								                            echo "<strong>DOWN</strong>";
								                            }
								                            }
								                            echo "</tr></table>";
								                            ?>
								                            </li>
								                     <li>Pornhub - <?
									                     $info[0]["address"]="pornhub.com";
									                     $info[0]["port"]="80";
									                     $infocount = 0;
									                     $timeout = 2;
									                     	echo '<table>';
									                     	for ($i=0; $i<=$infocount; $i++){
										                 $fp = @fsockopen ($info[$i]["address"], $info[$i]["port"], $errno, $errstr, $timeout);    
										                 if ($fp) {
											                 echo "<strong>UP</strong>";
											                 }else{
												             echo "<strong>DOWN</strong>";
												             }
												             }
												         echo "</tr></table>";?>
												   </li>
            </ul>

        </div>

        <div class="span3">
            <h2>Current Weather</h2>
            <p>The current weather in Birmingham taken from www.myweather2.com</p>
            <br /><br />
            <p><b>Weather:</b></p>
            <ul class="unstyled">
                                                    <li>Current: <? $myFile = "/var/www/default/files/weather.txt";
	                                                    	$lines = file($myFile);
	                                                    		echo trim($lines[0]); ?>&deg;c</li>
                                                    <li>Maximum: <? $myFile = "/var/www/default/files/weather.txt";
	                                                    	$lines = file($myFile);
	                                                    		echo trim($lines[1]); ?>&deg;c</li>
	                                                <li>Minimum: <? $myFile = "/var/www/default/files/weather.txt";
	                                                    	$lines = file($myFile);
	                                                    		echo trim($lines[2]); ?>&deg;c</li>
            </ul>
        </div>

        <div class="span3">
            <h2>Who's Home?</h2>
            <p>A list of who's home at the moment, this is taken from who's on the network at the moment so it might not be accurate!</p>
            <br />
            <table class='table table-bordered table-striped'>
	            <thead>
<tr>
<th width='25%'>Name</th>
<th width='25%'>Time</th>
<th width='50%'>IP</th>
</tr>
</thead>
<tbody>
<tr>
<td>
Max
</td>
<td>
5h
</td>
<td>
10.0.1.2
</td>
</tr>
<tr>
<td>
Harry
</td>
<td>
10h
</td>
<td>
10.0.1.101
</td>
</tr>
<tr>
<td>
Tom
</td>
<td>
2h
</td>
<td>
10.0.1.102
</td>
</tr>
</tbody>
</table>
        </div>

        <div class="span3">
            <h2>Word Of The Day</h2>
            <p><? $myFile = "/var/www/default/files/wordoftheday.txt";
	            	$lines = file($myFile);
	            echo trim($lines[0]); ?></p>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
									<div class="tab-pane" id="Network">
										<div class='container'>
<div class='flash'>
</div>
<section>
<div class='page-header'>
<h1>
Network Stats
<small>Users and IP Addresses</small>
</span>
</h1>
</div>
<div class='row'>
<div class='span12'>
<table class='table table-bordered table-striped'>
<thead>
<tr>
<th width='25%'>IP Address</th>
<th width='25%'>MAC Address</th>
<th width='25%'>Brand</th>
<th width='25%'>Name</th>
</tr>
</thead>
<tbody>
<tr>
<td>
10.0.1.1
</td>
<td>
24:ab:81:b9:62:53
</td>
<td>
Apple Airport
</td>
<td>
Router
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
									</div>
									<div class="tab-pane" id="Tab3">
										<h4>Pane 3</h4>
										<p>I love cocks</p>
									</div>
								</div><!-- /.tab-content -->
							</div><!-- /.tabbable -->
						</div><!-- /.row -->

      <hr>
    </div> <!-- .container -->

<!-- ==============================================
		 JavaScript below! 															-->

<!-- jQuery via Google + local fallback, see h5bp.com -->
	  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  	<script>window.jQuery || document.write('<script src="assets/js/jquery.js"><\/script>')</script>

<!-- Bootstrap JS: compiled and minified -->
    <script src="/assets/js/bootstrap.min.js"></script>
    
<!-- Initialize Scripts -->
		<script>
			// Activate Google Prettify in this page
			addEventListener('load', prettyPrint, false);
		
			$(document).ready(function(){

				// Add prettyprint class to pre elements
					$('pre').addClass('prettyprint');
								
			}); // end document.ready
		</script>

  </body>
</html>