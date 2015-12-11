@include('_begin')

<div class="container">
<div class="row">
	<div class="col-md-12">
		<div role="alert" class="alert alert-error fade in top20 text-center">
			<h1> ERROR 400 </h1>
			
			<a href="<?php echo URL::to('/');?>" class="btn btn-primary"> ERROR 400 <i class="fa fa-long-arrow-right"></i></a>
		</div>	
    </div>
</div>
</div>

@include('_end')

