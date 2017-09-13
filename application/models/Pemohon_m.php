<?php

class Pemohon_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();

		$this->data['table_name']	= 'pemohon';
		$this->data['primary_key']	= 'nrp';
	}
}
