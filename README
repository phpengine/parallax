Golden Contact Computing - Parallax
-------------------

About:
-----------------

Execute multiple commands in parallel. Great for executing test suites in Parallel - that's what its made for.

If you're using BDD/Browser tests in your team (or any kind of tests that take a while), you might want to execute
groups of them in parallel on different executors, so that you can save build time by spreading load.

Parallax is a must for your CI.



Installation
-----------------

To install parallax cli on your machine do the following. If you already have php5 and git installed skip line 1:

sudo apt-get install php5 git

git clone https://github.com/phpengine/parallax && sudo php parallax/install-silent

or...

git clone https://github.com/phpengine/parallax && sudo php parallax/install
(if you want to choose the install location)

... that's it, now the parallax command should be available at the command line for you.

---------------------------------------



The Parallax Application
---------------------------------------

There are three directories in the src dir - Core, Extensions and Modules.

Core is just like it sounds, the most important files required for the Application to run (not including the Autoload
and Bootstrap, which you can call Super Core if you want). You never need to modify anything in here. The engine for
this application is about 600 lines in total, so its very lightweight. If you really insist on overriding things in
core, you can create a module (or even just a class with the same name, placed in a directory) and put it in the
Extensions Directory. The App will always look in there first when looking for a file. If it finds it there, it wont
look in Modules or Core. So, don't change Core, it'll make your life easier.

Modules again, is just like it sounds. Here are the Modules that cover the commands provided with the parallax
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

parallax

...This will give you a list of the available modules...


Then you can use

parallax *ModuleName* help

...This will display the help for that module, and tell you a list of available alias for the module command, and the
available actions too.



Available Commands:
---------------------------------------

Remember - You can get full help on any command by entering parallax command help ie parallax cli help.
Also Remember - parallax is very extendable and modular, so everything can be overridden easily and new commands or
features can be added easily too. Below describes only the commands that are currently in core.

appsettings

      configure default parallax settings, ie: mysql admin user, host, pass, so that you don't need to enter them
      every time you are at the CLI.

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

autopilot

      - execute
        perform a silent install using the defaults in an autopilot file. Great for Remote Builds.
        This is similar to the implementation of the Cap Deploy command of Capistrano.
        example: parallax install autopilot

cli

      - execute
        will initiate a cli for you to run parallel commands in. It will run each parallel command as a "parallax
        commandexec", wait for all of them to finish, and then collate the output from all of those children commands
        into the output for this parent command. Also, if any children commands finish with a failure exit status, the
        "parallax install cli" parent will also. You will be asked for commands to execute.
        example: parallax install cli

commandexec, cx

      - execute
        Execute a single command spawned by parallax. Its unlikely you'll need to use this on its own  unless you're
        developing for Parallax, as it just launches a command. if you provide the output file and command to execute as
        parameters, it will execute silently.
        example: parallax cx execute --output-file="/path/to/output/file.txt" --command-to-execute="command to run"
        example: parallax cx execute