Golden Contact Computing - Dapperstrano
-------------------

About:
-----------------

Dapperstrano deploys PHP Applications in a really simple way, and does it all through code configuration. That's what
it's about.

If you've heard of the Ruby tool Capistrano, then you can probably guess why this is calle Dapperstrano. It performs the
same functions, but does it in PHP (Because PHP is way cooler). This tool helps just as well with setting up projects
locally or on 50 remote servers. It's really cool for cloning / installing / spinning up web apps easily and quickly -
to one or multiple servers using one or two config files. Just as Capistrano is a must for your Ruby CI setup,
Dapperstrano is a must for your PHP CI. You can install your web app in one line like:

dapperstrano install autopilot *autopilot-file*


Installation
-----------------

To install dapperstrano cli on your machine do the following. If you already have php5 and git installed skip line 1:

sudo apt-get install php5 git

git clone https://github.com/phpengine/dapperstrano && sudo php dapperstrano/install-silent

or...

git clone https://github.com/phpengine/dapperstrano && sudo php dapperstrano/install
(if you want to choose the install location)

... that's it, now the dapperstrano command should be available at the command line for you.

---------------------------------------

The Dapperstrano Application
---------------------------------------

There are three directories in the src dir - Core, Extensions and Modules.

Core is just like it sounds, the most important files required for the Application to run (not including the Autoload
and Bootstrap, which you can call Super Core if you want). You never need to modify anything in here. The engine for
this application is about 600 lines in total, so its very lightweight. If you really insist on overriding things in
core, you can create a module (or even just a class with the same name, placed in a directory) and put it in the
Extensions Directory. The App will always look in there first when looking for a file. If it finds it there, it wont
look in Modules or Core. So, don't change Core, it'll make your life easier.

Modules again, is just like it sounds. Here are the Modules that cover the commands provided with the Dapperstrano
Application. As with any true Modular/Componentised structure, you should be able to remove any Module, and the rest
still work. This is the theory, and there is no real world example I can think of that means you would need to do this
unless you add your own Modules, and there are errors in them - even in that case, your module should not be in this
directory anyway. The only module that might go against this rule is the AppSettings/AppConfig, as any module can call
on it ask for configuration values

Extensions, as you may have noticed, is empty. It's purposely empty, for your own extensions. You can write new modules,
or override currently implemented classes with your own. Put them in here. Simples.




Usage:
-----------------

So, there are a few simple commands...

First, you can just use

cleopatra

...This will give you a list of the available modules...


Then you can use

cleopatra *ModuleName* help

...This will display the help for that module, and tell you a list of available alias for the module command, and the
available actions too.


Available Commands:
---------------------------------------

Remember - You can get full help on any command by entering dapperstrano command help ie dapperstrano install help.
Also Remember - Dapperstrano is very extendable and modular, so everything can be overridden easily and new commands or
features can be added easily too. Below describes only the commands that are currently in core.

install

      - cli
        install a full web project using the core commands in the order you're likely to need them:
        Checkout (Git), Create VHost, Create Hostfile Entry, Cucumber Configuration, DB Install and Settings Config, and
        Install a Jenkins Job. You can ignore any you don't need at runtime, and the installer will ask you for required
        values for those you do.
        example: dapperstrano install cli

      - autopilot
        perform an "unattended" install using the defaults in an autopilot file. Great for Remote Builds.
        This is similar to the implementation of the Cap Deploy command of Capistrano.
        example: dapperstrano install autopilot

appsettings

      configure default dapperstrano settings, ie: mysql admin user, host, pass, so that you don't need to enter them
      every time you are at the CLI.

      - set
        Set a configuration value
        example: dapperstrano appsettings set

      - get
        Get the value of a setting you have configured
        example: dapperstrano appsettings get

      - delete
        Delete a setting you have configured
        example: dapperstrano appsettings delete

      - list
        Display a list of all default available settings
        example: dapperstrano appsettings list

checkout, co

      - perform a checkout into configured projects folder. If you don't want to specify target dir but do want
        to specify a branch, then enter the text "none" as that parameter.
        example: dapperstrano co git https://github.com/phpengine/yourmum {optional target dir} {optional branch}
        example: dapperstrano co git https://github.com/phpengine/yourmum none {optional branch}

cukeconf, cuke

      - conf
        modify the url used for cucumber features testing
        example: dapperstrano cukeconf cli

      - reset
        reset cuke uri to generic values so dapperstrano can write them. may need to be run before cuke conf.
        example: dapperstrano cukeconf reset

database, db

      - configure, conf
        set up db user & pw for a project, use admins to create new resources as needed.
        example: dapperstrano db conf drupal

      - reset
        reset current db to generic values so dapperstrano can write them. may need to be run before db conf.
        example: dapperstrano db reset drupal

      - install
        install the database for a project. run conf first to set up users unless you already have them.
        example: dapperstrano db install

      - drop
        drop the database for a project.
        example: dapperstrano db drop

hosteditor

      - add
        add a Host File entry
        example: dapperstrano hosteditor add

      - rm
        remove a Host File entry
        example: dapperstrano hosteditor rm

invoke, inv   

      - cli
        Will ask you for details for servers, then open a shell for you to execute on multiple servers
        example: dapperstrano invoke shell

      - script
        Will ask you for details for servers, then execute each line of a provided script file on the remote/s
        example: dapperstrano invoke script script-file

      - autopilot
        execute each line of a script file, multiple script files, or php variable data on one or more remotes
        example: dapperstrano invoke autopilot autopilot-file

project, proj

      - container
        make a container folder for revisions (like /var/www/applications/*APP NAME*)
        example: dapperstrano proj container

      - init @todo should question for dh proj structure
        initialize an existing directory as a DH project
        example: dapperstrano proj init

      - new @todo all of this command
        Create a new Project, using dapperstrano default directory structure, including
        creating the Git Repo and Master, Staging and Production branches. Also install
        the appropriate CD/CI/Test builds on the Main Jenkins server, so we can create
        a new CD project from one command.
        example: dapperstrano proj init

      - build-install @todo should question jenkins username/email
        copy jenkins project stored in repo to running jenkins so you can run builds
        example: dapperstrano proj build-install

      - build-save @todo all of this command
        copy jenkins project from running jenkins to repo, with Generic Values that can
        make the Repo version free of personalisation and installable by dapperstrano.
        example: dapperstrano proj build-install

version

      - cli
        Will change back the *current* symlink to whichever available version you pick
        example: dapperstrano version cli

      - latest
        Will change back the *current* symlink to the latest created version
        example: dapperstrano version latest

      - rollback
        Will change back the *current* symlink to the latest created version but one
        example: dapperstrano version rollback


vhosteditor, vhc

      - add
        create a Virtual Host
        example: dapperstrano vhc add

      - rm
        remove a Virtual Host
        example: dapperstrano vhc rm

      - list
        List current Virtual Hosts
        example: dapperstrano vhc list