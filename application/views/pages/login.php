

  <div><h3><?php echo $error; ?></h3></div><br>
<section class='login'>
  <div >
    <?php echo form_open('c_login/auth'); ?>
      <fieldset >
        <h3>Login User:</h3>
        <div>
          <label>Email: </label>
          <input  type="email" name="e-mail">
        </div>
        <div>
          <label>Password: </label>
          <input  type="password" name="password">
        </div>
        <div>
          <input  type="submit" value="login" name="submit">
        </div>
      </fieldset>
    </form>
  </div>
</section>
