<?php

class page extends App
{
	public function indexAction()
	{
		$isi_halaman = $this->loadView('home');
		echo $this->loadView('layout', array('content' => $isi_halaman));
	}

	public function aboutAction()
	{
		$isi_halaman = $this->loadView('about');
		echo $this->loadView('layout', array('content' => $isi_halaman));
	}
}