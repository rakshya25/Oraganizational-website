<?php 
      	$latest_blogs=\DB::table('blogs')->orderBy('id', 'desc')->where('published','1')->limit(5)->get();
 ?>
<div class="sidebar">
    <!-- SIDEBAR LIST OF LATEST POSTS -->
	<div class="sidebar-box">
		<h3>Latest Posts</h3>
		<ul class="latest-posts">
			<?php foreach($latest_blogs as $blog): ?>
			<?php $monthName = date('M', mktime(0, 0, 0, substr($blog->created_at,5,2), 10)); // to get 3 letter month name?>
				<li><span class="date"><em class="day"><?php echo e(substr($blog->created_at,5,2)); ?></em><em class="month"><?php echo e($monthName); ?></em></span> <a href="<?php echo e(URL::to('blog',['id'=>$blog->id])); ?>"><?php echo e($blog->title); ?></a> </li>
			<?php endforeach; ?>
		</ul>
	</div>  
	<!-- End latest posts -->
</div>
