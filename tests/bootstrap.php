<?php 

require_once __DIR__ . '/../vendor/autoload.php';

use PHPScraping\Factory;

$FactoryBuilder = (new Factory);
$Factory = $FactoryBuilder->create('https://naruto.fandom.com/wiki/Category:Chapters');

$array = [
            'https://yugioh.fandom.com/pt-br/wiki/Categoria:Cards_de_Monstro?from=Ansatsu' => ['Lista de Cards de Monstro do TCG.', 'Yu-Gi-Oh! Wiki,ptyugioh,Categoria:Cards de Monstro,Cards de Monstro', 'Categoria:Cards de Monstro | Yu-Gi-Oh! Wiki | FANDOM powered by Wikia', 'https://yugioh.fandom.com/pt-br/wiki/Categoria:Cards_de_Monstro?from=Battle+Ox', 'https://yugioh.fandom.com/pt-br/wiki/Categoria:Cards_de_Monstro'],
            'https://naruto.fandom.com/wiki/Category:Chapters' => ['A listing of all the chapters in the manga series with articles on them in the Narutopedia. This category uses the form Chapter.', 'Narutopedia,naruto,Category:Chapters,Chapter', 'Category:Chapters | Narutopedia | FANDOM powered by Wikia', 'https://naruto.fandom.com/wiki/Category:Chapters?from=I%27m+a+Ninja%21%21', null],
            'https://pokemon.fandom.com/wiki/Pok%C3%A9mon_Wiki' => ['The Pokémon Wiki is an encyclopedia about Pokémon that anyone can contribute to. Games, anime series, manga volumes, and more!', 'Pokémon Wiki,pokemon,Pokémon Wiki,Generation VII Pokémon,Pokémon with Alola formes,Ultra Beasts,Characters from Alola,Trial Captains,Kahuna,Legendary Pokémon,Starter Pokémon,Legendary Pokémon,Melemele Island', 'Pokémon Wiki | FANDOM powered by Wikia', null, null],
            'https://simpsons.fandom.com/wiki/Category:Characters' => ['This is the main category page for all of the characters that have appeared in The Simpsons and its related stories.', 'Simpsons Wiki,simpsons,Category:Characters', 'Category:Characters | Simpsons Wiki | FANDOM powered by Wikia', 'https://simpsons.fandom.com/wiki/Category:Characters?from=Armstrong%2C+Bud%0ABud+Armstrong', null]
        ];

?>

<html>

	<head>
		
		<title>Teste</title>
		
	<head>
	
	<body>
		
		<pre>
		
			<?php 
			
	$factory = (new Factory);
		
		foreach ($array as $k_ => $v_) {
			
			$PHPscraping = $factory->create($k_);
			
			$metaDescription = $v_[0];
			$metaKeywords    = $v_[1];
			$metaTitle       = $v_[2];
			$metaLinkNext    = $v_[3];
			$metaLinkPrev    = $v_[4];
			
			echo $metaTitle;
			echo $PHPscraping->getTitle();
			

		}
			
			var_dump( $array['https://yugioh.fandom.com/pt-br/wiki/Categoria:Cards_de_Monstro?from=Ansatsu'][0] ); 
			var_dump( $Factory->getDescription() ); 
			var_dump( $Factory->getKeywords() ); 
			var_dump( $Factory->getTitle() ); 
			var_dump( $Factory->getLinkNext() ); 
			var_dump( $Factory->getLinkPrev() ); 
			
			
			?>
		
		</pre>
		
	</body>

</html>