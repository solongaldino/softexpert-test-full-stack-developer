<?php

namespace Shared\Repositories;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

class BaseRepository{
    
    private $entityManager;

    function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    public function getEntityManager(){
        return $this->entityManager;
    }

    // private function configEntityManager(){
        
    //     $paths = [__DIR__ .'/../entities'];
        
    //     $isDevMode = false;

    //     $dbParams = [
    //         'driver'   => 'pdo_mysql',
    //         'user'     => $_ENV['DB_USER'],
    //         'password' => $_ENV['DB_PASSWORD'],
    //         'dbname'   => $_ENV['DB_NAME'],
    //     ];

    //     $config = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode);    
    //     $connection = DriverManager::getConnection($dbParams, $config);
        
    //     return new EntityManager($connection, $config);
    // }
}