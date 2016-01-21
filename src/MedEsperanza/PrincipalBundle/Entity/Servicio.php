<?php

namespace MedEsperanza\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MedEsperanza\PrincipalBundle\Entity\Servicio
 */
class Servicio
{
    /**
     * @var string $nombre
     */
    private $nombre;

    /**
     * @var decimal $precio
     */
    private $precio;

    /**
     * @var text $descripcion
     */
    private $descripcion;

    /**
     * @var blob $fotografia
     */
    private $fotografia;

    /**
     * @var integer $idservicio
     */
    private $idservicio;

    /**
     * @var MedEsperanza\PrincipalBundle\Entity\Establecimiento
     */
    private $idestablecimiento;


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
     * Set precio
     *
     * @param decimal $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    /**
     * Get precio
     *
     * @return decimal 
     */
    public function getPrecio()
    {
        return $this->precio;
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
     * Set fotografia
     *
     * @param blob $fotografia
     */
    public function setFotografia($fotografia)
    {
        $this->fotografia = $fotografia;
    }

    /**
     * Get fotografia
     *
     * @return blob 
     */
    public function getFotografia()
    {
        return $this->fotografia;
    }

    /**
     * Get idservicio
     *
     * @return integer 
     */
    public function getIdservicio()
    {
        return $this->idservicio;
    }

    /**
     * Set idestablecimiento
     *
     * @param MedEsperanza\PrincipalBundle\Entity\Establecimiento $idestablecimiento
     */
    public function setIdestablecimiento(\MedEsperanza\PrincipalBundle\Entity\Establecimiento $idestablecimiento)
    {
        $this->idestablecimiento = $idestablecimiento;
    }

    /**
     * Get idestablecimiento
     *
     * @return MedEsperanza\PrincipalBundle\Entity\Establecimiento 
     */
    public function getIdestablecimiento()
    {
        return $this->idestablecimiento;
    }
}