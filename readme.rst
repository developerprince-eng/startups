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
	
2.)Install and setup WAMP or LAMP using BITNAMI  

visit: https://bitnami.com/stacks

Download the latest version and Install

3.) After you have installed WAMP or LAMP configure your project to run on your WAMP (Apache and MySql) 

	i)   Clone the repository to you local working directory and working directory will be the htdocs file in apache2 server within your WAMP or LAMP

		'git clone https://github.com/Princr/startups.git'
		
		NB: Its a privtae repository so make sure you have credentials or use your credentials to clone
		this only works if you are added as a contributor by the admininstrartor.
			
		save and close
		
4.) MYSQL Run phpmyadmin and create a schema called startups_dev
	
			import a file called 'startups_dev.sql' then execute the file it will automatically generate the tables for the 			database
		
5.)	Now you need to create a dotenv file 
			
		i) In you project 
						
						*aplication
						*assets
						*system
						*tests
						*vendor
						*.editorconfig
						*.env
						*.gitignore
						*.dotenv
						*.htaccess
						*.loadenv.php
						*contrubuting.md 
						*composer.json
						*composer.lock
						*index.php
						*palette.pdf
						*readme.rst 
						*startups_dev.sql	

				Copy everything in ".dotenv" to ".env" and database name to match the DB on you phpadmin and credentials
				
				install dependencies using "composer i"
					
			save and close
			
6.) Once you donw restart xampp and in your broswer type localhost/startup
		
		If you followed all step carefully you should be running locally, if any errors pop please contact 
		Prince Kudzai Maposa on the following contact details:
		Cellphone: +263 786808538


				
################
Common Practices
################

Please take note of the following common practices 

create a branch then use that branch for development if any changes are made contact CTO and he will allow you 
to merge you branch to the master. This done especially experimenting on new featrues.

Happy Coding 

Developed by DeveloperPrince

