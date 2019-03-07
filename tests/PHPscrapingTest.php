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

namespace PHPscrapingTest;

class PHPscrapingTest extends \PHPUnit\Framework\TestCase
{
    /**
     *
     * @dataProvider additionOutputFactoryProvider
     *
     */
     
    public function testOutputFactory($url, $description, $keywords, $title, $linkNext, $linkPrev)
    {
        
    /**
     *
     * Instance for class builder
     *
     */
     
        $factory = (new \PHPScraping\Factory)->create($url);
        
    /**
     *
     * Parameter for test
     *
     */
        
        $parameter = [
        
            "DESCRIPTION" => [$factory->getDescription(), $description],
        
            "KEYWORDS"    => [$factory->getKeywords(), $keywords],
        
            "TITLE"       => [$factory->getTitle(), $title],
        
            "LINKNEXT"    => [$factory->getLinkNext(), $linkNext],
        
            "LINKPREV"    => [$factory->getLinkPrev(), $linkPrev]
        
        ];
        
    /**
     *
     * Output in command line
     *
     */
        
        print("\n\n TEST FOR URL: $url\n");
        
        foreach ($parameter as $key => $value) {
            print("\n\n $key VALUE GOT: $value[0]\n\n $key EXPECTED VALUE: $value[1]\n\n");
            
           print($value[0] === $value[1] ? "\n [SUCCESS] \n\n" : "\n [FAIL] \n\n");
    
    /**
     *
     * Checks whether the output of the class matches the values of the parameter
     *
     */
            
            $this->assertEquals($value[0], $value[1]);
        }

        print("\n=============================================\n");
    }

    /**
     *
     * Method loop
     *
     */
     
    public function additionOutputFactoryProvider()
    {
        
        return [
            
            [
                'https://yugioh.fandom.com/pt-br/wiki/Categoria:Cards_de_Monstro?from=Ansatsu',
                'Lista de Cards de Monstro do TCG.',
                'Yu-Gi-Oh! Wiki,ptyugioh,Categoria:Cards de Monstro,Cards de Monstro',
                'Categoria:Cards de Monstro | Yu-Gi-Oh! Wiki | FANDOM powered by Wikia',
                'https://yugioh.fandom.com/pt-br/wiki/Categoria:Cards_de_Monstro?from=Battle+Ox',
                'https://yugioh.fandom.com/pt-br/wiki/Categoria:Cards_de_Monstro'
            ],
            
            [
                'https://naruto.fandom.com/wiki/Category:Chapters',
                'A listing of all the chapters in the manga series with articles on them in the Narutopedia. This category uses the form Chapter.',
                'Narutopedia,naruto,Category:Chapters,Chapter',
                'Category:Chapters | Narutopedia | FANDOM powered by Wikia',
                'https://naruto.fandom.com/wiki/Category:Chapters?from=I%27m+a+Ninja%21%21',
                null
            ],
            
            [
            
                'https://pokemon.fandom.com/wiki/Pok%C3%A9mon_Wiki',
                'The Pokémon Wiki is an encyclopedia about Pokémon that anyone can contribute to. Games, anime series, manga volumes, and more!',
                'Pokémon Wiki,pokemon,Pokémon Wiki,Generation VII Pokémon,Pokémon with Alola formes,Ultra Beasts,Characters from Alola,Trial Captains,Kahuna,Legendary Pokémon,Starter Pokémon,Legendary Pokémon,Melemele Island',
                'Pokémon Wiki | FANDOM powered by Wikia',
                null,
                null
            
            ],
            
            [
                'https://simpsons.fandom.com/wiki/Category:Characters', 'This is the main category page for all of the characters that have appeared in The Simpsons and its related stories.',
                'Simpsons Wiki,simpsons,Category:Characters',
                'Category:Characters | Simpsons Wiki | FANDOM powered by Wikia',
                'https://simpsons.fandom.com/wiki/Category:Characters?from=Armstrong%2C+Bud%0ABud+Armstrong',
                null
                
            ]
        ];
    }
}
