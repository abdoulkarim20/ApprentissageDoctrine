<?php
use src\models\ProprietaireDAO;
use libs\system\Controller;
class ProprietaireController extends Controller{
    public function getAll(){
        $p=new ProprietaireDAO();
        $proprietaires=$p->findAll();
        return $this->view->load('proprietaire/liste',$proprietaires);
    }
    public function add(){
        if(!empty($_POST)){
            extract($_POST);
            var_dump($_POST);
            $p=new ProprietaireDAO();
            $pro=new Proprietaire();
            $pro->setNom($_POST['nom']);
            $pro->setPrenom($_POST['prenom']);
            $pro->setDateNaissance($_POST['dateNaissance']);
            $pro->setLieuNaissance($_POST['lieuNaissance']);
            $pro->setCivilite($_POST['civilite']);
            $pro->setCodePieceIdentite($_POST['codePieceIdentite']);
            $pro->setNumeroPieceIdentite($_POST['numeroPieceIdentite']);
            $p->create($pro);
        }
        return $this->view->load("proprietaire/add");
    }
}



?>