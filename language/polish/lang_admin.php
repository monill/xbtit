<?php
global $XBTT_USE;
$language["ACP_BAN_IP"]="Ban na IP";
$language["ACP_FORUM"]="Ustawienia forum";
$language["ACP_USER_GROUP"]="Ustawienia rang użytkowników";
$language["ACP_STYLES"]="Ustawienia styli";
$language["ACP_LANGUAGES"]="Ustawienia językowe";
$language["ACP_CATEGORIES"]="Ustawienia kategorii";
$language["ACP_TRACKER_SETTINGS"]="Ustawienia trackera";
$language["ACP_OPTIMIZE_DB"]="Optymalizuj bazę danych";
$language["ACP_CENSORED"]="Ustawienia ocenzurowanych słów";
$language["ACP_DBUTILS"]="Narzędzia bazy danych";
$language["ACP_HACKS"]="Hacki";
$language["ACP_HACKS_CONFIG"]="Konfiguracja hacków";
$language["ACP_MODULES"]="Moduły";
$language["ACP_MODULES_CONFIG"]="Ustawienia modułów";
$language["ACP_MASSPM"]="Masowa wiadomość";
$language["ACP_PRUNE_TORRENTS"]="Nieaktywne torrentów";
$language["ACP_PRUNE_USERS"]="Nieaktywni użytkownicy";
$language["ACP_SITE_LOG"]="Przeglądaj logi strony";
$language["ACP_SEARCH_DIFF"]="Szukaj różnic";
$language["ACP_BLOCKS"]="Ustawienia bloków";
$language["ACP_POLLS"]="Ustawienia ankiet";
$language["ACP_MENU"]="Menu admina";
$language["ACP_FRONTEND"]="Ustawienia wyglądu";
$language["ACP_USERS_TOOLS"]="Narzędzia użytkownika";
$language["ACP_TORRENTS_TOOLS"]="Narzędzia torrentów";
$language["ACP_OTHER_TOOLS"]="Pozostałe narzędzia";
$language["ACP_MYSQL_STATS"]="Statystyki MySQL";
$language["XBTT_BACKEND"]="Opcje XBTT";
$language["XBTT_USE"]="Użyj <a href=\"http://xbtt.sourceforge.net/tracker/\" target=\"_blank\">XBTT</a> jako backend?";
$language["XBTT_URL"]="Bazowy adress url XBTT (np. http://localhost:2710)";
$language["GENERAL_SETTINGS"]="Ogólne ustawienia";
$language["TRACKER_NAME"]="Nazwa strony";
$language["TRACKER_BASEURL"]="Bazowy adres URL trackera (bez końcowego /)";
$language["TRACKER_ANNOUNCE"]="Adresy Announce URL trackera (jeden na wiersz)".($XBTT_USE?"<br />\n<span style=\"color:#FF0000; font-weight: bold;\">Sprawdź adresy announce dwa razy, jeżeli włączyłeś XBTT...</span>":"");
$language["TRACKER_EMAIL"]="Email właściciela trackera";
$language["TORRENT_FOLDER"]="Folder z plikami torrent";
$language["ALLOW_EXTERNAL"]="Zezwalaj na zewnętrzne torrenty";
$language["ALLOW_GZIP"]="Włącz GZIP";
$language["ALLOW_DEBUG"]="Pokazuj info Debugera na dole stron";
$language["ALLOW_DHT"]="Wyłącz DHT (prywatna flaga w torrentach).<br />\nBędzie działać tylko dla nowo wstawionych torrentów";
$language["ALLOW_LIVESTATS"]="Włącz Statystyki na żywo (może powodować duże obciążenie serwera!)";
$language["ALLOW_SITELOG"]="Włącz podstawowowy log strony (zapisuj zmiany dotyczące torrentów/użytkowników)";
$language["ALLOW_HISTORY"]="Włącz podstawową historię (torrenty/użytkownicy)";
$language["ALLOW_PRIVATE_ANNOUNCE"]="Prywatny Announce";
$language["ALLOW_PRIVATE_SCRAPE"]="Prywatny Scrape";
$language["SHOW_UPLOADER"]="Pokazuj nazwę użytkownika przesyłającego torrenty";
$language["USE_POPUP"]="Użyj wyskakującego okienka dla szczegółów torrentów/użytkowników";
$language["DEFAULT_LANGUAGE"]="Domyślny język";
$language["DEFAULT_CHARSET"]="Domyślne kodowanie znaków.<br />\n(Jeżeli twój język nie wyświetla się prawidłowo, spróbuj UTF-8)";
$language["DEFAULT_STYLE"]="Domyślny styl";
$language["MAX_USERS"]="Limit użytkowników (numerycznie, 0 = brak limitu)";
$language["MAX_TORRENTS_PER_PAGE"]="Torrentów na stronę";
$language["PHP_ERROR"]="Ukrywaj błędy PHP";
$language["SPECIFIC_SETTINGS"]="Specyficzne ustawienia tracker'a";
$language["SETTING_INTERVAL_SANITY"]="Interwał Sanity (numerycznie sekundy, 0 = wyłączone)<br />Dobra wartość, jeżeli włączone, to 1800 (30 minut)";
$language["SETTING_INTERVAL_EXTERNAL"]="Interwał uaktualniania zewnętrznych torrentów (numerycznie sekundy, 0 = wyłączone)<br />w zależności od liczby zewnętrznych torrentów";
$language["SETTING_INTERVAL_MAX_REANNOUNCE"]="Maksymalny reannounce interwał (numerycznie, w sekundach)";
$language["SETTING_INTERVAL_MIN_REANNOUNCE"]="Minimalny reannounce interwał (numerycznie, w sekundach)";
$language["SETTING_MAX_PEERS"]="Maksymalna liczba peers na żądanie (numerycznie)";
$language["SETTING_DYNAMIC"]="Zezwól na dynamiczne torrenty (nie polecane)";
$language["SETTING_NAT_CHECK"]="Sprawdzanie NAT";
$language["SETTING_PERSISTENT_DB"]="Stałe połączenia (Baza danych, nie polecane)";
$language["SETTING_OVERRIDE_IP"]="Zezwalaj na nadpisywanie IP użytkowników";
$language["SETTING_CALCULATE_SPEED"]="Oblicz prędkość i liczbę pobranych bajtów";
$language["SETTING_PEER_CACHING"]="Cache tabel (to powinno nieco zmniejszyć obciążenie)";
$language["SETTING_SEEDS_PID"]="Maksymalna liczba seedów z tym samym PID";
$language["SETTING_LEECHERS_PID"]="Maksymalna liczba leecherów z tym samym PID";
$language["SETTING_VALIDATION"]="Zatwierdzanie kont";
$language["SETTING_SHOW_COMMENTS"]="Pokaż komentarze";
$language["SETTING_SHOW_RATING"]="Pokaż ocenę";
$language["TORRENT_LIST"]="Ustawienia listy torrentów";
$language["SETTING_CAPTCHA"]="Bezpieczna rejestracja (użycie ImageCode, wymagane biblioteki GD+Freetype)";
$language["SETTING_FORUM"]="Link do forum może być:<br /><li><font color=\"#FF0000\">wewnętrzny</font> albo pusty (brak wartości) dla forum wewnętrznego</li><li><font color=\"#FF0000\">smf</font>, dla zintegrowanego <a target=\"_new\" href=\"http://www.simplemachines.org\">Simple Machines Forum</a> (1.x.x)</li><li><font color=\"#FF0000\">smf2</font>, dla zintegrowanego <a target=\"_new\" href=\"http://www.simplemachines.org\">Simple Machines Forum</a> (2.x)</li><li><font color=\"#FF0000\">ipb</font>, dla zintegrowanego <a target=\"_new\" href=\"http://www.invisionpower.com\">Invision Power Board</a> (3.x.x)</li><li>Twoje własne forum (Wprowadź adres url forum)</li>";
$language["BLOCKS_SETTING"]="Ustawienia strony głównej/bloków";
$language["SETTING_CLOCK"]="Typ zegara";
$language["SETTING_FORUMBLOCK"]="Typ bloku Forum";
$language["SETTING_NUM_NEWS"]="Limit dla bloku Najnowsze Newsy (numerycznie)";
$language["SETTING_NUM_POSTS"]="Limit dla bloku Forum (numerycznie)";
$language["SETTING_NUM_LASTTORRENTS"]="Limit dla bloku Najnowsze torrenty (numerycznie)";
$language["SETTING_NUM_TOPTORRENTS"]="Limit dla bloku Najpopularniejsze torrenty (numerycznie)";
$language["CLOCK_ANALOG"]="Analogowy";
$language["CLOCK_DIGITAL"]="Cyfrowy";
$language["FORUMBLOCK_POSTS"]="Najnowsze posty";
$language["FORUMBLOCK_TOPICS"]="Najnowsze aktywne posty";
$language["CONFIG_SAVED"]="Konfiguracja została zapisana poprawnie!";
$language["CACHE_SITE"]="Cache interwał (numerycznie, w sekundach, 0 = wyłączone)";
$language["ALL_FIELDS_REQUIRED"]="Wymagane są wszystkie pola!";
$language["SETTING_CUT_LONG_NAME"]="Ucinaj długie nazwy torrentów po x znakach (0 = nie ucinaj)";
$language["MAILER_SETTINGS"]="Mailer";
$language["SETTING_MAIL_TYPE"]="Typ Mailera";
$language["SETTING_SMTP_SERVER"]="Server SMTP";
$language["SETTING_SMTP_PORT"]="Port SMTP";
$language["SETTING_SMTP_USERNAME"]="Login do SMTP";
$language["SETTING_SMTP_PASSWORD"]="Hasło do SMTP";
$language["SETTING_SMTP_PASSWORD_REPEAT"]="Powtórz hasło do SMTP";
$language["XBTT_TABLES_ERROR"]="Powinieneś zaimportować tabele xbtt (spójrz na instrukcję instalacji xbtt) do twojej bazy danych przed aktywacją xbtt!";
$language["XBTT_URL_ERROR"]="Adres url dla xbtt jest wymagany!";
// BAN FORM
$language["BAN_NOTE"]="W tej części panelu admina, możesz zobaczyć zbanowane IP lub zbanować nowe IP zabraniając tym samym dostępu do trackera.<br />\nMusisz wpisać zakres od (początkowego IP) do (końcowego IP).";
$language["BAN_NOIP"]="Nie ma zbanowanych IP";
$language["BAN_FIRSTIP"]="Początkowe IP";
$language["BAN_LASTIP"]="Końcowe IP";
$language["BAN_COMMENTS"]="Komentarze";
$language["BAN_REMOVE"]="Usuń";
$language["BAN_BY"]="Przez";
$language["BAN_ADDED"]="Data";
$language["BAN_INSERT"]="Dodaj nowy zakres zbanowanych IP";
$language["BAN_IP_ERROR"]="Niepoprawny adres IP.";
$language["BAN_NO_IP_WRITE"]="Nie wpisałeś adresu IP!";
$language["BAN_DELETED"]="Zakres IP został usunięty z bazy danych.<br />\n<br />\n<a href=\"index.php?page=admin&amp;user=".$CURUSER["uid"]."&amp;code=".$CURUSER["random"]."&amp;do=banip&amp;action=read\">Powrót do Ban na IP</a>";
// LANGUAGES
$language["LANGUAGE_SETTINGS"]="Ustawienia językowe";
$language["LANGUAGE"]="Język";
$language["LANGUAGE_ADD"]="Dodaj nowy język";
$language["LANGUAGE_SAVED"]="Gratulacje, język został zmodyfikowany";
// STYLES
$language["STYLE_SETTINGS"]="Ustawienia styli/motywów";
$language["STYLE_EDIT"]="Edytuj styl";
$language["STYLE_ADD"]="Dodaj nowy styl";
$language["STYLE_NAME"]="Nazwa stylu";
$language["STYLE_URL"]="URL stylu";
$language["STYLE_FOLDER"]="Folder styli ";
$language["STYLE_NOTE"]="W tej sekcji możesz zarządzać twoimi ustawieniami styli, ale musisz najpierw skopiować pliki przez ftp bądź sftp.";
// CATEGORIES
$language["CATEGORY_SETTINGS"]="Ustawienia kategorii";
$language["CATEGORY_IMAGE"]="Ikona kategorii";
$language["CATEGORY_ADD"]="Dodaj nową kategorię";
$language["CATEGORY_SORT_INDEX"]="Indeks sortowania";
$language["CATEGORY_FULL"]="Kategoria";
$language["CATEGORY_EDIT"]="Edytuj kategorię";
$language["CATEGORY_SUB"]="Podkategoria";
$language["CATEGORY_NAME"]="Nazwa";
// CENSORED
$language["CENSORED_NOTE"]="Wpisz <b>jedno słowo na linię</b>, aby je ocenzurować (zostanie zamienione na *ocenzurowane*)";
$language["CENSORED_EDIT"]="Edytuj ocenzurowane słowa";
// BLOCKS
$language["BLOCKS_SETTINGS"]="Konfiguracja bloków";
$language["ENABLED"]="Włączone";
$language["ORDER"]="Kolejność";
$language["BLOCK_NAME"]="Nazwa bloku";
$language["BLOCK_POSITION"]="Pozycja";
$language["BLOCK_TITLE"]="Tytuł języka (będzie użyty do wyświetlenia przetłumaczonego tytułu)";
$language["BLOCK_USE_CACHE"]="Włączyć cache dla tego bloku?";
$language["ERR_BLOCK_NAME"]="Musisz wybrać jeden blok z listy rozwijanej!";
$language["BLOCK_ADD_NEW"]="Dodaj nowy blok";
// POLLS (more in lang_polls.php)
$language["POLLS_SETTINGS"]="Konfiguracja ankiet";
$language["POLLID"]="Identyfikator ankiety";
$language["INSERT_NEW_POLL"]="Dodaj nową ankietę";
$language["CANT_FIND_POLL"]="Nie można odnaleźć ankiety";
$language["ADD_NEW_POLL"]="Dodaj ankietę";
// GROUPS
$language["USER_GROUPS"]="Ustawienia rang (kliknij na nazwę rangi, aby edytować)";
$language["VIEW_EDIT_DEL"]="Podgląd/Edycja/Usuwanie";
$language["CANT_DELETE_GROUP"]="Ta ranga nie może być usunięta!";
$language["GROUP_NAME"]="Nazwa rangi";
$language["GROUP_VIEW_NEWS"]="Przeglądanie newsy";
$language["GROUP_VIEW_FORUM"]="Przeglądanie forum";
$language["GROUP_EDIT_FORUM"]="Edytowanie forum";
$language["GROUP_BASE_LEVEL"]="Wybierz bazową rangę";
$language["GROUP_ERR_BASE_SEL"]="Błąd w wyborze bazowej rangi!";
$language["GROUP_DELETE_NEWS"]="Usuwanie newsów";
$language["GROUP_PCOLOR"]="Kolor prefiksu (np. ";
$language["GROUP_SCOLOR"]="Kolor sufiksu (np. ";
$language["GROUP_VIEW_TORR"]="Przeglądanie torrentów";
$language["GROUP_EDIT_TORR"]="Edycja torrentów";
$language["GROUP_VIEW_USERS"]="Przeglądanie użytkowników";
$language["GROUP_DELETE_TORR"]="Usuwanie torrentów";
$language["GROUP_EDIT_USERS"]="Edycja użytkowników";
$language["GROUP_DOWNLOAD"]="Może ściągać";
$language["GROUP_DELETE_USERS"]="Usuwanie użytkowników";
$language["GROUP_DELETE_FORUM"]="Usuwanie forum";
$language["GROUP_GO_CP"]="Dostęp do Panelu Admina";
$language["GROUP_EDIT_NEWS"]="Edycja newsów";
$language["GROUP_ADD_NEW"]="Dodaj nową rangę";
$language["GROUP_UPLOAD"]="Może wysyłać";
$language["GROUP_WT"]="Czas oczekiwania, jeżeli ratio <1";
$language["GROUP_EDIT_GROUP"]="Edycja rangi";
$language["GROUP_VIEW"]="Podgląd";
$language["GROUP_EDIT"]="Edycja";
$language["GROUP_DELETE"]="Usuń";
$language["INSERT_USER_GROUP"]="Dodaj nową rangę";
$language["ERR_CANT_FIND_GROUP"]="Nie znaleziono tej rangi!";
$language["GROUP_DELETED"]="Ranga została usunięta!";
// MASS PM
$language["USERS_FOUND"]="Użytkownicy znalezieni";
$language["USERS_PMED"]="Użytkownicy powiadomieni";
$language["WHO_PM"]="Do kogo chcesz wysłać masowy PM?";
$language["MASS_SENT"]="Masowy PM wysłany!!!";
$language["MASS_PM"]="Masowy PM";
$language["MASS_PM_ERROR"]="Dobrym pomysłem byłoby wpisać coś zanim wyślesz!!!!";
$language["RATIO_ONLY"]="ratio równe";
$language["RATIO_GREAT"]="ratio powyżej";
$language["RATIO_LOW"]="ratio poniżej";
$language["RATIO_FROM"]="Od";
$language["RATIO_TO"]="Do";
$language["MASSPM_INFO"]="Info";
// PRUNE USERS
$language["PRUNE_USERS_PRUNED"]="Usunięci nieaktywni użytkownicy";
$language["PRUNE_USERS"]="Usuń niekatywnych użytkowników";
$language["PRUNE_USERS_INFO"]="Wprowadź liczbę dni, po których użytkownicy zostaną uznani za \"nieaktywnych\" (nie zalogowani od x dni LUB zarejestrowani od x dni i ciągle nie potwierdzeni )";
// SEARCH DIFF
$language["SEARCH_DIFF"]="Szukaj różnic";
$language["SEARCH_DIFF_MESSAGE"]="Wiadomość";
$language["DIFFERENCE"]="Różnice";
$language["SEARCH_DIFF_CHANGE_GROUP"]="Zmień rangę";
// PRUNE TORRENTS
$language["PRUNE_TORRENTS_PRUNED"]="Usunięte nieaktywne torrenty";
$language["PRUNE_TORRENTS"]="Usuń nieaktywne torrenty";
$language["PRUNE_TORRENTS_INFO"]="Wprowadź liczbę dni, po których torrenty uznane zostaną za \"nieaktywne\"";
$language["LEECHERS"]="leecher(ów)";
$language["SEEDS"]="seed(ów)";
// DBUTILS
$language["DBUTILS_TABLENAME"]="Nazwa tabeli";
$language["DBUTILS_RECORDS"]="Rekordów";
$language["DBUTILS_DATALENGTH"]="Wielkość danych";
$language["DBUTILS_OVERHEAD"]="Nadmiar";
$language["DBUTILS_REPAIR"]="Napraw";
$language["DBUTILS_OPTIMIZE"]="Optymalizuj";
$language["DBUTILS_ANALYSE"]="Analizuj";
$language["DBUTILS_CHECK"]="Sprawdź";
$language["DBUTILS_DELETE"]="Usuń";
$language["DBUTILS_OPERATION"]="Operacja";
$language["DBUTILS_INFO"]="Info";
$language["DBUTILS_STATUS"]="Status";
$language["DBUTILS_TABLES"]="Tabele";
// MYSQL STATUS
$language["MYSQL_STATUS"]="Stan MySQL";
// SITE LOG
$language["SITE_LOG"]="Log strony";
// FORUMS
$language["FORUM_MIN_CREATE"]="Minimalna ranga tworzenia";
$language["FORUM_MIN_WRITE"]="Minimalna ranga pisania";
$language["FORUM_MIN_READ"]="Minimalna ranga czytania";
$language["FORUM_SETTINGS"]="Ustawienia forum";
$language["FORUM_EDIT"]="Edytuj forum";
$language["FORUM_ADD_NEW"]="Dodaj nowe forum";
$language["FORUM_PARENT"]="Nadrzędne forum";
$language["FORUM_SORRY_PARENT"]="(Przykro mi, nie mogę mieć nadrzędnego forum, ponieważ sam nim jestem)";
$language["FORUM_PRUNE_1"]="W tym forum są wątki i/lub posty!<br />Stracisz wszystkie dane...<br />";
$language["FORUM_PRUNE_2"]="Jeżeli jesteś pewien, że chcesz usunąć to forum";
$language["FORUM_PRUNE_3"]="w przeciwnym razie wycofaj się.";
$language["FORUM_ERR_CANNOT_DELETE_PARENT"]="Nie możesz usunąć forum z subforami, przenieś subfora do innego forum i spróbuj ponownie";
// MODULES
$language["ADD_NEW_MODULE"]="Dodaj nowy moduł";
$language["TYPE"]="Typ";
$language["DATE_CHANGED"]="Data zmiany";
$language["DATE_CREATED"]="Data utworzenia";
$language["ACTIVE_MODULES"]="Aktywne moduły: ";
$language["NOT_ACTIVE_MODULES"]="Nieaktywne moduły: ";
$language["TOTAL_MODULES"]="Wszystkich modułów: ";
$language["DEACTIVATE"]="Deaktywuj";
$language["ACTIVATE"]="Aktywuj";
$language["STAFF"]="Załoga";
$language["MISC"]="Różne";
$language["TORRENT"]="Torrent";
$language["STYLE"]="Styl";
$language["ID_MODULE"]="ID";
// HACKS
$language["HACK_TITLE"]="Nazwa";
$language["HACK_VERSION"]="Wersja";
$language["HACK_AUTHOR"]="Autor";
$language["HACK_ADDED"]="Dodany";
$language["HACK_NONE"]="Nie zainstalowano żadnego hacka";
$language["HACK_ADD_NEW"]="Dodaj nowy hack";
$language["HACK_SELECT"]="Wybierz";
$language["HACK_STATUS"]="Status";
$language["HACK_INSTALL"]="Instaluj";
$language["HACK_UNINSTALL"]="Odinstaluj";
$language["HACK_INSTALLED_OK"]="Hack został pomyślnie zainstalowany!<br />\nAby zobaczyć jakie hacki są zainstalowane, przejdź do <a href=\"index.php?page=admin&amp;user=".$CURUSER["uid"]."&amp;code=".$CURUSER["random"]."&amp;do=hacks&amp;action=read\">Panelu Admina (Hacki)</a>";
$language["HACK_BAD_ID"]="Błąd pobierania info hacka z tym ID.";
$language["HACK_UNINSTALLED_OK"]="Hack został pomyślnie odinstalowany!<br />\nAby zobaczyć jakie hacki są zainstalowane, przejdź do <a href=\"index.php?page=admin&amp;user=".$CURUSER["uid"]."&amp;code=".$CURUSER["random"]."&amp;do=hacks&amp;action=read\">Panelu Admina (Hacki)</a>";
$language["HACK_OPERATION"]="Operacja";
$language["HACK_SOLUTION"]="Rozwiązanie";
// added rev 520
$language["HACK_WHY_FTP"]="Niektóre z plików, które hack musi zmodyfikować, nie są zapisywalne. <br />\nInstalacja hacka może wymagać zalogowania się do serwera FTP, aby zmienić atrybuty chmod plików lub aby utworzyć pliki i foldery. <br />\nTwoje dane FTP mogą zostać tymczasowo zapisane, aby zapewnić poprawną instalację hacka.";
$language["HACK_FTP_SERVER"]="Serwer FTP";
$language["HACK_FTP_PORT"]="Port FTP";
$language["HACK_FTP_USERNAME"]="Nazwa użytkownika FTP";
$language["HACK_FTP_PASSWORD"]="Hasło FTP";
$language["HACK_FTP_BASEDIR"]="Ścieżka do katalogu xbtit (ścieżka począwszy od katalogu root kiedy logujesz sie do serwera poprzez FTP)";
// USERS TOOLS
$language["USER_NOT_DELETE"]="Nie możesz usunąć konta gościa lub swojego!";
$language["USER_NOT_EDIT"]="Nie możesz edytować konta gościa lub swojego!";
$language["USER_NOT_DELETE_HIGHER"]="Nie możesz usunąć użytkowników z rangą wyższą od swojej.";
$language["USER_NOT_EDIT_HIGHER"]="Nie możesz edytować użytkowników z rangą wyższą od swojej.";
$language["USER_NO_CHANGE"]="Nie dokonano żadnych zmian.";
//Manual Hack Install
$language["MHI_VIEW_INSRUCT"]="Otworzyć instrukcje do ręcznej instalacji?";
$language["MHI_MAN_INSRUCT_FOR"]="Instrukcje do ręcznej instalacji";
$language["MHI_RUN_QUERY"]="Uruchom następujące polecenie SQL w phpMyAdminRun";
$language["MHI_IN"]="W";
$language["MHI_ALSO_IN"]="także w";
$language["MHI_FIND_THIS"]="Znajdź to";
$language["MHI_ADD_THIS"]="Dodaj to";
$language["MHI_IT"]="to";
$language["MHI_REPLACE"]="Zamień na";
$language["MHI_COPY"]="Kopiuj";
$language["MHI_AS"]="jako";

