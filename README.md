PHPBelfast demo framework
=========================

This is the framework produced live on 10/04/2014 by Andy Graham at PHPBelfast Meetup #5


Instructions
============

Clone the repository into a folder and run `composer install`.  This will get the dependencies for you and you should be ready to rock.

Database connection details are in the setup.php, edit the line to fit your config
`R::setup("mysql:host=localhost;dbname=<database>", '<username>', '<password>');`

Remember to execute the `seeder.php` file in the root folder to give yourself some sample content.

To run the built-in PHP server (PHP v5.4+ only) use `php -S localhost:8000 -t <path-to-public-folder>`

Simply go to http://localhost:8000/posts to see it in action.

I've added a .htaccess file for putting the site on an apache based server.  

For more help see the docs at:

SlimFramework - http://docs.slimframework.com/ and https://github.com/codeguy/Slim 

Slim Views - https://github.com/codeguy/Slim-Views

Smarty - http://www.smarty.net/

RedbeanPHP - http://redbeanphp.com/

Faker - https://github.com/fzaninotto/Faker


Enjoy!

Any questions feel free to drop me a tweet @4nd and I'll do my best to help.



