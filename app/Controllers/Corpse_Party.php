<?php

namespace App\Controllers;

class Corpse_Party extends BaseController
{

    public function Episode_1()
    {
        $data['judul'] = ' - Corpse Party';
        $data['episode'] = 'Episode 1';
        $data['domain'] = "$this->link";
        $data['video'] = '<h1>BELUM TERSEDIA</h1>';

        echo view('templates/header.php', $data);
        echo view('templates/navbaron.php', $data);
        echo view('stream/anime.php', $data);
        echo view('templates/footer.php');
    }
    public function Episode_2()
    {
        $data['judul'] = ' - Corpse Party';
        $data['episode'] = 'Episode 2';
        $data['domain'] = "$this->link";
        $data['video'] = '<h1>BELUM TERSEDIA</h1>';


        echo view('templates/header.php', $data);
        echo view('templates/navbaron.php', $data);
        echo view('stream/anime.php', $data);
        echo view('templates/footer.php');
    }
    public function Episode_3()
    {
        $data['judul'] = ' - Corpse Party';
        $data['episode'] = 'Episode 3';
        $data['domain'] = "$this->link";
        $data['video'] = '<h1>BELUM TERSEDIA</h1>';

        echo view('templates/header.php', $data);
        echo view('templates/navbaron.php', $data);
        echo view('stream/anime.php', $data);
        echo view('templates/footer.php');
    }
    public function Episode_4()
    {
        $data['judul'] = ' - Corpse Party';
        $data['episode'] = 'Episode 4';
        $data['domain'] = "$this->link";
        $data['video'] = '<h1>BELUM TERSEDIA</h1>';

        echo view('templates/header.php', $data);
        echo view('templates/navbaron.php', $data);
        echo view('stream/anime.php', $data);
        echo view('templates/footer.php');
    }
}
