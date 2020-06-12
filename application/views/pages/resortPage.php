<div class="container resort_list">

    <div>
        <img src="<?php echo $resort[0]['resort_pic']; ?>" title="resort images" width="450" height="250">
        
        <h2><p><?php echo $resort[0]['name'];?></p></h2>
    </div>
    <p>
        <?php 
                echo $resort[0]['name']." located in ". $resort[0]['country']. " at height of "
                .$resort[0]['height']." has ".$resort[0]['blue_lines']." blue lines, ".$resort[0]['red_lines']
                ." red lines, ".$resort[0]['black_lines']." black lines, food costs anywhere between "
                .$resort[0]['food_price_range']." and hotels costs around ".$resort[0]['hotel_price_range'].".";

                ?>

    </p>
    <div class="row">
        <div class="col-md-3">
            <h3 class="label h5">Elevation info</h3>
            <div class="" id="">
                <?php $resort[0]['height'] ?>
            </div>
        </div>
        <div class="col-md-2">Ski slopes » </div>
        <div class="col-md-3">
            <div>
                <?php echo "Totel: "; echo $resort[0]['blue_lines']+$resort[0]['red_lines']+$resort[0]['black_lines'] ?>km</div>
            <div class="">
                <table class="">
                    <tbody>
                        <tr>
                            <td class="">Easy</td>
                            <td id="" class="">
                                <?php echo $resort[0]['blue_lines'] ?>km</td>

                        </tr>
                        <tr>
                            <td class="">Intermediate </td>
                            <td id="" class="">
                                <?php echo $resort[0]['red_lines'] ?> km</td>

                        </tr>
                        <tr>
                            <td class="">Difficult</td>
                            <td id="" class="">
                                <?php echo $resort[0]['black_lines'] ?> km</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="">Ski pass prices</h3>
            <div class="">
                <table class="">
                    <thead>
                        <tr>
                            <th>Adults</th>
                            <th>Youth</th>
                            <th>Children</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="">€
                                <?php echo $resort[0]['hotel_price_range']?>
                            </td>
                            <td id="">€
                                <?php echo $resort[0]['hotel_price_range']*0.8?>
                            </td>
                            <td id="">€
                                <?php echo $resort[0]['hotel_price_range']*0.5?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<br>
<div class="container resort_list" align="center">
    <p class="ski_resort">resort reviews</p>

    <?php foreach ($review as $rev):?>
        <div class="container resort-item row">
            <div class="col-4">

                <p>
                    <?php echo $rev['user_id']; ?>
                </p>
                <p>
                    <?php echo $rev['user_name']; ?>
                </P>

            </div>
            <div class="col-8">
                <p>
                    <?php for($x=0 ; $x<$rev['rate']; $x++): ?>
                    <img src="<?php echo base_url();?>assets/images/star.png" width="20" height="20"> 
                    <?php endfor ?>
                </p>
                 <p>   <?php echo $rev['review']; ?></P>
            </div>
        </div>


            <?php endforeach ?>


                    <?php 
                    $hidden = array('resort_name' => $resort[0]['name']);
                    echo form_open('c_resortPage/add_review','', $hidden); ?>
                <div class="container row">

                    <div class="col-3">
                        <select name='rate'>
                            <option value="not set">enter your rate</option>
                            <option value="1">one star</option>
                            <option value="2">two star</option>
                            <option value="3">three star</option>
                            <option value="4">four star</option>
                            <option value="5">five star</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <textarea name='review'></textarea>
                    </div>
                    <div class="col-3">
                        <input type="submit" value="submit" name="submit">
                    </div>
                </div>
</div>