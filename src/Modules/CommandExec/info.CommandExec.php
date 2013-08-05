<?php

Namespace Info;

class CommandExecInfo extends Base {

    public $hidden = false;

    public $name = "Command Execution Functions";

    public function _construct() {
      parent::__construct();
    }

    public function routesAvailable() {
      return array( "CommandExec" => array_merge(parent::routesAvailable(), array("execute", ) ) );
    }

    public function routeAliases() {
      return array("commandexec"=>"CommandExec", "commandExec"=>"CommandExec", "cx"=>"CommandExec");
    }

    public function helpDefinition() {
      $help = <<<"HELPDATA"
  This command is part of Core and handles Command Execution Functions. It is unlikely you'll need to manually
  execute this command, it is used by Parallax to spawn processes and store execution output in a Parallax friendly
  file.

  CommandExec, commandexec, cx, commandExec

          - execute
          execute a single command
          example: parallax cx execute

HELPDATA;
      return $help ;
    }

}