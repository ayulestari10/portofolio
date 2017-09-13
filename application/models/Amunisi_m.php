<?php

class Amunisi_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();

		$this->data['table_name']	= 'amunisi';
		$this->data['primary_key']	= 'no_amunisi';
	}
}
