# Instrukcja instalacji #

Utwórz w głównym katalogu domeny na serwerze ftp katalog cookieww
Skopiuj tam zawartość rozpakowanego pliku cookieww.zip
Wyedytuj plik w którym znajdują się definicje nagłówka HEAD pliku HTML (np. index.html, index.php)
Wstaw poniższy kod zaraz przed zakończeniem nagłówka HEAD:
```
<script src="http://code.jquery.com/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="/cookieww/jquery.cookie.js" type="text/javascript"></script>
<script src="/cookieww/cookieww.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("body").CookieWindow();
});
</script>
```
Skrypt umożliwia definiowanie takich rzeczy jak tekst, kolor, czas ważności ciastka. Poniżej przykład skryptu ze zmienionymi wartościami:

```
<script src="http://code.jquery.com/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="/cookieww/jquery.cookie.js" type="text/javascript"></script>
<script src="/cookieww/cookieww.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
   $("body").CookieWindow({
      position: "top", // (top lub bottom) umiejscowienie komunikatu
      bgcolor: "#000000", // zmiana koloru tła
      textcolor: "#ffffff", // zmiana koloru czcionki
      btnbgcolor: "#f10000", // zmiana koloru buttona
      btntxtcolor: "#ffffff", // zmiana koloru czcionki w buttonie
      text: "Strona korzysta z plików cookies w celu realizacji usług i zgodnie z Polityką Plików Cookies. Możesz określić warunki przechowywania lub dostępu do plików cookies w Twojej przeglądarce.", // zmiana wyświetlanego tekstu,
      cookieExpire: 30 // ważność ciastka w dniach
   });
});
</script>
```
Jeżeli coś nie działa, upewnij się, czy czasem wcześniej nie ładujesz biblioteki jQuery w swoim kodzie strony

W przypadku jakichkolwiek problemów - proszę o kontakt biuro(at)avatec.pl - podaj adres swojej strony internetowej i opisz krótko problem