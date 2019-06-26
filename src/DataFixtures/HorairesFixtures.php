<?php
namespace App\DataFixtures;

use App\Entity\Horaires;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class HorairesFixtures extends Fixture
{
    const HORAIRES = [
       'Lundi',
       'Mardi',
       'Mercredi',
       'Jeudi',
       'Vendredi',
       'Samedi',
       'Dimanche'
    ];
    const HORAIRESEN = [
        'Monday',
        'Tuesday',
        'Wednesday',
        'Thursday',
        'Friday',
        'Saturday',
        'Sunday'
    ];
    const HORAIRESDE = [
        'Montag',
        'Dienstag',
        'Mittwoch',
        'Donnerstag',
        'Freitag',
        'Samstag',
        'Sonntag'
    ];
    const HORAIRESES = [
        'lunes',
        'martes',
        'miércoles',
        'jueves',
        'viernes',
        'sábado',
        'domingo'
    ];
    const HORAIRESTR = [
        'Pazartesi',
        'Salı',
        'Çarşamba',
        'Perşembe',
        'Cuma',
        'Cumartesi',
        'Pazar'
    ];
    public function load(ObjectManager $manager)
    {
        foreach (self::HORAIRES as $key => $jourHoraires) {
            $horaires = new Horaires();
            $horaires->setJours($jourHoraires);
            $horaires->setJoursen($jourHoraires.'en');
            $horaires->setJoursde($jourHoraires.'de');
            $horaires->setJourses($jourHoraires.'es');
            $horaires->setJourstr($jourHoraires.'tr');
            $horaires->setFermeture('22h30');
            $horaires->setOuverture('11h30');
           
            $this->addReference('horaire_' .$key, $horaires);
            $manager->persist($horaires);
        }
       
        $manager->flush();
    }
}
