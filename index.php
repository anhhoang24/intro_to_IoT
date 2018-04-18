<!DOCTYPE html>
<html>
<head>
    <title>AmbiLamp - Home</title>
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <script src="assets/js/jscolor.js"> </script>

</head>
<body>

<?php
  include "GPIO.php";
  include "header.php";

  $color = "EFFFC9";
  if (isset($_POST['set_color'])) {
    $color = $_POST['color']; 
  }

?>

<!--JSCOLOR PICKER -->
<input type="button" class="jscolor" id="picker" onchange="update(this.jscolor)" onfocusout="apply()"  value="<?php echo "'" . $color . "'" ; ?> " >
<table width="100%" id="color_picker">


</table>
<!-- FORM -->
<form method="POST">
	<input type="text" id="color" name="color">
  <input type="submit" id="smt" name="set_color" hidden>
	<input type="submit" value="set as Default" id="set_default">
</form>

<!-- Chart -->
<div id="chart-container">
	
<canvas id="temp-chart" class="chart" width ="550" height="350" ></canvas>
<canvas id="sound-chart" class="chart" width="550" height="350" ></canvas>
</div>
<!-- About -->
<div id="about">
	<h1> ABOUT</h1>

	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam laoreet, sapien vitae semper malesuada, nunc orci aliquet diam, id pellentesque erat erat id magna. Pellentesque sodales vulputate purus id consequat. Cras in velit sagittis, euismod nulla a, pretium dui. Integer id lorem elit. Duis in augue eget nisl scelerisque blandit. Aenean efficitur mauris vel arcu feugiat vulputate. Morbi a congue ante. Pellentesque porttitor imperdiet felis vitae dapibus. Aliquam eu imperdiet sem. Praesent dapibus quis ligula ut mattis. Pellentesque eget diam vitae erat porta venenatis vel vel elit. In id nulla nec enim gravida elementum vitae ut eros. In neque sem, suscipit non aliquet eu, ultrices a risus. Cras leo turpis, imperdiet eu gravida convallis, lacinia quis velit. Nam a mi eget justo semper iaculis.</p>

	<p>Suspendisse sed finibus purus. Curabitur egestas ultrices fringilla. Nullam tellus magna, pretium in arcu vel, maximus euismod nibh. Nam lobortis nunc non mauris lobortis convallis. Praesent ut libero consequat, faucibus ex vitae, varius enim. Etiam facilisis elit neque, a fringilla urna iaculis at. Etiam ut blandit nulla, vitae pretium urna. Nulla sed fermentum ex.</p>

	<p>Proin ullamcorper nulla fermentum, auctor dui sed, vehicula ligula. Fusce vel scelerisque arcu. Vivamus porta maximus elit, quis laoreet leo iaculis ut. Aenean luctus, enim sit amet rhoncus scelerisque, urna nulla aliquam sem, eu molestie est nunc feugiat erat. Etiam ullamcorper scelerisque mattis. Curabitur a facilisis lacus. Donec id feugiat orci. Suspendisse ultricies ornare aliquam. Nunc eget lorem a purus laoreet aliquam ac vitae arcu. Donec quis euismod leo.</p>

	<p>Fusce dictum ultricies nulla et pharetra. Pellentesque congue non tellus eget faucibus. Aenean scelerisque ac neque varius efficitur. Ut et interdum est, ut porta lectus. In pharetra tortor eget arcu rhoncus rutrum. Pellentesque vehicula, diam at dictum sagittis, orci libero tempor nisl, et pulvinar turpis tellus cursus mauris. Nunc feugiat ligula in accumsan dictum. Ut a quam ac urna fermentum tempor. Vivamus efficitur rutrum eros, quis posuere eros bibendum eu.</p>

	<p> tincidunt nisi eu quam tempor venenatis. Nam convallis velit at quam euismod fermentum. Duis et ullamcorper nisl, pellentesque interdum felis. Aliquam tempor, risus et cursus posuere, mauris nibh malesuada purus, a porta ipsum urna a mauris. Aliquam nec porttitor nibh, non faucibus diam. Maecenas accumsan sollicitudin orci a semper. Maecenas nec turpis faucibus, eleifend nunc sit amet, fermentum neque. Donec fermentum leo eu erat mattis aliquet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>

<script type="text/javascript" src="assets/js/index.js"></script>
</body>
</html>



