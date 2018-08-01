################
Startups Platform
################

Startups is a platform Desgined to enlist all Startups accross Zimbabwe and
its serves to act as an interface between investors and startups.
The platform will support rich feature such as startup related news, market 
performances for the startups and Guide to aid startups in seeking the investement 
of their choice.

#####################################################
How to Setup Locally on your machine for Development?
#####################################################

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
				
################
Common Practices
################

Please take note of the following common practices 

create a branch then use that branch for development if any changes are made contact CTO and he will allow you 
to merge you branch to the master. This done especially experimenting on new featrues.

Happy Coding 

Developed by Kubaki

