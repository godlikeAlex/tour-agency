<?php
    namespace App;
    use Artesaos\SEOTools\Facades\SEOMeta;
    use Artesaos\SEOTools\Facades\JsonLd;
    use Artesaos\SEOTools\Facades\OpenGraph;
    use Artesaos\SEOTools\Facades\TwitterCard;
    
    class SEO {
        static function defaultSeoParams($title, $keywords, $desc, $image = '/images/head.svg', $isArticle = true) {
            $kw = explode(',' , $keywords);
            TwitterCard::addValue('card', 'summary_large_image');
            SEOMeta::setTitle($title);
            SEOMeta::addKeyword($kw);
            SEOMeta::setDescription($desc);

            JsonLd::setTitle($title);
            JsonLd::setDescription($desc);
            JsonLd::addImage(url($image));
            
            OpenGraph::setTitle($title);
            OpenGraph::addProperty('site_name', 'Central Asia');

            if($isArticle) {
              OpenGraph::addProperty('type', 'article');
              JsonLd::setType('Article');
            }
          OpenGraph::setDescription($desc);

          if($image === '/images/head.svg') {
            OpenGraph::addImage(url($image) , ['height' => 505, 'width' => 895]);
            view()->share('seoimage', url($image));
          } else {
            view()->share('seoimage', url("/storage/{$image}"));
            OpenGraph::addImage(url("/storage/{$image}") , ['height' => 505, 'width' => 895]);
          }
        }
    }