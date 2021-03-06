<?php $__env->startSection('banner'); ?>
    <div class="banner" id="banner">
        <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo e(asset('frontend_template/img/banner.jpg')); ?>" alt="banner" style="height: 400px;">
                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                        <div class="sub-banner">
						    <div class="container">
						        <div class="page-name">
						            <h1>Blog Grid</h1>
						            <ul>
						                <li><a href="index.html">Index</a></li>
						                <li><span>/</span>Blog Grid</li>
						            </ul>
						        </div>
						    </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend/frontend_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/property/resources/views/frontend/blog.blade.php ENDPATH**/ ?>