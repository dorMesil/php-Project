

<div class="row content">

    <div>
        <div class="container ">

            <div class="container filter">
               <h1>You are logged in as <?php echo $user['name']." ".$user['last_name']  ?></h1>
               <p>
               	Email is <?php echo $user['mail'] ?>
               </p>
               <p>
               	Date of birth is  <?php echo $user['BOD'] ?>
               </p>
               <p>
               	Family status:  <?php echo $user['family_status'] ?>
               </p>
               <p>
               	Address:  <?php echo $user['city']." ".$user['address'] ?>
               </p>
               <p>
               	Partner:  <?php echo $user['partner'] ?>
               </p>

                   


                <?php
                $friends = $this->users_model->count_partner('friends');
                $family = $this->users_model->count_partner('family');
                $alone = $this->users_model->count_partner('alone');
                $single = $this->users_model->count_family_status('single');
                $married = $this->users_model->count_family_status('marrid');
$dataPoints = array(
  array("x"=> 10, "y"=> $friends, "indexLabel"=> "friends"),
  array("x"=> 20, "y"=> $family, "indexLabel"=> "family"),
  array("x"=> 30, "y"=> $alone, "indexLabel"=> "alone")
);

  $Points = array(
  array("x"=> 10, "y"=> $single, "indexLabel"=> "single"),
  array("x"=> 20, "y"=> $married, "indexLabel"=> "married")
);

?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {

  var secondchart = new CanvasJS.Chart("secondchart", {
  animationEnabled: true,
  exportEnabled: true,
  theme: "dark2",
  title:{
    text: "Distribution of users by family status"
  },
  data: [{
    type: "column", 
    indexLabelFontColor: "#5A5757",
    indexLabelPlacement: "outside",   
    dataPoints: <?php echo json_encode($Points, JSON_NUMERIC_CHECK); ?>
  }]
});
secondchart.render();
 
var chart = new CanvasJS.Chart("firstchart", {
  animationEnabled: true,
  exportEnabled: true,
  theme: "dark1",
  title:{
    text: "Distribution of users by ski partners"
  },
  data: [{
    type: "column",
    indexLabelFontColor: "#5A5757",
    indexLabelPlacement: "outside",   
    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
  }]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="firstchart" style="height: 370px; width: 100%;"></div>
<div id="secondchart" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> 

            </div>

        </div>

    </div>

