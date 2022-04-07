<?php
use src\models\ProprietaireDAO;
use libs\system\Controller;
class ProprietaireController extends Controller{
    //Constructeur
    private $proprietaireDAO;
    public function __construct(){
        //Parent::__construct c'est grace a lui que la class enfant la va heritier de tous ce qui es defini dans la class parent
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
        }
        return $this->view->load("proprietaire/add");
    }
    //Delete data 
    public function remove($id){
        $proprietaires=$this->proprietaireDAO->deleteById($id);
        return $this->getAll();
        // if(!empty($_GET)){
        //     extract($_GET);
        // $proprietaires=$this->proprietaireDAO->deleteById($id);
        // return $this->getAll();
        // }else{
        //     die("Proprietaire n'existe pas");    
        // }
    }
    //Element a modifier je le renvoi dans le formulaire
    public function edit($id){
        $proprietaire = $this->proprietaireDAO->getById($id);
        return $this->view->load('proprietaire/edit',$proprietaire);
    }
    public function update(){
        if(!empty($_POST)){
            extract($_POST);
            $proprietaire=$this->proprietaireDAO->getById($id);
            $proprietaire->setNom($_POST['nom']);
            $proprietaire->setPrenom($_POST['prenom']);
            $proprietaire->setDateNaissance($_POST['dateNaissance']);
            $proprietaire->setLieuNaissance($_POST['lieuNaissance']);
            $proprietaire->setCivilite($_POST['civilite']);
            $proprietaire->setCodePieceIdentite($_POST['codePieceIdentite']);
            $proprietaire->setNumeroPieceIdentite($_POST['numeroPieceIdentite']);
            $this->proprietaireDAO->editTest();
            return $this->getAll();
        }
    }
}



?>