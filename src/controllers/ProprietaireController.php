<?php
use src\models\ProprietaireDAO;
use libs\system\Controller;
class ProprietaireController extends Controller{
    //Constructeur
    private $proprietaireDAO;
    public function __construct(){
        parent::__construct();
        $this->proprietaireDAO = new ProprietaireDAO();
    }
    //Liste methode
    public function getAll(){
        // $proprietaireDAO=new ProprietaireDAO();
        $proprietaires=$this->proprietaireDAO->findAll();
        return $this->view->load('proprietaire/liste',$proprietaires);
        die();
    }
    //Add methode
    public function add(){
        if(!empty($_POST)){
            extract($_POST);
            // $proprietaireDAO=new ProprietaireDAO();
            $proprietaire=new Proprietaire();
            $proprietaire->setNom($_POST['nom']);
            $proprietaire->setPrenom($_POST['prenom']);
            $proprietaire->setDateNaissance($_POST['dateNaissance']);
            $proprietaire->setLieuNaissance($_POST['lieuNaissance']);
            $proprietaire->setCivilite($_POST['civilite']);
            $proprietaire->setCodePieceIdentite($_POST['codePieceIdentite']);
            $proprietaire->setNumeroPieceIdentite($_POST['numeroPieceIdentite']);
            $this->proprietaireDAO->create($proprietaire);
            return $this->getAll();
            // if($proprietaireDAO){
                echo "Donnees ajouter avec succees";
            // }else{
                die("Vos donnees ne sont pas enregistrer");
            // }
        }
        return $this->view->load("proprietaire/add");
    }
    //Delete data 
    public function remove(){
        if(!empty($_GET)){
            extract($_GET);
            $proprietaires=$this->proprietaireDAO->deleteById($id);
            return $this->getAll();
        }else{
            die("Proprietaire n'existe pas");    
        }
    }
}



?>