<?php
namespace Gallery\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Mapping\ClassMetadata;
use Gallery\AppBundle\Entity\Albums;


class LoadDefaultAlbums extends AbstractFixture implements OrderedFixtureInterface
{
    static public $albums = [];

    public function getOrder()
    {
        return 1;
    }

    public function load(ObjectManager $manager)
    {
        $manager->getClassMetaData(get_class(new Albums()))->setIdGeneratorType(ClassMetadata::GENERATOR_TYPE_NONE);

        $item1 = new Albums();
        $item1->setTitle("Cats");

        $this->addReference('_reference_Album_1', $item1);

        $manager->persist($item1);

        self::$albums[] = $item1;

        $item2 = new Albums();
        $item2->setTitle("Dogs");

        $this->addReference('_reference_Album_2', $item2);

        $manager->persist($item2);

        self::$albums[] = $item2;

        $item3 = new Albums();
        $item3->setTitle("Hamsters");

        $this->addReference('_reference_Album_3', $item3);

        $manager->persist($item3);

        self::$albums[] = $item3;

        $item4 = new Albums();
        $item4->setTitle("Parrots");

        $this->addReference('_reference_Album_4', $item4);

        $manager->persist($item4);

        $item5 = new Albums();
        $item5->setTitle("Small fishes");

        $this->addReference('_reference_Album_5', $item5);

        $manager->persist($item5);

        $manager->flush();
    }

}
