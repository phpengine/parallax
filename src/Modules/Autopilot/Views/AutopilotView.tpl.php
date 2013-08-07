Autopilot Install - <?php echo $pageVars["package-friendly"] ; ?> Installer:
--------------------------------------------

<?php

foreach ($pageVars["results"] as $installResult) {
  echo $installResult["stepName"] . ': '."\n" ;
  if (is_array($installResult["stepResult"]) ) {
    foreach ($installResult["stepResult"] as $stepResult) {
      echo $stepResult; } }
  echo "\n\n" ;
  $result = ($installResult["stepResult"] == true) ? "Success" : "Failure" ;
  echo $result."\n" ;
}

if ($pageVars["cliResult"][1] == true) {
  echo "At least one parallel command exited with 1 status, so am exiting with 1";
  exit(1); }

?>

------------------------------
Installer Finished