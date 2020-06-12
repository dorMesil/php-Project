

<div class="form">
<div><h1><?php echo $error ?></h1></div>
  <h2>Register here</h2>
  <?php echo form_open('c_login/register'); ?>
    <fieldset>
        <div class="info">
            <p><input  type="text" name="fname" placeholder="Firstname">
            <input  type="text" name="lname" placeholder="Last name">
            </p>    
            <p><input type="text" name="e-mail" placeholder="e-mail">
            <input type="password" name="password" placeholder="Password"></p>
            <p><input type="date" name="BOD" placeholder="date of birth"></p>
            <p><input type="numbers" name="id" placeholder="id  "></p>
            
            <select name="family_status">
            <option value="#">Family status</option>
            <option value="single">Single</option>
            <option value="marrid">Marrid</option>
          
            </select>
            </p>
            <p>
            <label>The ultimate ski partner is?</label></p>
            <p>
            <select name="partner">
            <option value="alone">alone</option>
            <option value="friends">frinds</option>
            <option value="family">family</option>
          
            </select>
            </p>
            <p><input type="text" name="address" placeholder="address">
            <input type="text" name="city" placeholder="city"></p>
         
          
        </div>
        <div class="checkbox">
          <input type="checkbox" name="checkbox"> agree to the <a href="#">Privacy Poalicy for W3Docs.</a>
        </div>
        <div><input id="submit" type="submit" value="register" name="submit"></div>
    </fieldset>
      </form>
</div>