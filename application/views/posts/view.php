<script>
var image = "/../myproject/assets/img/posts-bg.jpg"; var title="Blog"; var sub= "Írásaim";
changeBg(image,title,sub);
</script> 
<div class="panel panel-default">
	<div class="panel-heading">
		<h2><?php echo $post['title']; ?></h2>
	</div>
	<div class = "post-body panel-body">
		<small class='post-date'>Posted on: <?php echo $post['created_at']; ?></small><br>
		<?php echo $post['body'];?>
	</div>
</div>

		<hr>
		<a class = "edit-gomb btn btn-default pull-left" href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>">
		Edit</a>
		<?php echo form_open('/posts/delete/'.$post['id']); ?>
			<input type="submit" value ="delete" class="delete-gomb btn btn-danger" >
		</form>