<?php

$repo = 'C:\\wamp64\\www\\sfp_per1'; 

$cmd = "cd \"$repo\" && git pull 2>&1";

echo "Exécution de : $cmd\n";
$output = shell_exec($cmd);

echo "Résultat du git pull :\n";
echo $output;
echo "Terminé";

?>
