###################
Statups Platform
###################

Startups is a platform Desgined to enlist all Startups accross Zimbabwe and
its serves to act as an interface between investors and startups.
The platform will support rich feature such as startup related news, market 
performances for the startups and Guide to aid startups in seeking the investement 
of their choice.

#######################################################
How to Setup Locally on your machine for Development?
#######################################################

If you are a developer I suggest you use the following tools for developement:

Hosting: XAMPP
Code editor: VSCODE (alternative phpstorm)
Database: MYSQL, phpadmin (use mysqlworkbench as an additional optional tool)

After obtaining these tools please makes sure you followig steps

1.) Clone the repository to you local working directory 

	'git clone https://github.com/Princr/startups.git'
	
	NB: Its a privtae repository so make sure you have credentials or use your credentials to clone
	this only works if you are added as a contributor by the admininstrartor.
	
2.)Install and setup XAMPP 

visit: https://www.apachefriends.org/download.html

Download the latest version and Install

3.) After you have installed XAMPP configure your project to run on your XAMPP (Apache and MySql) 

	i)	Navigate to the following folder C:\xampp\apache\conf\extra\httpd-vhosts.conf
			uncomment line 36 
			
			Edit your virutal host to be like this:
			
			<VirtualHost *:80>
    		DocumentRoot Insert-working-directory
    		ServerName startups.localhost
    		<Directory Insert-working-directory>
					Allow from all
					Require all granted
    		</Directory>
			</VirtualHost>
			
			save and close 
			
	ii)	Navigate to C:\Windows\System32\drivers\etc and open the file written hosts and make sure you have admin 
			rights then add the following line
			
			#   127.0.0.1       startups.localhost
			
			save and close
		
	4.) MYSQL Run phpmyadmin and create a schema called startups_dev
	
			import a file called 'startups_dev.sql' then execute the file it will automatically generate the tables for the database
		
	5.)	Now that you have setup the project to run you need to edit a few php files and these a php configuration files
			
		i) In you project 
						
						*aplication
							*config
								*config.php
								*database.php
								
				In the config.php file 
				
				in the base_url path edit it to look like this and save/close
				$config['base_url'] = 'http://startups.localhost/';
				
				In the database.php file edit it look like this
				
				$db['default'] = array(
						'dsn'	=> '',
						'hostname' => 'localhost', 
						'username' => 'root', //use your username if any
						'password' => '', //use your password if any
						'database' => 'startups_dev',
						'dbdriver' => 'mysqli',
						'dbprefix' => '',
						'pconnect' => FALSE,
						'db_debug' => (ENVIRONMENT !== 'production'),
						'cache_on' => FALSE,
						'cachedir' => '',
						'char_set' => 'utf8',
						'dbcollat' => 'utf8_general_ci',
						'swap_pre' => '',
						'encrypt' => FALSE,
						'compress' => FALSE,
						'stricton' => FALSE,
						'failover' => array(),
						'save_queries' => TRUE
					);
					
			save and close
			
		6.) Once you donw restart xampp and in your broswer type startups.localhost
		
				If you followed all step carefully you should be running locally, if any errors pop please contact 
				Prince Kudzai Maposa on the following contact details:
				Cellphone: +263 716661298
				email: prince@techvillage.org.zw
				
########################
Common Practices
#######################

Please take note of the following common practices 

create a branch then use that branch for development if any changes are made contact CTO and he will allow you 
to merge you branch to the master. This done especially experimenting on new featrues.

Happy Coding 

Developed by Kubaki

Read CodeIgniter guidelines below as the platform was developed using codeIgniter MVC framework.

			
###################
What is CodeIgniter
###################

CodeIgniter is an Application Development Framework - a toolkit - for people
who build web sites using PHP. Its goal is to enable you to develop projects
much faster than you could if you were writing code from scratch, by providing
a rich set of libraries for commonly needed tasks, as well as a simple
interface and logical structure to access these libraries. CodeIgniter lets
you creatively focus on your project by minimizing the amount of code needed
for a given task.

*******************
Release Information
*******************

This repo contains in-development code for future releases. To download the
latest stable release please visit the `CodeIgniter Downloads
<https://codeigniter.com/download>`_ page.

**************************
Changelog and New Features
**************************

You can find a list of all changes for each release in the `user
guide change log <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/changelog.rst>`_.

*******************
Server Requirements
*******************

PHP version 5.6 or newer is recommended.

It should work on 5.3.7 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

************
Installation
************

Please see the `installation section <https://codeigniter.com/user_guide/installation/index.html>`_
of the CodeIgniter User Guide.

*******
License
*******

Please see the `license
agreement <https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst>`_.

*********
Resources
*********

-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_

Report security issues to our `Security Panel <mailto:security@codeigniter.com>`_
or via our `page on HackerOne <https://hackerone.com/codeigniter>`_, thank you.

***************
Acknowledgement
***************

The CodeIgniter team would like to thank EllisLab, all the
contributors to the CodeIgniter project and you, the CodeIgniter user.
