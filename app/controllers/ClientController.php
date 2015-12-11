<?php

class ClientController extends \BaseController {

	protected $layout = 'index';
	
	
	/* === VIEW === */
	public function index()
	{
		$data = array(
			'clients' 	=> Client::orderBy('id', 'desc')->get()
		);

		$this->layout->content = View::make('clients.index', $data);
	}

	public function create()
	{
		return View::make('clients.create');
	}

	public function show($id)
	{
		$data = array(
			'client' 	=> Client::find($id),
		);
		
		return View::make('clients.show', $data);
	}	
	
	public function edit($id)
	{
		$data = array(
			'client' 	=> Client::find($id),
		);
		
		return View::make('clients.edit', $data);
	}
	/* === END VIEW === */
	
	
	/* === C.R.U.D. === */
	public function store()
	{
		$rules = array(
			'name'     	=> 'required',
			'country'	=> 'required',
			'state'		=> 'required',
			'city'		=> 'required',
			'zip'		=> 'required',
			'address'	=> 'required',
			'contact'	=> 'required',
			'phone'		=> 'required',
			'email'		=> 'required|email',
			'website'	=> 'url',
		);	
		
		$validator = Validator::make(Input::all(), $rules);	
		
		if ($validator->passes())
		{
			$store	= new Client;
			$store->fill(Input::all());
			$store->save();	
		}
		else
		{
			if( Request::ajax() ) 
			{
				$data = array(
					'errors' 	=> $validator->errors(),
					'inputs'	=> Input::all()
				);
				
				return View::make('clients.create', $data);
			}

			return 0;	
		}	
		
		$data = array(
			'clients' 	=> Client::orderBy('id', 'desc')->get(),
			'refresh'	=> true
		);
		
		return View::make('clients.table', $data);
	}
	
	public function update($id)
	{
		$rules = array(
			'name'     	=> 'required',
			'country'	=> 'required',
			'state'		=> 'required',
			'city'		=> 'required',
			'zip'		=> 'required',
			'address'	=> 'required',
			'contact'	=> 'required',
			'phone'		=> 'required',
			'email'		=> 'required|email',
			'website'	=> 'url',
		);	
		
		$validator = Validator::make(Input::all(), $rules);		
		
		if ($validator->passes())
		{	
			$update	= Client::find($id);
			$update->fill(Input::all());
			$update->save();
		}
		else
		{
			if( Request::ajax() ) 
			{
				$data = array(
					'client' 	=> Client::find($id),
					'inputs'	=> Input::all(),
					'errors' 	=> $validator->errors()
				);
				
				return View::make('clients.edit', $data);
			}
			
			return 0;
		}
		
		$data = array(
			'clients' 	=> Client::orderBy('id', 'desc')->get(),
			'refresh'	=> true
		);

		return View::make('clients.table', $data);
	}

	public function destroy($id)
	{
		$delete = Client::find($id);
		$delete->delete();
		
		$data = array(
			'clients' 	=> Client::orderBy('id', 'desc')->get(),
			'refresh'	=> true
		);

		return View::make('clients.table', $data);
	}
	/* === END C.R.U.D. === */
	
}