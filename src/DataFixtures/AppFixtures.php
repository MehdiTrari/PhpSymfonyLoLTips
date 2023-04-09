<?php

namespace App\DataFixtures;

use Faker\Factory;
use Faker\Generator;
use App\Entity\User;
use App\Entity\Champions;
use App\Entity\Utilisateurs;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class AppFixtures extends Fixture
{
    private Generator $faker;


    

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
      
    }

    

    public function load(ObjectManager $manager): void
    {

        $champions1 = new Champions();
        $champions1->setNom('Aatrox')
            ->setTips('Aatrox est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Bruiser');

        $champions2 = new Champions();
        $champions2->setNom('Ahri')
            ->setTips('Ahri est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions3 = new Champions();
        $champions3->setNom('Akali')
            ->setTips('Akali est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Assassin');

        $champions4 = new Champions();
        $champions4->setNom('Alistar')
            ->setTips('Alistar est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions5 = new Champions();
        $champions5->setNom('Amumu')
            ->setTips('Amumu est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions6 = new Champions();
        $champions6->setNom('Anivia')

            ->setTips('Anivia est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions7 = new Champions();
        $champions7->setNom('Annie')
            ->setTips('Annie est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions8 = new Champions();
        $champions8->setNom('Ashe')

            ->setTips('Ashe est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');

        $champions9 = new Champions();
        $champions9->setNom('Aurelion Sol')

            ->setTips('Aurelion Sol est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions10 = new Champions();
        $champions10->setNom('Azir')

            ->setTips('Azir est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions11 = new Champions();
        $champions11->setNom('Bard')

            ->setTips('Bard est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Support');

        $champions12 = new Champions();
        $champions12->setNom('Blitzcrank')

            ->setTips('Blitzcrank est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions13 = new Champions();
        $champions13->setNom('Brand')

            ->setTips('Brand est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions14 = new Champions();
        $champions14->setNom('Braum')

            ->setTips('Braum est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions15 = new Champions();
        $champions15->setNom('Caitlyn')

            ->setTips('Caitlyn est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');

        $champions16 = new Champions();
        $champions16->setNom('Camille')

            ->setTips('Camille est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions17 = new Champions();
        $champions17->setNom('Cassiopeia')

            ->setTips('Cassiopeia est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions18 = new Champions();
        $champions18->setNom('Cho\'Gath')

            ->setTips('Cho\'Gath est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions19 = new Champions();
        $champions19->setNom('Corki')

            ->setTips('Corki est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');

        $champions20 = new Champions();
        $champions20->setNom('Darius')

            ->setTips('Darius est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions21 = new Champions();
        $champions21->setNom('Diana')

            ->setTips('Diana est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions22 = new Champions();
        $champions22->setNom('Dr. Mundo')
            ->setTips('Dr. Mundo est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions23 = new Champions();
        $champions23->setNom('Draven')

            ->setTips('Draven est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');

        $champions24 = new Champions();
        $champions24->setNom('Ekko')
            ->setTips('Ekko est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Assassin');

        $champions25 = new Champions();
        $champions25->setNom('Elise')
            ->setTips('Elise est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions26 = new Champions();
        $champions26->setNom('Evelynn')
            ->setTips('Evelynn est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Assassin');

        $champions27 = new Champions();
        $champions27->setNom('Ezreal')
            ->setTips('Ezreal est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');

        $champions28 = new Champions();
        $champions28->setNom('Fiddlesticks')

            ->setTips('Fiddlesticks est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions29 = new Champions();
        $champions29->setNom('Fiora')
            ->setTips('Fiora est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions30 = new Champions();
        $champions30->setNom('Fizz')
            ->setTips('Fizz est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Assassin');

        $champions31 = new Champions();
        $champions31->setNom('Galio')
            ->setTips('Galio est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions32 = new Champions();
        $champions32->setNom('Gangplank')

            ->setTips('Gangplank est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions33 = new Champions();
        $champions33->setNom('Garen')
            ->setTips('Garen est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions34 = new Champions();
        $champions34->setNom('Gnar')
            ->setTips('Gnar est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions35 = new Champions();
        $champions35->setNom('Gragas')
            ->setTips('Gragas est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions36 = new Champions();
        $champions36->setNom('Graves')
            ->setTips('Graves est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');


        $champions37 = new Champions();
        $champions37->setNom('Hecarim')
            ->setTips('Hecarim est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');


        $champions38 = new Champions();
        $champions38->setNom('Heimerdinger')
            ->setTips('Heimerdinger est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions39 = new Champions();
        $champions39->setNom('Irelia')
            ->setTips('Irelia est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions40 = new Champions();
        $champions40->setNom('Janna')
            ->setTips('Janna est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Support');

        $champions41 = new Champions();
        $champions41->setNom('Jarvan IV')
            ->setTips('Jarvan IV est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions42 = new Champions();
        $champions42->setNom('Jax')
            ->setTips('Jax est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions43 = new Champions();
        $champions43->setNom('Jayce')
            ->setTips('Jayce est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions44 = new Champions();
        $champions44->setNom('Jinx')
            ->setTips('Jinx est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');

        $champions45 = new Champions();
        $champions45->setNom('Kalista')
            ->setTips('Kalista est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');

        $champions46 = new Champions();
        $champions46->setNom('Karma')
            ->setTips('Karma est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions47 = new Champions();
        $champions47->setNom('Karthus')
            ->setTips('Karthus est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions48 = new Champions();
        $champions48->setNom('Kassadin')
            ->setTips('Kassadin est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Assassin');

        $champions49 = new Champions();
        $champions49->setNom('Katarina')
            ->setTips('Katarina est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Assassin');

        $champions50 = new Champions();
        $champions50->setNom('Kayle')
            ->setTips('Kayle est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions51 = new Champions();
        $champions51->setNom('Kennen')
            ->setTips('Kennen est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions52 = new Champions();
        $champions52->setNom('Kha\'Zix')
            ->setTips('Kha\'Zix est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Assassin');

        $champions53 = new Champions();
        $champions53->setNom('Kog\'Maw')

            ->setTips('Kog\'Maw est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');

        $champions54 = new Champions();
        $champions54->setNom('LeBlanc')
            ->setTips('LeBlanc est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Assassin');

        $champions55 = new Champions();
        $champions55->setNom('Lee Sin')
            ->setTips('Lee Sin est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions56 = new Champions();
        $champions56->setNom('Leona')
            ->setTips('Leona est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions57 = new Champions();
        $champions57->setNom('Lissandra')
            ->setTips('Lissandra est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions58 = new Champions();
        $champions58->setNom('Lucian')
            ->setTips('Lucian est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');

        $champions59 = new Champions();
        $champions59->setNom('Lulu')
            ->setTips('Lulu est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Support');

        $champions60 = new Champions();
        $champions60->setNom('Lux')

            ->setTips('Lux est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions61 = new Champions();
        $champions61->setNom('Malphite')

            ->setTips('Malphite est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions62 = new Champions();
        $champions62->setNom('Malzahar')
            ->setTips('Malzahar est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');



        $champions63 = new Champions();
        $champions63->setNom('Maokai')
            ->setTips('Maokai est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions64 = new Champions();
        $champions64->setNom('Master Yi')
            ->setTips('Master Yi est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Assassin');

        $champions65 = new Champions();
        $champions65->setNom('Miss Fortune')
            ->setTips('Miss Fortune est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');

        $champions66 = new Champions();
        $champions66->setNom('Mordekaiser')
            ->setTips('Mordekaiser est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions67 = new Champions();
        $champions67->setNom('Morgana')
            ->setTips('Morgana est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions68 = new Champions();
        $champions68->setNom('Nami')
            ->setTips('Nami est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Support');

        $champions69 = new Champions();
        $champions69->setNom('Nasus')
            ->setTips('Nasus est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions70 = new Champions();
        $champions70->setNom('Nautilus')
            ->setTips('Nautilus est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions71 = new Champions();
        $champions71->setNom('Nidalee')
            ->setTips('Nidalee est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Assassin');

        $champions72 = new Champions();
        $champions72->setNom('Nocturne')
            ->setTips('Nocturne est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Assassin');

        $champions73 = new Champions();
        $champions73->setNom('Nunu')
            ->setTips('Nunu est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions74 = new Champions();
        $champions74->setNom('Olaf')
            ->setTips('Olaf est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions75 = new Champions();
        $champions75->setNom('Orianna')
            ->setTips('Orianna est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions76 = new Champions();
        $champions76->setNom('Pantheon')
            ->setTips('Pantheon est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions77 = new Champions();
        $champions77->setNom('Poppy')
            ->setTips('Poppy est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions78 = new Champions();
        $champions78->setNom('Quinn')

            ->setTips('Quinn est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');

        $champions79 = new Champions();
        $champions79->setNom('Rammus')
            ->setTips('Rammus est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions80 = new Champions();
        $champions80->setNom('Renekton')

            ->setTips('Renekton est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions81 = new Champions();

        $champions81->setNom('Rengar')
            ->setTips('Rengar est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Assassin');

        $champions82 = new Champions();
        $champions82->setNom('Riven')
            ->setTips('Riven est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions83 = new Champions();
        $champions83->setNom('Rumble')
            ->setTips('Rumble est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions84 = new Champions();
        $champions84->setNom('Ryze')
            ->setTips('Ryze est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions85 = new Champions();
        $champions85->setNom('Sejuani')
            ->setTips('Sejuani est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions86 = new Champions();
        $champions86->setNom('Shaco')
            ->setTips('Shaco est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Assassin');

        $champions87 = new Champions();
        $champions87->setNom('Shen')
            ->setTips('Shen est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions88 = new Champions();
        $champions88->setNom('Shyvana')
            ->setTips('Shyvana est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions89 = new Champions();
        $champions89->setNom('Singed')
            ->setTips('Singed est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions90 = new Champions();
        $champions90->setNom('Sion')

            ->setTips('Sion est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions91 = new Champions();
        $champions91->setNom('Sivir')
            ->setTips('Sivir est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');

        $champions92 = new Champions();
        $champions92->setNom('Skarner')
            ->setTips('Skarner est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions93 = new Champions();
        $champions93->setNom('Sona')
            ->setTips('Sona est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions94 = new Champions();
        $champions94->setNom('Soraka')
            ->setTips('Soraka est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Support');

        $champions95 = new Champions();
        $champions95->setNom('Swain')
            ->setTips('Swain est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions96 = new Champions();
        $champions96->setNom('Syndra')
            ->setTips('Syndra est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions97 = new Champions();
        $champions97->setNom('Talon')
            ->setTips('Talon est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Assassin');

        $champions98 = new Champions();
        $champions98->setNom('Taric')
            ->setTips('Taric est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Support');

        $champions99 = new Champions();
        $champions99->setNom('Teemo')
            ->setTips('Teemo est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');

        $champions100 = new Champions();
        $champions100->setNom('Thresh')
            ->setTips('Thresh est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Support');

        $champions101 = new Champions();
        $champions101->setNom('Tristana')
            ->setTips('Tristana est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');


        $champions102 = new Champions();
        $champions102->setNom('Trundle')
            ->setTips('Trundle est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions103 = new Champions();
        $champions103->setNom('Tryndamere')
            ->setTips('Tryndamere est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions104 = new Champions();
        $champions104->setNom('Twisted Fate')
            ->setTips('Twisted Fate est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions105 = new Champions();
        $champions105->setNom('Twitch')
            ->setTips('Twitch est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');

        $champions106 = new Champions();
        $champions106->setNom('Udyr')
            ->setTips('Udyr est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions107 = new Champions();
        $champions107->setNom('Urgot')
            ->setTips('Urgot est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');

        $champions108 = new Champions();
        $champions108->setNom('Varus')
            ->setTips('Varus est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');

        $champions109 = new Champions();
        $champions109->setNom('Vayne')
            ->setTips('Vayne est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Marksman');

        $champions110 = new Champions();
        $champions110->setNom('Veigar')
            ->setTips('Veigar est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions111 = new Champions();
        $champions111->setNom('Vel\'Koz')
            ->setTips('Vel\'Koz est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions112 = new Champions();
        $champions112->setNom('Vi')
            ->setTips('Vi est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions113 = new Champions();
        $champions113->setNom('Viktor')
            ->setTips('Viktor est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions114 = new Champions();
        $champions114->setNom('Vladimir')
            ->setTips('Vladimir est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions115 = new Champions();
        $champions115->setNom('Volibear')
            ->setTips('Volibear est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions116 = new Champions();
        $champions116->setNom('Warwick')
            ->setTips('Warwick est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions117 = new Champions();
        $champions117->setNom('Wukong')
            ->setTips('Wukong est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions118 = new Champions();
        $champions118->setNom('Xerath')
            ->setTips('Xerath est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions119 = new Champions();
        $champions119->setNom('Xin Zhao')
            ->setTips('Xin Zhao est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions120 = new Champions();
        $champions120->setNom('Yasuo')
            ->setTips('Yasuo est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Fighter');

        $champions121 = new Champions();
        $champions121->setNom('Yorick')
            ->setTips('Yorick est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions122 = new Champions();
        $champions122->setNom('Zac')
            ->setTips('Zac est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Tank');

        $champions123 = new Champions();
        $champions123->setNom('Zed')

            ->setTips('Zed est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Assassin');

        $champions124 = new Champions();
        $champions124->setNom('Ziggs')
            ->setTips('Ziggs est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions125 = new Champions();
        $champions125->setNom('Zilean')
            ->setTips('Zilean est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');

        $champions126 = new Champions();
        $champions126->setNom('Zyra')
            ->setTips('Zyra est un champion très puissant en early game, il est donc important de bien le gérer. Il est conseillé de le gank en early game pour le mettre en difficulté. Il est également conseillé de le gank en mid game pour le mettre en difficulté. Il est également conseillé de le gank en late game pour le mettre en difficulté.')
            ->setType('Mage');
        // Champions
        for ($i = 1; $i <= 126; $i++) {
            $manager->persist(${'champions' . $i});
        }

        
        
        // Users
        for ($i = 1; $i <= 10; $i++) {
            $user = new User();
            $user->setNom('user' . $i)
                ->setEmail('user' . $i . '@gmail.com')
                ->setRoles(['ROLE_USER'])
                ->setPlainPassword('password');
            $manager->persist($user);
        

        

        $manager->flush();
    }
}
}
