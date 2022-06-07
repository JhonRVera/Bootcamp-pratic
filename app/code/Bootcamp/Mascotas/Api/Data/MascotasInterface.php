<?php
namespace Bootcamp\Mascotas\Api\Data;

interface MascotasInterface{  
        
        /**
         * @return int 
         */
        public function getId();
        /**
         * @param int $id
         * @return void 
        */
        public function setId($id);
        /**
         * obtiene nombre mascoa
         * @return string
         */
        public function getNombre();
       
        /**
         * setea nombre
         *  @return void
         */
        public function setNombre($nombre);
        
        /**
         * obtiene especie
         * @return string
         */ 
        
         public function getEspecie();
        /**
         * setea especie
         * @return string
         */

        public function setEspecie($especie);

        /**
         * obtiene raza
         * @return string
         */
        public function geTraza();
       public function setRaza($raza);

        public function getEdad();
        public function setEdad($edad);
  
}
