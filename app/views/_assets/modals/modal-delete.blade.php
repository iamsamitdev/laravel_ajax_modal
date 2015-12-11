<!--
/** 
  * === SETTINGS MODAL ===
  * add solsoDeleteModal in button ID
*/
-->
<div class="modal fade" id="solsoDeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Delete dialog</h4>
        </div>

        <div class="modal-body">
            <p>You are about to delete this item this procedure is irreversible !</p>
            <p>Do you want to proceed ?<p>
        </div>

        <div class="modal-footer">
			
			<!--
			/** 
			  * === FORM UPDATE ===
			  * add solsoDeletForm in form ID
			*/
			-->
			{{ Form::open(array('id' => 'solsoDeletForm')) }}
				
				<button type="button" class="btn btn-primary" data-dismiss="modal">NO</button>
				
				<!--
				/** 
				  * === BUTTON DELETE ===
				  * add solsoDelete in button class
				  * place data-message-title, data-message-success in button code
				  * data-message-title 		= this text will appear as title text in notifications(alerts) window
				  * data-message-success	= this text will appear as success message in notifications(alerts) window
				*/
				-->				
				<button class="btn btn-danger solsoDelete" data-message-title="Delete notification" data-message-success="Data was deleted">YES</button>
					
			{{ Form::close() }}									

        </div>
    </div>
</div>
</div>