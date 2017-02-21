<script>
var image = "myproject/assets/img/posts-bg.jpg"; var title="Blog"; var sub= "Írásaim";
changeBg(image,title,sub);
</script> 
<h2><?= $title ?></h2>
<hr>
<?php foreach ($posts as $post) : ?>
	<div class = "panel panel-default">
	<div class = "panel-heading">
	<h3><?php echo $post['title'];?></h3>
	<small class='post-date'>Posted on: <?php echo $post['created_at']; ?> in <strong><?php echo $post['name']; ?></strong></small><br></div>
	<div class = "panel-body">
	<?php 
	echo word_limiter($post['body'], 50);
	?>
	</div>
	</div>
	<br><br>
	<p><a class="read-gomb btn btn-default" href="<?php echo site_url('/posts/' . $post['slug']); ?>">Read More</a></p>
<?php endforeach; ?>
	
