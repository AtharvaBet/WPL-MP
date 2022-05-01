<?php
$str_html = "This is <i>italic</i> text.";  
echo htmlspecialchars($str_html, ENT_QUOTES);


// regular expression
echo '<br/><br/><br/>';



$string =  "PHP is the web scripting php language.";

$exp = preg_match("/PHP/", $string);

if($exp){
    echo "A match is found";
}
else
{
    echo "A match is not found";
}

echo '<br/><br/><br/>';

/* modifiers after forward slash
i. is i means case insensitive. */

$exp1 = preg_match("/php/i", $string);

if($exp1){
    echo "A match is found";
}
else
{
    echo "A match is not found";
}

echo '<br/><br/><br/>';


/*to find occurances of words in a string, Use third parameter as an array */

//$exp2 = preg_match("/php/i", $string, $array);
$exp2 = preg_match_all("/php/i", $string, $array);


if($exp2){
    echo "A match is found";
}
else
{
    echo "A match is not found";
}

echo"<pre>";
print_r($array);

echo"</pre>";


echo '<br/><br/><br/>';


// finding multiple words

$exp3 = preg_match("/php|web/i", $string, $array);


if($exp3){
    echo "A match is found";
}
else
{
    echo "A match is not found";
}

echo '<br/><br/><br/>';

// finding characters sequentially, embed in square brackets
$exp4 = preg_match_all("/[wot]/i", $string, $array);


if($exp4){
    echo "A match is found";
}
else
{
    echo "A match is not found";
}
echo"<pre>";
print_r($array);

echo"</pre>";

echo '<br/><br/><br/>';

// finding characters sequentially excluding wot , embed in square brackets
$exp5 = preg_match_all("/[^wot]/i", $string, $array);


if($exp5){
    echo "A match is found";
}
else
{
    echo "A match is not found";
}
echo"<pre>";
print_r($array);

echo"</pre>";

echo '<br/><br/><br/>';

// finding characters between ranges
$exp6 = preg_match_all("/[a-d]/i", $string, $array);


if($exp6){
    echo "A match is found";
}
else
{
    echo "A match is not found";
}
echo"<pre>";
print_r($array);

echo"</pre>";


/*
Regular expression - web link:
https://regex101.com/

1.
String : 2014 2015
RE : 201[0-4] 

2. 
metacharacter identification by w
RE: 
\w - doesnt contain space, hyphen and dots
\W - include only space, hyphen and dots


3.
\d - for all numeric values
\D- selects all characters excluding numeric values

4.
\s- for all spaces
\S- excluding spaces

5.
RE: \bi\b - to select only i which has no pre and post character

6.
RE: ph. - find ph mandatory and then any single character afterwards

7.
finding only dots
\.

8.
finding question mark
\?

9.
? - only question mark wont work

10.
finding url - http://www.gstatic.com/generate_204 

(insert backslashes before forward slash)

RE: http:\/\/www\.gstatic\.com\/generate_204

12.
new line search 
RE: \ncar
string:
this is a 
car

13.
selecting multiple lines - use vertical tab

string:
this is a
car another 
text

RE: this is a\ncar another\vtext

14. finding tabs
RE: this is a\tcar
string:
this is a   car 



*/

?>  




<!-- </body> -->
<!-- </html> -->

