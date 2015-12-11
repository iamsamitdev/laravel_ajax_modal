<div class="col-md-12">
	<h1>{{ $client->name }}</h1>
	<hr>
	
	<table class="table table-striped">
	<tbody>
		<tr>
			<td class="col-md-6">{{ $client->country }} {{ $client->state }}</td>
			<td class="col-md-6">{{ $client->contact }}</td>
		</tr>
		
		<tr>
			<td class="col-md-6">{{ $client->city }}</td>
			<td class="col-md-6">{{ $client->phone }}</td>
		</tr>

		<tr>
			<td class="col-md-6">{{ $client->zip }}</td>
			<td class="col-md-6">{{ $client->email }}</td>
		</tr>

		<tr>
			<td class="col-md-6">{{ $client->address }}</td>
			<td class="col-md-6">{{ $client->website }}</td>
		</tr>
		
		@if ($client->description)
			
			<tr>
				<td colspan="2">{{ $client->description }}</td>
			</tr>
		
		@endif
		
	</tbody>
	</table>
</div>