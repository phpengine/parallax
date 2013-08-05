Parallax by Golden Contact Computing
-------------------

About:
-----------------
This tool executes programs in Parallel. We use it to execute
concurrent Selenium Grid Tests, through Ruby/Rake/Cucumber.

In your CI, you can execute like so:

parallax autopilot execute *autopilot-file*

With code configured settings for (at least the core parts, and
more if want to extend) the command that will execute each test
group.

-------------------------------------------------------------

Available Commands:
---------------------------------------

<?php
foreach ($pageVars["modulesInfo"] as $moduleInfo) {
  if ($moduleInfo["hidden"] != true) {
    echo $moduleInfo["command"].' - '.$moduleInfo["name"]."\n"; }
}

?>