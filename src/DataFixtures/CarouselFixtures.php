<?php
namespace App\DataFixtures;

use App\Entity\Carousel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CarouselFixtures extends Fixture
{
    const CAROUSEL = [
       'Images/Carousel/carousel0.jpg',
       'Images/Carousel/carousel1.jpg',
       'Images/Carousel/carousel2.jpg',
       'Images/Carousel/carousel3.jpg'
      
    ];
    public function load(ObjectManager $manager)
    {
        foreach (self::CAROUSEL as $key => $carouselImg) {
            $carousel = new Carousel();
            $carousel->setName("image".$key);
            $carousel->setSrcImg($carouselImg);
            $carousel->setActive((bool)rand(0, 1));
            $carousel->setDescription('string une description');
            $carousel->setDescriptionen('une description anglaise');
            $carousel->setDescriptionde('une description allemande');
            $carousel->setDescriptiones('une description espagnole');
            $carousel->setDescriptiontr('une description turc');
            $this->addReference('carousel_' . $key, $carousel);
            $manager->persist($carousel);
        }
        $manager->flush();
    }
}
