<?php

Namespace Info;

class GeneratorInfo extends Base {

    public $hidden = false;

    public $name = "Parallax Autopilot Generator";

    public function __construct() {
      parent::__construct();
    }

    public function routesAvailable() {
      return array( "Generator" =>  array_merge(parent::routesAvailable(), array("create") ) );
    }

    public function routeAliases() {
      return array("generator"=>"Generator", "generate"=>"Generator", "gen"=>"Generator");
    }

    public function helpDefinition() {
      $help = <<<"HELPDATA"
  This command is part of Core and provides you with a method by which you can
  create Autopilot files from the command line.

  Generator, generator, generate, gen

        - create
        Go through all modules to create an autopilot
        example: parallax generate create

HELPDATA;
      return $help ;
    }

}