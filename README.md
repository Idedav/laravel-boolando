## laravel-boolando

Create un nuovo progetto Laravel. Concentratevi sul layout: create un file di layout in cui inserire la struttura comune di tutte le pagine del sito web (tag head, tag body, ...) eventualmente includendo header e footer tramite due partials.
Create poi una rotta per visualizzare la lista di tutti i prodotti recuperati da un file inserito nella cartella config e abbellite il tutto sfruttando SASS.
Bonus:
Create più pagine istituzionali che condividono lo stesso layout (ad es. about, oppure la pagina di dettaglio di un prodotto)
Buon lavoro!
PS create il progetto con laravel 9
composer create-project --prefer-dist laravel/laravel:^9.2 your_project_name_here
poi, entrate nella cartella e intallate il paccheto di Fabio Pacifici
composer require pacificdev/laravel_9_preset
poi installate ui di boostrap
php artisan preset:ui bootstrap
e poi npm install e npm run dev su un teminale e nell’altro php artisan serve
