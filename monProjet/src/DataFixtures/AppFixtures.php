<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use App\Entity\Categorie;
use App\Entity\Souscat;
use App\Entity\Detail;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $jeu1 = new Produit();

        $jeu1->setLibelle("Warhammer Fantasy - Livre de base Revisé");
        $jeu1->setPrix(55);
        $jeu1->setImage('illu1.jpg');
        $manager->persist($jeu1);

        $detail1 = new Detail();

        $detail1->setLibelle("Warhammer Fantasy - Livre de base Revisé");
        $detail1->setPrix(55);
        $detail1->setImage('illu1.jpg');
        $detail1->setDescription("test detail");
        $manager->persist($detail1);

        $jeu2 = new Produit();

        $jeu2->setLibelle("Cthulhu Hack : La ville en Jaune - Pack du MJ");
        $jeu2->setPrix(59);
        $jeu2->setImage('illu2.jpg');
        $manager->persist($jeu2);

        $detail2 = new Detail();

        $detail2->setLibelle("Cthulhu Hack : La ville en Jaune - Pack du MJ");
        $detail2->setPrix(59);
        $detail2->setImage('illu2.jpg');
        $detail2->setDescription("test detail");
        $manager->persist($detail2);

        $jeu3 = new Produit();

        $jeu3->setLibelle("Cthulhu Hack : La ville en Jaune");
        $jeu3->setPrix(29);
        $jeu3->setImage('illu3.jpg');
        $manager->persist($jeu3);

        $detail3 = new Detail();

        $detail3->setLibelle("Cthulhu Hack : La ville en Jaune");
        $detail3->setPrix(29);
        $detail3->setImage('illu3.jpg');
        $detail3->setDescription("test detail");
        $manager->persist($detail3);

        $jeu4 = new Produit();

        $jeu4->setLibelle("COPS");
        $jeu4->setPrix(36.97);
        $jeu4->setImage('illu4.jpg');
        $manager->persist($jeu4);

        $detail4 = new Detail();

        $detail4->setLibelle("COPS");
        $detail4->setPrix(36.97);
        $detail4->setImage('illu4.jpg');
        $detail4->setDescription("test detail");
        $manager->persist($detail4);

        $jeu5 = new Produit();

        $jeu5->setLibelle("ARIA : Préludes Édition Deluxe");
        $jeu5->setPrix(49);
        $jeu5->setImage('illu5.jpg');
        $manager->persist($jeu5);

        $detail5 = new Detail();

        $detail5->setLibelle("ARIA : Préludes Édition Deluxe");
        $detail5->setPrix(49);
        $detail5->setImage('illu5.jpg');
        $detail5->setDescription("test detail");
        $manager->persist($detail5);

        $jeu6 = new Produit();
        
        $jeu6->setLibelle("Tales from the Loop : Livre de base");
        $jeu6->setPrix(39);
        $jeu6->setImage('illu6.jpg');
        $manager->persist($jeu6);

        $detail6 = new Detail();
        
        $detail6->setLibelle("Tales from the Loop : Livre de base");
        $detail6->setPrix(39);
        $detail6->setImage('illu6.jpg');
        $detail6->setDescription("test detail6");
        $manager->persist($detail6);

        $jeu7 = new Produit();
        
        $jeu7->setLibelle("La Nuit des Chasseurs, PDF");
        $jeu7->setPrix(5.95);
        $jeu7->setImage('illu7.jpg');
        $manager->persist($jeu7);

        $detail7 = new Detail();
        
        $detail7->setLibelle("La Nuit des Chasseurs, PDF");
        $detail7->setPrix(5.95);
        $detail7->setImage('illu7.jpg');
        $detail7->setDescription("test detail7");
        $manager->persist($detail7);

        $jeu8 = new Produit();
        
        $jeu8->setLibelle("Brigandyne - Rêves de Gloire");
        $jeu8->setPrix(9.90);
        $jeu8->setImage('illu8.jpg');
        $manager->persist($jeu8);

        $detail8 = new Detail();
        
        $detail8->setLibelle("Brigandyne - Rêves de Gloire");
        $detail8->setPrix(9.90);
        $detail8->setImage('illu8.jpg');
        $detail8->setDescription("test detail8");
        $manager->persist($detail8);

        $jeu9 = new Produit();
        
        $jeu9->setLibelle("Brigandyne - Le Compagnon");
        $jeu9->setPrix(8.90);
        $jeu9->setImage('illu9.jpg');
        $manager->persist($jeu9);

        $detail9 = new Detail();
        
        $detail9->setLibelle("Brigandyne - Le Compagnon");
        $detail9->setPrix(8.90);
        $detail9->setImage('illu9.jpg');
        $detail9->setDescription("test detail9");
        $manager->persist($detail9);

        $jeu10 = new Produit();
        
        $jeu10->setLibelle("Brigandyne - Le Bestiaire");
        $jeu10->setPrix(7.90);
        $jeu10->setImage('illu10.jpg');
        $manager->persist($jeu10);

        $detail10 = new Detail();
        
        $detail10->setLibelle("Brigandyne - Le Bestiaire");
        $detail10->setPrix(7.90);
        $detail10->setImage('illu10.jpg');
        $detail10->setDescription("test detail10");
        $manager->persist($detail10);

        $jeu11 = new Produit();
        
        $jeu11->setLibelle("ARIA : Préludes - Coffret Jeu de rôle");
        $jeu11->setPrix(9.99);
        $jeu11->setImage('illu11.jpg');
        $manager->persist($jeu11);

        $detail11 = new Detail();
        
        $detail11->setLibelle("ARIA : Préludes - Coffret Jeu de rôle");
        $detail11->setPrix(9.99);
        $detail11->setImage('illu11.jpg');
        $detail11->setDescription("test detail11");
        $manager->persist($detail11);

        $jeu12 = new Produit();
        
        $jeu12->setLibelle("Delta Green - Music From a Darkened Room");
        $jeu12->setPrix(18.90);
        $jeu12->setImage('illu12.jpg');
        $manager->persist($jeu12);

        $detail12 = new Detail();
        
        $detail12->setLibelle("Delta Green - Music From a Darkened Room");
        $detail12->setPrix(18.90);
        $detail12->setImage('illu12.jpg');
        $detail12->setDescription("test detail12");
        $manager->persist($detail12);

        $jeu13 = new Produit();
        
        $jeu13->setLibelle("Delta Green - Jack Frost", "Jeu de rôle");
        $jeu13->setPrix(34.95);
        $jeu13->setImage('illu13.jpg');
        $manager->persist($jeu13);

        $detail13 = new Detail();
        
        $detail13->setLibelle("Delta Green - Jack Frost", "Jeu de rôle");
        $detail13->setPrix(34.95);
        $detail13->setImage('illu13.jpg');
        $detail13->setDescription("test detail13");
        $manager->persist($detail13);

        $jeu14 = new Produit();
        
        $jeu14->setLibelle("Action Potential");
        $jeu14->setPrix(18);
        $jeu14->setImage('illu14.jpg');
        $manager->persist($jeu14);

        $detail14 = new Detail();
        
        $detail14->setLibelle("Action Potential");
        $detail14->setPrix(18);
        $detail14->setImage('illu14.jpg');
        $detail14->setDescription("test detail14");
        $manager->persist($detail14);

        $jeu15 = new Produit();
        
        $jeu15->setLibelle("Set de 7 Mini Dés JDR Chessex : Scarab Jade / Gold");
        $jeu15->setPrix(5.95);
        $jeu15->setImage('illu15.jpg');
        $manager->persist($jeu15);

        $detail15 = new Detail();
        
        $detail15->setLibelle("Set de 7 Mini Dés JDR Chessex : Scarab Jade / Gold");
        $detail15->setPrix(5.95);
        $detail15->setImage('illu15.jpg');
        $detail15->setDescription("test detail15");
        $manager->persist($detail15);

        $jeu16 = new Produit();
        
        $jeu16->setLibelle("Set de 7 Mini Dés JDR Chessex : Glitter Ruby Red/Gold");
        $jeu16->setPrix(5.95);
        $jeu16->setImage('illu16.jpg');
        $manager->persist($jeu16);

        $detail16 = new Detail();
        
        $detail16->setLibelle("Set de 7 Mini Dés JDR Chessex : Glitter Ruby Red/Gold");
        $detail16->setPrix(5.95);
        $detail16->setImage('illu16.jpg');
        $detail16->setDescription("test detail16");
        $manager->persist($detail16);

        $jeu17 = new Produit();

        $jeu17->setLibelle("Set de 7 Dés JDR Sirius Dice : Blue Hawaiian");
        $jeu17->setPrix(18);
        $jeu17->setImage('illu17.jpg');
        $manager->persist($jeu17);

        $detail17 = new Detail();
        
        $detail17->setLibelle("Set de 7 Dés JDR Sirius Dice : Blue Hawaiian");
        $detail17->setPrix(18);
        $detail17->setImage('illu17.jpg');
        $detail17->setDescription("test detail17");
        $manager->persist($detail17);

        $jeu18 = new Produit();

        $jeu18->setLibelle("Set de Dés JDR Argent");
        $jeu18->setPrix(12.95);
        $jeu18->setImage('illu18.jpg');
        $manager->persist($jeu18);

        $detail18 = new Detail();
        
        $detail18->setLibelle("Set de Dés JDR Argent");
        $detail18->setPrix(12.95);
        $detail18->setImage('illu18.jpg');
        $detail18->setDescription("test detail18");
        $manager->persist($detail18);

        $jeu19 = new Produit();

        $jeu19->setLibelle("Coffret Cadeau JDR - 5 Sets de Dés + Piste à Dés");
        $jeu19->setPrix(56.90);
        $jeu19->setImage('illu19.jpg');
        $manager->persist($jeu19);

        $detail19 = new Detail();
        
        $detail19->setLibelle("Coffret Cadeau JDR - 5 Sets de Dés + Piste à Dés");
        $detail19->setPrix(56.90);
        $detail19->setImage('illu19.jpg');
        $detail19->setDescription("test detail19");
        $manager->persist($detail19);

        $jeu20 = new Produit();

        $jeu20->setLibelle("Set de dés - Nuage translucide");
        $jeu20->setPrix(14.90);
        $jeu20->setImage('illu20.jpg');
        $manager->persist($jeu20);

        $detail20 = new Detail();

        $detail20->setLibelle("Set de dés - Nuage translucide");
        $detail20->setPrix(14.90);
        $detail20->setImage('illu20.jpg');
        $detail20->setDescription("test detail20");
        $manager->persist($detail20);

        $jeu21 = new Produit();

        $jeu21->setLibelle("Set de dés en obsidienne, set de dés en pierre semi précieuse");
        $jeu21->setPrix(84.95);
        $jeu21->setImage('illu21.jpg');
        $manager->persist($jeu21);

        $detail21 = new Detail();

        $detail21->setLibelle("Set de dés en obsidienne, set de dés en pierre semi précieuse");
        $detail21->setPrix(84.95);
        $detail21->setImage('illu21.jpg');
        $detail21->setDescription("test detail5");
        $manager->persist($detail21);

        $jeu22 = new Produit();

        $jeu22->setLibelle("Set de dés en fluorite verte, set de dés en pierre semi précieuse");
        $jeu22->setPrix(84.95);
        $jeu22->setImage('illu22.jpg');
        $manager->persist($jeu22);

        $detail22 = new Detail();

        $detail22->setLibelle("Set de dés en fluorite verte, set de dés en pierre semi précieuse");
        $detail22->setPrix(84.95);
        $detail22->setImage('illu22.jpg');
        $detail22->setDescription("test detail5");
        $manager->persist($detail22);

        $jeu23 = new Produit();

        $jeu23->setLibelle("D100 métallique couleur cuivre");
        $jeu23->setPrix(34.99);
        $jeu23->setImage('illu23.jpg');
        $manager->persist($jeu23);

        $detail23 = new Detail();

        $detail23->setLibelle("D100 métallique couleur cuivre");
        $detail23->setPrix(34.99);
        $detail23->setImage('illu23.jpg');
        $detail23->setDescription("test detail5");
        $manager->persist($detail23);

        $jeu24 = new Produit();

        $jeu24->setLibelle("Set de dés : Svetoid Metal");
        $jeu24->setPrix(39.99);
        $jeu24->setImage('illu24.jpg');
        $manager->persist($jeu24);

        $detail24 = new Detail();

        $detail24->setLibelle("Set de dés : Svetoid Metal");
        $detail24->setPrix(39.99);
        $detail24->setImage('illu24.jpg');
        $detail24->setDescription("test detail5");
        $manager->persist($detail24);

        $jeu25 = new Produit();

        $jeu25->setLibelle("Tour à dés Bandua");
        $jeu25->setPrix(18.95);
        $jeu25->setImage('illu25.jpg');
        $manager->persist($jeu25);

        $detail25 = new Detail();

        $detail25->setLibelle("Tour à dés Bandua");
        $detail25->setPrix(18.95);
        $detail25->setImage('illu25.jpg');
        $detail25->setDescription("test detail6");
        $manager->persist($detail25);

        $jeu26 = new Produit();

        $jeu26->setLibelle("Tour à Dés Tech Make - Standard");
        $jeu26->setPrix(7.50);
        $jeu26->setImage('illu26.jpg');
        $manager->persist($jeu26);

        $detail26 = new Detail();

        $detail26->setLibelle("Tour à Dés Tech Make - Standard");
        $detail26->setPrix(7.50);
        $detail26->setImage('illu26.jpg');
        $detail26->setDescription("test detail6");
        $manager->persist($detail26);

        $jeu27 = new Produit();

        $jeu27->setLibelle("Tour à dés médiévale");
        $jeu27->setPrix(48.90);
        $jeu27->setImage('illu27.jpg');
        $manager->persist($jeu27);

        $detail27 = new Detail();

        $detail27->setLibelle("Tour à dés médiévale");
        $detail27->setPrix(48.90);
        $detail27->setImage('illu27.jpg');
        $detail27->setDescription("test detail6");
        $manager->persist($detail27);

        $jeu28 = new Produit();

        $jeu28->setLibelle("Tour de dés Dice tower Active");
        $jeu28->setPrix(39);
        $jeu28->setImage('illu28.jpg');
        $manager->persist($jeu28);

        $detail28 = new Detail();

        $detail28->setLibelle("Tour de dés Dice tower Active");
        $detail28->setPrix(39);
        $detail28->setImage('illu28.jpg');
        $detail28->setDescription("test detail28");
        $manager->persist($detail28);

        $jeu29 = new Produit();

        $jeu29->setLibelle("DND Dice Tower pour les jeux de rôle");
        $jeu29->setPrix(71.75);
        $jeu29->setImage('illu29.jpg');
        $manager->persist($jeu29);

        $detail29 = new Detail();

        $detail29->setLibelle("DND Dice Tower pour les jeux de rôle");
        $detail29->setPrix(71.75);
        $detail29->setImage('illu29.jpg');
        $detail29->setDescription("test detail29");
        $manager->persist($detail29);

        $jeu30 = new Produit();

        $jeu30->setLibelle("Alien - Écran");
        $jeu30->setPrix(25);
        $jeu30->setImage('illu30.jpg');
        $manager->persist($jeu30);

        $detail30 = new Detail();

        $detail30->setLibelle("Alien - Écran");
        $detail30->setPrix(25);
        $detail30->setImage('illu30.jpg');
        $detail30->setDescription("test detail30");
        $manager->persist($detail30);

        $jeu31 = new Produit();

        $jeu31->setLibelle("Aquablue - Écran");
        $jeu31->setPrix(25);
        $jeu31->setImage('illu31.jpg');
        $manager->persist($jeu31);

        $detail31 = new Detail();

        $detail31->setLibelle("Aquablue - Écran");
        $detail31->setPrix(25);
        $detail31->setImage('illu31.jpg');
        $detail31->setDescription("test detail31");
        $manager->persist($detail31);

        $jeu32 = new Produit();

        $jeu32->setLibelle("Warhammer Fantasy - Ecran et guide du meneur de jeu");
        $jeu32->setPrix(29.90);
        $jeu32->setImage('illu32.jpg');
        $manager->persist($jeu32);

        $detail32 = new Detail();

        $detail32->setLibelle("Warhammer Fantasy - Ecran et guide du meneur de jeu");
        $detail32->setPrix(29.90);
        $detail32->setImage('illu32.jpg');
        $detail32->setDescription("test detail32");
        $manager->persist($detail32);

        $jeu33 = new Produit();

        $jeu33->setLibelle("Chroniques Oubliées Fantasy - Ecran du MJ");
        $jeu33->setPrix(29.90);
        $jeu33->setImage('illu33.jpg');
        $manager->persist($jeu33);

        $detail33 = new Detail();

        $detail33->setLibelle("Chroniques Oubliées Fantasy - Ecran du MJ");
        $detail33->setPrix(29.90);
        $detail33->setImage('illu33.jpg');
        $detail33->setDescription("test detail33");
        $manager->persist($detail33);

        $jeu34 = new Produit();

        $jeu34->setLibelle("Runic Black & golden Velour Dice Bag");
        $jeu34->setPrix(7.50);
        $jeu34->setImage('illu34.jpg');
        $manager->persist($jeu34);

        $detail34 = new Detail();

        $detail34->setLibelle("Runic Black & golden Velour Dice Bag");
        $detail34->setPrix(7.50);
        $detail34->setImage('illu34.jpg');
        $detail34->setDescription("test detail34");
        $manager->persist($detail34);

        $jeu35 = new Produit();

        $jeu35->setLibelle("Sword & Sorcery – Critical Hits Bag (Black)");
        $jeu35->setPrix(5.95);
        $jeu35->setImage('illu35.jpg');
        $manager->persist($jeu35);

        $detail35 = new Detail();

        $detail35->setLibelle("Sword & Sorcery – Critical Hits Bag (Black)");
        $detail35->setPrix(5.95);
        $detail35->setImage('illu35.jpg');
        $detail35->setDescription("test detail35");
        $manager->persist($detail35);

        $jeu36 = new Produit();

        $jeu36->setLibelle("Sword & Sorcery – Critical Hits Bag (Purple)");
        $jeu36->setPrix(5.95);
        $jeu36->setImage('illu36.jpg');
        $manager->persist($jeu36);

        $detail36 = new Detail();

        $detail36->setLibelle("Sword & Sorcery – Critical Hits Bag (Purple)");
        $detail36->setPrix(5.95);
        $detail36->setImage('illu36.jpg');
        $detail36->setDescription("test detail36");
        $manager->persist($detail36);

        $jeu37 = new Produit();

        $jeu37->setLibelle("Petite Bourse à Fond Plat");
        $jeu37->setPrix(1.95);
        $jeu37->setImage('illu37.jpg');
        $manager->persist($jeu37);

        $detail37 = new Detail();

        $detail37->setLibelle("Petite Bourse à Fond Plat");
        $detail37->setPrix(1.95);
        $detail37->setImage('illu37.jpg');
        $detail37->setDescription("test detail37");
        $manager->persist($detail37);

        $jeu38 = new Produit();

        $jeu38->setLibelle("Bourse à dés en cuir");
        $jeu38->setPrix(29.90);
        $jeu38->setImage('illu38.jpg');
        $manager->persist($jeu38);

        $detail38 = new Detail();

        $detail38->setLibelle("Bourse à dés en cuir");
        $detail38->setPrix(29.90);
        $detail38->setImage('illu38.jpg');
        $detail38->setDescription("test detail38");
        $manager->persist($detail38);

        $jeu39 = new Produit();

        $jeu39->setLibelle("Boite à dés en bois - Dragon & Wyverne");
        $jeu39->setPrix(44.90);
        $jeu39->setImage('illu39.jpg');
        $manager->persist($jeu39);

        $detail39 = new Detail();

        $detail39->setLibelle("Boite à dés en bois - Dragon & Wyverne");
        $detail39->setPrix(44.90);
        $detail39->setImage('illu39.jpg');
        $detail39->setDescription("test detail39");
        $manager->persist($detail39);



        $categorie1 = new Categorie();
        $categorie1->setNom("Jeu de rôle");
        $manager->persist($categorie1);

        $categorie2 = new Categorie();
        $categorie2->setNom("Set de dés");
        $manager->persist($categorie2);

        $categorie3 = new Categorie();
        $categorie3->setNom("Accessoire");
        $manager->persist($categorie3);

        $souscat1 = new Souscat();
        $souscat1->setNom("Jeu de rôle VF");
        $manager->persist($souscat1);

        $souscat2 = new Souscat();
        $souscat2->setNom("Jeu de rôle VO");
        $manager->persist($souscat2);

        $souscat3 = new Souscat();
        $souscat3->setNom("Dés en résine");
        $manager->persist($souscat3);

        $souscat4 = new Souscat();
        $souscat4->setNom("Dés en pierre");
        $manager->persist($souscat4);

        $souscat5 = new Souscat();
        $souscat5->setNom("Dés en métal");
        $manager->persist($souscat5);

        $souscat6 = new Souscat();
        $souscat6->setNom("Tour a dés");
        $manager->persist($souscat6);

        $souscat7 = new Souscat();
        $souscat7->setNom("Ecran");
        $manager->persist($souscat7);

        $souscat8 = new Souscat();
        $souscat8->setNom("Rangement");
        $manager->persist($souscat8);

        $categorie1->addSouscat($souscat1);
        $categorie1->addSouscat($souscat2);
        $categorie2->addSouscat($souscat3);
        $categorie2->addSouscat($souscat4);
        $categorie2->addSouscat($souscat5);
        $categorie3->addSouscat($souscat6);
        $categorie3->addSouscat($souscat7);
        $categorie3->addSouscat($souscat8);
        $souscat1->addProduit($jeu1);
        $souscat1->addProduit($jeu2);
        $souscat1->addProduit($jeu3);
        $souscat1->addProduit($jeu4);
        $souscat1->addProduit($jeu5);
        $souscat1->addProduit($jeu6);
        $souscat1->addProduit($jeu7);
        $souscat1->addProduit($jeu8);
        $souscat1->addProduit($jeu9);
        $souscat1->addProduit($jeu10);
        $souscat1->addProduit($jeu11);
        $souscat2->addProduit($jeu12);
        $souscat2->addProduit($jeu13);
        $souscat2->addProduit($jeu14);
        $souscat3->addProduit($jeu15);
        $souscat3->addProduit($jeu16);
        $souscat3->addProduit($jeu17);
        $souscat3->addProduit($jeu18);
        $souscat3->addProduit($jeu19);
        $souscat3->addProduit($jeu20);
        $souscat4->addProduit($jeu21);
        $souscat4->addProduit($jeu22);
        $souscat5->addProduit($jeu23);
        $souscat5->addProduit($jeu24);
        $souscat6->addProduit($jeu25);
        $souscat6->addProduit($jeu26);
        $souscat6->addProduit($jeu27);
        $souscat6->addProduit($jeu28);
        $souscat6->addProduit($jeu29);
        $souscat7->addProduit($jeu30);
        $souscat7->addProduit($jeu31);
        $souscat7->addProduit($jeu32);
        $souscat7->addProduit($jeu33);
        $souscat8->addProduit($jeu34);
        $souscat8->addProduit($jeu35);
        $souscat8->addProduit($jeu36);
        $souscat8->addProduit($jeu37);
        $souscat8->addProduit($jeu38);
        $souscat8->addProduit($jeu39);
        $jeu1->addDetail($detail1);
        $jeu2->addDetail($detail2);
        $jeu3->addDetail($detail3);
        $jeu4->addDetail($detail4);
        $jeu5->addDetail($detail5);
        $jeu6->addDetail($detail6);
        $jeu7->addDetail($detail7);
        $jeu8->addDetail($detail8);
        $jeu9->addDetail($detail9);
        $jeu10->addDetail($detail10);
        $jeu11->addDetail($detail11);
        $jeu12->addDetail($detail12);
        $jeu13->addDetail($detail13);
        $jeu14->addDetail($detail14);
        $jeu15->addDetail($detail15);
        $jeu16->addDetail($detail16);
        $jeu17->addDetail($detail17);
        $jeu18->addDetail($detail18);
        $jeu19->addDetail($detail19);
        $jeu20->addDetail($detail20);
        $jeu21->addDetail($detail21);
        $jeu22->addDetail($detail22);
        $jeu23->addDetail($detail23);
        $jeu24->addDetail($detail24);
        $jeu25->addDetail($detail25);
        $jeu26->addDetail($detail26);
        $jeu27->addDetail($detail27);
        $jeu28->addDetail($detail28);
        $jeu29->addDetail($detail29);
        $jeu30->addDetail($detail30);
        $jeu31->addDetail($detail31);
        $jeu32->addDetail($detail32);
        $jeu33->addDetail($detail33);
        $jeu34->addDetail($detail34);
        $jeu35->addDetail($detail35);
        $jeu36->addDetail($detail36);
        $jeu37->addDetail($detail37);
        $jeu38->addDetail($detail38);
        $jeu39->addDetail($detail39);



        $manager->flush();
    }
}
