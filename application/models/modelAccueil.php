<?php
class ModelAccueil extends CI_Controller
{
    public function afficherRegions()
    {
        $sql = $this->db->query("select idRegion, nomRegion, scoreRegion from region");
        return $sql->result();
    }
    public function afficherVille($id)
    {
        $sql = $this->db->query("select nomVille, scoreVille from ville where numRegion =".$id);
        return $sql->result();
    }
}
?>