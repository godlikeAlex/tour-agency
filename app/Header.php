<?php
    namespace App;
    
    class Header {
        static function dataHeader() 
        {
            $drevniyMir = People::where('category', 'drevniy-mir')->orderBy('created_at','desc')->take(4)->get();
            $srednieVeka = People::where('category', 'srednie-veka')->orderBy('created_at','desc')->take(4)->get();
            $novoeVremya = People::where('category', 'novoe-vremya')->orderBy('created_at','desc')->take(4)->get();
            $sovremenost = People::where('category', 'sovremenost')->orderBy('created_at','desc')->take(4)->get();
        
            return [
                "people" => [
                    "drevniyMir" => $drevniyMir,
                    "srednieVeka" => $srednieVeka,
                    "novoeVremya" => $novoeVremya,
                    "sovremenost" => $sovremenost,
                ]
            ];
        }
    }