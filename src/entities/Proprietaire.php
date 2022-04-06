<?php
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="proprietaires")
 */
class Proprietaire
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string",length=150)
     */
    private $prenom;
     /**
     * @ORM\Column(type="string",length=60)
     */
    private $nom;
    /** 
     * @ORM\Column(type="string",length=30) 
    **/
    private $dateNaissance;
     /**
     * @ORM\Column(type="string",length=100)
     */
    private $lieuNaissance;
     /**
     * @ORM\Column(type="string",length=120)
     */
    private $civilite;
     /**
     * @ORM\Column(type="string",length=100)
     */
    private $codePieceIdentite;
     /**
     * @ORM\Column(type="string",length=150)
     */
    private $numeroPieceIdentite;

    //Les getters et les setters
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }

    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom=$nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom=$prenom;
    }

    public function getDateNaissance(){
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance){
        $this->dateNaissance=$dateNaissance;
    }

    public function getLieuNaissance(){
        return $this->lieuNaissance;
    }
    public function setLieuNaissance($lieuNaissance){
        $this->lieuNaissance=$lieuNaissance;
    }

    public function getCivilite(){
        return $this->civilite;
    }
    public function setCivilite($civilite){
        $this->civilite=$civilite;
    }

    public function getCodePieceIdentite(){
        return $this->codePieceIdentite;
    }
    public function setCodePieceIdentite($codePieceIdentite){
        $this->codePieceIdentite=$codePieceIdentite;
    }

    public function getNumeroPieceIdentite(){
        return $this->numeroPieceIdentite;
    }
    public function setNumeroPieceIdentite($numeroPieceIdentite){
        $this->numeroPieceIdentite=$numeroPieceIdentite;
    }

    
}





?>