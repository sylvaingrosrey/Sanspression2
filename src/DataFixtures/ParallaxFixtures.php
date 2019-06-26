<?php
namespace App\DataFixtures;

use App\Entity\Parallax;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ParallaxFixtures extends Fixture
{
    const PARALLAX = [
       'Images/Parallax/parallax1.jpg',
       'Images/Parallax/parallax2.jpg',
       'Images/Parallax/parallax3.jpg'
       
      
    ];
    public function load(ObjectManager $manager)
    {
        foreach (self::PARALLAX as $key => $parallaxImg) {
            $parallax = new Parallax();
            $parallax->setName("image".$key);
            $parallax->setSrcImgParallax($parallaxImg);
            $parallax->setDescriptionParallax('c\'est une description');
            $this->addReference('parallax_' . $key, $parallax);
            $manager->persist($parallax);
        }
        $manager->flush();
    }
}
