<!--
/** 
  * === FORM UPDATE ===
  * add solsoForm in form class
*/
-->	
{{ Form::open(array('url' => 'client/' . Request::segment(2), 'role' => 'form', 'method' => 'PUT', 'class' => 'solsoForm')) }}

	<div class="col-md-6">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" class="form-control required" autocomplete="off" value="{{ isset($inputs['name']) ? $inputs['name'] : $client->name }}">
			
			<?php echo $errors->first('name', '<p class="error">:messages</p>');?>
		</div>		

		<div class="form-group">
			<label for="country">Country</label>
			<input type="text" name="country" class="form-control required" autocomplete="off" value="{{ isset($inputs['country']) ? $inputs['country'] : $client->country }}">
			
			<?php echo $errors->first('country', '<p class="error">:messages</p>');?>
		</div>		

		<div class="form-group">
			<label for="state">Province / state</label>
			<input type="text" name="state" class="form-control required" autocomplete="off" value="{{ isset($inputs['state']) ? $inputs['state'] : $client->state }}">
			
			<?php echo $errors->first('state', '<p class="error">:messages</p>');?>
		</div>			
		
		<div class="form-group">
			<label for="city">City</label>
			<input type="text" name="city" class="form-control required" autocomplete="off" value="{{ isset($inputs['city']) ? $inputs['city'] : $client->city }}">
			
			<?php echo $errors->first('city', '<p class="error">:messages</p>');?>
		</div>

		<div class="form-group">
			<label for="zip">Zip code</label>
			<input type="text" name="zip" class="form-control required" autocomplete="off" value="{{ isset($inputs['zip']) ? $inputs['zip'] : $client->zip }}">
			
			<?php echo $errors->first('zip', '<p class="error">:messages</p>');?>
		</div>

		<div class="form-group">
			<label for="address">Address</label>
			<input type="text" name="address" class="form-control required" autocomplete="off" value="{{ isset($inputs['address']) ? $inputs['address'] : $client->address }}">
			
			<?php echo $errors->first('address', '<p class="error">:messages</p>');?>
		</div>				
	</div>
	
	<div class="col-md-6">		
		<div class="form-group">
			<label for="contact">Contact</label>
			<input type="text" name="contact" class="form-control required" autocomplete="off" value="{{ isset($inputs['contact']) ? $inputs['contact'] : $client->contact }}">
			
			<?php echo $errors->first('contact', '<p class="error">:messages</p>');?>
		</div>				
		
		<div class="form-group">
			<label for="phone">Phone</label>
			<input type="text" name="phone" class="form-control required" autocomplete="off" value="{{ isset($inputs['phone']) ? $inputs['phone'] : $client->phone }}">
			
			<?php echo $errors->first('phone', '<p class="error">:messages</p>');?>
		</div>	

		<div class="form-group">
			<label for="email">E-mail</label>
			<input type="email" name="email" class="form-control required" autocomplete="off" value="{{ isset($inputs['email']) ? $inputs['email'] : $client->email }}">
			
			<?php echo $errors->first('email', '<p class="error">:messages</p>');?>
		</div>		

		<div class="form-group">
			<label for="website">Website</label>
			<input type="url" name="website" class="form-control" autocomplete="off" value="{{ isset($inputs['website']) ? $inputs['website'] : $client->website }}">
			
			<?php echo $errors->first('website', '<p class="error">:messages</p>');?>
		</div>	

		<div class="form-group">
			<label for="bank">Bank</label>
			<input type="text" name="bank" class="form-control" autocomplete="off" value="{{ isset($inputs['bank']) ? $inputs['bank'] : $client->bank }}">
		</div>	

		<div class="form-group">
			<label for="bank_account">Bank account</label>
			<input type="text" name="bank_account" class="form-control" autocomplete="off" value="{{ isset($inputs['bank_account']) ? $inputs['bank_account'] : $client->bank_account }}">
		</div>			
	</div>
	
	<div class="col-md-12">
		<div class="form-group">
			<label for="description">Description</label>
			<textarea name="description" class="form-control" rows="7" autocomplete="off">{{ isset($inputs['description']) ? $inputs['description'] : $client->description }}</textarea>
		</div>	
	</div>
	
	<div class="form-group col-md-12">
		<!--
		/** 
		  * === BUTTON SAVE ===
		  * add solsoSave in button class
		  * place data-message-title, data-message-error, data-message-success in button code
		  * data-message-title 		= this text will appear as title text in notifications(alerts) window
		  * data-message-error		= this text will appear as error message in notifications(alerts) window
		  * data-message-success	= this text will appear as success message in notifications(alerts) window
		*/
		-->		
		<button type="button" class="btn btn-success btn-lg solsoSave" data-message-title="Update notification" data-message-error="Validation error messages" data-message-success="Data was updated">
			<i class="fa fa-save"></i> Save
		</button>
	</div>
	
{{ Form::close() }}	