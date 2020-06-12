<div class="row content">

    <div class="resort_list col-md-8">
        <div class="container ">

            <div class="row ski_resort">
                <p>ski resort list</p>

            </div>

            <?php foreach ($resorts as $resort):?>
                <div class="resort-item">
                    <div class="row ">
                      
                            <?php echo $resort['name']; ?>
                        
                    </div>
                    <hr>
                    <div class="row  ">
                        <div class="col-md-6 ">
                            <!-- <a href="link to resort page"> </a> -->
                            <img class="resort-image" src="<?php echo $resort['resort_pic']?>" title="All information about the ski resort Racines-Giovo (Ratschings-Jaufen)/Malga Calice (Kalcheralm)">
                        </div>
                        <div class="col-md-6 ">
                            <div class="resort_stats">
                                <table class="info_table">
                                    <tbody>

                                        <tr>
                                            <td class="left">
                                                <img src="<?php echo base_url();?>assets/images/height.jpg" class="img">
                                            </td>
                                            <td>
                                                <?php echo $resort['height']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                                <img src="<?php echo base_url();?>assets/images/lines.jpg" class="img">
                                            </td>
                                            <td><span class="blue_line"><?php echo $resort['blue_lines']."km "?> </span><span class='red_line'><?php echo $resort['red_lines']."km "?> </span><span class='black_line'><?php echo $resort['black_lines']."km";?></span></td>
                                        </tr>
                                        <tr>
                                            <td class="left">
                                                <img src="<?php echo base_url();?>assets/images/curency.jpg" class="img">
                                            </td>
                                            <td>€
                                                <?php echo $resort['food_price_range']; ?>
                                            </td>
                                        </tr>
                                        <tr class="col-sm-12">
                                            <!-- link to resort page -->
                                            <td align="right" colspan="2">
                                                <form method="get" action="<?php echo site_url().'/skiresort/';?>">
                                                    <button type="submit" class="btn btn-warning" name="name" value="<?php echo $resort['name'];?>"> Details </button>
                                                </form>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <?php endforeach; ?>
        </div>

    </div>

    <div class="col-md-4 aside">

        <aside>
            <div><a href="<?php echo site_url().'/booking';?>" class="last-a-nav">Book Now!</a></div>
        </aside>

    </div>
</div>