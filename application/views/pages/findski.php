<div class="row content">

    <div class="resort_list col-md-8">
        <div class="container ">

            <div class="container filter">
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
                                    <input type="checkbox" name="friends" id="friend_check" value="1"> friend
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

        </div>

    </div>

    <div class="col-md-4 aside">

        <aside>
            <div><a href="<?php echo site_url().'/booking';?>" class="last-a-nav">Book Now!</a></div>
        </aside>

    </div>