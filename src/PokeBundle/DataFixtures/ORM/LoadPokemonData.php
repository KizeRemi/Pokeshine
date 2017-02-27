<?php
Namespace PokeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PokeBundle\Entity\Pokemon;

class LoadPokemonData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
    	/* Tableau de tous les pokemon à insérer */
	    $pokemons = array(
		    array(    
		      	'name' => 'Bulbizarre',
		      	'number' => 1,
		      	'description' => 'La graine sur le dos de Bulbizarre est une réserve de nutriments. Il la fait doucement pousser en absorbant les rayons du soleil, et emmagasine de l\'énergie dedans en vue de son évolution. S\'il dépense trop souvent son énergie, il n\'évoluera pas car l\'ouverture de son bulbe dépend de ses réserves de nutriments.',
		    ),
		    array(
		      	'name' => 'Herbizarre',
		      	'number' => 2,
		      	'description' => 'Le bulbe sur le dos de Herbizarre a éclos, dévoilant ainsi une fleur fermée. Plus il passe de temps au soleil, plus sa fleur se prépare à s\'ouvrir, et quelques temps avant son évolution, il dégage une douce odeur fruitée. Attention à ses Tranch\'herbes et à ses Fouets lianes.',
		    ),
		    array(
		      	'name' => 'Florizarre',
		      	'number' => 3,
		      	'description' => 'Comme un panneau solaire, les pétales de la fleur de Florizarre transforment les rayons du soleil en énergie. Il est maître d\'un troupeau de Herbizarre et de Bulbizarre, qu\'il garde férocement. L\'odeur se dégageant de sa fleur est exquise, mais mieux vaut ne pas s\'approcher d\'un Florizarre sauvage et de sa horde.',
		    ),
            array(
		      	'name' => 'Salamèche',
		      	'number' => 4,
		      	'description' => 'La flamme qui brûle au bout de sa queue indique l’humeur de ce Pokémon. Elle vacille lorsque Salamèche est content. En revanche, lorsqu’il s’énerve, la flamme prend de l’importance et brûle plus ardemment.',
		    ),
            array(
		      	'name' => 'Reptincel',
		      	'number' => 5,
		      	'description' => '	Reptincel lacère ses ennemis sans pitié grâce à ses griffes acérées. S’il rencontre un ennemi puissant, il devient agressif et la flamme au bout de sa queue s’embrase et prend une couleur bleu clair.',
		    ),
            array(
		      	'name' => 'Dracaufeu',
		      	'number' => 6,
		      	'description' => 'Dracaufeu parcourt les cieux pour trouver des adversaires à sa mesure. Il crache de puissantes flammes capables de faire fondre n’importe quoi. Mais il ne dirige jamais son souffle destructeur vers un ennemi plus faible.',
		    ),
            array(
		      	'name' => 'Carapuce',
		      	'number' => 7,
		      	'description' => 'Les bébés Carapuce sont extrêmement vulnérables à la naissance, car leur carapace est toute molle. C\'est pourquoi ils boivent régulièrement une eau riche en minéraux. Elle devient ensuite dure comme de la pierre. S\'il est menacé, il se réfugie à l\'intérieur et envoie un jet d\'eau à son agresseur.',
		    ),
            array(
		      	'name' => 'Carabaffe',
		      	'number' => 8,
		      	'description' => 'Carabaffe a une large queue recouverte d’une épaisse fourrure. Elle devient de plus en plus foncée avec l’âge. Les éraflures sur la carapace de ce Pokémon témoignent de son expérience au combat.',
		    ),
             array(
		      	'name' => 'Tortank',
		      	'number' => 9,
		      	'description' => 'Tortank dispose de canons à eau émergeant de sa carapace. Ils sont très précis et peuvent envoyer des balles d’eau capables de faire mouche sur une cible située à plus de 5 m.',
		    ),
            array(
		      	'name' => 'Chenipan',
		      	'number' => 10,
		      	'description' => 'Chenipan a un appétit d’ogre. Il peut engloutir des feuilles plus grosses que lui. Les antennes de ce Pokémon dégagent une odeur particulièrement entêtante.',
		    ),
            array(
		      	'name' => 'Chrysacier',
		      	'number' => 11,
		      	'description' => 'La carapace protégeant ce Pokémon est dure comme du métal. Chrysacier ne bouge pas beaucoup. Il reste immobile pour préparer les organes à l’intérieur de sa carapace en vue d’une évolution future.',
		    ),
            array(
		      	'name' => 'Papilusion',
		      	'number' => 12,
		      	'description' => 'Papilusion est très doué pour repérer le délicieux nectar qu’il butine dans les fleurs. Il peut détecter, extraire et transporter le nectar de fleurs situées à plus de 1 km de son nid.',
		    ),
            array(
		      	'name' => 'Aspicot',
		      	'number' => 13,
		      	'description' => 'L’odorat d’Aspicot est extrêmement développé. Il lui suffit de renifler ses feuilles préférées avec son gros appendice nasal pour les reconnaître entre mille.',
		    ),
            array(
		      	'name' => 'Coconfort',
		      	'number' => 14,
		      	'description' => 'Coconfort est la plupart du temps immobile et reste accroché à un arbre. Cependant, intérieurement, il est très actif, car il se prépare pour sa prochaine évolution. En touchant sa carapace, on peut sentir sa chaleur.',
		    ),
            array(
		      	'name' => 'Dardargnan',
		      	'number' => 15,
		      	'description' => 'Dardargnan est extrêmement possessif. Il vaut mieux ne pas toucher son nid si on veut éviter d’avoir des ennuis. Lorsqu’ils sont en colère, ces Pokémon attaquent en masse.',
		    ),
            array(
		      	'name' => 'Roucool',
		      	'number' => 16,
		      	'description' => 'Roucool a un excellent sens de l’orientation. Il est capable de retrouver son nid sans jamais se tromper, même s’il est très loin de chez lui et dans un environnement qu’il ne connaît pas.',
		    ),
            array(
		      	'name' => 'Roucoups',
		      	'number' => 17,
		      	'description' => 'Roucoups utilise une vaste surface pour son territoire. Ce Pokémon surveille régulièrement son espace aérien. Si quelqu’un pénètre sur son territoire, il corrige l’ennemi sans pitié d’un coup de ses terribles serres.',
		    ),
            array(
		      	'name' => 'Roucarnage',
		      	'number' => 18,
		      	'description' => 'Ce Pokémon est doté d’un plumage magnifique et luisant. Bien des Dresseurs sont captivés par la beauté fatale de sa huppe et décident de choisir Roucarnage comme leur Pokémon favori.',
		    ),
            array(
		      	'name' => 'Rattata',
		      	'number' => 19,
		      	'description' => 'Rattata est extrêmement prudent. Même lorsqu’il est endormi, il fait pivoter ses oreilles pour écouter autour de lui. En ce qui concerne son habitat, il n’est vraiment pas difficile. Il peut faire son nid n’importe où.',
		    ),
            array(
		      	'name' => 'Rattatac',
		      	'number' => 20,
		      	'description' => 'Les crocs robustes de Rattatac poussent constamment. Pour éviter qu’ils raclent le sol, il se fait les dents sur des cailloux ou des troncs d’arbre. Il lui arrive même de ronger les murs des maisons.',
		    ),
            array(
		      	'name' => 'Piafabec',
		      	'number' => 21,
		      	'description' => 'Piafabec crie tellement fort qu’il peut être entendu à 1 km de distance. Ces Pokémon se préviennent d’un danger en entonnant une mélopée très aiguë, qu’ils se renvoient les uns les autres, comme un écho.',
		    ),
            array(
		      	'name' => 'Rapasdepic',
		      	'number' => 22,
		      	'description' => 'On reconnaît un Rapasdepic à son long cou et à son bec allongé. Ces attributs lui permettent d’attraper facilement ses proies dans la terre ou dans l’eau. Il bouge son bec long et fin avec une grande agilité.',
		    ),
            array(
		      	'name' => 'Abo',
		      	'number' => 23,
		      	'description' => 'Abo s’enroule en spirale pour dormir. Sa tête reste relevée de telle sorte que cette position lui permette de réagir rapidement si une menace survenait.',
		    ),
            array(
		      	'name' => 'Arbok',
		      	'number' => 24,
		      	'description' => 'Ce Pokémon doté d’une force extraordinaire peut étrangler ses proies avec son corps. Il peut même écraser des tonneaux métalliques. Une fois sous l’étreinte d’Arbok, il est impossible de lui échapper.',
		    ),
            array(
		      	'name' => 'Pikachu',
		      	'number' => 25,
		      	'description' => 'Ce Pokémon dispose de petites poches dans les joues pour stocker de l’électricité. Elles semblent se charger pendant que Pikachu dort. Il libère parfois un peu d’électricité lorsqu’il n’est pas encore bien réveillé.',
		    ),
            array(
		      	'name' => 'Raichu',
		      	'number' => 26,
		      	'description' => 'Ce Pokémon libère un faible champ électrique tout autour de son corps, ce qui le rend légèrement lumineux dans le noir. Raichu plante sa queue dans le sol pour évacuer de l’électricité.',
		    ),
            array(
		      	'name' => 'Sabelette',
		      	'number' => 27,
		      	'description' => '	Sabelette a une peau très sèche et extrêmement dure. Ce Pokémon peut s’enrouler sur lui-même pour repousser les attaques. La nuit, il s’enterre dans le sable du désert pour dormir.',
		    ),
            array(
		      	'name' => 'Sablaireau',
		      	'number' => 28,
		      	'description' => '	Sablaireau peut enrouler son corps pour prendre la forme d’une balle hérissée de pointes. Ce Pokémon essaie de faire peur à son ennemi en le frappant avec ses pointes. Puis, il se rue sur lui avec ses griffes acérées.',
		    ),
            array(
		      	'name' => 'Nidoran♀',
		      	'number' => 29,
		      	'description' => 'Nidoran♀ est couvert de pointes qui sécrètent un poison puissant. On pense que ce petit Pokémon a développé ces pointes pour se défendre. Lorsqu’il est en colère, une horrible toxine sort de sa corne.',
		    ),
            array(
		      	'name' => 'Nidorina',
		      	'number' => 30,
		      	'description' => 'Lorsqu’un Nidorina est avec ses amis ou sa famille, il replie ses pointes pour ne pas blesser ses proches. Ce Pokémon devient vite nerveux lorsqu’il est séparé de son groupe.',
		    ),
            array(
		      	'name' => 'Nidoqueen',
		      	'number' => 31,
		      	'description' => 'Le corps de Nidoqueen est protégé par des écailles extrêmement dures. Il aime envoyer ses ennemis voler en leur fonçant dessus. Ce Pokémon utilise toute sa puissance lorsqu’il protège ses petits.',
		    ),
            array(
		      	'name' => 'Nidoran♂',
		      	'number' => 32,
		      	'description' => 'Nidoran♂ a développé des muscles pour bouger ses oreilles. Ainsi, il peut les orienter à sa guise. Ce Pokémon peut entendre le plus discret des bruits.',
		    ),
              array(
		      	'name' => 'Nidorino',
		      	'number' => 33,
		      	'description' => 'Nidorino dispose d’une corne plus dure que du diamant. S’il sent une présence hostile, toutes les pointes de son dos se hérissent d’un coup, puis il défie son ennemi.',
		    ),
              
              array(
		      	'name' => 'Nidoking',
		      	'number' => 34,
		      	'description' => 'L’épaisse queue de Nidoking est d’une puissance incroyable. En un seul coup, il peut renverser une tour métallique. Lorsque ce Pokémon se déchaîne, plus rien ne peut l’arrêter.',
		    ),
              
              array(
		      	'name' => 'Mélofée',
		      	'number' => 35,
		      	'description' => 'Les nuits de pleine lune, des groupes de ces Pokémon sortent jouer. Lorsque l’aube commence à poindre, les Mélofée fatigués rentrent dans leur retraite montagneuse et vont dormir, blottis les uns contre les autres.',
		    ),
			array(
				'name' => 'Mélodelfe',
				'number' => 36,
				'description' => 'Les Mélodelfe se déplacent en sautant doucement, comme s’ils volaient. Leur démarche légère leur permet même de marcher sur l’eau. On raconte qu’ils se promènent sur les lacs, les soirs où la lune est claire.',
			),

			array(
				'name' => 'Goupix',
				'number' => 37,
				'description' => 'À l’intérieur du corps de Goupix se trouve une flamme qui ne s’éteint jamais. Pendant la journée, lorsque la température augmente, ce Pokémon crache des flammes pour éviter que son corps ne devienne trop chaud.',
			),

			array(
				'name' => 'Feunard',
				'number' => 38,
				'description' => 'La légende raconte que Feunard est apparu lorsque neuf sorciers aux pouvoirs sacrés décidèrent de fusionner. Ce Pokémon est très intelligent. Il comprend la langue des hommes.',
			),
			array(
				'name' => 'Rondoudou',
				'number' => 39,
				'description' => 'Lorsque ce Pokémon chante, il ne s’arrête pas pour respirer. Quand il se bat contre un adversaire qu’il ne peut pas facilement endormir, Rondoudou reste donc sans respirer, mettant sa vie en danger.',
			),
			array(
				'name' => 'Grodoudou',
				'number' => 40,
				'description' => 'Le corps de Grodoudou est très élastique. S’il inspire profondément, ce Pokémon peut se gonfler à volonté. Une fois gonflé, Grodoudou peut rebondir comme un ballon.',
			),
			array(
				'name' => 'Nosferapti',
				'number' => 41,
				'description' => 'Nosferapti évite la lumière du soleil, car ça le rend malade. Pendant la journée, il reste dans les cavernes ou à l’ombre des vieilles maisons, où il dort, la tête à l’envers.',
			),
			array(
				'name' => 'Nosferalto',
				'number' => 42,
				'description' => 'Nosferalto mord sa proie grâce à ses quatre crocs pour boire son sang. Il ne sort que lorsque la nuit est noire et sans lune, pour voleter en quête de gens et de Pokémon à mordre.',
			),
			array(
				'name' => 'Mystherbe',
				'number' => 43,
				'description' => 'Mystherbe cherche un sol fertile et riche en nutriments, pour s’y planter. Pendant la journée, quand il est planté, les pieds de ce Pokémon changent de forme et deviennent similaires à des racines.',
			),
			array(
				'name' => 'Ortide',
				'number' => 44,
				'description' => 'Ortide bave un miel qui sent horriblement mauvais. Apparemment, il adore cette odeur nauséabonde. Il en renifle les fumées toxiques et se met à baver du miel de plus belle.',
			),
            array(
		      	'name' => 'Rafflesia',
		      	'number' => 45,
		      	'description' => 'Rafflesia dispose des plus grands pétales du monde. Il s’en sert pour attirer ses proies avant de les endormir avec ses spores toxiques. Ce Pokémon n’a plus alors qu’à attraper sa proie et à la manger.',
		    ),
            array(
		      	'name' => 'Paras',
		      	'number' => 46,
		      	'description' => 'Paras a sur son dos deux champignons parasites, mais il ne semble pas en souffrir. Il arrive parfois d\'en croiser un avec trois champignons. Les scientifiques pensent que le champignon se transmet de génération en génération. Un Paras sans champignons sur son dos est destiné à mourir peu de temps après.',
		      	'type' => array (
		      		'Insecte',
		      		'Plante'
		      	)
		    ),                                       
            array(
		      	'name' => 'Parasect',
		      	'number' => 47,
		      	'description' => 'A cause de son apparence, Parasect semble être mi-champignon, mi-Pokémon. Les scientifiques ont longtemps pensé que les deux organismes luttaient sans arrêt l\'un contre l\'autre, mais en réalité c\'est une sorte d\'alliance : Parasect fournit des nutriments au champignon, en échange, le végétal lui fournit toute une palette de poudres agressives. ',
		      	'type' => array (
		      		'Insecte',
		      		'Plante'
		      	)
		    ), 
            array(
		      	'name' => 'Aeromite',
		      	'number' => 48,
		      	'description' => 'Aéromite affectionne particulièrement les forêts, qu\'elles soient tempérées, tropicales ou marécageuses. Lorsqu\'il vole, une poudre toxique invisible tombe de ses ailes. Ce Pokémon est hautement toxique, car il combine de la Poudre toxik avec une attaque Tornade, ce qui a pour effet de la propager partout.',
		      	'type' => array (
		      		'Insecte',
		      		'Poison'
		      	)
		    ),
	   );

	    /* Insertion en base */
	    $i = 1;
	    $flag = 1;
	    foreach ($pokemons as $pokemon) {
			$addPokemon = new Pokemon();
			$addPokemon->setName($pokemon['name']);
			$addPokemon->setNumber($pokemon['number']);
			$addPokemon->setDescription($pokemon['description']);

			/* Nom des images */
			$secretImagePath = "secret_img_".$pokemon['number'].".png";
			$shinyImagePath = "shiny_img_".$pokemon['number'].".png";

			$addPokemon->setSecretPathName($secretImagePath);
			$addPokemon->setShinyPathName($shinyImagePath);
			if($flag == 151 || $flag == 251){
				$i += 1;
			}
			$addPokemon->setGeneration($i);
			if(isset($pokemon['type'])){
				foreach ($pokemon['type'] as $type){
					$addPokemon->addPokemonType($this->getReference('type_'.$type));
				}
			}

			$manager->persist($addPokemon);
			$flag++;
	    }
	    $manager->flush();
    }
    public function getOrder()
    {
        return 2;
    }
}