<!DOCTYPE html>
<html>
<head>
	<title>AmbiLamp</title>
	<link rel="stylesheet" type="text/css" href="assets/css/details.css">
</head>
<body>

<?php
  include "header.php";
?>

<!-- Button and Canvas -->
<input type="button"  id="temp-btn" class="btn" value="View Temperature Chart" onclick="drawTemp()"></input>
<canvas id="temp-chart-long" class="chart" width="900" height="350" hidden></canvas>
<input type="button"  id="sound-btn" class="btn" value="View Sounds Chart" onclick="drawSound()"></input>
<canvas id="sound-chart-long" class="chart" width="900" height="350" hidden></canvas>

<!-- Information Tables -->
<div id="table-container">

	<style>
	table, th, td {
	    border: none;
	    border-collapse: collapse;
	    text-align: left;
	    padding: 8px;
	}
	tr:nth-child(even){background-color: #f2f2f2}

	th {
	    background-color: #465a3f;
	    color: white;
	}
	</style>
<div id="table1">
	<table id="tables" class="table" width="550" >
	  <tr>
	    <th>Time</th>
	    <th>Temperature</th> 
	    <th>Deviation from Average</th>
	  </tr>
	  <tr>
	    <td>I</td>
	    <td>am</td>
	    <td>a</td>
	  </tr>
	  <tr>
	    <td>table</td>
	    <td>for</td>
	    <td>demonstration</td>
	  </tr>
	  <tr>
	    <td>I</td>
	    <td>am</td>
	    <td>a</td>
	  </tr>
	  <tr>
	    <td>table</td>
	    <td>for</td>
	    <td>demonstration</td>
	  </tr>
	  <tr>
	    <td>I</td>
	    <td>am</td>
	    <td>a</td>
	  </tr>
	  <tr>
	    <td>table</td>
	    <td>for</td>
	    <td>demonstration</td>
	  </tr>
	  <tr>
	    <td>I</td>
	    <td>am</td>
	    <td>a</td>
	  </tr>
	  <tr>
	    <td>table</td>
	    <td>for</td>
	    <td>demonstration</td>
	  </tr>
	  <tr>
	    <td>I</td>
	    <td>am</td>
	    <td>a</td>
	  </tr>
	  <tr>
	    <td>table</td>
	    <td>for</td>
	    <td>demonstration</td>
	  </tr>
	  <tr>
	    <td>I</td>
	    <td>am</td>
	    <td>a</td>
	  </tr>
	  <tr>
	    <td>table</td>
	    <td>for</td>
	    <td>demonstration</td>
	  </tr>
	  <tr>
	    <td>I</td>
	    <td>am</td>
	    <td>a</td>
	  </tr>
	  <tr>
	    <td>table</td>
	    <td>for</td>
	    <td>demonstration</td>
	  </tr>
	  	  <tr>
	    <td>I</td>
	    <td>am</td>
	    <td>a</td>
	  </tr>
	  <tr>
	    <td>table</td>
	    <td>for</td>
	    <td>demonstration</td>
	  </tr>
	  <tr>
	    <td>I</td>
	    <td>am</td>
	    <td>a</td>
	  </tr>
	  <tr>
	    <td>table</td>
	    <td>for</td>
	    <td>demonstration</td>
	  </tr>
	  <tr>
	    <td>I</td>
	    <td>am</td>
	    <td>a</td>
	  </tr>
	  <tr>
	    <td>table</td>
	    <td>for</td>
	    <td>demonstration</td>
	  </tr>
	  <tr>
	    <td>I</td>
	    <td>am</td>
	    <td>a</td>
	  </tr>
	  <tr>
	    <td>table</td>
	    <td>for</td>
	    <td>demonstration</td>
	  </tr>
	  <tr>
	    <td>I</td>
	    <td>am</td>
	    <td>a</td>
	  </tr>
	  <tr>
	    <td>table</td>
	    <td>for</td>
	    <td>demonstration</td>
	  </tr>
	  <tr>
	    <td>I</td>
	    <td>am</td>
	    <td>a</td>
	  </tr>
	  <tr>
	    <td>table</td>
	    <td>for</td>
	    <td>demonstration</td>
	  </tr>
	  
	</table>
</div>


	<style>
	table, th, td {
	    border: none;
	}
	</style>

	<table id="table-style" class="table" width="550" height="150" >
	  <tr>
	    <th>Time</th>
	    <th>Temperature</th> 
	    <th>Deviation from Average</th>
	  </tr>
	  <tr>
	    <td>I</td>
	    <td>am</td>
	    <td>a</td>
	  </tr>
	  <tr>
	    <td>table</td>
	    <td>for</td>
	    <td>demonstration</td>
	  </tr>

	  <tr>
	    <td>I</td>
	    <td>am</td>
	    <td>a</td>
	  </tr>
	  <tr>
	    <td>table</td>
	    <td>for</td>
	    <td>demonstration</td>
	  </tr>

	  <tr>
	    <td>I</td>
	    <td>am</td>
	    <td>a</td>
	  </tr>
	  <tr>
	    <td>table</td>
	    <td>for</td>
	    <td>demonstration</td>
	  </tr>

	  
	</table>
</div>

<script type="text/javascript" src="assets/js/details.js"></script>
</body>
</html>
