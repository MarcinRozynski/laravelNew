--PL--

Witam

Aby po raz pierwszy po pobraniu projektu uruchomić go, należy:

1. Utworzyć w phpmyadmin bazę: "onlineventure", oraz skonfigurować plik database.php (ustawienia bazy są domyślne)
2. Po pomyślnym skonfigurowaniu bazy, kolejnym krokiem jest przemigrowanie tabel do bazy. Aby to zrobić, należy w konsoli przejść do ścieżki katalogu głównego aplikacji, następnie należy użyć polecenia "php artisan migrate".
3. Gdy już przemigrujemy tabele, możemy przejść do startowania serwera. Aby to zrobić, należy wpisać "php artisan serv" w katalogu głównym, oraz włączyć mySql np. w xampp'ie.
4. Teraz, gdy już nasz wirtualny serwer działa, możemy przejść pod adres "http://localhost:8000/".
5. Aby dodać nowy artykuł, należy się zalogować (w przypadku pierwszego uruchomienia zarejestrować się. W panelu użytkownika po zalogowaniu istnieje możliwość zmiany danych - loginu, hasła, maila itp., wbudowana w laravela autoryzacja pozwala również na dodanie avatara użytkownika, który wykorzystałem w przypadku widoku ze wszystkimi użytkownikami.)

--Eng--

Hello

To run the project for the first time after download it, you have to:

1. Create phpmyadmin database: "onlineventure", and configure file database.php (configuration is default)
2. After a successful configuration database, next step is to migrate tables to database. To do this you should go to the console, and go to the path of main catalog of the app, and after that you should use "php artisan migrate"
3. When you migrate tables, you can start server. To bo able to do this, you have to use "php artisan serv" in the main catalog, and run mySql in xampp for example.
4. Now, when virtual server is run, you can go to browser and type "http://localhost:8000/".
5. To create new article, you have to log in (if you're running app for the first time, you have to register. User panel allows you to change your user data - login, password, mail etc., build in laravel auth allows either to add avatars, which I used to the view with all users.)