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
}



?>