<?php if($paginator->lastPage() > 1): ?>
<div class="page-navi">
<p>Page <?php echo e($paginator->currentPage()); ?> of <?php echo e($paginator->total()); ?></p>
<ul class="pagination">
<!--     <li class="<?php echo e(($paginator->currentPage() == 1) ? ' disabled' : ''); ?>">
        <a href="<?php echo e($paginator->url(1)); ?>">Previous</a>
    </li> -->
    <?php for($i = 1; $i <= $paginator->lastPage(); $i++): ?>
        <li>
            <a class="<?php echo e(($paginator->currentPage() == $i) ? ' current' : ''); ?>" href="<?php echo e($paginator->url($i)); ?>"><?php echo e($i); ?></a>
        </li>
    <?php endfor; ?>
<!--     <li class="<?php echo e(($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : ''); ?>">
        <a href="<?php echo e($paginator->url($paginator->currentPage()+1)); ?>" >Next</a>
    </li> -->
</ul>
</div>
<?php endif; ?>