<?php  

namespace Infra\BD;
use PDO;
    /**
    * Descriçao da PdoConexao – Singleton pattern
    *
    * @author James Yuri
    */
    class PdoConexao {
        private static $instancia;
       
        // Impedir instanciação
        private function __construct() { }
        // Impedir clonar
        private function __clone() { }
       
        //Impedir utilização do Unserialize
        private function __wakeup() { }
       
        /**
        *
        * @return object retorna uma instancia do banco de dados, seguindo o padrão de projeto singleton
        *
        */
        public static function getInstancia() {
            if(!isset(self::$instancia)) {
                 try {
                     $nomeBanco = "AnimalHelp";
                     $dsn = "mysql:host=localhost;port=3306;dbname={$nomeBanco};charset=utf8";
                     $usuario = "root";
                     $senha = "";


                     // Instânciado um novo objeto PDO informando o DSN e parâmetros de Array
                    self::$instancia = new PDO( $dsn, $usuario, $senha, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );


                     // Gerando um excessão do tipo PDOException com o código de erro                    
                    self::$instancia->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
                     
                 } catch ( PDOException $excecao ){
                     echo $excecao->getMessage();
                     // Encerra aplicativo
                     exit();
                 }
             }
             return self::$instancia;
            }
       }
?>