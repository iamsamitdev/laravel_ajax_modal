<!--
/** 
  * === TABLE ===
  * add solsoTable in table class
  * add {{ isset($refresh) ? 'solsoRefresh' : ''; }} in table class
  * place data-all in table code	*THIS ACCTION IS NOT MANDATORY*
  * data-all	= will update total number of item in sidebar
*/
-->	
<table class="table solsoTable {{ isset($refresh) ? 'solsoRefresh' : ''; }}" data-all="{{ sizeof($clients) }}">
	<thead>
		<tr>
			<th>Crt.</th>
			<th>Client</th>
			<th>Address</th>
			<th>Contact</th>
			<th>E-mail</th>
			<th class="col-md-1">Phone</th>
			<th class="small">Action</th>
			<th class="small">Action</th>
			<th class="small">Action</th>
		</tr>
	</thead>
	
	<tbody>
	
	@foreach ($clients as $crt => $v)
	
		<tr>
			<td>
				{{ $crt+1 }}
			</td>

			<td>
				{{ $v->name }}
			</td>
			
			<td>
				{{ $v->address }}
			</td>					
			
			<td>
				{{ $v->contact }}
			</td>						
			
			<td>
				{{ $v->email }}
			</td>					

			<td>
				{{ $v->phone }}
			</td>						
			
			<td>
				<!--
				/** 
				  * === BUTTON FOR MODAL SHOW ===
				  * add solsoShowModal in button class
				  * place data-href, data-modal-title in button code
				  * data-href 			= path to your controller for show action
				  * data-modal-title	= text for modal title
				*/
				-->				
				<button type="button" class="btn btn-info solsoShowModal" data-toggle="modal" data-target="#solsoCrudModal" data-href="{{ URL::to('client/' . $v->id) }}" data-modal-title="Show Client">
					<i class="fa fa-eye"></i> Show
				</button>
			</td>

			<td>		
				<!--
				/** 
				  * === BUTTON FOR MODAL EDIT ===
				  * add solsoShowModal in button class
				  * place data-href, data-modal-title in button code
				  * data-href 			= path to your controller for show action
				  * data-modal-title	= text for modal title
				*/
				-->				
				<button type="button" class="btn btn-primary solsoShowModal" data-toggle="modal" data-target="#solsoCrudModal" data-href="{{ URL::to('client/' . $v->id . '/edit') }}" data-modal-title="Edit Client">
					<i class="fa fa-edit"></i> Edit
				</button>
			</td>
			
			<td>		
				<!--
				/** 
				  * === BUTTON FOR MODAL EDIT ===
				  * add solsoConfirm in button class
				  * place data-href, data-modal-title in button code
				  * data-href 			= path to your controller for show action
				*/
				-->					
				<button type="button" class="btn btn-danger solsoConfirm" data-toggle="modal" data-target="#solsoDeleteModal" data-href="{{ URL::to('client/' . $v->id) }}">
					<i class="fa fa-trash"></i> Delete
				</button>		
			</td>
		</tr>
		
	@endforeach
	
	</tbody>
</table>