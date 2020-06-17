<?php

namespace App\Controllers;

class Listanime extends BaseController
{
    public function index()
    {
        $data['domain'] = "$this->link";
        $data['judul'] = ' - Anime List';

        echo view('templates/header.php', $data);
        echo view('templates/navbaroff.php', $data);
        echo view('list/index.php');
        echo view('templates/footer.php');
    }
}
