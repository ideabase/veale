<?php
/**
 * Returns an array of system fonts
 * Feel free to edit this, update the font fallbacks, etc.
 */
function options_typography_get_os_fonts() {
    // OS Font Defaults
    $os_faces = array(
		'Arial, Helvetica, sans-serif'										=> 'Arial',
		'Verdana, Geneva, sans-serif'  	 									=> 'Verdana',
		'"Trebuchet MS", Arial, Helvetica, sans-serif' 					=> 'Trebuchet MS',
		'Georgia, "Times New Roman", Times, serif'   					=> 'Georgia',
		'"Times New Roman", Times, serif'     								=> 'Times New Roman',
		'Tahoma, Geneva, sans-serif'    										=> 'Tahoma',
		'"Palatino Linotype", "Book Antiqua", Palatino, serif'  		=> 'Palatino',
		'Helvetica*' 																=> 'Helvetica'
    );
    return $os_faces;
}


/**
 * Returns a select list of Google fonts
 * Feel free to edit this, update the fallbacks, etc.
 */
function options_typography_get_google_fonts() {
    // Google Font Defaults
    $google_faces = array(
			"Abel" => "Abel *",
			"Abril Fatface" => "Abril Fatface *",
			"Aclonica" => "Aclonica *",
			"Acme" => "Acme *",
			"Actor" => "Actor *",
			"Adamina" => "Adamina *",
			"Advent Pro" => "Advent Pro *",
			"Aguafina Script" => "Aguafina Script *",
			"Aladin" => "Aladin *",
			"Aldrich" => "Aldrich *",
			"Alegreya" => "Alegreya *",
			"Alegreya SC" => "Alegreya SC *",
			"Alex Brush" => "Alex Brush *",
			"Alfa Slab One" => "Alfa Slab One *",
			"Alice" => "Alice *",
			"Alike" => "Alike *",
			"Alike Angular" => "Alike Angular *",
			"Allan" => "Allan *",
			"Allerta" => "Allerta *",
			"Allerta Stencil" => "Allerta Stencil *",
			"Allura" => "Allura *",
			"Almendra" => "Almendra *",
			"Almendra SC" => "Almendra SC *",
			"Amaranth" => "Amaranth *",
			"Amatic SC" => "Amatic SC *",
			"Amethysta" => "Amethysta *",
			"Andada" => "Andada *",
			"Andika" => "Andika *",
			"Angkor" => "Angkor *",
			"Annie Use Your Telescope" => "Annie Use Your Telescope *",
			"Anonymous Pro" => "Anonymous Pro *",
			"Antic" => "Antic *",
			"Antic Didone" => "Antic Didone *",
			"Antic Slab" => "Antic Slab *",
			"Anton" => "Anton *",
			"Arapey" => "Arapey *",
			"Arbutus" => "Arbutus *",
			"Architects Daughter" => "Architects Daughter *",
			"Arimo" => "Arimo *",
			"Arizonia" => "Arizonia *",
			"Armata" => "Armata *",
			"Artifika" => "Artifika *",
			"Arvo" => "Arvo *",
			"Asap" => "Asap *",
			"Asset" => "Asset *",
			"Astloch" => "Astloch *",
			"Asul" => "Asul *",
			"Atomic Age" => "Atomic Age *",
			"Aubrey" => "Aubrey *",
			"Audiowide" => "Audiowide *",
			"Average" => "Average *",
			"Averia Gruesa Libre" => "Averia Gruesa Libre *",
			"Averia Libre" => "Averia Libre *",
			"Averia Sans Libre" => "Averia Sans Libre *",
			"Averia Serif Libre" => "Averia Serif Libre *",
			"Bad Script" => "Bad Script *",
			"Balthazar" => "Balthazar *",
			"Bangers" => "Bangers *",
			"Basic" => "Basic *",
			"Battambang" => "Battambang *",
			"Baumans" => "Baumans *",
			"Bayon" => "Bayon *",
			"Belgrano" => "Belgrano *",
			"Belleza" => "Belleza *",
			"Bentham" => "Bentham *",
			"Berkshire Swash" => "Berkshire Swash *",
			"Bevan" => "Bevan *",
			"Bigshot One" => "Bigshot One *",
			"Bilbo" => "Bilbo *",
			"Bilbo Swash Caps" => "Bilbo Swash Caps *",
			"Bitter" => "Bitter *",
			"Black Ops One" => "Black Ops One *",
			"Bokor" => "Bokor *",
			"Bonbon" => "Bonbon *",
			"Boogaloo" => "Boogaloo *",
			"Bowlby One" => "Bowlby One *",
			"Bowlby One SC" => "Bowlby One SC *",
			"Brawler" => "Brawler *",
			"Bree Serif" => "Bree Serif *",
			"Bubblegum Sans" => "Bubblegum Sans *",
			"Buda" => "Buda *",
			"Buenard" => "Buenard *",
			"Butcherman" => "Butcherman *",
			"Butterfly Kids" => "Butterfly Kids *",
			"Cabin" => "Cabin *",
			"Cabin Condensed" => "Cabin Condensed *",
			"Cabin Sketch" => "Cabin Sketch *",
			"Caesar Dressing" => "Caesar Dressing *",
			"Cagliostro" => "Cagliostro *",
			"Calligraffitti" => "Calligraffitti *",
			"Cambo" => "Cambo *",
			"Candal" => "Candal *",
			"Cantarell" => "Cantarell *",
			"Cantata One" => "Cantata One *",
			"Cardo" => "Cardo *",
			"Carme" => "Carme *",
			"Carter One" => "Carter One *",
			"Caudex" => "Caudex *",
			"Cedarville Cursive" => "Cedarville Cursive *",
			"Ceviche One" => "Ceviche One *",
			"Changa One" => "Changa One *",
			"Chango" => "Chango *",
			"Chau Philomene One" => "Chau Philomene One *",
			"Chelsea Market" => "Chelsea Market *",
			"Chenla" => "Chenla *",
			"Cherry Cream Soda" => "Cherry Cream Soda *",
			"Chewy" => "Chewy *",
			"Chicle" => "Chicle *",
			"Chivo" => "Chivo *",
			"Cinzel" => "Cinzel *",
			"Coda" => "Coda *",
			"Coda Caption" => "Coda Caption *",
			"Codystar" => "Codystar *",
			"Comfortaa" => "Comfortaa *",
			"Coming Soon" => "Coming Soon *",
			"Concert One" => "Concert One *",
			"Condiment" => "Condiment *",
			"Content" => "Content *",
			"Contrail One" => "Contrail One *",
			"Convergence" => "Convergence *",
			"Cookie" => "Cookie *",
			"Copse" => "Copse *",
			"Corben" => "Corben *",
			"Cousine" => "Cousine *",
			"Coustard" => "Coustard *",
			"Covered By Your Grace" => "Covered By Your Grace *",
			"Crafty Girls" => "Crafty Girls *",
			"Creepster" => "Creepster *",
			"Crete Round" => "Crete Round *",
			"Crimson Text" => "Crimson Text *",
			"Crushed" => "Crushed *",
			"Cuprum" => "Cuprum *",
			"Cutive" => "Cutive *",
			"Damion" => "Damion *",
			"Dancing Script" => "Dancing Script *",
			"Dangrek" => "Dangrek *",
			"Dawning of a New Day" => "Dawning of a New Day *",
			"Days One" => "Days One *",
			"Delius" => "Delius *",
			"Delius Swash Caps" => "Delius Swash Caps *",
			"Delius Unicase" => "Delius Unicase *",
			"Della Respira" => "Della Respira *",
			"Devonshire" => "Devonshire *",
			"Didact Gothic" => "Didact Gothic *",
			"Diplomata" => "Diplomata *",
			"Diplomata SC" => "Diplomata SC *",
			"Doppio One" => "Doppio One *",
			"Dorsa" => "Dorsa *",
			"Dosis" => "Dosis *",
			"Dr Sugiyama" => "Dr Sugiyama *",
			"Droid Sans" => "Droid Sans *",
			"Droid Sans Mono" => "Droid Sans Mono *",
			"Droid Serif" => "Droid Serif *",
			"Duru Sans" => "Duru Sans *",
			"Dynalight" => "Dynalight *",
			"EB Garamond" => "EB Garamond *",
			"Eater" => "Eater *",
			"Economica" => "Economica *",
			"Electrolize" => "Electrolize *",
			"Emblema One" => "Emblema One *",
			"Emilys Candy" => "Emilys Candy *",
			"Engagement" => "Engagement *",
			"Enriqueta" => "Enriqueta *",
			"Erica One" => "Erica One *",
			"Esteban" => "Esteban *",
			"Euphoria Script" => "Euphoria Script *",
			"Ewert" => "Ewert *",
			"Exo" => "Exo *",
			"Expletus Sans" => "Expletus Sans *",
			"Fanwood Text" => "Fanwood Text *",
			"Fascinate" => "Fascinate *",
			"Fascinate Inline" => "Fascinate Inline *",
			"Federant" => "Federant *",
			"Federo" => "Federo *",
			"Felipa" => "Felipa *",
			"Fjord One" => "Fjord One *",
			"Flamenco" => "Flamenco *",
			"Flavors" => "Flavors *",
			"Fondamento" => "Fondamento *",
			"Fontdiner Swanky" => "Fontdiner Swanky *",
			"Forum" => "Forum *",
			"Francois One" => "Francois One *",
			"Fredericka the Great" => "Fredericka the Great *",
			"Fredoka One" => "Fredoka One *",
			"Freehand" => "Freehand *",
			"Fresca" => "Fresca *",
			"Frijole" => "Frijole *",
			"Fugaz One" => "Fugaz One *",
			"GFS Didot" => "GFS Didot *",
			"GFS Neohellenic" => "GFS Neohellenic *",
			"Galdeano" => "Galdeano *",
			"Gentium Basic" => "Gentium Basic *",
			"Gentium Book Basic" => "Gentium Book Basic *",
			"Geo" => "Geo *",
			"Geostar" => "Geostar *",
			"Geostar Fill" => "Geostar Fill *",
			"Germania One" => "Germania One *",
			"Give You Glory" => "Give You Glory *",
			"Glass Antiqua" => "Glass Antiqua *",
			"Glegoo" => "Glegoo *",
			"Gloria Hallelujah" => "Gloria Hallelujah *",
			"Goblin One" => "Goblin One *",
			"Gochi Hand" => "Gochi Hand *",
			"Gorditas" => "Gorditas *",
			"Goudy Bookletter 1911" => "Goudy Bookletter 1911 *",
			"Graduate" => "Graduate *",
			"Gravitas One" => "Gravitas One *",
			"Great Vibes" => "Great Vibes *",
			"Gruppo" => "Gruppo *",
			"Gudea" => "Gudea *",
			"Habibi" => "Habibi *",
			"Hammersmith One" => "Hammersmith One *",
			"Handlee" => "Handlee *",
			"Hanuman" => "Hanuman *",
			"Happy Monkey" => "Happy Monkey *",
			"Henny Penny" => "Henny Penny *",
			"Herr Von Muellerhoff" => "Herr Von Muellerhoff *",
			"Holtwood One SC" => "Holtwood One SC *",
			"Homemade Apple" => "Homemade Apple *",
			"Homenaje" => "Homenaje *",
			"IM Fell DW Pica" => "IM Fell DW Pica *",
			"IM Fell DW Pica SC" => "IM Fell DW Pica SC *",
			"IM Fell Double Pica" => "IM Fell Double Pica *",
			"IM Fell Double Pica SC" => "IM Fell Double Pica SC *",
			"IM Fell English" => "IM Fell English *",
			"IM Fell English SC" => "IM Fell English SC *",
			"IM Fell French Canon" => "IM Fell French Canon *",
			"IM Fell French Canon SC" => "IM Fell French Canon SC *",
			"IM Fell Great Primer" => "IM Fell Great Primer *",
			"IM Fell Great Primer SC" => "IM Fell Great Primer SC *",
			"Iceberg" => "Iceberg *",
			"Iceland" => "Iceland *",
			"Imprima" => "Imprima *",
			"Inconsolata" => "Inconsolata *",
			"Inder" => "Inder *",
			"Indie Flower" => "Indie Flower *",
			"Inika" => "Inika *",
			"Irish Grover" => "Irish Grover *",
			"Istok Web" => "Istok Web *",
			"Italiana" => "Italiana *",
			"Italianno" => "Italianno *",
			"Jim Nightshade" => "Jim Nightshade *",
			"Jockey One" => "Jockey One *",
			"Jolly Lodger" => "Jolly Lodger *",
			"Josefin Sans" => "Josefin Sans *",
			"Josefin Slab" => "Josefin Slab *",
			"Judson" => "Judson *",
			"Julee" => "Julee *",
			"Junge" => "Junge *",
			"Jura" => "Jura *",
			"Just Another Hand" => "Just Another Hand *",
			"Just Me Again Down Here" => "Just Me Again Down Here *",
			"Kameron" => "Kameron *",
			"Karla" => "Karla *",
			"Kaushan Script" => "Kaushan Script *",
			"Kelly Slab" => "Kelly Slab *",
			"Kenia" => "Kenia *",
			"Khmer" => "Khmer *",
			"Knewave" => "Knewave *",
			"Kotta One" => "Kotta One *",
			"Koulen" => "Koulen *",
			"Kranky" => "Kranky *",
			"Kreon" => "Kreon *",
			"Kristi" => "Kristi *",
			"Krona One" => "Krona One *",
			"La Belle Aurore" => "La Belle Aurore *",
			"Lancelot" => "Lancelot *",
			"Lato" => "Lato *",
			"League Script" => "League Script *",
			"Leckerli One" => "Leckerli One *",
			"Ledger" => "Ledger *",
			"Lekton" => "Lekton *",
			"Lemon" => "Lemon *",
			"Lilita One" => "Lilita One *",
			"Limelight" => "Limelight *",
			"Linden Hill" => "Linden Hill *",
			"Lobster" => "Lobster *",
			"Lobster Two" => "Lobster Two *",
			"Londrina Outline" => "Londrina Outline *",
			"Londrina Shadow" => "Londrina Shadow *",
			"Londrina Sketch" => "Londrina Sketch *",
			"Londrina Solid" => "Londrina Solid *",
			"Lora" => "Lora *",
			"Love Ya Like A Sister" => "Love Ya Like A Sister *",
			"Loved by the King" => "Loved by the King *",
			"Lovers Quarrel" => "Lovers Quarrel *",
			"Luckiest Guy" => "Luckiest Guy *",
			"Lusitana" => "Lusitana *",
			"Lustria" => "Lustria *",
			"Macondo" => "Macondo *",
			"Macondo Swash Caps" => "Macondo Swash Caps *",
			"Magra" => "Magra *",
			"Maiden Orange" => "Maiden Orange *",
			"Mako" => "Mako *",
			"Marck Script" => "Marck Script *",
			"Marko One" => "Marko One *",
			"Marmelad" => "Marmelad *",
			"Marvel" => "Marvel *",
			"Mate" => "Mate *",
			"Mate SC" => "Mate SC *",
			"Maven Pro" => "Maven Pro *",
			"Meddon" => "Meddon *",
			"MedievalSharp" => "MedievalSharp *",
			"Medula One" => "Medula One *",
			"Megrim" => "Megrim *",
			"Merienda One" => "Merienda One *",
			"Merriweather" => "Merriweather *",
			"Metal" => "Metal *",
			"Metamorphous" => "Metamorphous *",
			"Metrophobic" => "Metrophobic *",
			"Michroma" => "Michroma *",
			"Miltonian" => "Miltonian *",
			"Miltonian Tattoo" => "Miltonian Tattoo *",
			"Miniver" => "Miniver *",
			"Miss Fajardose" => "Miss Fajardose *",
			"Modern Antiqua" => "Modern Antiqua *",
			"Molengo" => "Molengo *",
			"Monofett" => "Monofett *",
			"Monoton" => "Monoton *",
			"Monsieur La Doulaise" => "Monsieur La Doulaise *",
			"Montaga" => "Montaga *",
			"Montez" => "Montez *",
			"Montserrat" => "Montserrat *",
			"Moul" => "Moul *",
			"Moulpali" => "Moulpali *",
			"Mountains of Christmas" => "Mountains of Christmas *",
			"Mr Bedfort" => "Mr Bedfort *",
			"Mr Dafoe" => "Mr Dafoe *",
			"Mr De Haviland" => "Mr De Haviland *",
			"Mrs Saint Delafield" => "Mrs Saint Delafield *",
			"Mrs Sheppards" => "Mrs Sheppards *",
			"Muli" => "Muli *",
			"Mystery Quest" => "Mystery Quest *",
			"Neucha" => "Neucha *",
			"Neuton" => "Neuton *",
			"News Cycle" => "News Cycle *",
			"Niconne" => "Niconne *",
			"Nixie One" => "Nixie One *",
			"Nobile" => "Nobile *",
			"Nokora" => "Nokora *",
			"Norican" => "Norican *",
			"Nosifer" => "Nosifer *",
			"Nothing You Could Do" => "Nothing You Could Do *",
			"Noticia Text" => "Noticia Text *",
			"Nova Cut" => "Nova Cut *",
			"Nova Flat" => "Nova Flat *",
			"Nova Mono" => "Nova Mono *",
			"Nova Oval" => "Nova Oval *",
			"Nova Round" => "Nova Round *",
			"Nova Script" => "Nova Script *",
			"Nova Slim" => "Nova Slim *",
			"Nova Square" => "Nova Square *",
			"Numans" => "Numans *",
			"Nunito" => "Nunito *",
			"Odor Mean Chey" => "Odor Mean Chey *",
			"Old Standard TT" => "Old Standard TT *",
			"Oldenburg" => "Oldenburg *",
			"Oleo Script" => "Oleo Script *",
			"Open Sans" => "Open Sans *",
			"Open Sans Condensed" => "Open Sans Condensed *",
			"Orbitron" => "Orbitron *",
			"Original Surfer" => "Original Surfer *",
			"Oswald" => "Oswald *",
			"Over the Rainbow" => "Over the Rainbow *",
			"Overlock" => "Overlock *",
			"Overlock SC" => "Overlock SC *",
			"Ovo" => "Ovo *",
			"Oxygen" => "Oxygen *",
			"PT Mono" => "PT Mono *",
			"PT Sans" => "PT Sans *",
			"PT Sans Caption" => "PT Sans Caption *",
			"PT Sans Narrow" => "PT Sans Narrow *",
			"PT Serif" => "PT Serif *",
			"PT Serif Caption" => "PT Serif Caption *",
			"Pacifico" => "Pacifico *",
			"Parisienne" => "Parisienne *",
			"Passero One" => "Passero One *",
			"Passion One" => "Passion One *",
			"Patrick Hand" => "Patrick Hand *",
			"Patua One" => "Patua One *",
			"Paytone One" => "Paytone One *",
			"Permanent Marker" => "Permanent Marker *",
			"Petrona" => "Petrona *",
			"Philosopher" => "Philosopher *",
			"Piedra" => "Piedra *",
			"Pinyon Script" => "Pinyon Script *",
			"Plaster" => "Plaster *",
			"Play" => "Play *",
			"Playball" => "Playball *",
			"Playfair Display" => "Playfair Display *",
			"Podkova" => "Podkova *",
			"Poiret One" => "Poiret One *",
			"Poller One" => "Poller One *",
			"Poly" => "Poly *",
			"Pompiere" => "Pompiere *",
			"Pontano Sans" => "Pontano Sans *",
			"Port Lligat Sans" => "Port Lligat Sans *",
			"Port Lligat Slab" => "Port Lligat Slab *",
			"Prata" => "Prata *",
			"Preahvihear" => "Preahvihear *",
			"Press Start 2P" => "Press Start 2P *",
			"Princess Sofia" => "Princess Sofia *",
			"Prociono" => "Prociono *",
			"Prosto One" => "Prosto One *",
			"Puritan" => "Puritan *",
			"Quantico" => "Quantico *",
			"Quattrocento" => "Quattrocento *",
			"Quattrocento Sans" => "Quattrocento Sans *",
			"Questrial" => "Questrial *",
			"Quicksand" => "Quicksand *",
			"Qwigley" => "Qwigley *",
			"Radley" => "Radley *",
			"Raleway" => "Raleway *",
			"Rammetto One" => "Rammetto One *",
			"Rancho" => "Rancho *",
			"Rationale" => "Rationale *",
			"Redressed" => "Redressed *",
			"Reenie Beanie" => "Reenie Beanie *",
			"Revalia" => "Revalia *",
			"Ribeye" => "Ribeye *",
			"Ribeye Marrow" => "Ribeye Marrow *",
			"Righteous" => "Righteous *",
			"Rochester" => "Rochester *",
			"Rock Salt" => "Rock Salt *",
			"Rokkitt" => "Rokkitt *",
			"Ropa Sans" => "Ropa Sans *",
			"Rosario" => "Rosario *",
			"Rosarivo" => "Rosarivo *",
			"Rouge Script" => "Rouge Script *",
			"Ruda" => "Ruda *",
			"Ruge Boogie" => "Ruge Boogie *",
			"Ruluko" => "Ruluko *",
			"Ruslan Display" => "Ruslan Display *",
			"Russo One" => "Russo One *",
			"Ruthie" => "Ruthie *",
			"Sail" => "Sail *",
			"Salsa" => "Salsa *",
			"Sancreek" => "Sancreek *",
			"Sansita One" => "Sansita One *",
			"Sarina" => "Sarina *",
			"Satisfy" => "Satisfy *",
			"Schoolbell" => "Schoolbell *",
			"Seaweed Script" => "Seaweed Script *",
			"Sevillana" => "Sevillana *",
			"Shadows Into Light" => "Shadows Into Light *",
			"Shadows Into Light Two" => "Shadows Into Light Two *",
			"Shanti" => "Shanti *",
			"Share" => "Share *",
			"Shojumaru" => "Shojumaru *",
			"Short Stack" => "Short Stack *",
			"Siemreap" => "Siemreap *",
			"Sigmar One" => "Sigmar One *",
			"Signika" => "Signika *",
			"Signika Negative" => "Signika Negative *",
			"Simonetta" => "Simonetta *",
			"Sirin Stencil" => "Sirin Stencil *",
			"Six Caps" => "Six Caps *",
			"Slackey" => "Slackey *",
			"Smokum" => "Smokum *",
			"Smythe" => "Smythe *",
			"Sniglet" => "Sniglet *",
			"Snippet" => "Snippet *",
			"Sofia" => "Sofia *",
			"Sonsie One" => "Sonsie One *",
			"Sorts Mill Goudy" => "Sorts Mill Goudy *",
			"Special Elite" => "Special Elite *",
			"Spicy Rice" => "Spicy Rice *",
			"Spinnaker" => "Spinnaker *",
			"Spirax" => "Spirax *",
			"Squada One" => "Squada One *",
			"Stardos Stencil" => "Stardos Stencil *",
			"Stint Ultra Condensed" => "Stint Ultra Condensed *",
			"Stint Ultra Expanded" => "Stint Ultra Expanded *",
			"Stoke" => "Stoke *",
			"Sue Ellen Francisco" => "Sue Ellen Francisco *",
			"Sunshiney" => "Sunshiney *",
			"Supermercado One" => "Supermercado One *",
			"Suwannaphum" => "Suwannaphum *",
			"Swanky and Moo Moo" => "Swanky and Moo Moo *",
			"Syncopate" => "Syncopate *",
			"Tangerine" => "Tangerine *",
			"Taprom" => "Taprom *",
			"Telex" => "Telex *",
			"Tenor Sans" => "Tenor Sans *",
			"The Girl Next Door" => "The Girl Next Door *",
			"Tienne" => "Tienne *",
			"Tinos" => "Tinos *",
			"Titan One" => "Titan One *",
			"Trade Winds" => "Trade Winds *",
			"Trocchi" => "Trocchi *",
			"Trochut" => "Trochut *",
			"Trykker" => "Trykker *",
			"Tulpen One" => "Tulpen One *",
			"Ubuntu" => "Ubuntu *",
			"Ubuntu Condensed" => "Ubuntu Condensed *",
			"Ubuntu Mono" => "Ubuntu Mono *",
			"Ultra" => "Ultra *",
			"Uncial Antiqua" => "Uncial Antiqua *",
			"UnifrakturCook" => "UnifrakturCook *",
			"UnifrakturMaguntia" => "UnifrakturMaguntia *",
			"Unkempt" => "Unkempt *",
			"Unlock" => "Unlock *",
			"Unna" => "Unna *",
			"VT323" => "VT323 *",
			"Varela" => "Varela *",
			"Varela Round" => "Varela Round *",
			"Vast Shadow" => "Vast Shadow *",
			"Vibur" => "Vibur *",
			"Vidaloka" => "Vidaloka *",
			"Viga" => "Viga *",
			"Voces" => "Voces *",
			"Volkhov" => "Volkhov *",
			"Vollkorn" => "Vollkorn *",
			"Voltaire" => "Voltaire *",
			"Waiting for the Sunrise" => "Waiting for the Sunrise *",
			"Wallpoet" => "Wallpoet *",
			"Walter Turncoat" => "Walter Turncoat *",
			"Wellfleet" => "Wellfleet *",
			"Wire One" => "Wire One *",
			"Yanone Kaffeesatz" => "Yanone Kaffeesatz *",
			"Yellowtail" => "Yellowtail *",
			"Yeseva One" => "Yeseva One *",
			"Yesteryear" => "Yesteryear *",
			"Zeyada" => "Zeyad *a"
    );
    return $google_faces;
}


