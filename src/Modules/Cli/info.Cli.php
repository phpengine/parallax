<?php

Namespace Info;

class CliInfo extends Base {

    public $hidden = false;

    public $name = "Parallax Autopilot Cli";

    public function __construct() {
      parent::__construct();
    }

    public function routesAvailable() {
      return array( "Cli" =>  array_merge(parent::routesAvailable(), array("execute") ) );
    }

    public function routeAliases() {
      return array("cli"=>"Cli");
    }

    public function autoPilotVariables() {
      return array(
        "Cli" => array(
          "cliExecute" => array(
            "cliExecute" => "boolean",
            "cliCommands" => "string-array" ) ,
        ) ,
      );
    }

    public function helpDefinition() {
      $help = <<<"HELPDATA"
  This command is part of Core and provides you with a method by which you can
  configure a one-off parallel commands execution from the command line.

  Cli, cli

        - execute
        Go through all questions to execute parallel programs
        example: parallax cli execute

HELPDATA;
      return $help ;
    }

}