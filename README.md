PHPBelfast demo framework
=========================

This is the framework produced live on 10/04/2014 by Andy Graham at PHPBelfast Meetup #5


Instructions
============

Clone the repository into a folder and run `composer install`.  This will get the dependencies for you and you should be ready to rock.

Database connection details are in the setup.php, edit the line to fit your config
`R::setup("mysql:host=localhost;dbname=<database>", '<username>', '<password>');`

I've added a .htaccess file for putting the site on an apache based server.  For more info see the docs at
http://docs.slimframework.com/#Route-URL-Rewriting



