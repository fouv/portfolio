<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Projet;

class ProjetFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=1; $i<=5;$i++){
          $projet = new Projet();
          $projet->setTitle("Projet réalisé : ")
                  ->setContent("Technos : ")
                  ->setImage("http://placehold.it/350*150")
                  ->setTextbouton("Voir le site");
        }

        $manager->flush();
    }
}
