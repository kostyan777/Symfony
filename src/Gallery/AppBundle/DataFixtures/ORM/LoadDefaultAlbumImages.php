<?php
namespace Gallery\AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Mapping\ClassMetadata;
use Gallery\AppBundle\Entity\AlbumImages;

class LoadDefaultAlbumImages extends AbstractFixture implements OrderedFixtureInterface
{
    static public $images = [];

    public function getOrder()
    {
        return 2;
    }

    public function load(ObjectManager $manager)
    {
        $manager->getClassMetaData(get_class(new AlbumImages()))->setIdGeneratorType(ClassMetadata::GENERATOR_TYPE_NONE);

        $item1 = new AlbumImages();
        $item1->setAlbum($this->getReference('_reference_Album_1'));
        $item1->setImage("cats01.jpg");
        $item1->setTitle("CAT #1");

        $this->addReference('_reference_Image_1', $item1);

        $manager->persist($item1);

        self::$images[] = $item1;

        $item2 = new AlbumImages();
        $item2->setAlbum($this->getReference('_reference_Album_1'));
        $item2->setImage("cats02.jpg");
        $item2->setTitle("CAT #2");

        $this->addReference('_reference_Image_2', $item2);

        $manager->persist($item2);

        self::$images[] = $item2;

        $item3 = new AlbumImages();
        $item3->setAlbum($this->getReference('_reference_Album_1'));
        $item3->setImage("cats03.jpg");
        $item3->setTitle("CAT #3");

        $this->addReference('_reference_Image_3', $item3);

        $manager->persist($item3);

        self::$images[] = $item3;

        $item4 = new AlbumImages();
        $item4->setAlbum($this->getReference('_reference_Album_1'));
        $item4->setImage("cats04.jpg");
        $item4->setTitle("CAT #4");

        $this->addReference('_reference_Image_4', $item4);

        $manager->persist($item4);

        $item5 = new AlbumImages();
        $item5->setAlbum($this->getReference('_reference_Album_1'));
        $item5->setImage("cats05.jpg");
        $item5->setTitle("CAT #5");

        $this->addReference('_reference_Image_5', $item5);

        $manager->persist($item5);

        $item6 = new AlbumImages();
        $item6->setAlbum($this->getReference('_reference_Album_2'));
        $item6->setImage("dogs01.jpg");
        $item6->setTitle("DOG #1");

        $this->addReference('_reference_Image_6', $item6);

        $manager->persist($item6);

        $item7 = new AlbumImages();
        $item7->setAlbum($this->getReference('_reference_Album_2'));
        $item7->setImage("dogs02.jpg");
        $item7->setTitle("DOG #2");

        $this->addReference('_reference_Image_7', $item7);

        $manager->persist($item7);

        $item8 = new AlbumImages();
        $item8->setAlbum($this->getReference('_reference_Album_2'));
        $item8->setImage("dogs03.jpg");
        $item8->setTitle("DOG #3");

        $this->addReference('_reference_Image_8', $item8);

        $manager->persist($item8);

        $item9 = new AlbumImages();
        $item9->setAlbum($this->getReference('_reference_Album_2'));
        $item9->setImage("dogs04.jpg");
        $item9->setTitle("DOG #4");

        $this->addReference('_reference_Image_9', $item9);

        $manager->persist($item9);

        $item10 = new AlbumImages();
        $item10->setAlbum($this->getReference('_reference_Album_2'));
        $item10->setImage("dogs05.jpg");
        $item10->setTitle("DOG #5");

        $this->addReference('_reference_Image_10', $item10);

        $manager->persist($item10);

        $item11 = new AlbumImages();
        $item11->setAlbum($this->getReference('_reference_Album_2'));
        $item11->setImage("dogs06.jpg");
        $item11->setTitle("DOG #6");

        $this->addReference('_reference_Image_11', $item11);

        $manager->persist($item11);

        $item12 = new AlbumImages();
        $item12->setAlbum($this->getReference('_reference_Album_2'));
        $item12->setImage("dogs07.jpg");
        $item12->setTitle("DOG #7");

        $this->addReference('_reference_Image_12', $item12);

        $manager->persist($item12);

        $item13 = new AlbumImages();
        $item13->setAlbum($this->getReference('_reference_Album_2'));
        $item13->setImage("dogs08.jpg");
        $item13->setTitle("DOG #8");

        $this->addReference('_reference_Image_13', $item13);

        $manager->persist($item13);

        $item14 = new AlbumImages();
        $item14->setAlbum($this->getReference('_reference_Album_2'));
        $item14->setImage("dogs09.jpg");
        $item14->setTitle("DOG #9");

        $this->addReference('_reference_Image_14', $item14);

        $manager->persist($item14);

        $item15 = new AlbumImages();
        $item15->setAlbum($this->getReference('_reference_Album_2'));
        $item15->setImage("dogs10.jpg");
        $item15->setTitle("DOG #10");

        $this->addReference('_reference_Image_15', $item15);

        $manager->persist($item15);

        $item16 = new AlbumImages();
        $item16->setAlbum($this->getReference('_reference_Album_2'));
        $item16->setImage("dogs11.jpg");
        $item16->setTitle("DOG #11");

        $this->addReference('_reference_Image_16', $item16);

        $manager->persist($item16);

        $item17 = new AlbumImages();
        $item17->setAlbum($this->getReference('_reference_Album_2'));
        $item17->setImage("dogs12.jpg");
        $item17->setTitle("DOG #12");

        $this->addReference('_reference_Image_17', $item17);

        $manager->persist($item17);

        $item18 = new AlbumImages();
        $item18->setAlbum($this->getReference('_reference_Album_2'));
        $item18->setImage("dogs13.jpg");
        $item18->setTitle("DOG #13");

        $this->addReference('_reference_Image_18', $item18);

        $manager->persist($item18);

        $item19 = new AlbumImages();
        $item19->setAlbum($this->getReference('_reference_Album_2'));
        $item19->setImage("dogs14.jpg");
        $item19->setTitle("DOG #14");

        $this->addReference('_reference_Image_19', $item19);

        $manager->persist($item19);

        $item20 = new AlbumImages();
        $item20->setAlbum($this->getReference('_reference_Album_2'));
        $item20->setImage("dogs15.jpg");
        $item20->setTitle("DOG #15");

        $this->addReference('_reference_Image_20', $item20);

        $manager->persist($item20);

        $item21 = new AlbumImages();
        $item21->setAlbum($this->getReference('_reference_Album_2'));
        $item21->setImage("dogs16.jpg");
        $item21->setTitle("DOG #16");

        $this->addReference('_reference_Image_21', $item21);

        $manager->persist($item21);

        self::$images[] = $item21;

        $item22 = new AlbumImages();
        $item22->setAlbum($this->getReference('_reference_Album_2'));
        $item22->setImage("dogs17.jpg");
        $item22->setTitle("DOG #17");

        $this->addReference('_reference_Image_22', $item22);

        $manager->persist($item22);

        $item23 = new AlbumImages();
        $item23->setAlbum($this->getReference('_reference_Album_2'));
        $item23->setImage("dogs18.jpg");
        $item23->setTitle("DOG #18");

        $this->addReference('_reference_Image_23', $item23);

        $manager->persist($item23);

        $item24 = new AlbumImages();
        $item24->setAlbum($this->getReference('_reference_Album_2'));
        $item24->setImage("dogs19.jpg");
        $item24->setTitle("DOG #19");

        $this->addReference('_reference_Image_24', $item24);

        $manager->persist($item24);

        $item25 = new AlbumImages();
        $item25->setAlbum($this->getReference('_reference_Album_2'));
        $item25->setImage("dogs20.jpg");
        $item25->setTitle("DOG #20");

        $this->addReference('_reference_Image_25', $item25);

        $manager->persist($item25);

        $item26 = new AlbumImages();
        $item26->setAlbum($this->getReference('_reference_Album_2'));
        $item26->setImage("dogs21.jpg");
        $item26->setTitle("DOG #21");

        $this->addReference('_reference_Image_26', $item26);

        $manager->persist($item26);

        $item27 = new AlbumImages();
        $item27->setAlbum($this->getReference('_reference_Album_3'));
        $item27->setImage("hamster01.jpg");
        $item27->setTitle("HAMSTER #1");

        $this->addReference('_reference_Image_27', $item27);

        $manager->persist($item27);

        $item28 = new AlbumImages();
        $item28->setAlbum($this->getReference('_reference_Album_3'));
        $item28->setImage("hamster02.jpg");
        $item28->setTitle("HAMSTER #2");

        $this->addReference('_reference_Image_28', $item28);

        $manager->persist($item28);

        $item29 = new AlbumImages();
        $item29->setAlbum($this->getReference('_reference_Album_3'));
        $item29->setImage("hamster03.jpg");
        $item29->setTitle("HAMSTER #3");

        $this->addReference('_reference_Image_29', $item29);

        $manager->persist($item29);

        $item30 = new AlbumImages();
        $item30->setAlbum($this->getReference('_reference_Album_3'));
        $item30->setImage("hamster04.jpg");
        $item30->setTitle("HAMSTER #4");

        $this->addReference('_reference_Image_30', $item30);

        $manager->persist($item30);

        $item31 = new AlbumImages();
        $item31->setAlbum($this->getReference('_reference_Album_3'));
        $item31->setImage("hamster05.jpg");
        $item31->setTitle("HAMSTER #5");

        $this->addReference('_reference_Image_31', $item31);

        $manager->persist($item31);

        $item32 = new AlbumImages();
        $item32->setAlbum($this->getReference('_reference_Album_3'));
        $item32->setImage("hamster06.jpg");
        $item32->setTitle("HAMSTER #6");

        $this->addReference('_reference_Image_32', $item32);

        $manager->persist($item32);

        $item33 = new AlbumImages();
        $item33->setAlbum($this->getReference('_reference_Album_3'));
        $item33->setImage("hamster07.jpg");
        $item33->setTitle("HAMSTER #7");

        $this->addReference('_reference_Image_33', $item33);

        $manager->persist($item33);

        $item34 = new AlbumImages();
        $item34->setAlbum($this->getReference('_reference_Album_3'));
        $item34->setImage("hamster08.jpg");
        $item34->setTitle("HAMSTER #8");

        $this->addReference('_reference_Image_34', $item34);

        $manager->persist($item34);

        $item35 = new AlbumImages();
        $item35->setAlbum($this->getReference('_reference_Album_3'));
        $item35->setImage("hamster09.jpg");
        $item35->setTitle("HAMSTER #9");

        $this->addReference('_reference_Image_35', $item35);

        $manager->persist($item35);

        $item36 = new AlbumImages();
        $item36->setAlbum($this->getReference('_reference_Album_3'));
        $item36->setImage("hamster10.jpg");
        $item36->setTitle("HAMSTER #10");

        $this->addReference('_reference_Image_36', $item36);

        $manager->persist($item36);

        $item37 = new AlbumImages();
        $item37->setAlbum($this->getReference('_reference_Album_3'));
        $item37->setImage("hamster11.jpg");
        $item37->setTitle("HAMSTER #11");

        $this->addReference('_reference_Image_37', $item37);

        $manager->persist($item37);

        $item38 = new AlbumImages();
        $item38->setAlbum($this->getReference('_reference_Album_3'));
        $item38->setImage("hamster12.jpg");
        $item38->setTitle("HAMSTER #12");

        $this->addReference('_reference_Image_38', $item38);

        $manager->persist($item38);

        $item39 = new AlbumImages();
        $item39->setAlbum($this->getReference('_reference_Album_3'));
        $item39->setImage("hamster13.jpg");
        $item39->setTitle("HAMSTER #13");

        $this->addReference('_reference_Image_39', $item39);

        $manager->persist($item39);

        $item40 = new AlbumImages();
        $item40->setAlbum($this->getReference('_reference_Album_3'));
        $item40->setImage("hamster14.jpg");
        $item40->setTitle("HAMSTER #14");

        $this->addReference('_reference_Image_40', $item40);

        $manager->persist($item40);

        $item41 = new AlbumImages();
        $item41->setAlbum($this->getReference('_reference_Album_3'));
        $item41->setImage("hamster15.jpg");
        $item41->setTitle("HAMSTER #15");

        $this->addReference('_reference_Image_41', $item41);

        $manager->persist($item41);

        $item42 = new AlbumImages();
        $item42->setAlbum($this->getReference('_reference_Album_3'));
        $item42->setImage("hamster16.jpg");
        $item42->setTitle("HAMSTER #16");

        $this->addReference('_reference_Image_42', $item42);

        $manager->persist($item42);

        $item43 = new AlbumImages();
        $item43->setAlbum($this->getReference('_reference_Album_3'));
        $item43->setImage("hamster17.jpg");
        $item43->setTitle("HAMSTER #17");

        $this->addReference('_reference_Image_43', $item43);

        $manager->persist($item43);

        $item44 = new AlbumImages();
        $item44->setAlbum($this->getReference('_reference_Album_3'));
        $item44->setImage("hamster18.jpg");
        $item44->setTitle("HAMSTER #18");

        $this->addReference('_reference_Image_44', $item44);

        $manager->persist($item44);

        $item45 = new AlbumImages();
        $item45->setAlbum($this->getReference('_reference_Album_3'));
        $item45->setImage("hamster19.jpg");
        $item45->setTitle("HAMSTER #19");

        $this->addReference('_reference_Image_45', $item45);

        $manager->persist($item45);

        self::$images[] = $item45;

        $item46 = new AlbumImages();
        $item46->setAlbum($this->getReference('_reference_Album_3'));
        $item46->setImage("hamster20.jpg");
        $item46->setTitle("HAMSTER #20");

        $this->addReference('_reference_Image_46', $item46);

        $manager->persist($item46);

        $item47 = new AlbumImages();
        $item47->setAlbum($this->getReference('_reference_Album_3'));
        $item47->setImage("hamster21.jpg");
        $item47->setTitle("HAMSTER #21");

        $this->addReference('_reference_Image_47', $item47);

        $manager->persist($item47);

        $item48 = new AlbumImages();
        $item48->setAlbum($this->getReference('_reference_Album_3'));
        $item48->setImage("hamster22.jpg");
        $item48->setTitle("HAMSTER #22");

        $this->addReference('_reference_Image_48', $item48);

        $manager->persist($item48);

        $item49 = new AlbumImages();
        $item49->setAlbum($this->getReference('_reference_Album_3'));
        $item49->setImage("hamster23.jpg");
        $item49->setTitle("HAMSTER #23");

        $this->addReference('_reference_Image_49', $item49);

        $manager->persist($item49);

        $item50 = new AlbumImages();
        $item50->setAlbum($this->getReference('_reference_Album_3'));
        $item50->setImage("hamster24.jpg");
        $item50->setTitle("HAMSTER #24");

        $this->addReference('_reference_Image_50', $item50);

        $manager->persist($item50);

        $item51 = new AlbumImages();
        $item51->setAlbum($this->getReference('_reference_Album_3'));
        $item51->setImage("hamster25.jpg");
        $item51->setTitle("HAMSTER #25");

        $this->addReference('_reference_Image_51', $item51);

        $manager->persist($item51);

        $item52 = new AlbumImages();
        $item52->setAlbum($this->getReference('_reference_Album_3'));
        $item52->setImage("hamster26.jpg");
        $item52->setTitle("HAMSTER #26");

        $this->addReference('_reference_Image_52', $item52);

        $manager->persist($item52);

        $item53 = new AlbumImages();
        $item53->setAlbum($this->getReference('_reference_Album_3'));
        $item53->setImage("hamster27.jpg");
        $item53->setTitle("HAMSTER #27");

        $this->addReference('_reference_Image_53', $item53);

        $manager->persist($item53);

        $item54 = new AlbumImages();
        $item54->setAlbum($this->getReference('_reference_Album_4'));
        $item54->setImage("parrot01.jpg");
        $item54->setTitle("PARROT #1");

        $this->addReference('_reference_Image_54', $item54);

        $manager->persist($item54);

        $item55 = new AlbumImages();
        $item55->setAlbum($this->getReference('_reference_Album_4'));
        $item55->setImage("parrot02.jpg");
        $item55->setTitle("PARROT #2");

        $this->addReference('_reference_Image_55', $item55);

        $manager->persist($item55);

        $item56 = new AlbumImages();
        $item56->setAlbum($this->getReference('_reference_Album_4'));
        $item56->setImage("parrot03.jpg");
        $item56->setTitle("PARROT #3");

        $this->addReference('_reference_Image_56', $item56);

        $manager->persist($item56);

        $item57 = new AlbumImages();
        $item57->setAlbum($this->getReference('_reference_Album_4'));
        $item57->setImage("parrot04.jpg");
        $item57->setTitle("PARROT #4");

        $this->addReference('_reference_Image_57', $item57);

        $manager->persist($item57);

        $item58 = new AlbumImages();
        $item58->setAlbum($this->getReference('_reference_Album_4'));
        $item58->setImage("parrot05.jpg");
        $item58->setTitle("PARROT #5");

        $this->addReference('_reference_Image_58', $item58);

        $manager->persist($item58);

        $item59 = new AlbumImages();
        $item59->setAlbum($this->getReference('_reference_Album_4'));
        $item59->setImage("parrot06.jpg");
        $item59->setTitle("PARROT #6");

        $this->addReference('_reference_Image_59', $item59);

        $manager->persist($item59);

        $item60 = new AlbumImages();
        $item60->setAlbum($this->getReference('_reference_Album_4'));
        $item60->setImage("parrot07.jpg");
        $item60->setTitle("PARROT #7");

        $this->addReference('_reference_Image_60', $item60);

        $manager->persist($item60);

        $item61 = new AlbumImages();
        $item61->setAlbum($this->getReference('_reference_Album_4'));
        $item61->setImage("parrot08.jpg");
        $item61->setTitle("PARROT #8");

        $this->addReference('_reference_Image_61', $item61);

        $manager->persist($item61);

        $item62 = new AlbumImages();
        $item62->setAlbum($this->getReference('_reference_Album_4'));
        $item62->setImage("parrot09.jpg");
        $item62->setTitle("PARROT #9");

        $this->addReference('_reference_Image_62', $item62);

        $manager->persist($item62);

        $item63 = new AlbumImages();
        $item63->setAlbum($this->getReference('_reference_Album_4'));
        $item63->setImage("parrot10.jpg");
        $item63->setTitle("PARROT #10");

        $this->addReference('_reference_Image_63', $item63);

        $manager->persist($item63);

        $item64 = new AlbumImages();
        $item64->setAlbum($this->getReference('_reference_Album_4'));
        $item64->setImage("parrot11.jpg");
        $item64->setTitle("PARROT #11");

        $this->addReference('_reference_Image_64', $item64);

        $manager->persist($item64);

        $item65 = new AlbumImages();
        $item65->setAlbum($this->getReference('_reference_Album_4'));
        $item65->setImage("parrot12.jpg");
        $item65->setTitle("PARROT #12");

        $this->addReference('_reference_Image_65', $item65);

        $manager->persist($item65);

        $item66 = new AlbumImages();
        $item66->setAlbum($this->getReference('_reference_Album_4'));
        $item66->setImage("parrot13.jpg");
        $item66->setTitle("PARROT #13");

        $this->addReference('_reference_Image_66', $item66);

        $manager->persist($item66);

        $item67 = new AlbumImages();
        $item67->setAlbum($this->getReference('_reference_Album_4'));
        $item67->setImage("parrot14.jpg");
        $item67->setTitle("PARROT #14");

        $this->addReference('_reference_Image_67', $item67);

        $manager->persist($item67);

        $item68 = new AlbumImages();
        $item68->setAlbum($this->getReference('_reference_Album_4'));
        $item68->setImage("parrot15.jpg");
        $item68->setTitle("PARROT #15");

        $this->addReference('_reference_Image_68', $item68);

        $manager->persist($item68);

        $item69 = new AlbumImages();
        $item69->setAlbum($this->getReference('_reference_Album_4'));
        $item69->setImage("parrot16.jpg");
        $item69->setTitle("PARROT #16");

        $this->addReference('_reference_Image_69', $item69);

        $manager->persist($item69);

        $item70 = new AlbumImages();
        $item70->setAlbum($this->getReference('_reference_Album_4'));
        $item70->setImage("parrot17.jpg");
        $item70->setTitle("PARROT #17");

        $this->addReference('_reference_Image_70', $item70);

        $manager->persist($item70);

        $item71 = new AlbumImages();
        $item71->setAlbum($this->getReference('_reference_Album_4'));
        $item71->setImage("parrot18.jpg");
        $item71->setTitle("PARROT #18");

        $this->addReference('_reference_Image_71', $item71);

        $manager->persist($item71);

        $item72 = new AlbumImages();
        $item72->setAlbum($this->getReference('_reference_Album_4'));
        $item72->setImage("parrot19.jpg");
        $item72->setTitle("PARROT #19");

        $this->addReference('_reference_Image_72', $item72);

        $manager->persist($item72);

        $item73 = new AlbumImages();
        $item73->setAlbum($this->getReference('_reference_Album_4'));
        $item73->setImage("parrot20.jpg");
        $item73->setTitle("PARROT #20");

        $this->addReference('_reference_Image_73', $item73);

        $manager->persist($item73);

        $item74 = new AlbumImages();
        $item74->setAlbum($this->getReference('_reference_Album_4'));
        $item74->setImage("parrot21.jpg");
        $item74->setTitle("PARROT #21");

        $this->addReference('_reference_Image_74', $item74);

        $manager->persist($item74);

        $item75 = new AlbumImages();
        $item75->setAlbum($this->getReference('_reference_Album_4'));
        $item75->setImage("parrot22.jpg");
        $item75->setTitle("PARROT #22");

        $this->addReference('_reference_Image_75', $item75);

        $manager->persist($item75);

        $item76 = new AlbumImages();
        $item76->setAlbum($this->getReference('_reference_Album_5'));
        $item76->setImage("fishes01.jpg");
        $item76->setTitle("SMALL FISH #1");

        $this->addReference('_reference_Image_76', $item76);

        $manager->persist($item76);

        $item77 = new AlbumImages();
        $item77->setAlbum($this->getReference('_reference_Album_5'));
        $item77->setImage("fishes02.jpg");
        $item77->setTitle("SMALL FISH #2");

        $this->addReference('_reference_Image_77', $item77);

        $manager->persist($item77);

        $item78 = new AlbumImages();
        $item78->setAlbum($this->getReference('_reference_Album_5'));
        $item78->setImage("fishes03.jpg");
        $item78->setTitle("SMALL FISH #3");

        $this->addReference('_reference_Image_78', $item78);

        $manager->persist($item78);

        $item79 = new AlbumImages();
        $item79->setAlbum($this->getReference('_reference_Album_5'));
        $item79->setImage("fishes04.jpg");
        $item79->setTitle("SMALL FISH #4");

        $this->addReference('_reference_Image_79', $item79);

        $manager->persist($item79);

        $item80 = new AlbumImages();
        $item80->setAlbum($this->getReference('_reference_Album_5'));
        $item80->setImage("fishes05.jpg");
        $item80->setTitle("SMALL FISH #5");

        $this->addReference('_reference_Image_80', $item80);

        $manager->persist($item80);

        $item81 = new AlbumImages();
        $item81->setAlbum($this->getReference('_reference_Album_5'));
        $item81->setImage("fishes06.jpg");
        $item81->setTitle("SMALL FISH #6");

        $this->addReference('_reference_Image_81', $item81);

        $manager->persist($item81);

        $item82 = new AlbumImages();
        $item82->setAlbum($this->getReference('_reference_Album_5'));
        $item82->setImage("fishes07.jpg");
        $item82->setTitle("SMALL FISH #7");

        $this->addReference('_reference_Image_82', $item82);

        $manager->persist($item82);

        $item83 = new AlbumImages();
        $item83->setAlbum($this->getReference('_reference_Album_5'));
        $item83->setImage("fishes08.jpg");
        $item83->setTitle("SMALL FISH #8");

        $this->addReference('_reference_Image_83', $item83);

        $manager->persist($item83);

        $item84 = new AlbumImages();
        $item84->setAlbum($this->getReference('_reference_Album_5'));
        $item84->setImage("fishes09.jpg");
        $item84->setTitle("SMALL FISH #9");

        $this->addReference('_reference_Image_84', $item84);

        $manager->persist($item84);

        $item85 = new AlbumImages();
        $item85->setAlbum($this->getReference('_reference_Album_5'));
        $item85->setImage("fishes10.jpg");
        $item85->setTitle("SMALL FISH #10");

        $this->addReference('_reference_Image_85', $item85);

        $manager->persist($item85);

        $item86 = new AlbumImages();
        $item86->setAlbum($this->getReference('_reference_Album_5'));
        $item86->setImage("fishes11.jpg");
        $item86->setTitle("SMALL FISH #11");

        $this->addReference('_reference_Image_86', $item86);

        $manager->persist($item86);

        $item87 = new AlbumImages();
        $item87->setAlbum($this->getReference('_reference_Album_5'));
        $item87->setImage("fishes12.jpg");
        $item87->setTitle("SMALL FISH #12");

        $this->addReference('_reference_Image_87', $item87);

        $manager->persist($item87);

        $item88 = new AlbumImages();
        $item88->setAlbum($this->getReference('_reference_Album_5'));
        $item88->setImage("fishes13.jpg");
        $item88->setTitle("SMALL FISH #13");

        $this->addReference('_reference_Image_88', $item88);

        $manager->persist($item88);

        $item89 = new AlbumImages();
        $item89->setAlbum($this->getReference('_reference_Album_5'));
        $item89->setImage("fishes14.jpg");
        $item89->setTitle("SMALL FISH #14");

        $this->addReference('_reference_Image_89', $item89);

        $manager->persist($item89);

        $item90 = new AlbumImages();
        $item90->setAlbum($this->getReference('_reference_Album_5'));
        $item90->setImage("fishes15.jpg");
        $item90->setTitle("SMALL FISH #15");

        $this->addReference('_reference_Image_90', $item90);

        $manager->persist($item90);

        $item91 = new AlbumImages();
        $item91->setAlbum($this->getReference('_reference_Album_5'));
        $item91->setImage("fishes16.jpg");
        $item91->setTitle("SMALL FISH #16");

        $this->addReference('_reference_Image_91', $item91);

        $manager->persist($item91);

        $item92 = new AlbumImages();
        $item92->setAlbum($this->getReference('_reference_Album_5'));
        $item92->setImage("fishes17.jpg");
        $item92->setTitle("SMALL FISH #17");

        $this->addReference('_reference_Image_92', $item92);

        $manager->persist($item92);

        $item93 = new AlbumImages();
        $item93->setAlbum($this->getReference('_reference_Album_5'));
        $item93->setImage("fishes18.jpg");
        $item93->setTitle("SMALL FISH #18");

        $this->addReference('_reference_Image_93', $item93);

        $manager->persist($item93);

        $item94 = new AlbumImages();
        $item94->setAlbum($this->getReference('_reference_Album_5'));
        $item94->setImage("fishes19.jpg");
        $item94->setTitle("SMALL FISH #19");

        $this->addReference('_reference_Image_94', $item94);

        $manager->persist($item94);

        $item95 = new AlbumImages();
        $item95->setAlbum($this->getReference('_reference_Album_5'));
        $item95->setImage("fishes20.jpg");
        $item95->setTitle("SMALL FISH #20");

        $this->addReference('_reference_Image_95', $item95);

        $manager->persist($item95);

        $item96 = new AlbumImages();
        $item96->setAlbum($this->getReference('_reference_Album_5'));
        $item96->setImage("fishes21.jpg");
        $item96->setTitle("SMALL FISH #21");

        $this->addReference('_reference_Image_96', $item96);

        $manager->persist($item96);

        $manager->flush();
    }
}
