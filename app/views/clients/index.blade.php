@section('content')

	<div class="col-md-12">
		<h1><i class="fa fa-list"></i> Clients</h1>
		
		<!--
		/** 
		  * === BUTTON FOR MODAL CREATE ===
		  * add solsoShowModal in button class
		  * place data-href, data-modal-title in button code
		  * data-href 			= path to your controller for create action
		  * data-modal-title	= text for modal title
		*/
		-->		
		<button type="button" class="btn btn-primary solsoShowModal" data-toggle="modal" data-target="#solsoCrudModal" data-href="{{ URL::to('client/create') }}" data-modal-title="Create Client">
			<i class="fa fa-user-plus"></i> Create new client
		</button>
	</div>	

	<div class="col-md-12 top40">
		<h3>Clients</h3>
		
		<!--
		/** 
		  * === INSERT TABLE WITH ALL ITEMS ===
		  * create a div with id ajaxTable, this action is necessary to load table with AJAX
		  * include your table.blade.php
		*/
		-->
		<div id="ajaxTable" class="table-responsive">
			@include('clients.table')	
		</div>	
	</div>
	
	<!--
	/** 
	  * === INCLUDE MODALS ===
	  * include modal-crud 		(path to file)
	  * include modal-delete 	(path to file)
	*/
	-->	
	@include('_assets.modals.modal-crud')
	@include('_assets.modals.modal-delete')
	
@stop