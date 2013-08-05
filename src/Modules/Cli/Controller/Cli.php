<?php

Namespace Controller ;

class Cli extends Base {

    public function execute($pageVars) {
        $isHelp = parent::checkForHelp($pageVars) ;
        if ( is_array($isHelp) ) {
          return $isHelp; }
        $action = $pageVars["route"]["action"];

        $cliModel = new \Model\Cli();

        if ($action=="execute") {
          $this->content["cliResult"] = $cliModel->askWhetherToRunParallelCommand();
          return array ("type"=>"view", "view"=>"cli", "pageVars"=>$this->content); }

        $this->content["messages"][] = "Invalid Project Action";
        return array ("type"=>"control", "control"=>"index", "pageVars"=>$this->content);
    }

}