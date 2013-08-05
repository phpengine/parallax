<?php

Namespace Info;

class AppSettingsInfo extends Base {

    public $hidden = false;

    public $name = "Parallax Application Settings";

    public function __construct() {
      parent::__construct();
    }

    public function routesAvailable() {
      return array( "AppSettings" =>  array_merge(parent::routesAvailable(), array("set", "get", "list", "delete") ) );
    }

    public function routeAliases() {
      return array("appsettings"=>"AppSettings");
    }

    public function autoPilotVariables() {
      return array();
    }

    public function helpDefinition() {
      $help = <<<"HELPDATA"
  This command is part of Core and provides you  with a method by which you can configure Application Settings.

  AppSettings, appsettings

        - set
        Set a configuration value
        example: parallax appsettings set

        - get
        Get the value of a setting you have configured
        example: parallax appsettings get

        - delete
        Delete a setting you have configured
        example: parallax appsettings delete

        - list
        Display a list of all default available settings
        example: parallax appsettings list

HELPDATA;
      return $help ;
    }

}