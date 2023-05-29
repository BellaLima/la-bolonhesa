<?php

namespace App\Config;

use Dotenv\Dotenv;

 class Configuration{

     public static function initiate(string $path_to_env, array $required_fields=[]): void
     {
         $config = Dotenv::createImmutable($path_to_env);
         $config->load();
         self::validateVariables($config, $required_fields);
     }

     private static function validateVariables(Dotenv $config, array $required_fields): void{
         foreach ($required_fields as $field){
             $config->required($field)->notEmpty();
         }
     }
 }