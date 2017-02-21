
<script>
var image = "/myproject/assets/img/login-bg.jpg"; var title="Belépés"; var sub= ""
changeBg(image,title,sub);
</script> 

<div id="login-overlay" class="modal-dialog">
      <div class="modal-content-login">
          <div class="modal">      
          </div>
          <div class="modal-body">
              
                      <div class="well">
                         <?php echo form_open('/login/login_user'); ?>
                              <div class="form-group">
                                  <label for="username" class="control-label">Felhasználónév</label>
                                  <input type="text" class="form-control" id="username" name="username" value="" required="true" title="Add meg a felhasználóneved" placeholder="A felhasználóneved">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label">Jelszó</label>
                                  <input type="password" class="form-control" id="password" name="password" value="" required="true" title="Add meg a jelszavad">
                                  <span class="help-block"></span>
                              </div>
                              <button type="submit" class="btn btn-success btn-block">Belépés</button>
                              
                          </form>
            </div>
            </div>
            </div>

                      