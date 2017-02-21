
<script>
var image = "myproject/assets/img/register-bg.jpg"; var title="Regisztráció"; var sub= "";
changeBg(image,title,sub);
</script>
<div class="container"> 
  <div id="error-field" class="text-center">
      <?php echo validation_errors(); ?>
  </div>
  <div class="Aligner">
  
  <?php echo form_open('/register'); ?>
   
    <div class="control-group Aligner-item" >
     <div class="form-group">
        <label for="username" class="control-label">Felhasználónév</label>
        <input type="text" class="form-control" id="username" name="username" value="" required="true" title="Please enter you username" placeholder="Add meg a felhasználóneved">
         <span class="help-block">A felhasználónév maximum 20 karakter lehet.</span>
      </div>

      <div class="form-group">
        <label for="text" class="control-label">Email</label>
        <input type="text" class="form-control" id="password" name="email" value="" required="true" placeholder="Add meg az email címed">
        <span class="help-block"> Add meg az emailed</span>
      </div>

      <div class="form-group">
        <label for="password" class="control-label">Jelszó</label>
        <input type="password" class="form-control" id="password" name="password" value="" required="true" title="" placeholder="Add meg a jelszavad">
        <span class="help-block">A jelszó minimum 4 karakter hosszúságú kell hogy legyen</span>
      </div>

      <div class="form-group">
        <label for="password" class="control-label">Jelszó megerősítése</label>
        <input type="password" class="form-control" id="password" name="passconf" value="" required="true" title="" placeholder="Jelszó megerősítés">
        <span class="help-block">Kérlek írd be mégegyszer a jelszavad</span>
      </div>

        <div class="control-group">
        <div class="controls">
          <button class="btn btn-success">Regisztráció</button>
      </div>
    </div>
   </fieldset>
  </form>
 </div>
</div>
 </div>