/**
 * Checks font options to see if a Google font is selected.
 * If so, options_typography_enqueue_google_font is called to enqueue the font.
 * Ensures that each Google font is only enqueued once.
 */
if ( !function_exists( 'options_typography_google_fonts' ) ) {
    function options_typography_google_fonts() {
        $all_google_fonts = array_keys( options_typography_get_google_fonts() );
        // Define all the options that possibly have a unique Google font
        $h1_heading = of_get_option('h1_heading', array( 'size' => '13px', 'face' => 'Arial, Helvetica, sans-serif', 'color' => '#666666'));
		$h2_heading = of_get_option('h2_heading', array( 'size' => '13px', 'face' => 'Arial, Helvetica, sans-serif', 'color' => '#666666'));
		$h3_heading = of_get_option('h3_heading', array( 'size' => '13px', 'face' => 'Arial, Helvetica, sans-serif', 'color' => '#666666'));
		$h4_heading = of_get_option('h4_heading', array( 'size' => '13px', 'face' => 'Arial, Helvetica, sans-serif', 'color' => '#666666'));
		$h5_heading = of_get_option('h5_heading', array( 'size' => '13px', 'face' => 'Arial, Helvetica, sans-serif', 'color' => '#666666'));
		$h6_heading = of_get_option('h6_heading', array( 'size' => '13px', 'face' => 'Arial, Helvetica, sans-serif', 'color' => '#666666'));
		$google_mixed_3 = of_get_option('google_mixed_3', array( 'size' => '13px', 'face' => 'Arial, Helvetica, sans-serif', 'color' => '#666666'));
        // Get the font face for each option and put it in an array
        $selected_fonts = array(
            			$h1_heading['face'],
						$h2_heading['face'],
						$h3_heading['face'],
						$h4_heading['face'],
						$h5_heading['face'],
						$h6_heading['face'],
						$google_mixed_3['face'] );
        // Remove any duplicates in the list
        $selected_fonts = array_unique($selected_fonts);
        // Check each of the unique fonts against the defined Google fonts
        // If it is a Google font, go ahead and call the function to enqueue it
        foreach ( $selected_fonts as $font ) {
            if ( in_array( $font, $all_google_fonts ) ) {
                options_typography_enqueue_google_font($font);
            }
        }
    }
}
add_action( 'wp_enqueue_scripts', 'options_typography_google_fonts' );
/**
 * Enqueues the Google $font that is passed
 */
