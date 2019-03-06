<?php

declare(strict_types=1);

/*
 * This file is part of santamic/php-scraping
 * Created by Willian Santana <williansantana@sapo.pt>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informa�ao dos direitos autorais e de licen�a voce deve ler o arquivo
 * LICENSE que � distribu�do com este c�digo-fonte.
 * Para obtener la informaci�n de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el c�digo fuente.
 *
 */
 
namespace PHPScraping;

use PHPScraping\Util\Load;
use PHPScraping\Exception\InvalidArgumentException;
use PHPScraping\Resource\Builder;

class Factory
{
    
    /**
     *
     * Builder method. The URL is passed to the Resource Builder
     *
     * @param string
     *
     */
    
    public function create($url) : Builder
    {
        return new Builder(Load::getXPath($url));
    }
}
