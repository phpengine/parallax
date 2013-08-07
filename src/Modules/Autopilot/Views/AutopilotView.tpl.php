Autopilot Install - <?php echo $pageVars["package-friendly"] ; ?> Installer:
--------------------------------------------

<?php

$exit_statuses = array();

foreach ($pageVars["results"] as $installResult) {
  echo $installResult["stepName"] . ': '."\n" ;
  echo $installResult["stepResult"][0] ;
  echo "\n" ;
  $exit_statuses[] = $installResult["stepResult"][1];
}

if (in_array(true, $exit_statuses)) {
  echo "At least one parallel command exited with 1 status (FAILED), so I am too...\n";
  exit(1); }

?>

------------------------------
Installer Finished