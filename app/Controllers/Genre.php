<?php

namespace App\Controllers;

class Genre extends BaseController
{
  public function index()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Genre';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre.php');
    // echo view('templates/footer.php');
  }
  public function Action()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Action';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/action.php');
    // echo view('templates/footer.php');
  }
  public function Adventure()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Adventure';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/adventure.php');
    // echo view('templates/footer.php');
  }
  public function Comedy()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Comedy';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/comedy.php');
    // echo view('templates/footer.php');
  }
  public function Demons()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Demons';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/demons.php');
    // echo view('templates/footer.php');
  }
  public function Drama()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Drama';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/drama.php');
    // echo view('templates/footer.php');
  }
  public function Ecchi()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Ecchi';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/ecchi.php');
    // echo view('templates/footer.php');
  }
  public function Fantasy()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Fantasy';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/fantasy.php');
    // echo view('templates/footer.php');
  }
  public function Game()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Game';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/game.php');
    // echo view('templates/footer.php');
  }
  public function Harem()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Harem';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/harem.php');
    // echo view('templates/footer.php');
  }
  public function Historical()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Historical';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/historical.php');
    // echo view('templates/footer.php');
  }
  public function Horror()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Horror';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/horror.php');
    // echo view('templates/footer.php');
  }
  public function Josei()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Josei';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/josei.php');
    // echo view('templates/footer.php');
  }
  public function Magic()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Magic';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/magic.php');
    // echo view('templates/footer.php');
  }
  public function Martial_Arts()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Martial Arts';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/martialarts.php');
    // echo view('templates/footer.php');
  }
  public function Mecha()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Mecha';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/meha.php');
    // echo view('templates/footer.php');
  }
  public function Militay()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Militay';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/military.php');
    // echo view('templates/footer.php');
  }
  public function Music()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Music';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/music.php');
    // echo view('templates/footer.php');
  }
  public function Mystey()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Mystery';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/mystery.php');
    // echo view('templates/footer.php');
  }
  public function Psychological()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Psychological';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/psychological.php');
    // echo view('templates/footer.php');
  }
  public function Parody()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Parody';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/parody.php');
    // echo view('templates/footer.php');
  }
  public function Police()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Police';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/police.php');
    // echo view('templates/footer.php');
  }
  public function Romance()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Romance';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/Romance.php');
    // echo view('templates/footer.php');
  }
  public function School()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - School';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/school.php');
    // echo view('templates/footer.php');
  }
  public function Samurai()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Samurai';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/samurai.php');
    // echo view('templates/footer.php');
  }
  public function Sci_Fi()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Sci_Fi';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/sci-fi.php');
    // echo view('templates/footer.php');
  }
  public function Seinen()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Seinen';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/seinen.php');
    // echo view('templates/footer.php');
  }
  public function Shoujo()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Shoujo';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/shoujo.php');
    // echo view('templates/footer.php');
  }
  public function Shoujo_Ai()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Shoujo_Ai';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/shoujo-ai.php');
    // echo view('templates/footer.php');
  }
  public function Shounen()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Shounen';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/shounen.php');
    // echo view('templates/footer.php');
  }
  public function Slice_Of_Life()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Slice Of Life';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/slice-of-life.php');
    // echo view('templates/footer.php');
  }
  public function Sports()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Sports';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/sports.php');
    // echo view('templates/footer.php');
  }
  public function Space()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Space';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/space.php');
    // echo view('templates/footer.php');
  }
  public function Super_Power()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Super Power';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/super-power.php');
    // echo view('templates/footer.php');
  }
  public function Supernatural()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Supernatural';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/supernatural.php');
    // echo view('templates/footer.php');
  }
  public function Thriller()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Thriller';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/thriller.php');
    // echo view('templates/footer.php');
  }
  public function Vampire()
  {
    $data['domain'] = "$this->link";
    $data['judul'] = ' - Vampire';
    echo view('templates/header.php', $data);
    echo view('templates/navbaroff.php', $data);
    echo view('genre/vampire.php');
    // echo view('templates/footer.php');
  }
}
