<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public $fName = 'Gertjan';
// voornaam ophalen uit login pagina
    public $lName = 'Hiel';
// achternaam ophalen uit login pagina
    public function makeUsername($fName, $lName)
    {
        return $name = $fName . " " . $lName;
    }
// name = first name + last name -> username
    public $mail = 'gertjanhiel99@gmail.com';
// email ophalen uit login pagina
    public function fillUserArray($name, $mail)
    {
        $user['full name'] = $name;
        $user['mail'] = $mail;
        return $user;
    }


// --- Pages functions ---

    public function getHome()
    {
        return view('pages.home');
    }

    public function getAbout()
    {
        $name = $this->makeUsername('Gertjan', 'Hiel');
        $user = $this->fillUserArray($name, 'Gertjan@gmail.com');
        // --- Momenteel hard coded ingesteld op mijn naam, wordt later nog aangepast naargelang de ingelogde user ---
        return view('pages.about')
            ->with('user', $user);
    }

    public function getContact()
    {
        $name = $this->makeUsername('Gertjan', 'Hiel');
        $user = $this->fillUserArray($name, 'Gertjan@gmail.com');
        // idem getAbout()
        return view('pages.contact')
        ->with('user', $user);
    }

    public function getWelcome()
    {
        $name = $this->makeUsername('Gertjan', 'Hiel');
        $user = $this->fillUserArray($name, 'Gertjan@gmail.com');
        // idem getAbout()
        return view('pages.welcome')
        ->with('user', $user);
    }

    // public function getCreate()
    // {
    //     $name = $this->makeUsername('Gertjan', 'Hiel');
    //     $user = $this->fillUserArray($name, 'Gertjan@gmail.com');
    //     // idem getAbout()
    //     return view('posts.create')
    //     ->with('user', $user);
    // }
}




