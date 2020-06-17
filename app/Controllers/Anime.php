<?php

namespace App\Controllers;

class Anime extends BaseController
{


    // ================================================================


    public function Mahou_Shoujo_Nante_Mou_Ii_Desukara()
    {
        $data['judul'] = ' - Mahou Shoujo Nante Mou Ii Desukara';
        $data['domain'] = "$this->link";


        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php', $data);
        echo view('anime/MahouShoujoNanteMouIiDesukara.php', $data);
        echo view('templates/footer.php');
    }
    public function SteinsGate()
    {
        $data['judul'] = ' - Steins Gate';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Steins Gate';


        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/SteinsGate.php', $data);
        echo view('templates/footer.php');
    }
    public function BloodC()
    {
        $data['judul'] = ' - BloodC';
        $data['domain'] = "$this->link";
        $data['anime'] = 'BloodC';



        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/BloodC.php', $data);
        echo view('templates/footer.php');
    }
    public function CorpseParty()
    {
        $data['judul'] = ' - CorpseParty';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Corpse Party';


        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/CorpseParty.php', $data);
        echo view('templates/footer.php');
    }
    public function DrStone()
    {
        $data['judul'] = ' - DrStone';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Dr. Stone';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/DrStone.php', $data);
        echo view('templates/footer.php');
    }
    public function Mahou_Shoujo_Madoka_Magica()
    {
        $data['judul'] = ' - Mahou Shoujo Madoka★Magica';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Mahou Shoujo Madoka★Magica';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/MadokaMagicia.php', $data);
        echo view('templates/footer.php');
    }
    public function Hyouka()
    {
        $data['judul'] = ' - Hyouka';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Hyouka';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/Hyouka.php', $data);
        echo view('templates/footer.php');
    }
    public function Domestic_Na_Kanojo()
    {
        $data['judul'] = ' - Domestic Na Kanojo';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Domestic Na Kanojo';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/DomesticNaKanojo.php', $data);
        echo view('templates/footer.php');
    }
    public function Gamers()
    {
        $data['judul'] = ' - Gamers';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Gamers';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/Gamers.php', $data);
        echo view('templates/footer.php');
    }
    public function Kakushigoto()
    {
        $data['judul'] = ' - Kakushigoto';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Kakushigoto';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/Kakushigoto.php', $data);
        echo view('templates/footer.php');
    }
    public function Tower_Of_God()
    {
        $data['judul'] = ' - Tower Of God';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Tower Of God';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/TowerOfGod.php', $data);
        echo view('templates/footer.php');
    }
    public function Kimetsu_No_Yaiba()
    {
        $data['judul'] = ' - Kimetsu No Yaiba';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Kimetsu No Yaiba';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/KimetsuNoYaiba.php', $data);
        echo view('templates/footer.php');
    }
    public function KaguyaSama()
    {
        $data['judul'] = ' - Kakushigoto';
        $data['domain'] = "$this->link";
        $data['anime'] = 'KaguyaSama';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/KaguyaSama.php', $data);
        echo view('templates/footer.php');
    }
    public function Kon()
    {
        $data['judul'] = ' - Kon';
        $data['domain'] = "$this->link";
        $data['anime'] = 'K-ON';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/Kon.php', $data);
        echo view('templates/footer.php');
    }
    public function MadeInAbyss()
    {
        $data['judul'] = ' - Made In Abyss';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Made In Abyss';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/MadeInAbyss.php', $data);
        echo view('templates/footer.php');
    }
    public function MahouShoujoSite()
    {
        $data['judul'] = ' - Mahou Shoujo Site';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Mahou Shoujo Site';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/MahouShoujoSite.php', $data);
        echo view('templates/footer.php');
    }
    public function Mushishi()
    {
        $data['judul'] = ' - Mushishi';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Mushishi';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/Mushishi.php', $data);
        echo view('templates/footer.php');
    }
    public function nichijou()
    {
        $data['judul'] = ' - Nichijou';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Nichijou';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/Nichijou.php', $data);
        echo view('templates/footer.php');
    }
    public function YoujoSenki()
    {
        $data['judul'] = ' - Youjo Senki';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Youjo Senki';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/YoujoSenki.php', $data);
        echo view('templates/footer.php');
    }
    public function Bofuri()
    {
        $data['judul'] = ' - Bofuri';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Bofuri';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/Bofuri.php', $data);
        echo view('templates/footer.php');
    }
    // ===
    public function Chihayafuru()
    {
        $data['judul'] = ' - ';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Chihayafuru';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/Chihayafuru.php', $data);
        echo view('templates/footer.php');
    }
    public function Cop_Craft()
    {
        $data['judul'] = ' - ';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Cop Craft';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/CopCraft.php', $data);
        echo view('templates/footer.php');
    }
    public function Dororo()
    {
        $data['judul'] = ' - ';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Dororo';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/Dororo.php', $data);
        echo view('templates/footer.php');
    }
    public function Fruits_Basket()
    {
        $data['judul'] = ' - ';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Fruits Basket';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/FruitsBasket.php', $data);
        echo view('templates/footer.php');
    }
    public function Isekai_Quartet()
    {
        $data['judul'] = ' - Isekai Quartet';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Isekai Quartet';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/IsekaiQuartet.php', $data);
        echo view('templates/footer.php');
    }
    public function Gotobun_No_Hanayome()
    {
        $data['judul'] = ' - Gotobun No Hanayome';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Gotobun No Hanayome';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/GotobunNoHanayome.php', $data);
        echo view('templates/footer.php');
    }
    public function Haikyuu()
    {
        $data['judul'] = ' - Haikyuu';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Haikyuu!!';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/Haikyuu.php', $data);
        echo view('templates/footer.php');
    }
    public function Kanata_No_Astra()
    {
        $data['judul'] = ' - Kanata No Astra';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Kanata No Astra';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/KanataNoAstra.php', $data);
        echo view('templates/footer.php');
    }
    public function Majutsushi_Orphen_Hagure_Tabi()
    {
        $data['judul'] = ' - Majutsushi Orphen Hagure Tabi';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Majutsushi Orphen Hagure Tabi';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/MajutsushiOrphenHagureTabi.php', $data);
        echo view('templates/footer.php');
    }
    public function Murenase_Seton_Gakuen()
    {
        $data['judul'] = ' - Murenase Seton Gakuen';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Murenase Seton Gakuen';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/MurenaseSetonGakuen.php', $data);
        echo view('templates/footer.php');
    }
    public function Yokusoku_No_Neverland()
    {
        $data['judul'] = ' - Yokusoku No Neverland';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Yokusoku No Neverland';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/YokusokuNoNeverland.php', $data);
        echo view('templates/footer.php');
    }
    public function Owari_No_Seraph()
    {
        $data['judul'] = ' - Owari No Seraph';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Owari No Seraph';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/OwariNoSeraph.php', $data);
        echo view('templates/footer.php');
    }
    public function Princess_Connect()
    {
        $data['judul'] = ' - Princess Connect Re Dive';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Princess Connect! Re:Dive';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/PrincessConnectReDive.php', $data);
        echo view('templates/footer.php');
    }
    public function Sounan_Desu_ka()
    {
        $data['judul'] = ' - Sounan Desu ka?';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Sounan Desu Ka?';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/SounanDesuka.php', $data);
        echo view('templates/footer.php');
    }
    public function SSSS_Gridman()
    {
        $data['judul'] = ' - SSSS Gridman';
        $data['domain'] = "$this->link";
        $data['anime'] = 'SSSS Gridman';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/SSSSGridman.php', $data);
        echo view('templates/footer.php');
    }
    public function Toaru_Kagaku_No_Railgun()
    {
        $data['judul'] = ' - Toaru Kagaku No Railgun';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Toaru Kagaku No Railgun';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/ToaruKagakuNoRailgun.php', $data);
        echo view('templates/footer.php');
    }
    public function Takagi_San()
    {
        $data['judul'] = ' - Takagi San';
        $data['domain'] = "$this->link";
        $data['anime'] = 'Takagi San';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/TakagiSan.php', $data);
        echo view('templates/footer.php');
    }
    public function To_LOVE_Ru()
    {
        $data['judul'] = ' - To LOVE Ru';
        $data['domain'] = "$this->link";
        $data['anime'] = 'To LOVE Ru';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php');
        echo view('anime/ToLOVERu.php', $data);
        echo view('templates/footer.php');
    }
}
