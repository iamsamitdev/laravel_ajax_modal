<?php

class Client extends Eloquent {

	protected $guarded 	= array('id');
	protected $fillable = array('name', 'country', 'state', 'city', 'zip', 'address', 'contact', 'phone', 'email', 'website', 'bank', 'bank_account', 'description');
	
}