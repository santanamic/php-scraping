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

namespace PHPScraping\Util;

class Load
{

    /**
     *
     * Load HTML
     *
     * @param string
     *
     */
     
    public static function loadHTML($url) : string
    {
        return file_get_contents($url, true);
    }
    
    /**
     *
     * Instance for \DomDocument and \DOMXPath
     *
     * @param string
     * @return \DOMXPath
     *
     */
    
    public static function loadInstance(string $html) : \DOMXPath
    {
        libxml_use_internal_errors(true);
        
        $dom = (new \DomDocument);
        
        $dom->loadHTML($html);
        
        return new \DOMXPath($dom);
    }
    
    /**
     *
     * Instance for \loadHTML and \LoadInstance
     *
     * @param string
     * @return \DOMXPath
     *
     */
    
    public static function getXPath(string $url) : \DOMXPath
    {
        $html = self::loadHTML($url);
        
        return self::loadInstance($html);
    }
}
