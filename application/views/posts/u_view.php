<script>
var image = "myproject/assets/img/posts-bg.jpg"; var title="Blog"; var sub= "Írásaim";
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