$language["ACP_SECSUI_SET"]="Ustawienia Pakietu Bezpieczeństwa";
$language["SECSUI_QUAR_SETTING"]="Ustawienia kwarantanny przesłanych plików";
$language["SECSUI_QUAR_TERMS_1"]="Określenia do przeszukiwania kwarantanny (jedno określenie na linię)";
$language["SECSUI_QUAR_TERMS_2"]="Poniżej wprowadź słowa, które będą użyte do uruchomienia mechanizmu kwarantanny plików:";
$language["SECSUI_QUAR_TERMS_3"]="Uwaga: Nie jest wskazane dodawać <b><&#63;</b> lub <b>&#63;></b>, ponieważ mogą one samoistnie wystąpić w pliku. Zamiast tego, powinno sie ustawić wartość dla <b>short_open_tag</b> na <b>Off</b> w pliku php.ini, aby zapobiec wykonanu przez twoją stronę kodu PHP, który rozpoczyna się od  <b><&#63;</b>, a co spowoduje, że potencjalni hackerzy zamiast tego, zmuszeni będą do użycia long php open tag (<b><&#63;php</b>).<br /><br />Aktualna wartość to:<br />";
$language["SECSUI_QUAR_DIR_1"]="Folder kwarantanny";
$language["SECSUI_QUAR_DIR_2"]="Ten folder nie powinien być ogólnie dostępny przez internet i powinien znajdować się co najmniej jeden poziom wyżej od katalogu głównego trackera, na przykład:";
$language["SECSUI_QUAR_DIR_3"]="Upewniej się, że atrybuty CHOWN/CHMOD tego folderu pozwalają na swobodny zapis plików do niego.";
$language["SECSUI_QUAR_PM"]="ID użytkownika, którego należy zawiadomić, kiedy jakieś pliki zostaną poddane kwarantannie";
$language["SECSUI_QUAR_INV_USR"]="Użytkownik o tej nazwie nie istnieje";
$language["SECSUI_PASS_SETTINGS"]="Ustawienia hasła";
$language["SECSUI_PASS_TYPE"]="Metoda hashowania hasła";
$language["SECSUI_PASS_INFO"]="Tu możesz wybrać algorytm hashowania haseł, który chcesz, żeby xbtit używał do przechowywania haseł w bazie danych:";
$language["SECSUI_NO_MEMBER"]="Użytkownik o tym id nie istnieje";
$language["SECSUI_GAZ_TITLE"]="Gazelle Site Salt";
$language["SECSUI_GAZ_DESC"]="Powinieneś wprowadzić tu przypadkową wartość. Po jej ustawieniu, nie powinieneś jej zmieniać. Zmiana tej wartości, w trakcie gdy trwa hashowanie, może spowodować, że wszyscy użytkownicy będą zmuszeni użyć opcji odzyskiwania hasła.";
$language["SECSUI_COOKIE_SETTINGS"]="Ustawienie plików cookie";
$language["SECSUI_COOKIE_PRIMARY"]="Główne ustawienia plików cookie";
$language["SECSUI_COOKIE_TYPE"]="Typ pliku cookie";
$language["SECSUI_COOKIE_EXPIRE"]="Plik cookie wygaśnie w ciągu/za";
$language["SECSUI_COOKIE_T1"]="Classic xbtit";
$language["SECSUI_COOKIE_T2"]="New xbtit (Regular)";
$language["SECSUI_COOKIE_T3"]="New xbtit (Session)";
$language["SECSUI_COOKIE_NAME"]="Nazwa pliku cookie";
$language["SECSUI_COOKIE_ITEMS"]="Elementy pliku cookie";
$language["SECSUI_COOKIE_PATH"]="Ścieżka pliku cookie";
$language["SECSUI_COOKIE_DOMAIN"]="Domena pliku cookie";
$language["SECSUI_COOKIE_MIN"]="Minutę";
$language["SECSUI_COOKIE_MINS"]="Minut(y)";
$language["SECSUI_COOKIE_HOUR"]="Godzinę";
$language["SECSUI_COOKIE_HOURS"]="Godzin(y)";
$language["SECSUI_COOKIE_DAY"]="Dzień";
$language["SECSUI_COOKIE_DAYS"]="Dni";
$language["SECSUI_COOKIE_WEEK"]="Tydzień";
$language["SECSUI_COOKIE_WEEKS"]="Tygodni(e)";
$language["SECSUI_COOKIE_MONTH"]="Miesiąc";
$language["SECSUI_COOKIE_MONTHS"]="Miesiące/-ęcy";
$language["SECSUI_COOKIE_YEAR"]="Rok";
$language["SECSUI_COOKIE_YEARS"]="Lat(a)";
$language["SECSUI_COOKIE_TOO_FAR"]="Niestety, ta wartość spowodowałaby datę wygaśnięcia pliku cookie poza limit, którym obecnie jest Wtorek, 19 Sty 2038 03:14:07 GMT; Skoryguj błąd!";
$language["SECSUI_COOKIE_PSALT"]="Sól hasła";
$language["SECSUI_COOKIE_UAGENT"]="Klient użytkownika";
$language["SECSUI_COOKIE_ALANG"]="Akceptuj język";
$language["SECSUI_COOKIE_IP"]="Adres IP";
$language["SECSUI_COOKIE_DEF"]="UWAGA: Wszystkie pliki cookie domyślnie zawierały będą:<br /><br /><li>ID trackera</li><li>Hash hasła</li><li>Przypadkową cyfrę</li>";
$language["SECSUI_COOKIE_PD"]="UWAGA: Jeśli nie jesteś pewien, co wstawić za \"Ścieżka pliku cookie\" or \"Domena pliku cookie\", pozostaw puste pola, a użyte zostaną wartości domyślne";
$language["SECSUI_COOKIE_IP_TYPE_1"] = "Tylko pierwszy oktet (Y.N.N.N)";
$language["SECSUI_COOKIE_IP_TYPE_2"] = "Tylko drugi oktet (N.Y.N.N)";
$language["SECSUI_COOKIE_IP_TYPE_3"] = "Tylko trzeci oktet (N.N.Y.N)";
$language["SECSUI_COOKIE_IP_TYPE_4"] = "Tylko czwarty oktet (N.N.N.Y)";
$language["SECSUI_COOKIE_IP_TYPE_5"] = "Pierwszy i drugi oktet (Y.Y.N.N)";
$language["SECSUI_COOKIE_IP_TYPE_6"] = "Drugi i trzeci oktet (N.Y.Y.N)";
$language["SECSUI_COOKIE_IP_TYPE_7"] = "Trzeci i czwarty oktet (N.N.Y.Y)";
$language["SECSUI_COOKIE_IP_TYPE_8"] = "Pierwszy i trzeci oktet (Y.N.Y.N)";
$language["SECSUI_COOKIE_IP_TYPE_9"] = "Pierwszy i czwarty oktet (Y.N.N.Y)";
$language["SECSUI_COOKIE_IP_TYPE_10"] = "Drugi i czwarty oktet (N.Y.N.Y)";
$language["SECSUI_COOKIE_IP_TYPE_11"] = "Pierwszy, drugi i trzeci oktet (Y.Y.Y.N)";
$language["SECSUI_COOKIE_IP_TYPE_12"] = "Drugi, trzeci i czwarty oktet (N.Y.Y.Y)";
$language["SECSUI_COOKIE_IP_TYPE_13"] = "Cały adres IP (Y.Y.Y.Y)";
$language["SECSUI_PASSHASH_TYPE_1"] = "Classic xbtit";
$language["SECSUI_PASSHASH_TYPE_2"] = "TBDev";
$language["SECSUI_PASSHASH_TYPE_3"] = "TorrentStrike";
$language["SECSUI_PASSHASH_TYPE_4"] = "Gazelle";
$language["SECSUI_PASSHASH_TYPE_5"] = "Simple Machines Forum";
$language["SECSUI_PASSHASH_TYPE_6"] = "New xbtit";
$language["SECSUI_PASS_MUST"] = "Hasło musi";
$language["SECSUI_PASS_BE_AT_LEAST"] = "Być przynajmniej";
$language["SECSUI_PASS_HAVE_AT_LEAST"] = "Mieć przynajmniej";
$language["SECSUI_PASS_CHAR_IN_LEN"] = "znak";
$language["SECSUI_PASS_CHAR_IN_LEN_A"] = "znaki/-ów";
$language["SECSUI_PASS_LC_LET"] = "małą literę";
$language["SECSUI_PASS_LC_LET_A"] = "małe litery/małych liter";
$language["SECSUI_PASS_UC_LET"] = "dużą literę";
$language["SECSUI_PASS_UC_LET_A"] = "duże litery/dużych liter";
$language["SECSUI_PASS_NUM"] = "cyfrę";
$language["SECSUI_PASS_NUM_A"] = "cyfr(y)";
$language["SECSUI_PASS_SYM"] = "symbol";
$language["SECSUI_PASS_SYM_A"] = "symbole/-i";
$language["SECSUI_PASS_ERR_1"] = "Suma znaków dużych liter + małych liter + cyfr + symboli nie może być większa";
$language["SECSUI_PASS_ERR_2"] = "niż minimalna liczba znaków wymaganych dla hasła";

$language["SMF_MIRROR"] = "SMF Mirror";
$language["GROUP_SMF_MIRROR"] = "Mirroring rank on the SMF forum for rank changes etc.";
$language["SMF_LIST"] = "<b><u>Aktualna lista użytkowników SMF w bazie danych</u></b><br />";

$language["IPB_AUTO_ID"] = "IPB Autopost ID";
$language["IPB_MIRROR"] = "IPB Mirror";
$language["GROUP_IPB_MIRROR"] = "Mirroring rang na forum IPB dla zmian rang etc.";
$language["IPB_LIST"] = "<b><u>Aktualna lista użytkowników IPB w bazie danych</u></b><br />";

$language["STYLE_TYPE"]="Typ stylu";
$language["CLA_STYLE"]="System styli xbtit classic";
$language["ATM_STYLE"]="System styli atmoner'a";
$language["PET_STYLE"]="System styli Petr1fied";
<<<<<<< HEAD
=======
?>
>>>>>>> 862946f1c9960b40ff7f0dacd8283178fbbbab2b
