<versione obsoleta>
composer create-progect symfony/framework-standard-edition <nome cartella del progetto> "^2.8"
	- Questo creera' la cartella del progetto con l'ambiente di 
		lavoro symfony

php app/console generate:bundle
	- crea un bundle a cui devi assegnare il nome
	- dara' errore perche' devi aggiungerlo agli autoloader
		nel composer.json per permettere al psr-4

DEFINIZIONI
	- AUTOLOADER: questo ti pemette di includere automaticamente i 
		PHP delle classi nei file senza il bisogno di require o inlude 
		manuali
	
	- PSR-4: e' uno standard di autoloading e stabilisce che 
		se una classe ha un certo namespace, si trova in una
		certa cartella
		es:
		qui dici che qualsiasi classe che inizia con AppBundle
		si trovera' in 'src/AppBundle'
		"autoload": {
        	"psr-4": {
        	    "AppBundle\\": "src/AppBundle",
        	    "E00Bundle\\": "src/E00Bundle"
        	},

composer dump-autoload
	- serve a rigenerare il composer.json dopo le modifiche

NB: la versione della scuola vuole che il tuo config/routing.yml
	contenga i percorsi della cartella del tuo Bundle

php app/console cache:clear
	- serve a pulire la cache prima di rimandare il server

composer dump-autoload
	- serve a rilanciare la generazione del composer
		dopo aver apportato modifiche al progetto

symfony server:start
	- per far partire il server

EX02
	andava creato un nuovo bundle che creasse un form
	con symfony.
	Nel Default controller

