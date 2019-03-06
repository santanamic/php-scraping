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

namespace PHPScraping\Resource;

abstract class AbstractBuilder
{
    
    /**
     *
     * Attribute containing the base object
     *
     * @var \DOMXPath
     *
     */
    
    protected $xpath;
    
    
    public function __construct(\DOMXPath $xpath)
    {
        $this->xpath = $xpath;
    }
}
