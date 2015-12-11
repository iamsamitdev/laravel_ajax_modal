<div class="solso-sidebar">
	<div id="grey-sidebar" class="list-group">
		<a href="{{ URL::to('client') }}" class="list-group-item active">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-users"></i></span>
				<h4 class="list-group-item-heading">Clients</h4>
				<p class="list-group-item-text">access <br>create | edit | delete</p>
				<span id="countClients" class="input-group-addon">{{ Client::all()->count() }}</span>
			</div>	  
		</a>
	</div>
</div>