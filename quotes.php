<?php
echo <<<TEKST
Single quoted:<br> 
strings will display things completely as is<br>
variables will not be interpreted.<br>
to display a literal single quote, you have to use a back slash \'<br>
and to use a backslash you use another backslash:\\<br>
Double quoted:<br>
Will evaluate variables in the string<br>
you can use curly braces to isolate the name of variable the name of the variable you want evaluated<br>

TEKST;
