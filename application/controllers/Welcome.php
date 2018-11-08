<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('Accueil');
	}
	public function afficherRegions()
	{
	$this->load->model("modelAccueil");
	$data["Regions"] = $this->modelAccueil->afficherLesRegions();
	$this->load->view("Regions", $data);
	}
	public function afficherVille()
	{
		$this->load->model("modelAccueil");
		$data["Villes"] = $this->modelAccueil->afficherLesVilles($_GET["id"]);
		$data["Regions"] = $_GET["id"];
		$this->load->view("Ville", $data);
	}
}
