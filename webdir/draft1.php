<!DOCTYPE html>
<html lang="en">
  <head>
    <title>734 | HomeHub Status</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Stylesheets -->
    <link href="../assets/css/bootstrap-main.css" rel="stylesheet" />
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet" />
    <style type="text/css">
          body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
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
      </div>
    <div class='container'>
        <div class='flash'></div>
        <script type="text/rocketscript">$(".nav-tabs").tab("show"); $(function(){$("[rel=tooltip]").tooltip();});</script>
        <section>
            <div class='tabbable'>
                <ul class='nav nav-tabs'>
                    <li class='active'><a data-toggle='tab' href='#'> Misc Info <i class='icon-minus-sign'></i></a></li>
                </ul>
                <div class='tab-content'>
                    <div class='tab-pane active' id='0'>
                        <div class='row'>
                            <div class='span12'></div>
                            <div class='span8'>
                                <h3>Information</h3>
                                <table class='table table-striped'>
                                    <tbody>
                                        <tr>
                                            <td><b>Weather</b></td>
                                            <td>
                                                <ul class='unstyled'>
                                                    <li>Current: <? $myFile = "./weather.txt";
	                                                    	$lines = file($myFile);
	                                                    		echo trim($lines[0]); ?>&deg;c</li>
                                                    <li>Maximum: <? $myFile = "./weather.txt";
	                                                    	$lines = file($myFile);
	                                                    		echo trim($lines[1]); ?>&deg;c</li>
	                                                <li>Minimum: <? $myFile = "./weather.txt";
	                                                    	$lines = file($myFile);
	                                                    		echo trim($lines[2]); ?>&deg;c</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Service Status</b></td>
                                            <td>
                                                <ul class='unstyled'>
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
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
  </body>
</html>
