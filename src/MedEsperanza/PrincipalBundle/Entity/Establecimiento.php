<?php

namespace MedEsperanza\PrincipalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MedEsperanza\PrincipalBundle\Entity\Establecimiento
 */
class Establecimiento
{
    /**
     * @var string $nombre
     */
    private $nombre;

    /**
     * @var string $ubicacion
     */
    private $ubicacion;

    /**
     * @var text $descripcioncorta
     */
    private $descripcioncorta;

    /**
     * @var text $descripcionlarga
     */
    private $descripcionlarga;
    
     /**
     * @var text $responsable
     */
    private $responsable;

    /**
     * @var string $email
     */
    private $email;

    /**
     * @var string $telefonofijo
     */
    private $telefonofijo;

    /**
     * @var string $telefonomovil
     */
    private $telefonomovil;

    /**
     * @var blob $banner
     */
    private $banner;

    /**
     * @var blob $fotografia
     */
    private $fotografia;

    /**
     * @var string $paginaespecial
     */
    private $paginaespecial;

    /**
     * @var text $horarioatencion
     */
    private $horarioatencion;

    /**
     * @var integer $idestablecimiento
     */
    private $id;

    /**
     * @var MedEsperanza\PrincipalBundle\Entity\Especialidad
     */
    private $idespecialidad;


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
     * Set ubicacion
     *
     * @param string $ubicacion
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;
    }

    /**
     * Get ubicacion
     *
     * @return string 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set descripcioncorta
     *
     * @param text $descripcioncorta
     */
    public function setDescripcioncorta($descripcioncorta)
    {
        $this->descripcioncorta = $descripcioncorta;
    }

    /**
     * Get descripcioncorta
     *
     * @return text 
     */
    public function getDescripcioncorta()
    {
        return $this->descripcioncorta;
    }

    /**
     * Set descripcionlarga
     *
     * @param text $descripcionlarga
     */
    public function setDescripcionlarga($descripcionlarga)
    {
        $this->descripcionlarga = $descripcionlarga;
    }

    /**
     * Get descripcionlarga
     *
     * @return text 
     */
    public function getDescripcionlarga()
    {
        return $this->descripcionlarga;
    }
    
      /**
     * Set descripcionlarga
     *
     * @param text $descripcionlarga
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    }

    /**
     * Get descripcionlarga
     *
     * @return text 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }
    
    

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefonofijo
     *
     * @param string $telefonofijo
     */
    public function setTelefonofijo($telefonofijo)
    {
        $this->telefonofijo = $telefonofijo;
    }

    /**
     * Get telefonofijo
     *
     * @return string 
     */
    public function getTelefonofijo()
    {
        return $this->telefonofijo;
    }

    /**
     * Set telefonomovil
     *
     * @param string $telefonomovil
     */
    public function setTelefonomovil($telefonomovil)
    {
        $this->telefonomovil = $telefonomovil;
    }

    /**
     * Get telefonomovil
     *
     * @return string 
     */
    public function getTelefonomovil()
    {
        return $this->telefonomovil;
    }

    /**
     * Set banner
     *
     * @param blob $banner
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;
    }

    /**
     * Get banner
     *
     * @return blob 
     */
    public function getBanner()
    {
        return $this->banner;
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
     * Set paginaespecial
     *
     * @param string $paginaespecial
     */
    public function setPaginaespecial($paginaespecial)
    {
        $this->paginaespecial = $paginaespecial;
    }

    /**
     * Get paginaespecial
     *
     * @return string 
     */
    public function getPaginaespecial()
    {
        return $this->paginaespecial;
    }

    /**
     * Set horarioatencion
     *
     * @param text $horarioatencion
     */
    public function setHorarioatencion($horarioatencion)
    {
        $this->horarioatencion = $horarioatencion;
    }

    /**
     * Get horarioatencion
     *
     * @return text 
     */
    public function getHorarioatencion()
    {
        $mix= str_replace(array("\\n"),array("<<br/>><li>"), $this->horarioatencion);    
        return  $mix;
    }

    /**
     * Get idestablecimiento
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idespecialidad
     *
     * @param MedEsperanza\PrincipalBundle\Entity\Especialidad $idespecialidad
     */
    public function setIdespecialidad(\MedEsperanza\PrincipalBundle\Entity\Especialidad $idespecialidad)
    {
        $this->idespecialidad = $idespecialidad;
    }

    /**
     * Get idespecialidad
     *
     * @return MedEsperanza\PrincipalBundle\Entity\Especialidad 
     */
    public function getIdespecialidad()
    {
        return $this->idespecialidad;
    }
}