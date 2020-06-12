<div class="row content">

    <div class="resort_list col-md-8">
        <div class="container ">

            <div class="container filter">

                <?php echo print_r($parameter);?>
                    <form action="<?php echo site_url();?>/resultPage/search">

                        <div class="grid_container">
                            <div class="grid_itema">
                                <input type="text" name="name" id="search_name" placeholder="Ski resort name">
                                <select name="country">
                                    <option>select country</option>
                                    <?php foreach ($country as $c):?>
                                        <?php echo '<option value="'.$c["country"].'">'.$c["country"].'</option>'?>
                                            <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="grid_itemb">
                                <div class="checkBox">
                                    <label>
                                        <input type="checkbox" name="couple" id="couples_check" value="1"> couples
                                    </label>
                                </div>
                                <div class="checkBox">
                                    <label>
                                        <input type="checkbox" name="family" id="family_check" value="1"> family
                                    </label>
                                </div>
                                <div class="checkBox">
                                    <label>
                                        <input type="checkbox" name="friend" id="friend_check" value="1"> friend
                                    </label>
                                </div>
                                <div class="checkBox">
                                    <label>
                                        <input type="checkbox" name="alone" id="alone_check" value="1"> alone
                                    </label>
                                </div>
                            </div>
                            <div class="grid_itemc">
                                <button type="submit">search</button>
                            </div>
                        </div>
                    </form>
            </div>
            <div class="container ">

                <div class="row ski_resort">
                    <p>ski resort list</p>
                </div>
                <?php foreach ($resorts as $resort):?>
                    <div class="resort-item">
                        <div class="row ">
                            <!-- link to resort page -->
                            <a href="#">
                                <?php echo $resort['name']; ?>
                            </a>
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
    </div>

    <div class="col-md-4 aside">

        <aside>
            <div><a href="<?php echo site_url().'/booking';?>" class="last-a-nav">Book Now!</a></div>
        </aside>

    </div>

</div>