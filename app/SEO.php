<?php
    namespace App;
    use Artesaos\SEOTools\Facades\SEOMeta;
    
    class SEO {
        static function defaultSeoParams($title, $keywords, $desc) {
            $kw = explode(',' , $keywords);
            SEOMeta::setTitle($title);
            SEOMeta::addKeyword($kw);
            SEOMeta::setDescription($desc);
        }
    }