<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\MethodsAlbumInterface;
class AlbumController extends Controller implements MethodsAlbumInterface
{

    public function getAlbums(){

        // Llamar a la API JSONPlaceholder
        $response = file_get_contents('https://jsonplaceholder.typicode.com/albums');
        $albums = json_decode($response, true);
        return view('welcome', ['albums' => $albums]);

    }

    public function getPhotos($idAlbum){
        #armamos url

        $url ="https://jsonplaceholder.typicode.com/albums/".$idAlbum."/photos";
        // Llamar a la API JSONPlaceholder
         $response = file_get_contents($url);
         $photos = json_decode($response, true);
         return view('album', ['photos' => $photos]);

    }

}
