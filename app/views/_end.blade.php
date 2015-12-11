<script type="text/javascript" src="<?php echo URL::to('public/js/jquery.js');?>"></script>
<script type="text/javascript" src="<?php echo URL::to('public/js/bootstrap.min.js');?>"></script>
	
	<!-- DATA TABLES -->
	<script type='text/javascript' src="<?php echo URL::to('public/vendor/datatables/datatables.min.js');?>"></script>  
	<script type='text/javascript' src="<?php echo URL::to('public/vendor/datatables/datatables-bootstrap.js');?>"></script>    
	<script>
		$('.solsoTable').dataTable();
	</script>
	<!-- END DATA TABLES -->	
	
	
	<!-- GROWL -->
	<script type='text/javascript' src="<?php echo URL::to('public/vendor/growl/jquery.growl.js');?>"></script>  
	<!-- END GROWL-->	
	
	
	<!-- === SOLUTII SOFT === -->
	<script>
		/* === MODALS === */
		$( document ).on('click', '.solsoShowModal', function(){
			modalTitle = $(this).attr('data-modal-title')
			
			$.ajax({
				url: $(this).attr('data-href'),
				dataType: 'html',
				success:function(data) {
					$('.solsoModalTitle').text(modalTitle.toString());
					$('.solsoShowForm').html(data);
				}
			});		
		});
		
		$( document ).on('click', '.solsoSave', function(e){
			e.preventDefault();
			
			var solsoSelector	= $(this);
			var solsoFormAction = $('.solsoForm').attr('action');
			var solsoFormMethod = $('.solsoForm').attr('method');
			var solsoFormData	= $('.solsoForm').serialize();
			
			$.ajax({
				url: 	solsoFormAction,
				type: 	solsoFormMethod,
				data: 	solsoFormData,
				cache: 	false,
				dataType: 'html',
				success:function(data) {
					if (data == 0 ) {
						console.log('error');
					} else {
						
						if ($(data).filter('table.solsoRefresh').length == 1) {
							$('#solsoCrudModal').modal('hide');
							$('#ajaxTable').html(data);
							$('#countClients').text( $('.solsoTable').attr('data-all') );
							$.growl.notice({ title: solsoSelector.attr('data-message-title'), message: solsoSelector.attr('data-message-success') });
						} else {
							$('.solsoShowForm').html(data);
							$.growl.error({ title: solsoSelector.attr('data-message-title'), message: solsoSelector.attr('data-message-error') });
						}
						
						$('.solsoTable').dataTable();
					}
				}
			});	
			
			return false;
		});			
		
		$( document ).on('click', '.solsoConfirm', function(){
			$("#solsoDeletForm").prop('action', $(this).attr('data-href'));
		});
		
		$( document ).on('click', '.solsoDelete', function(e){
			e.preventDefault();
			
			var solsoSelector	= $(this);
			var solsoFormAction = $('#solsoDeletForm').attr('action');
			
			$.ajax({
				url: 	solsoFormAction,
				type: 	'delete',
				cache: 	false,
				dataType: 'html',
				success:function(data) {
					$('#solsoDeleteModal').modal('hide');
					$('#ajaxTable').html(data);
					$('#countClients').text( $('.solsoTable').attr('data-all') );
					$.growl.notice({ title: solsoSelector.attr('data-message-title'), message: solsoSelector.attr('data-message-success') });
					$('.solsoTable').dataTable();
				}
			});	
			
			return false;
		});		
		/* === END MODALS === */

		/* === SIDEBAR === */
		$('.toogle').on('click', function() {
			$('.body').toggleClass('slide');
			$('.sidebar').toggleClass('show');
			$('.toogle i').toggleClass('fa-chevron-left fa-chevron-right');
		});
		/* === END SIDEBAR === */		
	</script>
	<!-- === END SOLUTII SOFT === -->
	
</body>
</html>