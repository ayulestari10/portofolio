<?php

class Berita_acara_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();

		$this->data['table_name']	= 'berita_acara';
		$this->data['primary_key']	= 'no_ba';
	}
}
