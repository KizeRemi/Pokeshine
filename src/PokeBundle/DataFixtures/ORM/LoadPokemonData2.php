<?php
Namespace PokeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use PokeBundle\Entity\Pokemon;

class LoadPokemonData2 extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
    	/* Tableau de tous les pokemon à insérer */
	    $pokemons = array(
		    array(    
		      	'name' => 'Germignon',
		      	'number' => 152,
		      	'description' => 'La feuille sur la tête de Germignon diffuse un arôme subtil et très agréable. S\'il la secoue un peu, il diffuse ce parfum un peu partout, pouvant calmer l\'agressivité et la colère. Ce Pokémon adore s\'exposer au soleil plusieurs heures par jour. Comme un thermomètre, sa feuille lui indique les endroits chauds.',
		      	'type' => array (
		      		'Plante',
		      	)
		    ),	
		    array(    
		      	'name' => 'Macronium',
		      	'number' => 153,
		      	'description' => 'Les feuilles sur le cou de Macronium se sont développées. Si la feuille de sa tête ne sent plus rien du tout, son collier de feuille dégage une odeur vivifiante, qui donne courage et force, voire, si elle est particulièrement forte, envie de se battre. Pacifique, il faut tout de même prendre garde à sa longue feuille car elle est terriblement tranchante.',
		      	'type' => array (
		      		'Plante',
		      	)
		    ),  
		    array(    
		      	'name' => 'Meganium',
		      	'number' => 154,
		      	'description' => 'Le parfum de la fleur de Meganium a un pouvoir apaisant et relaxant, capable de calmer même les plus agressifs et énervés. Il s\'en sert en combat pour relaxer son ennemi, et le rendre en conséquence moins fort. Les légendes racontent que son souffle a le pouvoir de régénérer les plantes malades ou fanées.',
		      	'type' => array (
		      		'Plante',
		      	)
		    ), 
		    array(    
		      	'name' => 'Hericendre',
		      	'number' => 155,
		      	'description' => 'Petit et craintif, Héricendre se roule souvent en boule pour se protéger. Si on l\'attaque réellement, il fait jaillir de grandes flammes sur son dos, ce qui indique qu\'il se tient prêt à attaquer. S\'il ne se sent pas le courage de riposter, il s\'enfuit en lançant une attaque Brouillard.',
		      	'type' => array (
		      		'Feu',
		      	)
		    ), 
		    array(    
		      	'name' => 'Feurisson',
		      	'number' => 156,
		      	'description' => 'Rapide et agile, Feurisson fait jaillir de grandes gerbes de feu sur son dos et sa tête. Quand il est excité ou énervé en plein combat, il peut faire monter l\'air qui l\'entoure à une température dangereuse pour les êtres humains. Il attaque en courant et en lançant des rafales d\'air brûlantes, qu\'il transforme en Lance-flamme.',
		      	'type' => array (
		      		'Feu',
		      	)
		    ),
		    array(    
		      	'name' => 'Typhlosion',
		      	'number' => 157,
		      	'description' => 'Sauvage, Typhlosion est un Pokémon très dangereux, surtout quand il élève des petits. Sa collerette de flammes est une arme meurtrière : en la frottant d\'une manière spéciale, il peut déclencher de puissantes explosions. Quand il est au combat, on peut voir le sol noircir de chaleur sous ses pas.',
		      	'type' => array (
		      		'Feu',
		      	)
		    ),
		    array(    
		      	'name' => 'Kaiminus',
		      	'number' => 158,
		      	'description' => 'Même s\'il est tout petit, la mâchoire de Kaiminus est très puissante. En pleine croissance, il a un fort besoin de mordiller tout ce qu\'il trouve : cailloux, morceaux de bois, et même la main de son dresseur si celui-ci est imprudent. Ce Pokémon ne se rend pas compte de la force de ses morsures, il faut donc s\'en méfier.',
		      	'type' => array (
		      		'Eau',
		      	)
		    ),
		    array(    
		      	'name' => 'Crocrodil',
		      	'number' => 159,
		      	'description' => 'La bouche garnie de crocs acérés de Crocrodil est un piège terrible. Une fois qu\'il a attrapé sa proie avec, la victime ne peut pas s\'échapper car ses dents sont recourbées vers l\'arrière, comme des hameçons. S\'il ne peut attraper son ennemi, il l\'attaque à distance avec ses puissants jets d\'eau.',
		      	'type' => array (
		      		'Eau',
		      	)
		    ),
		    array(    
		      	'name' => 'Aligatueur',
		      	'number' => 160,
		      	'description' => 'Aligatueur impressionne ses ennemis ou ses rivaux en ouvrant son effroyable gueule remplie de crocs acérés. Il sait nager très vite, mais son poids l\'handicape sur terre. S\'il veut aller plus vite, ce Pokémon n\'hésite pas à se mouvoir à quatre pattes. Son Hydrocanon brise facilement un poteau en deux.',
		      	'type' => array (
		      		'Eau',
		      	)
		    ),
		    array(    
		      	'name' => 'Fouinette',
		      	'number' => 161,
		      	'description' => 'De petite taille et vivant dans les hautes herbes, Fouinette est très menacé. C\'est pour cela que ces Pokémons se réunissent en groupes d\'une dizaine d\'individus. Pendant que les autres dorment ou mangent, Un Fouinette monte attentivement la garde en se hissant sur sa queue.',
		      	'type' => array (
		      		'Normal',
		      	)
		    ),
		    array(    
		      	'name' => 'Fouinar',
		      	'number' => 162,
		      	'description' => 'Fouinar se déplace rapidement en se faufilant dans les coins et recoins. Pour nicher, il construit un impressionnant terrier souterrain, constitué de dizaines de galeries différentes pour tromper les visiteurs incongrus. Personne ne peut déterminer où commence son interminable queue.',
		      	'type' => array (
		      		'Normal',
		      	)
		    ),
		    array(    
		      	'name' => 'Hoothoot',
		      	'number' => 163,
		      	'description' => 'Hoothoot possède une horloge interne si parfaite qu\'il commence à hululer à une heure toujours précise, variant suivant les individus. Ce Pokémon se tient toujours sur un seul pied, et quand il fatigue, il change si vite qu\'on le voit à peine. Ses grands yeux rouge peuvent percer les ténèbres les plus profondes.',
		      	'type' => array (
		      		'Normal',
		      		'Vol'
		      	)
		    ),
		    array(    
		      	'name' => 'Noarfang',
		      	'number' => 164,
		      	'description' => 'Pokémon nocturne, Noarfang ne rate jamais une proie, même dans une nuit sans lune. Ses yeux surdéveloppés captent la moindre lumière, ce qui lui permet de voir un peu partout. Ses grandes ailes souples lui assurent un vol silencieux et rapide. A l\'état sauvage, il passe la journée à dormir.',
		      	'type' => array (
		      		'Normal',
		      		'Vol'
		      	)
		    ),
		    array(    
		      	'name' => 'Coxy',
		      	'number' => 165,
		      	'description' => 'Coxy produit un étrange fluide sucré qui coule par les articulations de ses bras. On pense qu\'il lui permet de communiquer avec ses congénères. Timides, les Coxy préfèrent vivre en grands essaims, plus fort qu\'un Pokémon isolé. Ils partent tôt le matin en grandes nuées pour aller butiner le pollen des fleurs.',
		      	'type' => array (
		      		'Insecte',
		      		'Vol'
		      	)
		    ),
		    array(    
		      	'name' => 'Coxyclaque',
		      	'number' => 166,
		      	'description' => 'Par rapport à Coxy, Coxyclaque est nocturne, car une grande partie de son énergie vient de la lune. Dans les pays chauds, ils sont en grandes quantités car les nuits sont sans nuages. Quand Coxyclaque décide d\'attaquer, il provoque une puissante attaque Météores.',
		      	'type' => array (
		      		'Insecte',
		      		'Vol'
		      	)
		    ),
		    array(    
		      	'name' => 'Mimigal',
		      	'number' => 167,
		      	'description' => 'Grâce aux glandes situées dans son abdomen, Mimigal produit un fil collant et gluant qu\'il utilise pour tisser une grande toile. Il reste ensuite immobile dessus et attends qu\'une malheureuse proie s\'y fasse piéger. La toile de Mimigal est comme un deuxième système nerveux, car il peut sentir tout ce qui se passe dessus sans la regarder.',
		      	'type' => array (
		      		'Insecte',
		      		'Poison'
		      	)
		    ),
		    array(    
		      	'name' => 'Migalos',
		      	'number' => 168,
		      	'description' => 'Migalos créé des toiles si solides qu\'il est impossible de s\'y échapper rien que par la force. Grâce à une formidable mutation, il peut sortir du fil par son abdomen ou par sa bouche. Comme il ne tisse pas de toile définitive, Migalos chasse et la tisse directement sur sa proie.',
		      	'type' => array (
		      		'Insecte',
		      		'Poison'
		      	)
		    ),
		    array(    
		      	'name' => 'Nostenfer',
		      	'number' => 169,
		      	'description' => 'Nostenfer utilise alternativement ses deux paires d\'ailes pour moins se fatiguer en vol. Néanmoins, s\'il a besoin de voler à grande vitesse, il les utilisera toutes en même temps. Nostenfer peut ainsi parcourir d\'immenses distances sans trop se fatiguer. Comme il vit la nuit, son vol est silencieux.',
		      	'type' => array (
		      		'Poison',
		      		'Vol'
		      	)
		    ),
		    array(    
		      	'name' => 'Loupio',
		      	'number' => 170,
		      	'description' => 'Les scientifiques pensent que les deux antennes de Loupio viennent de deux nageoires chargées positivement et négativement. Ce courant électrique permet d\'illuminer ses «ampoules» et donc, de se repérer ou de communiquer au plus profond des abysses. Elles libèrent aussi de formidables Etincelles.',
		      	'type' => array (
		      		'Eau',
		      		'Electrik'
		      	)
		    ),
		    array(    
		      	'name' => 'Lantern',
		      	'number' => 171,
		      	'description' => 'La lumière produite par Lanturn est le résultat d\'une complexe réaction chimique. Il s\'en sert non seulement pour s\'éclairer au fond de l\'océan, mais aussi pour attirer ses proies, et quand celles-ci réalisent le danger, il est déjà trop tard : une violente décharge électrique les tuent sur le coup.',
		      	'type' => array (
		      		'Eau',
		      		'Electrik'
		      	)
		    ),
		    array(    
		      	'name' => 'Pichu',
		      	'number' => 172,
		      	'description' => 'Pichu est trop petit pour savoir stocker l\'électricité dans son corps. Il envoie sans s\'en rendre compte de petites décharges pour jouer. Cependant, s\'il décide de se défendre et s\'il envoie une décharge trop importante, ce petit Pokémon s\'électrocute un peu lui-même.',
		      	'type' => array (
		      		'Electrik'
		      	)
		    ),
		    array(    
		      	'name' => 'Melo',
		      	'number' => 173,
		      	'description' => 'Quand un groupe de Mélo aperçoit une étoile filante, il se met à danser frénétiquement en faisant de grands cercles. On pense que ce Pokémon est d\'origine extraterrestre, mais personne ne sait réellement s\'il vient d\'une autre planète. Des personnes affirment avoir déjà vu des Melo près des cratères.',
		      	'type' => array (
		      		'Normal'
		      	)
		    ),
		    array(    
		      	'name' => 'Toudoudou',
		      	'number' => 174,
		      	'description' => 'Le corps de Toudoudou est très doux, mais très élastique aussi. Quand il commence à rebondir, il est presque impossible de l\'arrêter. Ses petites cordes vocales ne sont pas très développées, ce qui l\'oblige à souvent se gargariser. S\'il chante trop longtemps, il peut se casser momentanément la voix.',
		      	'type' => array (
		      		'Normal'
		      	)
		    ),
		    array(    
		      	'name' => 'Togepi',
		      	'number' => 175,
		      	'description' => 'L\'énergie vitale de Togepi provient des émotions positives et heureuses exprimé par les gens et les Pokémons. On dit même que sa coquille est remplie de joie. Si jamais il ne ressent que haine et désespoir, il finit par mourir. « Qui fait tenir debout un Togepi endormi aura la chance pour lui… »',
		      	'type' => array (
		      		'Normal'
		      	)
		    ),
		    array(    
		      	'name' => 'Togetic',
		      	'number' => 176,
		      	'description' => 'Beaucoup de personnes considèrent Togetic comme un symbole de chance et de bonheur. Il n\'apparaît d\'ailleurs qu\'aux personnes qui ont le cœur pur. Il a de petites ailes, mais il ne les utilise pas beaucoup car il peut rester en l\'air sans bouger. Si son dresseur est triste, il utilise la joie qu\'il a emmagasiné pour le réconforter.',
		      	'type' => array (
		      		'Normal',
		      		'Vol'
		      	)
		    ),
		    array(    
		      	'name' => 'Natu',
		      	'number' => 177,
		      	'description' => 'Les ailes de Natu sont trop petites pour lui permettre de voler, alors il se déplace en sautillant sur le sol. Ce Pokémon est très habile pour grimper aux arbres, car il se nourrit de leurs bourgeons. Petit et vulnérable, il sait se défendre en lançant des attaques psychiques à ses agresseurs.',
		      	'type' => array (
		      		'Psy',
		      		'Vol'
		      	)
		    ),
		    array(    
		      	'name' => 'Xatu',
		      	'number' => 178,
		      	'description' => 'Xatu a un comportement très énigmatique. Il est dû à son incroyable faculté de voir le passé et le futur. Ce Pokémon passe sa journée à méditer sans bouger, le regard perdu dans le vide. Certains pensent qu\'il a adopté cette position à cause de la terreur qu\'il a ressenti en prévoyant l\avenir.',
		      	'type' => array (
		      		'Psy',
		      		'Vol'
		      	)
		    ),
		    array(    
		      	'name' => 'Wattouat',
		      	'number' => 179,
		      	'description' => 'La laine de Wattouat se charge d\'électricité statique dès qu\'on la frotte un peu. Plus le Pokémon est chargé, plus l\'ampoule au bout de sa queue brille. Pokémon grégaire, il vit en grands troupeaux dans les plaines. Il a un tempérament pacifique, mais ses attaques Tonnerre sont redoutable.',
		      	'type' => array (
		      		'Electrik'
		      	)
		    ),
		    array(    
		      	'name' => 'Lainergie',
		      	'number' => 180,
		      	'description' => 'La peau de Lainergie a muté, donnant une structure moléculaire proche de celle du caoutchouc : il peut ainsi garder sans souci l\'électricité dans sa laine sans craindre de s\'électrocuter. Ce Pokémon est très doux, mais il vaut mieux éviter de caresser sa toison car vous prendrez un coup de jus.',
		      	'type' => array (
		      		'Electrik'
		      	)
		    ),
		    array(    
		      	'name' => 'Pharamp',
		      	'number' => 181,
		      	'description' => 'Les ampoules de Pharamp sont si lumineuses qu\'elles peuvent endommager la vue si on les regarde directement.. Quand il envoie une décharge électrique, elle est accompagnée d\'un Flash lumineux qui peut provoquer une crise d\'épilepsie. En cas d\'agression violente, il neutralise son agresseur avec une attaque Fatal-foudre.',
		      	'type' => array (
		      		'Electrik'
		      	)
		    ),
		    array(    
		      	'name' => 'Joliflor',
		      	'number' => 182,
		      	'description' => 'Quand il fait grand soleil, Joliflor passe toute sa journée à danser en faisant tournoyer les feuilles et les fleurs de son corps. C\'est pour cela qu\'il est le symbole des pays du sud. S\'il n\'a pas sa dose quotidienne de soleil, ce Pokémon dépérit rapidement et s\'épuise, car c\'est sa seule source d\'énergie.',
		      	'type' => array (
		      		'Plante'
		      	)
		    ),
		    array(    
		      	'name' => 'Marill',
		      	'number' => 183,
		      	'description' => 'La queue de Marill est très flexible, et elle résiste à l\'étirement. Pour pêcher dans les fleuves à courant rapide, il l\'enroule autour d\'un tronc d\'arbre pour ne pas être emporté. Quand ce Pokémon nage, sa queue remplie d\'huile le fait flotter, si bien qu\'il lui est impossible de se noyer, même dans de forts courants.',
		      	'type' => array (
		      		'Eau'
		      	)
		    ),
		    array(    
		      	'name' => 'Azumarill',
		      	'number' => 184,
		      	'description' => 'Azumarill a une excellente ouïe, aussi bien sur terre que sous l\'eau. Son oreille interne décompose les sons, ce qui lui permet d\'entendre ses proies ou ses ennemis. Pokémon au grand cœur, si Azumarill voit un Pokémon en train de se noyer, il crée de grosses bulles d\'air pour lui permettre de respirer.',
		      	'type' => array (
		      		'Eau'
		      	)
		    ),
		    array(    
		      	'name' => 'Simularbre',
		      	'number' => 185,
		      	'description' => 'Simularbre est un imitateur qui sait parfaitement se faire passer pour un arbre. Il est très difficile a discerner une fois immobile. Il a justement appris a onduler avec le vent pour se camoufler encore mieux. Ne vous y méprenez pas, Simularbre est de type roche, et une averse le fait fuir rapidement.',
		      	'type' => array (
		      		'Roche'
		      	)
		    ),
		    array(    
		      	'name' => 'Tarpaud',
		      	'number' => 186,
		      	'description' => 'Le long cheveu sur la tête de Tarpaud est la preuve de son statut de roi. Son chant ressemble à celui d\'un beuglement, mais il attire tout de même une foule de Ptitard et de Tetarte, statut oblige. Plus son cheveu est long et bouclé, plus il est respecté parmi ses semblables.',
		      	'type' => array (
		      		'Eau'
		      	)
		    ),
		    array(    
		      	'name' => 'Granivol',
		      	'number' => 187,
		      	'description' => 'Granivol est si léger qu\'un minuscule coup de vent parvient à lui faire perdre l\'équilibre. Lors de grands vents, on peut voir de grandes nuées de ce Pokémon flotter dans les airs, portés au loin. C\'est pour cela qu\'on en trouve un peu partout dans le monde.',
		      	'type' => array (
		      		'Plante',
		      		'Vol'
		      	)
		    ),
		    array(    
		      	'name' => 'Floravol',
		      	'number' => 188,
		      	'description' => 'La fleur que porte Floravol sur la tête est un thermomètre très précis : quand elle se referme, c\'est que la température a chuté tandis qu\'elle s\'ouvre un peu plus si la température augmente. Il est gai et joyeux quand le soleil brille fort. En cas d\'attaque, il libère une grosse quantité de Para-spore.',
		      	'type' => array (
		      		'Plante',
		      		'Vol'
		      	)
		    ),
		    array(    
		      	'name' => 'Cotovol',
		      	'number' => 189,
		      	'description' => 'Le vent permet à Cotovol de voyager où bon lui semble. En dirigeant ses appendices ultra-légers, il contrôle aisément son vol. Il évite par contre de voler au dessus de la mer, car si le vent faiblissait ou cessait, il tomberait dans l\'eau et se noierait. Il endort ses ennemis pour se sauver.',
		      	'type' => array (
		      		'Plante',
		      		'Vol'
		      	)
		    ),
		    array(    
		      	'name' => 'Capumain',
		      	'number' => 190,
		      	'description' => 'La queue de Capumain lui sert de main à part entière. Elle est très puissante, ce qui lui permet de sauter d\'arbres en arbres ou de s\'accrocher solidement aux branches. Malheureusement, comme il ne se sert pratiquement plus de ses bras normaux, ceux-ci sont devenus très maladroits.',
		      	'type' => array (
		      		'Normal'
		      	)
		    ),
		    array(    
		      	'name' => 'Tournegrin',
		      	'number' => 191,
		      	'description' => 'Tournegrin est un Pokémon très faible. Il est pratiquement incapable de se défendre, et ne survit qu\'en buvant la rosée matinale car il ne peut rien manger d\'autre. Ce Pokémon essaye de bouger le moins possible pour ne pas gaspiller les nutriments vitaux qu\'il a eu lors de sa naissance.',
		      	'type' => array (
		      		'Plante'
		      	)
		    ),
		    array(    
		      	'name' => 'Heliatronc',
		      	'number' => 192,
		      	'description' => 'Heliatronc capte la lumière du soleil pour la reconvertir en nutriments. Il s\'oriente toujours vers le soleil pour absorber le plus de rayons possible. On peut le voir errer sans but à la recherche du coin le plus ensoleillé. Mais dès que la nuit tombe, il s\'arrête et referme instantanément ses pétales pour dormir.',
		      	'type' => array (
		      		'Plante'
		      	)
		    ),
		    array(    
		      	'name' => 'Yanma',
		      	'number' => 193,
		      	'description' => 'Les immenses yeux de Yanma peuvent voir à 360 degrés. C\'est pour cela qu\'il n\'est pas doté de cou : il n\'a pas besoin de tourner la tête. Ses ailes battent si vite qu\'il est presque impossible de les voir et de les entendre. On peut cependant les sentir, car elles provoquent de rapides migraines dues aux ultrasons.',
		      	'type' => array (
		      		'Insecte',
		      		'Vol'
		      	)
		    ),
		    array(    
		      	'name' => 'Axoloto',
		      	'number' => 194,
		      	'description' => 'Axoloto passe une énorme partie de son temps dans l\'eau, mais il est obligé d\'en sortir pour manger. A terre, il recouvre son corps fragile d\'un voile toxique et visqueux. Toucher un Axoloto reviendrait à attraper une botte d\'orties à mains nues, mais il est très vulnérable aux attaques spéciales.',
		      	'type' => array (
		      		'Eau',
		      		'Sol'
		      	)
		    ),
		    array(    
		      	'name' => 'Maraiste',
		      	'number' => 195,
		      	'description' => 'Maraiste a un drôle de caractère : il est tellement insouciant qu\'il fonce régulièrement la tête la première dans la coque des bateaux ou sur des rochers. Mais sa tête est molle, ce qui absorbe en grande partie le choc. Sur terre, il est impossible de l\'attraper à main nues car il est extrêmement glissant.',
		      	'type' => array (
		      		'Eau',
		      		'Sol'
		      	)
		    ),
		    array(    
		      	'name' => 'Mentali',
		      	'number' => 196,
		      	'description' => 'Mentali est un Pokémon capable d\'analyser les vents et les courants aériens. Il peut ainsi prédire le climat, ou le déplacement proche de ses ennemis. Seuls les Mentali heureux avec leur dresseur apprennent à voir le futur : ils développent cette capacité pour protéger leur maître.',
		      	'type' => array (
		      		'Psy'
		      	)
		    ),
		    array(    
		      	'name' => 'Noctali',
		      	'number' => 197,
		      	'description' => 'Les anneaux sur le corps de Noctali se mettent à briller si c\'est une nuit de pleine lune, ou s\'il est en colère. Un Evoli évolue en Noctali s\'il est longuement exposé aux rayons lunaires. Son corps noir est parfait pour se cacher dans la nuit. Au combat, il utilise son attaque Ténèbres pour apeurer son ennemi.',
		      	'type' => array (
		      		'Ténèbres'
		      	)
		    ),
		    array(    
		      	'name' => 'Cornebre',
		      	'number' => 198,
		      	'description' => 'Jadis, à cause de son plumage noir brillant, Cornebre était craint et détesté. Aujourd\'hui, les gens en ont appris à mieux connaître ce Pokémon oiseau, et en ont moins peur. Cornebre est irrésistiblement attiré par tout ce qui est brillant, jusqu\'à voler les bagues de jeunes filles. Miaouss et Cornebre se volent mutuellement.',
		      	'type' => array (
		      		'Ténèbres',
		      		'Vol'
		      	)
		    ),
		    array(    
		      	'name' => 'Roigada',
		      	'number' => 199,
		      	'description' => 'Contrairement à ses précédentes évolution, Roigada est d\'une intelligence remarquable. Une fois la tête de Ramoloss mordue, des toxines lui confèrent des pouvoirs incroyable. S\'il ne gouverne pas une tribu, il entreprend des recherches pour résoudre tous les mystères du monde.',
		      	'type' => array (
		      		'Eau',
		      		'Psy'
		      	)
		    ),
		    array(    
		      	'name' => 'Feuforeve',
		      	'number' => 200,
		      	'description' => 'Taquin et malicieux, Feuforeve adore passer sa nuit à effrayer les gens. Il se rend invisible pour tirer les cheveux et pousser des cris glaçants aux personnes qu\'il croise. Il peut se nourrir des sentiments de terreur que les gens éprouvent grâce à ses sphères rouges.',
		      	'type' => array (
		      		'Spectre'
		      	)
		    ),
		    array(    
		      	'name' => 'Zarbi',
		      	'number' => 201,
		      	'description' => 'Il existe plusieurs forment différentes de Zarbi. Ces Pokémons ressemblent fortement aux écritures anciennes sur les plaques d\'argiles : des études sont en cours, visant à déterminer si ces écritures antiques sont apparues avant les Zarbi ou le contraire. On ne sait rien sur leur pouvoir.',
		      	'type' => array (
		      		'Psy'
		      	)
		    ),
		    array(    
		      	'name' => 'Qulbutoke',
		      	'number' => 202,
		      	'description' => 'Qulbutoke n\'attaque jamais le premier. Il utilise la force de l\'adversaire pour se défendre en lui renvoyant ses attaques. Ce Pokémon se cache dans les grottes pour cacher sa queue noire. Il ne supporte pas qu\'elle soit attaquée, et riposte en essayant d\'entraîner son ennemi dans un Prélèvement du destin.',
		      	'type' => array (
		      		'Psy'
		      	)
		    ),
		    array(    
		      	'name' => 'Girafarig',
		      	'number' => 203,
		      	'description' => 'Girafarig préfère vivre dans les plaines et les forêts peu denses. Sa queue arrière possède aussi un petit cerveau qui répond aux sons et aux odeurs. Si on approche sa queue de trop près, elle mord. En revanche, elle ne dort jamais. Si Girafarig est attaqué, il se défend en envoyant des Rafale Psy ou des Ecrasement.',
		      	'type' => array (
		      		'Normal',
		      		'Psy'
		      	)
		    ),
		    array(    
		      	'name' => 'Pomdepik',
		      	'number' => 204,
		      	'description' => 'Pomedepik secrète un liquide gluant et résineux. Il l\'utilise pour coller autours de son corps de l\'écorce d\'arbre pour se protéger. Avec le temps, la colle devient dure comme la pierre. Si quelqu\'un secoue l\'arbre sur lequel il s\'est accroché, il tombe au sol et explose sans prévenir.',
		      	'type' => array (
		      		'Normal',
		      		'Psy'
		      	)
		    ),
		    array(    
		      	'name' => 'Foretress',
		      	'number' => 205,
		      	'description' => 'Foretress se cache dans une lourde et épaisse carapace d\'acier trempé pour se protéger. Perché en haut des plus grands arbres, il crache des morceaux de carapace pour faire fuir les opportuns. Malgré sa lourde armature, ce Pokémon est très agile et son attaque tour rapide le rend invulnérable aux attaques physiques.',
		      	'type' => array (
		      		'Insecte',
		      		'Acier'
		      	)
		    ),
		    array(    
		      	'name' => 'Insolourdo',
		      	'number' => 206,
		      	'description' => 'Insolourdo vit au plus profond des grottes ou des souterrains. Il a une vie presque inactive, il ne bouge quasiment jamais. Cependant, dès qu\'il se sent en danger, il s\'enfouit rapidement sous terre en creusant avec sa queue. En forme de perceuse, il l\'utilise également pour créer des nids aux formes complexes.',
		      	'type' => array (
		      		'Normal'
		      	)
		    ),
		    array(    
		      	'name' => 'Scorplane',
		      	'number' => 207,
		      	'description' => 'On peut voir des nuées de Scorplanes faire leur nid sur les falaises, car leur serres sont parfaitement adaptées. Une fois que ce Pokémon a repéré sa proie, il plane silencieusement vers elle, s\'accroche à son visage et lui injecte une puissante toxine grâce à son dard mortel.',
		      	'type' => array (
		      		'Sol',
		      		'Vol'
		      	)
		    ),
		    array(    
		      	'name' => 'Steelix',
		      	'number' => 208,
		      	'description' => 'Un Steelix est un Onix qui a accumulé sur son corps de fines particules de fer et de métaux, trouvées sous terre. La pression les a tassées, et le corps de ce Pokémon est devenu aussi dur que du diamant. S\'il frappe sa lourde queue par terre, c\'est qu\'il déclenche un Séisme.',
		      	'type' => array (
		      		'Acier',
		      		'Sol'
		      	)
		    ),
		    array(    
		      	'name' => 'Snubull',
		      	'number' => 209,
		      	'description' => 'Malgré son visage repoussant, Snubull a un caractère en or. C\'est pour cela qu\'il est très apprécié dans la bourgeoisie féminine. Jovial et affectueux, il se plait plus apprivoisé que sauvage. Dans la nature, il effraie ses ennemis en faisant une Grimace, mais si son attaque reste sans effet, il enchaîne sur une attaque Morsure.',
		      	'type' => array (
		      		'Normal'
		      	)
		    ),
		    array(    
		      	'name' => 'Granbull',
		      	'number' => 210,
		      	'description' => 'Les crocs de Granbull sont tellement lourds qu\'il est obligé de pencher la tête en arrière pour la soutenir. Utilisé comme Pokémon de garde, il ne mord jamais sans raison, car il a un caractère timide et un peu hésitant. Mais une fois qu\'il tient sa victime, il la brise en deux d\'un seul coup de mâchoire.',
		      	'type' => array (
		      		'Normal'
		      	)
		    ),
		    array(    
		      	'name' => 'Qwilfish',
		      	'number' => 211,
		      	'description' => 'Le corps de Qwilfish est entouré d\'épines venimeuses. Attaqué, il se gonfle d\'eau en prévention : si l\'agresseur ne part pas, il utilise la pression de l\'eau dans son corps pour envoyer ses épines dans toutes les directions. Le poison est étourdissant, et si la victime est plusieurs fois touchée, elle peut en mourir.',
		      	'type' => array (
		      		'Eau',
		      		'Poison'
		      	)
		    ),
		    array(    
		      	'name' => 'Cizayox',
		      	'number' => 212,
		      	'description' => 'Comme le corps de Cizayox est d\'une structure moléculaire proche de l\'acier, ses petites ailes sont incapables de le faire voler. Cependant il les utilise pour régulariser sa température, et en combat, elles lui donnent une vitesse prodigieuse. Ses pinces sont affûtées comme des lames de rasoir, et peuvent écraser n\'importe quoi.',
		      	'type' => array (
		      		'Insecte',
		      		'Acier'
		      	)
		    ),
		    array(    
		      	'name' => 'Caratroc',
		      	'number' => 213,
		      	'description' => 'Caratroc amasse soigneusement toutes les baies qu\'il trouve et les stocke dans sa coquille. Au bout de plusieurs jours, mélangées avec un fluide corporel elles donnent un excellent jus. Ce Pokémon se cache sous un rocher pour éviter d\'être dérangé pendant qu\'il mange.',
		      	'type' => array (
		      		'Insecte',
		      		'Roche'
		      	)
		    ),
		    array(    
		      	'name' => 'Scarhino',
		      	'number' => 214,
		      	'description' => 'Scarhino est doté d\'une force prodigieuse. En combat, il utilise sa corne pour soulever ses ennemis et les projeter à plusieurs mètres. Heureusement, il est de nature docile et ne pense qu\'à se délecter de miel. En revanche, s\'il est dérangé pendant sa dégustation, il se bat avec violence.',
		      	'type' => array (
		      		'Insecte',
		      		'Combat'
		      	)
		    ),
		    array(    
		      	'name' => 'Farfuret',
		      	'number' => 215,
		      	'description' => 'Farfuret est à coup sûr le Pokémon le plus rusé qui existe. Si son dresseur ne s\'en occupe pas bien, Farfuret n\'hésitera pas à lui jouer de mauvais tours. Il grimpe aux arbres grâce à ses longues griffes et chasse les Roucool, pour ensuite dévorer leurs œufs. Il se bat en usant de ses ruses et de ses tromperies.',
		      	'type' => array (
		      		'Ténèbres',
		      		'Glace'
		      	)
		    ),
		    array(    
		      	'name' => 'Teddiursa',
		      	'number' => 216,
		      	'description' => 'Teddiursa passe la plus grande partie de la journée à chercher du miel. Il en est tellement accro qu\'il crée son propre miel en mélangeant des jus de baies au pollen ramassé par les Dardargnans. Quand l\'hiver approche, ce Pokémon fait des réserves de baies et de fruits secs.',
		      	'type' => array (
		      		'Normal'
		      	)
		    ),
		    array(    
		      	'name' => 'Ursaring',
		      	'number' => 217,
		      	'description' => 'Les Ursaring vivent principalement dans les forêts tempérées. Il secoue les arbres pour faire tomber les baies, même si c\'est un excellent grimpeur. Il affectionne les grottes pour dormir, et chasse méchamment tout occupant pour être en paix. Ses attaques Tranche sont redoutables.',
		      	'type' => array (
		      		'Normal'
		      	)
		    ),
		    array(    
		      	'name' => 'Limagma',
		      	'number' => 218,
		      	'description' => 'Limagma n\'a pas de sang : à la place, du magma circule dans ses veines. Il vit difficilement dans des endroits autres que les volcans car sa lave refroidit et se solidifie. Il ne dort jamais non plus, l\'inactivité le rendrait de pierre. Ce Pokémon se nourrit de charbon frais.',
		      	'type' => array (
		      		'Feu'
		      	)
		    ),
		    array(    
		      	'name' => 'Volcaropod',
		      	'number' => 219,
		      	'description' => 'La température interne de Volcaropod avoisine les 10 000 degrés. L\'eau s\'évapore au contacte de sa peau, si bien que lorsqu\'il pleut, Volcaropod est entouré d\'un brouillard. Sa carapace fragile est composée de lave durcie. Il suffit qu\'on la touche pour qu\'elle se brise.',
		      	'type' => array (
		      		'Feu',
		      		'Roche'
		      	)
		    ),
		    array(    
		      	'name' => 'Marcacrin',
		      	'number' => 220,
		      	'description' => 'Marcacrin possède un odorat très performant et précis. En plaquant son groin au sol, il peut sentir des objets, racines ou champignons enterrés. Il dégage ensuite sa nourriture en creusant énergiquement. Son long poil soyeux l\'isole parfaitement du froid, mais si la température devient vraiment trop basse, il s\'enterre.',
		      	'type' => array (
		      		'Glace',
		      		'Sol'
		      	)
		    ),
		    array(    
		      	'name' => 'Cochignon',
		      	'number' => 221,
		      	'description' => 'Cochignon est aveugle, car ses poils recouvrent ses yeux. Son odorat et son ouïe se sont développés en complément. En hiver, il utilise ses défenses pour briser la glace et boire. Si Cochignon s\'arrête de bouger et que ses poils du dos son hérissés, c\'est qu\'il se sent menacé et est prêt à charger.',
		      	'type' => array (
		      		'Glace',
		      		'Sol'
		      	)
		    ),
           array(    
		      	'name' => 'Corayon',
		      	'number' => 222,
		      	'description' => 'Les Corayon se rassemblent dans les mers chaudes, offrant ainsi un abri idéal aux plus petits PokÈmon. Quand la tempÈrature baisse, ce PokÈmon migre vers les mers du sud.',
		      	'type' => array (
		      		'Eau',
                    'Roche'
		      	)
               ), 
           array(    
		      	'name' => 'Remoraid',
		      	'number' => 223,
		      	'description' => 'Remoraid aspire de l\'eau, puis la recrache à forte pression grâce à ses muscles abdominaux pour attaquer les proies volantes. Quand son évolution approche, ce PokÈmon descend le courant des rivières.',
		      	'type' => array (
		      		'Eau'
		      	)
               ), 
           array(    
		      	'name' => 'Octillery',
		      	'number' => 224,
		      	'description' => 'Octillery attrape son ennemi avec ses tentacules. Ce Pokemon essaie de l\'immobiliser avant de lui asséner le coup final. Si líennemi síavËre trop fort, Octillery lui crache de l\'encre à la figure et s\'échappe.',
		      	'type' => array (
		      		'Eau'
		      	)
               ), 
            array(    
		      	'name' => 'Cadoizo',
		      	'number' => 225,
		      	'description' => 'Cadoizo transporte sa nourriture dans sa queue. Il y a longtemps, un célëbre explorateur réussit à le sommet de la plus haute montagne du monde grâce à un de ces Pokemon, qui partagea sa nourriture avec lui.',
		      	'type' => array (
		      		'Glace',
                    'Vol'
		      	)
                ), 
            array(    
		      	'name' => 'Demanta',
		      	'number' => 226,
		      	'description' => 'Les jours de beau temps, on peut voir des bancs de Demanta sauter au-dessus des vagues. Le Remoraid qui líaccompagne ne dÈrange pas ce Pokemon.',
		      	'type' => array (
		      		'Eau',
                    'Vol'
		      	)
                ), 
            array(    
		      	'name' => 'Airmure',
		      	'number' => 227,
		      	'description' => 'Les ailes d\'acier díAirmure síabÓment et se cabossent à force de se battre. Une fois par an, les ailes endommagées repoussent complËtement, rendant à leurs bords tranchants leur état d\'origine.',
		      	'type' => array (
		      		'Acier',
                    'Vol'
		      	)
                ), 
            array(    
		      	'name' => 'Malosse',
		      	'number' => 228,
		      	'description' => 'Les Malosse chassent en meute organisée. Ils communiquent entre eux grâce à une série de petits cris pour encercler leur proie. L\'étonnant travail d\'équipe de ces Pokemon est sans comparaison.',
		      	'type' => array (
		      		'Feu',
                    'Ténèbres '
		      	)
                ), 
            array(    
		      	'name' => 'DÈmolosse',
		      	'number' => 229,
		      	'description' => '	Dans une meute de Demolosse, le leader est dotÈ de cornes inclinées vers l\'arrière. Ces Pokemon choisissent leur chef en organisant des combats entre eux.',
		      	'type' => array (
		      		'Feu',
                    'TÈnËbres'
		      	)
                ), 
            array(    
		      	'name' => 'Hyporoi',
		      	'number' => 230,
		      	'description' => 'Hyporoi dort au fond de l\'océan, où aucune autre forme de vie ne réside. On raconte que lorsquíune tempÍte survient, cíest que ce Pokemon s\'éveille et erre dans les profondeurs en quête de proies.',
		      	'type' => array (
		      		'Dragon',
                    'Eau'
		      	) 
                ), 
            array(    
		      	'name' => 'Phanpy',
		      	'number' => 231,
		      	'description' =>'Phanpy utilise sa petite trompe pour se doucher. Quand plusieurs d\'entre eux se réunissent, ils s\'arrosent joyeusement. On peut souvent voir ces Pokemon se sÈcher au bord de l\'eau.', 
		      	'type' => array (
		      		'Sol'
                    
		      	)                
		    ),
            array(    
		      	'name' => 'Donphan',
		      	'number' => 232,
		      	'description' => 'Si Donphan décidait de charger, il pourrait détruire une maison. Grâce à sa force étonnante, ce Pokemon peut aider à déplacer les rochers et les coulées de boue qui bloquent les chemins de montagne.',
		      	'type' => array (
		      		'Sol'
		      	)                
		    ),
            array(    
		      	'name' => 'Porygon2',
		      	'number' => 233,
		      	'description' => 'Porygon2 fut créé par des humains grâce aux progrés de la science. Ce Pokemon a été doté d\'une intelligence artificielle qui lui permet d\'apprendre de nouveaux mouvements et des émotions par lui-même.',
		      	'type' => array (
		      		'Normal'
		      	)                
		    ),
            array(    
		      	'name' => 'Cerfrousse',
		      	'number' => 234,
		      	'description' => 'Les superbes bois de Cerfrousse étaient vendus très cher comme oeuvres d\'art. Ce PokÈmon fut chassé et l\'espèce proche de l\'extinction à cause des gens qui recherchaient leurs précieux bois.',
		      	'type' => array (
		      		'Normal'
		      	)                
		    ),
            array(    
		      	'name' => 'Queulorior',
		      	'number' => 235,
		      	'description' => 'Queulorior délimite son territoire en libérant un fluide corporel qui sort de sa queue. On a découvert plus de 5000 traces différentes de fluide laissées par ce Pokemon.',
		      	'type' => array (
		      		'Normal'
		      	)                
		    ),
            array(    
		      	'name' => 'Debugant',
		      	'number' => 236,
		      	'description' => 'Debugant devient nerveux s\'il ne s\'entraine pas tous les jours. Lorsqu\'un dresseur élève ce Pokemon, il doit établir et appliquer un programme d\'entrainement très complet.',
		      	'type' => array (
		      		'Combat'
		      	)                
		    ),
            array(    
		      	'name' => 'Kapoera',
		      	'number' => 237,
		      	'description' => 'Kapoera tournoie à toute vitesse sur sa tête, tout en donnant des coups de pied. Cette technique combine des attaques offensives et défensives. Ce Pokemon se déplace plus vite sur la tête qu\'en marchant.',
		      	'type' => array (
		      		'Combat'
		      	)                
		    ),
            array(    
		      	'name' => 'Lippouti',
		      	'number' => 238,
		      	'description' => 'Lippouti court dans tous les sens et tombe assez souvent. Quand il en a l\'occasion, il regarde son reflet dans l\'eau pour vérifier si son visage n\'a pas été sali par ses chutes.',
		      	'type' => array (
		      		'Glace',
                    'Psy'
		      	)                
		    ),
            array(    
		      	'name' => 'Elekid',
		      	'number' => 239,
		      	'description' => 'Elekid stocke de l\'éléctricité dans son corps. S\'il touche du métal et décharge sans le faire exprês son électricité, ce Pokemon fait des cercles avec ses bras pour se recharger.',
		      	'type' => array (
		      		'Electrik'
		      	)                
		    ),
            array(    
		      	'name' => 'Magby',
		      	'number' => 240,
		      	'description' => 'L\'état de santé de Magby peut être deviné selon le type de flamme qu\'il crache. Si ce Pokemon crache des flammes jaunes, c\'est qu\'il est en bonne santé. Lorsqu\'il est fatigué, de la fumée noire s\'ajoute aux flammes.',
		      	'type' => array (
		      		'Feu'
		      	)                
		    ),
            array(    
		      	'name' => 'Ecremeuh',
		      	'number' => 241,
		      	'description' => 'Ecremeuh produit plus de 20l de lait par jour. Son lait sucré fait le bonheur des petits et des grands. Les gens qui ne boivent pas de lait en font du yaourt.',
		      	'type' => array (
		      		'Normal'
		      	)                
		    ),
            array(    
		      	'name' => 'Leuphorie',
		      	'number' => 242,
		      	'description' => 'Leuphorie ressent la tristesse grâce à son pelage duveteux. Lorsqu\'il la remarque, ce Pokémon se précipite vers la personne triste pour partager avec elle un oeuf Chance, capable de faire naïtre un sourire sur tout visage.',
		      	'type' => array (
		      		'Normal'
		      	)                
		    ),
            array(    
		      	'name' => 'Raikou',
		      	'number' => 243,
		      	'description' => 'Raikou incarne la vitesse de l\'éclair. Les rugissements de ce Pokemon libèrent des ondes de choc provenant du ciel et frappant le sol avec la puissance de la foudre.',
		      	'type' => array (
		      		'Electrik'
		      	)                
		    ),
            array(    
		      	'name' => 'Entei',
		      	'number' => 244,
		      	'description' => 'Entei incarne la colère du magma. On pense que ce Pokemon est né suite à l\'éruption d\'un volcan. Il peut envoyer d\'énormes jets de flammes qui calcinent tout ce qu\'ils touchent.',
		      	'type' => array (
		      		'Feu'
		      	)                
		    ),
            array(    
		      	'name' => 'Suicune',
		      	'number' => 245,
		      	'description' => 'Suicune incarne la tranquillité d\'une source d\'eau pure. Il parcourt les plaines avec grâce. Ce Pokemon a le pouvoir de purifier l\'eau.',
		      	'type' => array (
		      		'Eau'
		      	)                
		    ),
            array(    
		      	'name' => 'Embrylex',
		      	'number' => 246,
		      	'description' => 'Embrylex est né sous terre. Pour remonter à la surface, ce Pokemon doit manger la terre au-dessus de lui. Jusqu'à ce qu\'il y parvienne, Embrylex ne peut pas voir le visage de ses parents.',
		      	'type' => array (
		      		'Roche',
                    'Sol'
		      	)                
		    ),
            array(    
		      	'name' => 'Ymphect',
		      	'number' => 247,
		      	'description' => 'Ymphect crée un gaz dans son corps qu\'il comprime puissamment pour se propulser, comme un avion à réaction. Son corps est très solide. Il ne l\'endommage pas, même lorsqu\'il frappe de l\'acier trempé.',
		      	'type' => array (
		      		'Roche',
                    'Sol'
		      	)                
		    ),
            array(    
		      	'name' => 'Tyranocif',
		      	'number' => 248,
		      	'description' => 'Tyranocif est si incroyablement puissant qu\'il peut abattre une montagne pour y faire son nid. Ce Pokemon se promène dans les montagnes pour y trouver de nouveaux adversaires.',
		      	'type' => array (
		      		'Roche',
                    'Ténèbres'
		      	)                
		    ),
            array(    
		      	'name' => 'Lugia',
		      	'number' => 249,
		      	'description' => 'Les ailes de Lugia renferment une puissance dévastatrice. Un simple battement de ses ailes peut détruire de petites maisons. Du coup, ce Pokemon a choisi de vivre loin de tout, dans les profondeurs océaniques.',
		      	'type' => array (
		      		'Psy',
                    'Vol'
		      	)                
		    ),
            array(    
		      	'name' => 'Ho-Oh',
		      	'number' => 250,
		      	'description' => 'Les plumes de Ho-Oh brillent de sept couleurs selon l\'orientation de son corps par rapport à la lumière. On raconte que ces plumes portent bonheur. On dit aussi que ce Pokemon vit au pied d\'un arc-en-ciel.',
		      	'type' => array (
		      		'Feu',
                    'Vol'
		      	)                
		    ),
            array(    
		      	'name' => 'Celebi',
		      	'number' => 251,
		      	'description' => 'Ce Pokemon est venu du futur en voyageant dans le temps. On raconte que quand Celebi apparaït, cela signifie que le futur sera bon et agréable.',
		      	'type' => array (
		      		'Plante',
                    'Psy'
		      	)                
		    ),
		);

	    /* Insertion en base */
	    $i = 2;
	    $flag = 151;
	    foreach ($pokemons as $pokemon) {
			$addPokemon = new Pokemon();
			$addPokemon->setName($pokemon['name']);
			$addPokemon->setNumber($pokemon['number']);
			$addPokemon->setDescription($pokemon['description']);

			/* Nom des images */
			$secretImagePath = "secret_img_".$pokemon['number'].".png";
			$shinyImagePath = "shiny_img_".$pokemon['number'].".png";
			if($flag > 251){
				$i += 1;
			}
			$addPokemon->setSecretPathName($secretImagePath);
			$addPokemon->setShinyPathName($shinyImagePath);
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