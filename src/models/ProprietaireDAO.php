<?php
namespace src\models;
use libs\system\Model;
class ProprietaireDAO extends Model{
    public function findAll(){
        return $this->entityManager
                    ->createQuery("SELECT p FROM Proprietaire p")
                    ->getResult();
    }
    public function create($proprietaire){
        $this->entityManager->persist($proprietaire);
        $this->entityManager->flush();
    }

    public function deleteById($id){
        //Je dois dabord selectionner l'objet a supprimer dans la base de donnees;
        $proprietaire = $this->entityManager->find('Proprietaire',$id);
        $this->entityManager->remove($proprietaire);
        $this->entityManager->flush();
    }
}



?>