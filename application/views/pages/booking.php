<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-md-push-5">
                    <div class="booking-cta resort_list">
                        <h1>Make your reservation</h1>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi facere, soluta magnam consectetur molestias itaque ad sint fugit architecto incidunt iste culpa perspiciatis possimus voluptates aliquid consequuntur cumque quasi. Perspiciatis.
                        </p>
                    </div>
                </div>
                <div class="resort_list">
                    <div class="booking-form">
                        <?php echo form_open('c_booking/book'); ?>
                            <div class="form-group">
                                <span class="form-label">Your Destination</span>
                                <select name='resort_name'class="form-control" id="ski-resort">
                                    <option value="" selected disabled>Please select</option>
                                    <?php foreach ($resorts as $resort):?>
                                        <option value="<?php echo $resort['name'];  ?>">
                                            <?php echo $resort['name'];  ?>
                                        </option>
                                        <?php endforeach ?>

                                </select>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Check In</span>
                                        <input name="check_in" class="form-control" type="date" required />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Check out</span>
                                        <input name="check_out" class="form-control" type="date" required />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="form-label">Rooms</span>
                                        <select name="num_rooms" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="form-label">Adults</span>
                                        <select name="num_adults" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <span class="form-label">Children</span>
                                        <select name="num_child" class="form-control">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                            <input id="submit" type="submit" value="book!" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
