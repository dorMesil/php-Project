<?php

            require('database.php'); 
            if (!$database->get_connection()){
                die("Connection fails"); 
            } 

            $sql="select * from resorts"; 
            $result = $database->get_connection()->query($sql);
            

?>      
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>home ski page</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../CSS/home.css">
        <link rel='stylesheet' href="../css/allski.css">
        <link rel="stylesheet" href="../css/resultPage.css">
    </head>
    <body>
        <header>    
            <nav id="">
              <div><img src="../images/logo.svg" alt=""></div>             
              <div><a href="index.php">About Us</a></div>
              <div><a href="allski.php">I Want To See All!</a></div>
              <div><a href="resultPage.php">I'm Alredy Pro Dude</a></div>
              <div><a href="booking.php" class="last-a-nav">Book Now!</a></div>
            </nav>
        </header>
            <div class="row content">                
                <div class="resort_list col-md-8">
                    <div class="container">
                        <div class="row ski_resort">
                            <p>ski resort list</p>
                        </div>
                        <?php while ($row = $result->fetch_assoc()):?> 
                        <div class="resort-item">
                            <div class="row "  >
                                <a  href="#"> <?php echo $row['name']; ?></a> 
                            </div> <hr> 
                            <div class="row  " > 
                                <div class="col-md-6 col-sm-6">
                                    <img class="resort-image" src="<?php echo $row['resort_pic']; ?>" title="All information about the ski resort Racines-Giovo (Ratschings-Jaufen)/Malga Calice (Kalcheralm)">  
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12"" >
                                    <div class="resort_stats">
                                        <table class="info_table"> 
                					       <tbody>
 
                                                <tr> 
                                                    <td class="left">
                                                        <img src="../images/height.jpg" class="img" >
                                                    </td> 
                                                    <td><?php echo $row['height']; ?></td> 
                                                </tr> 
                                                <tr> 
                                                    <td class="left">
                                                    <img src="../images/lines.jpg" class="img" >
                                                    </td> 
                                                    <td><span class="blue_line"><?php echo $row['blue_lines']."km "?> </span><span class='red_line'><?php echo $row['red_lines']."km "?> </span><span class='black_line'><?php echo $row['black_lines']."km";?></span></td> 
                                                </tr>  
                                                <tr> 
                                                    <td class="left">
                                                        <img src="../images/curency.jpg" class="img" >
                                                    </td> 
                                                    <td>€ <?php echo $row['food_price_range']; ?></td> 
                                                </tr> 
                                                <tr class="col-sm-12">
                                                    <td align="right" colspan="2">
                                                        <form method="get" action="resortPage.php" >
                                                            <button type="submit" class="btn btn-warning" name="name" value="<?php echo $row['name'] ?>"> Details </button>
                                                        </form>
                                                    </td>
                                        
                                                </tr>
                                            </tbody>
                				        </table>
                                    </div>
			                    </div> 
		                    </div> 
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="col-md-4 aside">
                
                        <aside>
                            <div><a href="booking.php" class="last-a-nav">Book Now!</a></div>
                        </aside>
                   
                </div>
            </div>
        </body>
    </html>