function options_typography_enqueue_google_font($font) {
    $font = explode(',', $font);
    $font = $font[0];
    // Certain Google fonts need slight tweaks in order to load properly
    // Like our friend "Raleway"
    if ( $font == 'Raleway' )
        $font = 'Raleway:100';
    $font = str_replace(" ", "+", $font);
    wp_enqueue_style( "options_typography_$font", "http://fonts.googleapis.com/css?family=$font", false, null, 'all' );
}


/*
 * Outputs the selected option panel styles inline into the <head>
 */
function options_typography_styles() {
     $output = '';
     $input = '';
		 
		 
		 if ( of_get_option( 'h1_heading' ) ) {
          $input = of_get_option( 'h1_heading' );
			$output .= options_typography_font_styles( of_get_option( 'h1_heading' ) , 'h1');
     }
		 
		 if ( of_get_option( 'h2_heading' ) ) {
          $input = of_get_option( 'h2_heading' );
					$output .= options_typography_font_styles( of_get_option( 'h2_heading' ) , 'h2');
     }
		 
		 if ( of_get_option( 'h3_heading' ) ) {
          $input = of_get_option( 'h3_heading' );
					$output .= options_typography_font_styles( of_get_option( 'h3_heading' ) , 'h3');
     }
		 
		 if ( of_get_option( 'h4_heading' ) ) {
          $input = of_get_option( 'h4_heading' );
					$output .= options_typography_font_styles( of_get_option( 'h4_heading' ) , 'h4');
     }
		 
		 if ( of_get_option( 'h5_heading' ) ) {
          $input = of_get_option( 'h5_heading' );
					$output .= options_typography_font_styles( of_get_option( 'h5_heading' ) , 'h5');
     }
		 
		 if ( of_get_option( 'h6_heading' ) ) {
          $input = of_get_option( 'h6_heading' );
					$output .= options_typography_font_styles( of_get_option( 'h6_heading' ) , 'h6');
     }
		 
		 
		 if ( of_get_option( 'google_mixed_3' ) ) {
         	$input = of_get_option( 'google_mixed_3' );
			$output .= options_typography_font_styles( of_get_option( 'google_mixed_3' ) , 'body');
     }
		 
     if ( $output != '' ) {
    		$output = "\n<style>\n" . $output . "</style>\n";
    		echo $output;
     }
}
add_action('wp_head', 'options_typography_styles');


/*
 * Returns a typography option in a format that can be outputted as inline CSS
 */
function options_typography_font_styles($option, $selectors) {
		$output = $selectors . ' {';
		$output .= ' color:' . $option['color'] .'; ';
		$output .= 'font-family:' . $option['face'] . '; ';
		$output .= 'font-weight:' . $option['style'] . '; ';
		$output .= 'font-size:' . $option['size'] . '; ';
		$output .= '}';
		$output .= "\n";
		return $output;
}

/*
 * This is one the same but for body
 */
function options_typography_font_styles_body($option, $selectors) {
		$output = $selectors . ' { ';
		$output .= 'font: ' . $option['style'] . ' ' . $option['size'] . '/'.$option['lineheight'].' ' . $option['face'] . '; ';
		$output .= ' color:' . $option['color'] .'; ';
		$output .= '}';
		$output .= "\n";
		return $output;
}
?>
