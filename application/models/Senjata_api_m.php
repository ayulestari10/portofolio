<?php

class Senjata_api_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();

		$this->data['table_name']	= 'senjata_api';
		$this->data['primary_key']	= 'no_senpi';
	}
}

