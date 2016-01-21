<?php

namespace MedEsperanza\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;

/**
 * MedEsperanza\PrincipalBundle\Entity\Especialidad
 */
class Especialidad
{
    /**
     * @var string $nombre
     * 
     */
    private $nombre;

    /**
     * @var text $descripcion
     */
    private $descripcion;

    /**
     * @var blob $fotobanner
     *
     * 
     */
    private $fotobanner;
    private $fotobanner2;
    private $fotobanner3;
    private $fotobanner4;
        //@Assert\Image(  )
    
     /**
     * @var integer $idespecialidad
     *    
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * 
     * @var array $establecimientos
     *  
     * 
     */
   

     private $establecimientos;


    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param text $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Get descripcion
     *
     * @return text 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fotobanner
     *
     * @param blob $fotobanner
     */
    public function setFotobanner($fotobanner)
    {
        $this->fotobanner = $fotobanner;
    }

    /**
     * Get fotobanner
     *
     * @return blob 
     */
    public function getFotobanner()
    {
        return $this->fotobanner;//base64_encode($this->fotobanner);
    }
    
      /**
     * Set fotobanner
     *
     * @param blob $fotobanner
     */
    public function setFotobanner2($fotobanner)
    {
        $this->fotobanner2 = $fotobanner;
    }

    /**
     * Get fotobanner
     *
     * @return blob 
     */
    public function getFotobanner2()
    {
        return $this->fotobanner2;//base64_encode($this->fotobanner);
    }
    
      /**
     * Set fotobanner
     *
     * @param blob $fotobanner
     */
    public function setFotobanner3($fotobanner)
    {
        $this->fotobanner3 = $fotobanner;
    }

    /**
     * Get fotobanner
     *
     * @return blob 
     */
    public function getFotobanner3()
    {
        return $this->fotobanner3;//base64_encode($this->fotobanner);
    }
    
      /**
     * Set fotobanner
     *
     * @param blob $fotobanner
     */
    public function setFotobanner4($fotobanner)
    {
        $this->fotobanner4 = $fotobanner;
    }

    /**
     * Get fotobanner
     *
     * @return blob 
     */
    public function getFotobanner4()
    {
        return $this->fotobanner4;//base64_encode($this->fotobanner);
    }

    /**
     * Get idespecialidad
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function getEstablecimientos() {
        return $this->establecimientos;
    }
    
    public function setEstablecimientos($establecimientos) {
         $this->establecimientos=$establecimientos;
    }
    
    
}