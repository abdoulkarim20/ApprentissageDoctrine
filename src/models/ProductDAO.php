<?php
namespace src\models;
use libs\system\Model;

class ProductDAO extends Model
{
    public function findAll()
    {
        
        return $this->entityManager
                    ->createQuery("SELECT p FROM Product p")
                    ->getResult();

    }
}
