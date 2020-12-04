<?php
require '../error_config.php';

$html = <<< PAGE
<!DOCTYPE html>
<html>
<body>

<h1>My ¥ €First `Hea'ding</h1>

<p>My first "paragraph.</p>

</body>
</html>
PAGE;

// echo htmlentities($html);
// echo htmlentities($html,ENT_QUOTES);
// echo htmlentities($html,ENT_NOQUOTES);

//echo htmlspecialchars($html);

//echo strip_tags($html);
//echo strip_tags($html,"<p>");

$text = htmlentities($html);
$table = get_html_translation_table(HTML_ENTITIES);
$revtrans = array_flip($table);
echo strtr($text,$revtrans);
