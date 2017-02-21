<script>
var image = "myproject/assets/img/home-bg.jpg"; var title="Profil"; var sub= "";
changeBg(image,title,sub);
</script>
<h2><?= $title ?></h2>
<hr>
<div class="containter">
    <div class="row">
        <div class="col-md-4 col-md-offset-0 col-xs-6 col-xs-offset-3">
            <?php echo form_open('/profile/upload_img'); ?>
                <div class="form-group text-center">
                    <img src="<?php echo base_url(); ?>myproject/assets/img/user_img/placeholder.png" width="150px" height="150px"><br>
                    <label>Profilkép feltöltése</label>
                    <input type="file" name="userfile" size="20">
                    <input type="submit" value="küldés">
                </div>
            </form>
        </div>
        <div class="col-md-8 col-xs-12">
        <div style="overflow-x:auto;">    
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Felhasználónév:</th>
                        <th>Email:</th>
                        <th>Létrehozás dátuma:</th>
                    </tr>    
                </thead>
                <tbody>
                    <td><?php echo $_SESSION['username']; ?></td>
                    <td><?php echo $_SESSION['email']; ?></td>
                    <td><?php echo $_SESSION['created_at']; ?></td>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
