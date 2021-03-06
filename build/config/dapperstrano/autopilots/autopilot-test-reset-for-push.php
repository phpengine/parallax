<?php

Namespace Core ;

class AutoPilot {

    // SSH Invoke Variables
    public $sshInvokeSSHDataExecute = false;
    public $sshInvokeSSHDataData = null;
    public $sshInvokeSSHScriptExecute = false;
    public $sshInvokeSSHScriptFile = null;
    public $sshInvokeServers = array( array("target"=>"127.0.0.1", "user"=>"dave", "pword"=>"milk") );

    // Git Checkout Variables
    public $gitCheckoutExecute = false;
    public $gitCheckoutProjectOriginRepo = null;
    public $gitCheckoutCustomCloneFolder = null;

    // Git Project Deletor
    public $gitDeletorExecute = false;
    public $gitDeletorCustomFolder = null;

    // Project Init Variables
    public $projectInitializeExecute = true;

    // Project Build Variables
    public $projectBuildInstallExecute = false;
    public $projectJenkinsOriginalJobFolderName = null;
    public $projectJenkinsNewJobFolderName = null;
    public $projectJenkinsFSFolder = null;

    // Host File Editor Addition Variables
    public $hostEditorAdditionExecute = false;
    public $hostEditorAdditionIP = null;
    public $hostEditorAdditionURI = null;

    // Host File Editor Deletion Variables
    public $hostEditorDeletionExecute = false;
    public $hostEditorDeletionIP = null;
    public $hostEditorDeletionURI = null;

    // Virtual Host Editor Addition Variables
    public $virtualHostEditorAdditionExecute = false;
    public $virtualHostEditorAdditionDocRoot = null;
    public $virtualHostEditorAdditionURL = null;
    public $virtualHostEditorAdditionFileSuffix = null;
    public $virtualHostEditorAdditionIp = null;
    public $virtualHostEditorAdditionDirectory = null;
    public $virtualHostEditorAdditionVHostEnable = false;
    public $virtualHostEditorAdditionSymLinkDirectory = null;
    public $virtualHostEditorAdditionApacheCommand = "httpd";

    // Virtual Host Editor Deletion Variables
    public $virtualHostEditorDeletionExecute = false;
    public $virtualHostEditorDeletionIP = null;
    public $virtualHostEditorDeletionURI = null;
    public $virtualHostEditorDeletionVHostDisable = null;
    public $virtualHostEditorDeletionSymLinkDirectory = null;
    public $virtualHostEditorDeletionApacheCommand = "httpd";
    public $virtualHostEditorAdditionTemplateData = null; // will use default template if null

    // DB Configuration Reset - App Settings
    public $dbResetExecute = true;
    public $dbResetPlatform = null;

    // DB Configuration Setup - App Settings
    public $dbConfigureExecute = false;
    public $dbConfigurePlatform = null;
    public $dbConfigureDBHost = null;
    public $dbConfigureDBUser = null;
    public $dbConfigureDBPass = null;
    public $dbConfigureDBName = null;

    // DB Install - Install DB and User
    public $dbInstallExecute = false;
    public $dbInstallDBHost = null;
    public $dbInstallDBUser = null;
    public $dbInstallDBPass = null;
    public $dbInstallDBName = null;
    public $dbInstallDBRootUser = null;
    public $dbInstallDBRootPass = null;

    // DB Drop - Drop DB
    public $dbDropExecute = false;
    public $dbDropDBName = null;
    public $dbDropDBHost = null;
    public $dbDropDBRootUser = null;
    public $dbDropDBRootPass = null;

    // Cuke Conf Addition Variables
    public $cukeConfAdditionExecute = false;
    public $cukeConfAdditionURI = null;

    // Cuke Conf Deletion Variables
    public $cukeConfDeletionExecute = true;

    // Version
    public $versionExecute = false;
    public $versionAppRootDirectory = null;
    public $versionArrayPointToRollback = null;

    public function __construct() {
	    $this->calculateVHostDocRoot();
    }

    private function calculateVHostDocRoot() {
	    $this->virtualHostEditorAdditionDocRoot = getcwd().'/'.$this->gitCheckoutCustomCloneFolder;
    }

}
