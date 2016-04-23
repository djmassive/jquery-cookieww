<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pl" xml:lang="pl">
<head>
	<title>Demo skryptu Cookie Warning Window &copy; Avatec.pl</title>
	<meta charset="utf-8" />
	<script src="http://code.jquery.com/jquery-1.6.4.min.js" type="text/javascript"></script>
	<script src="jquery.cookie.js" type="text/javascript"></script>
	<script src="cookieww.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript">
		$(document).ready(function() {
    		$("body").CookieWindow();
		});
	</script>
	</head>
	<body>
		
		<div style="margin-left: 320px;padding-left: 20px; border-left: 1px solid silver; ">
		<h1>Avatec - Cookie Warning Window - Wersja 2013 Release 2</h1>
		<p>Zapraszamy na naszą stronę internetową: <a href="http://www.avatec.pl/">www.avatec.pl</a></p>
		<p>E-Palisz ? Wejdź do naszego sklepu: <a href="http://www.epapieroski.pl/">www.epapieroski.pl</a></p>
		
		<p>Najnowsza wersja slidera z informacją o cookie na Twoją stronę internetową. Kliknij <a href="http://code.google.com/p/jquery-cookieww/downloads/list">tutaj, aby pobrać</a></p>
		
		<h2>Instrukcja instalacji</h2>
		<ol>
			<li>Utwórz w głównym katalogu domeny na serwerze ftp katalog cookieww</li>
			<li>Skopiuj tam zawartość rozpakowanego pliku cookieww.zip</li>
			<li>Wyedytuj plik w którym znajdują się definicje nagłówka HEAD pliku HTML (np. index.html, index.php)</li>
			<li>Wstaw poniższy kod zaraz przed zakończeniem nagłówka HEAD:<br/>
<pre>
&lt;script src="http://code.jquery.com/jquery-1.6.4.min.js" type="text/javascript"&gt;&lt;/script&gt;
&lt;script src="/cookieww/jquery.cookie.js" type="text/javascript">&lt;/script&gt;
&lt;script src="/cookieww/cookieww.js" type="text/javascript">&lt;/script&gt;
&lt;script type="text/javascript"&gt;
$(document).ready(function() {
	$("body").CookieWindow();
});
&lt;/script&gt;
</pre>

				<p>Skrypt umożliwia definiowanie takich rzeczy jak tekst, kolor, czas ważności ciastka. Poniżej przykład skryptu ze zmienionymi wartościami:</p>

<pre>
&lt;script src="http://code.jquery.com/jquery-1.6.4.min.js" type="text/javascript"&gt;&lt;/script&gt;
&lt;script src="/cookieww/jquery.cookie.js" type="text/javascript">&lt;/script&gt;
&lt;script src="/cookieww/cookieww.js" type="text/javascript">&lt;/script&gt;
&lt;script type="text/javascript"&gt;
$(document).ready(function() {
	$("body").CookieWindow({
		position: "top", // dostępne wartości top oraz bottom, ustala czy komunikat ma się wyświetlać na górze, czy na dole
		bgcolor: "#000000", // zmiana koloru tła
		textcolor: "#ffffff", // zmiana koloru czcionki
		btnbgcolor: "#f10000", // zmiana koloru buttona
		btntxtcolor: "#ffffff", // zmiana koloru czcionki w buttonie
		text: "Strona korzysta z plików cookies w celu realizacji usług i zgodnie z Polityką
		Plików Cookies. Możesz określić warunki przechowywania lub dostępu do plików cookies
		w Twojej przeglądarce.", // zmiana wyświetlanego tekstu,
		cookieExpire: 30 // ważność ciastka w dniach
	});
});
&lt;/script&gt;
</pre>
			</li>
		</ol>
		<p style="color:red;">Jeżeli coś nie działa, upewnij się, czy czasem wcześniej nie ładujesz biblioteki jQuery w swoim kodzie strony</p>
		<p>W przypadku jakichkolwiek problemów - proszę o kontakt biuro(at)avatec.pl - podaj adres swojej strony internetowej i opisz krótko problem</p>
		<p>Jeżeli chcesz, abyśmy zainstalowali Ci skrypt na serwerze, musisz podać dane do konta FTP = załącz je w mailu, a w tytule wpisz <strong>INSTALACJA COOKIEWW</strong>. Koszt takiej usługi <strong>15 zł netto</strong></p>
		</div>
	</body>
</html>
	
	
