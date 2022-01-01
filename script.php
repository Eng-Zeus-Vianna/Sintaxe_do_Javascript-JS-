<!- Exemplo #1 Abrir e fecha tags PHP ->

<?php echo ''; ?> <!- se você deseja rodar código PHP dentro de documentos XHTML ou XML,
                utilize essas tags ->
<?= 'imprima essa string' ?>. <!-  Você pode utilizar a tag curta ->
<?php echo 'print this string' ?> <!- essa e o equivalente a tag de cima


<?php
echo "Hello world";

// ... mais código

echo "última instrução";

// o script termina aqui, sem tag de fechamento PHP


<?php
php code..//parsed
php code..//parsed
?>
hellow..//normal test but ignred by php parser

//Three types of tag are available in php
//1.normal tag(<?php ?>)
//2.short echo tag(<?= ?>)
//3.short tag(<? ?>)

//short tag are bydefault available but can be disabled by short_open_tag = Off and also disabled bydefault if php will  built with --disabe--short--tags()

//As short tag can be disabled so only use the normal and short echo tag.

//If your file only have php code then  do not use closing tag.
<?php
//php code;
//php code;
//php code;

//but if you are embedding php with html then enclose php code with opening and closing tag.
<html>
<head>
</head>
<body>
<?php
//php code;
//php code;
//php code;

?>
</body>
</html>

//If you want to just print single text or something ,you should use shorthand version .<?= $var ?>

//But if you want to process something, you should use normal tag.
<?php
        //$var = 3;
        //$var2 = 2;
        //$var3 = $var+$var2;
        //if($var3){//result}

?>

//If you embedded php with html and single line, do not need to use semicolon
<html>
<head>
<body>
<?= $var ?>
</body>
</head>
</html>
//but if you have multiple line, then use semicolon.
<?php
//line 1;
//line 2;
//line 3;
?>
//up
//down
//-5anisgazig at gmail dot com ¶2 months ago
//There is no defference between normal(<?php ?>) and short echo tag() but without uses of //comments.
//example:

<h1>Normal tag with c++ style oneline comment:  <?php //"Normal tag"; ?> breaks php mode and return html mode  </h1>

<h1>html code after (normal tag)<?php // and commnet then (closing tag) ?> breaks php mode and return html mode</h1>

//but in short echo tag
<h1>html code after (short echo tag)<?php // and commnet then (closing tag) ?> breaks php mode and does not return html mode</h1>

//Same rules are applied within # and /**/ style comments.
//up
//down
//-40admin at bharatt dot com dot np ¶7 months ago
//You may want to know that removing semicolon is optional sometime but need to know the condition when it can be removed and when it can't be.
-------------------------------------------------------------------------
// Example 1: PHP script with closing tag at the end.
<?php

// php code

// you can remove semicolon
//mysqli_close( $db )
?>

// Example 2: PHP script without closing tag at the end.
<?php

// php code

// you can't remove semicolon
//mysqli_close( $db )