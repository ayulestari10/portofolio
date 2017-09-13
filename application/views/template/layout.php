<?php

	$this->load->view('template/header', array('title' => $title));
	$this->load->view('template/navbar');
	$this->load->view($content);
	$this->load->view('template/footer');
?>
