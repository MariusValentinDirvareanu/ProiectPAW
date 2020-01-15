Daca nu merge partea de PHP este nevoie ca modulul mysqli sa fie activ. Activarea se face din fisierul php.ini.
Acesta se gaseste in /etc/php/7.3(sau alta versiune)/apache2/
Se creaza o baza de date si se ruleaza bazadedate.sql pentru a se crea tabelul necesar.
Se modifica fisierul conectare.php cu userul, parola si baza de date create.
$username = "user";
$password = 'parola';
$dbname = "baza de date";