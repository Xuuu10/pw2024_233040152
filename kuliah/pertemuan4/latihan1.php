<?php

echo date("l, j F Y.");
echo "<br>";
echo time();
echo "<br>";
echo time() + 86400;
echo "<br>";
echo date("l", time() + 60*60*24*100);
echo "<br>";
echo mktime(0, 0, 0, 2, 27, 2024 );
echo "<br>";
echo date("l", mktime(0, 0, 0, 10, 01, 2004 ));