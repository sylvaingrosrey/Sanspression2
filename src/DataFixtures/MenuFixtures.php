<?php

namespace App\DataFixtures;

use App\Entity\Menu;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MenuFixtures extends Fixture
{
    const MENU = [
        'Menu base',
        'Menu wrap',
        'Desserts',
        'Boissons et café',

    ];
    public function load(ObjectManager $manager)
    {
        foreach (self::MENU as $key => $menuName) {
            $menu = new Menu();
            $menu->setTitlemenufr($menuName);
            $menu->setMenudescriptionfr('descriptionfr');
            $menu->setMenusubtitlefr('sousmenufr');
            $menu->setTitlemenuen($menuName);
            $menu->setMenudescriptionen('descriptionen');
            $menu->setMenusubtitleen('sousmenuen');
            $menu->setTitlemenude($menuName);
            $menu->setMenudescriptionde('descriptionde');
            $menu->setMenusubtitlede('sousmenude');
            $menu->setTitlemenues($menuName);
            $menu->setMenudescriptiones('descriptiones');
            $menu->setMenusubtitlees('sousmenues');
            $menu->setTitlemenutr($menuName);
            $menu->setMenudescriptiontr('descriptiontr');
            $menu->setMenusubtitletr('sousmenutr');
            $menu->setprice(rand(5, 50));
            $this->addReference('menu_' . $key, $menu);
            $manager->persist($menu);
        }
        $manager->flush();
    }
}
