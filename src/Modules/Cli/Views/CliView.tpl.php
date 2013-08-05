<?php echo $pageVars["cliResult"][0] ; ?>

-----------------

In Autopilot Cli

<?php

if ($pageVars["cliResult"][1] == true) {
  echo "At least one parallel command exited with 1 status, so am exiting with 1";
  exit(1);
}

?>
