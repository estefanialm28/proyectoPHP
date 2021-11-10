<?php
class Asociado
{
    const RUTA_ASOCIADOS = 'images/index/';
    private $nombre;
    private $descripcion;
    private $logo;
    

    public function __construct(string $nombre, string $descripcion,
                                int $logo = 0){
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->logo = $logo;
        }
    
        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        

        /**
         * Get the value of logo
         */ 
        public function getlogo()
        {
                return $this->logo;
        }

        

        /**
         * Set the value of logo
         *
         * @return  self
         */ 
        public function setlogo($logo)
        {
                $this->logo = $logo;

                return $this;
        }


const RUTA_IMAGENES_PORTFOLIO = 'images/index/portfolio/';

const RUTA_IMAGENES_GALLERY = 'images/index/gallery/';

    //....  

    /**

     * Devuelve el path a las imágenes del portfolio

     *

     * @return string

     */

    public function getUrlPortfolio() : string

    {

        return self::RUTA_IMAGENES_PORTFOLIO . $this->getNombre();

    }

    /**

     * Devuelve el path a las imágenes de la galería

     *

     * @return string

     */

    public function getUrlAsociado() : string

    {

        return self::RUTA_ASOCIADOS . $this->getNombre();

    }
}

?>
