<?php

/*    $data['bookings'] = $this->booking_model->get_booking();
    print_r($data['bookings']);*/
   $data['bookings'] = $this->booking_model->get_booking_where('resort_name','Aspen Snowmass');
   $Aspen = count($data['bookings']);

   $data['bookings'] = $this->booking_model->get_booking_where('resort_name','Cortina D`Ampezzo');
   $Cortina = count($data['bookings']);

   $data['bookings'] = $this->booking_model->get_booking_where('resort_name','Courchevel Courcheve');
   $Courchevel = count($data['bookings']);

   $data['bookings'] = $this->booking_model->get_booking_where('resort_name','Telluride');
   $Telluride = count($data['bookings']);

   $data['bookings'] = $this->booking_model->get_booking_where('resort_name','Vail Mountain Resort');
   $Vail = count($data['bookings']);

   $data['bookings'] = $this->booking_model->get_booking_where('resort_name','Val d`Isere');
   $Val = count($data['bookings']);

   $data['bookings'] = $this->booking_model->get_booking_where('resort_name','Whistler Blackcomb S');
   $Whistler = count($data['bookings']);

   $data['bookings'] = $this->booking_model->get_booking_where('resort_name','Zermatt Zermatt');
   $Zermatt = count($data['bookings']);

$dataPoints = array(
	array("label"=> "Aspen Snowmass", "y"=> $Aspen),
	array("label"=> "Cortina D`Ampezzo", "y"=> $Cortina),
	array("label"=> "Courchevel Courcheve", "y"=> $Courchevel),
	array("label"=> "Telluride", "y"=> $Telluride),
	array("label"=> "Vail Mountain Resort", "y"=> $Vail),
	array("label"=> "Val d`Isere", "y"=> $Val),
	array("label"=> "Whistler Blackcomb S", "y"=> $Whistler),
	array("label"=> "Zermatt Zermatt", "y"=> $Zermatt)

);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "Total bookings per resort"
	},
	subtitles: [{
		text: "Count bookings"
	}],
	data: [{
		type: "pie",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - #percent%",
		yValueFormatString: "#,##0",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                           