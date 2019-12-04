<?php
    namespace App;
    use Artesaos\SEOTools\Facades\SEOMeta;
    use Artesaos\SEOTools\Facades\JsonLd;
    
    
    class SEO {
        static function defaultSeoParams($title, $keywords, $desc, $image) {
            $kw = explode(',' , $keywords);
            SEOMeta::setTitle($title);
            SEOMeta::addKeyword($kw);
            SEOMeta::setDescription($desc);

            JsonLd::setTitle($title);
            JsonLd::setDescription($desc);
            JsonLd::addImage("/storage/{$image}");
        }
    }