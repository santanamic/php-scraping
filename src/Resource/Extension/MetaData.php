<?php

declare(strict_types = 1);

/*
 * This file is part of santamic/php-scraping
 * Created by Willian Santana <williansantana@sapo.pt>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 *
 */
 
namespace PHPScraping\Resource\Extension;

trait MetaData
{
    public function getTitle()
    {
        $title = $this->xpath->query("//title");
        
        return $title->length > 0 ? $title->item(0)->nodeValue : null;
    }
    
    public function getDescription()
    {
        $description = $this->xpath->query("//meta[@name='description']/@content");

        return $description->length > 0 ? $description->item(0)->nodeValue : null;
    }
    
    public function getKeywords()
    {
        $keywords = $this->xpath->query("//meta[@name='keywords']/@content");

        return $keywords->length > 0 ? $keywords->item(0)->nodeValue : null;
    }
    
    public function getLinkNext()
    {
        $next = $this->xpath->query("//link[@rel='next']/@href");

        return $next->length > 0 ? $next->item(0)->nodeValue : null;
    }
    
    public function getLinkPrev()
    {
        $prev = $this->xpath->query("//link[@rel='prev']/@href");

        return $prev->length > 0 ? $prev->item(0)->nodeValue : null;
    }
}
