<?php

namespace MedEsperanza\PrincipalBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Doctrine\ORM\EntityManager;
use Doctrine\DBAL\Types\Type;


class MedEsperanzaPrincipalBundle extends Bundle
{
    public function boot() {
        //Type::addType('blob', 'Doctrine\DBAL\Types');
        $em = $this->container->get('doctrine.orm.default_entity_manager');
        $conn = $em->getConnection();
        $conn->getDatabasePlatform()->registerDoctrineTypeMapping('BLOB', 'blob');
    }
}



