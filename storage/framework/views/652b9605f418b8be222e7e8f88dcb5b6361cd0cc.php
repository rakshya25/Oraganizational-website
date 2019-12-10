

<?php 
       $programs=\DB::table('programs')->orderBy('id', 'desc')->get();
 ?>



<div id="menu" class="menu opacity" style="padding-bottom: 0px; margin-top: 3px;">
	<ul>
	<li><a href="<?php echo e(url('')); ?>">Home</a></li>
	<li><a href="#">About Us ▼</a>
		<ul>
			<li><a href="<?php echo e(url('/misc/our-mission')); ?>">Our Vision,MIssion and goal</a></li>
			<li><a href="<?php echo e(url('/boards')); ?>">Board Members</a></li>
			<li><a href="<?php echo e(url('/affilated-organizations')); ?>">Affiliated organization</a></li>
			
		</ul>
	</li>
	<li><a href="">Programs ▼</a>
	<ul>
	<?php foreach($programs as $program): ?>
   		<li><a href="<?php echo e(url('/program/'.$program->id)); ?>"><?php echo e($program->title); ?></a></li>
  	<?php endforeach; ?>
  	</ul>
	</li>
	<li><a href="<?php echo e(url('/gallery')); ?>">Gallery</a></li>
	<li><a href="<?php echo e(url('/misc/shops')); ?>">Shop with us</a></li>
	<li><a href="<?php echo e(url('/sisters')); ?>">Sisters</a></li>
	<li><a href="<?php echo e(url('/misc/Opportunities')); ?>">Opportunities ▼</a>
		<ul>
			<li><a href="<?php echo e(url('/misc/volunteer-with-us')); ?>">Volunteer with us</a></li>
			<li><a href="<?php echo e(url('/misc/career-opportunities')); ?>">Careers</a></li>
			<li><a href="<?php echo e(url('/misc/donate-us')); ?>">Donate</a></li>
		</ul>
	</li>
	<!-- <li><a href="<?php echo e(url('/sister')); ?>">Sisters</a></li> -->
	<li><a href="<?php echo e(url('/blogs')); ?>">News and Events</a></li>
	<li><a href="<?php echo e(url('/contact')); ?>">Contact Us</a></li>
	</ul>
	<br style="clear: left" />
</div>