<?
$url = strip_tags($_GET["url"]);
if ($url) {
	header("Location: $url");
	exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Куда отправимся?</title>
	<meta charset="utf-8" />
</head>

<body>
<form action="<?=$_SERVER["PHP_SELF"]?>">
	 Куда отправимся?
	<select name="url" size="1">
		<option value="http://www.google.ru">Гугль</option>
		<option value="http://www.yandex.ru">Яндекс</option>
		<option value="http://www.bing.com">Бинг</option>
		<option value="https://duckduckgo.com">DuckDuckGO</option>
		<option value="https://www.wolframalpha.com">WolframAlpha</option>
		<option value="https://www.dogpile.com/?capv=pGFZ3E5EJjpa7irQ5J03OFfk-1kLQzQUGfxoXVUf8Vf6bfWTcJnNzcEA29JHrp1f">dogpile</option>
	</select>
	<input type="submit" value="GO!">
</form>

</body>
</html>
