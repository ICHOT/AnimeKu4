<?php

namespace App\Controllers;

class Animeku extends BaseController
{
    public function Index()
    {
        $data['domain'] = "$this->link";
        $data['judul'] = '';
        // ANIME ON GOING //
        $data['ongoing1'] = "$this->link/anime/Mahou_Shoujo_Nante_Mou_Ii_Desukara";
        $data['ongambar1'] = base_url('assets/gambar/ANIME/Mahou_Shoujo_Nante_Mou_Ii_Desukara.jpg');

        $data['ongoing2'] = "$this->link.";
        $data['ongambar2'] = base_url('assets/gambar/ANIME/DarwinGame.jpg');

        $data['ongoing3'] = "$this->link.";
        $data['ongambar3'] = base_url('assets/gambar/ANIME/BLOOD-C.png');

        $data['ongoing4'] = "$this->link.";
        $data['ongambar4'] = base_url('assets/gambar/ANIME/CorpseParty.jpg');

        $data['ongoing5'] = "$this->link.";
        $data['ongambar5'] = base_url('assets/gambar/ANIME/Dr_Stone.jpg');

        $data['ongoing6'] = "$this->link.";
        $data['ongambar6'] = base_url('assets/gambar/ANIME/Junko.png');

        $data['ongoing7'] = "$this->link.";
        $data['ongambar7'] = base_url('assets/gambar/ANIME/Madoka.jpg');

        $data['ongoing8'] = "$this->link.";
        $data['ongambar8'] = base_url('assets/gambar/ANIME/SAO.jpg');

        $data['ongoing9'] = "$this->link.";
        $data['ongambar9'] = base_url('assets/gambar/ANIME/DarwinGame.jpg');

        $data['ongoing10'] = "$this->link.";
        $data['ongambar10'] = base_url('assets/gambar/ANIME/BOFURI.png');

        $data['ongoing11'] = "$this->link.";
        $data['ongambar11'] = base_url('assets/gambar/ANIME/Azur-Lane.jpg');

        $data['ongoing12'] = "$this->link.";
        $data['ongambar12'] = base_url('assets/gambar/ANIME/BLOOD-C.png');

        $data['ongoing13'] = "$this->link.";
        $data['ongambar13'] = base_url('assets/gambar/ANIME/Madoka.jpg');

        $data['ongoing14'] = "$this->link.";
        $data['ongambar14'] = base_url('assets/gambar/ANIME/Junko.png');

        $data['ongoing15'] = "$this->link.";
        $data['ongambar15'] = base_url('assets/gambar/ANIME/Dr_Stone.jpg');


        // ANIME REKOMENDASI ADMIN //

        $data['rekomendasi1'] = "$this->link/anime/Mahou_Shoujo_Nante_Mou_Ii_Desukara";
        $data['rgambar1'] = base_url('assets/gambar/ANIME/Mahou_Shoujo_Nante_Mou_Ii_Desukara.jpg');

        $data['rekomendasi2'] = "$this->link/anime/SteinsGate";
        $data['rgambar2'] = base_url('assets/gambar/ANIME/STEINSGATE.png');

        $data['rekomendasi3'] = "$this->link/anime/BloodC";
        $data['rgambar3'] = base_url('assets/gambar/ANIME/BloodC.jpg');

        $data['rekomendasi4'] = "$this->link/anime/CorpseParty";
        $data['rgambar4'] = base_url('assets/gambar/ANIME/CorpseParty.jpg');

        $data['rekomendasi5'] = "$this->link/anime/DrStone";
        $data['rgambar5'] = base_url('assets/gambar/ANIME/Dr_Stone.jpg');

        $data['rekomendasi6'] = "$this->link/anime/Kon";
        $data['rgambar6'] = base_url('assets/gambar/ANIME/Kon.jpg');

        $data['rekomendasi7'] = "$this->link/anime/Mahou_Shoujo_Madoka_Magica";
        $data['rgambar7'] = base_url('assets/gambar/ANIME/Madoka.jpg');

        $data['rekomendasi8'] = "$this->link/anime/Hyouka";
        $data['rgambar8'] = base_url('assets/gambar/ANIME/Hyouka.jpg');

        $data['rekomendasi9'] = "$this->link/anime/YoujoSenki";
        $data['rgambar9'] = base_url('assets/gambar/ANIME/YoujoSenki.jpg');

        $data['rekomendasi10'] = "$this->link/anime/Bofuri";
        $data['rgambar10'] = base_url('assets/gambar/ANIME/BOFURI.png');

        $data['rekomendasi11'] = "$this->link/anime/MadeInAbyss";
        $data['rgambar11'] = base_url('assets/gambar/ANIME/MadeInAbyss.png');

        $data['rekomendasi12'] = "$this->link/anime/Kanata_No_Astra";
        $data['rgambar12'] = base_url('assets/gambar/ANIME/Kanatanoastra.jpg');

        $data['rekomendasi13'] = "$this->link/anime/Mushishi";
        $data['rgambar13'] = base_url('assets/gambar/ANIME/Mushishi.jpg');

        $data['rekomendasi14'] = "$this->link/anime/MahouShoujoSite";
        $data['rgambar14'] = base_url('assets/gambar/ANIME/mahousoujosite.jpg');

        $data['rekomendasi15'] = "$this->link/anime/Gamers";
        $data['rgambar15'] = base_url('assets/gambar/ANIME/Gamers.jpg');


        echo view('templates/header.php', $data);
        echo view('templates/navbar.php', $data);
        echo view('index.php', $data);
        echo view('random-anime.php', $data);
        echo view('templates/footer.php');
    }
}
