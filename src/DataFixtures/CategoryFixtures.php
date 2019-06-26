<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    const CATEGORIES = [
       'Menu',
       'Entrées',
       'Plats',
       'Desserts',
       'Boissons',
       'Promo',
    ];
    public function load(ObjectManager $manager)
    {
        foreach (self::CATEGORIES as $key => $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
            $category->setSrcImg("images/Category/category".$key.".jpg");
            $this->addReference('category_' . $key, $category);
            $manager->persist($category);
        }
        $manager->flush();
    }
}
