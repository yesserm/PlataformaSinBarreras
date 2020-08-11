<?php
    class Config{
        private $datos;
        private static $instancia;

        private function __construct(){
            $json = file_get_contents(dirname(__DIR__,2) . '\config\app.json');
            $this->datos = json_decode($json,true);
        }

        public static function getInstancia(){
            if(self::$instancia == null){
                self::$instancia = new Config();
            }
            return self::$instancia;
        }
        public function get($key){
            if(!isset($this->datos[$key])){
                throw new NotFoundException("La clave $key no esta en la configuracion");
            }
            return $this->datos;
        }
    }

?>