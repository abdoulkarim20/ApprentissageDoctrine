<?php
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="products")
 */
class Product
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string",length=100)
     */
    private $name;

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }
    
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name=$name;
    }
}
