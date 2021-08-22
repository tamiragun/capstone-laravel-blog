# Fictional blog "Cool Tech"

This was my capstone project for the PHP portion of my coding bootcamp. It is a fictional tech blog called "Cool Tech", which allows the user to view and search posts by id, tag or category.

**Stack used**: PHP - Laravel - SQL Server

## The brief
These were the detailed instructions for the capstone project:
- Design an appropriate database. It should store articles, their categories and their tags. Articles must be indexed by creation date, category, and tags so that they can quickly be listed by these features.
    - Note that an article has exactly 1 category, but can have any number (including 0) of tags.
    - After designing it, populate the database with sample data (articles, categories, and tags). At least 5 of each. 
    - Create and submit a simple ERD outlining your DB design.
- Create a Laravel project and link it up with the database.
- Create the home page. It should feature the latest 5 articles. Display the appropriate titles, and the first paragraph of each article. Be sure that where you display an article title, that title is a link to its appropriate article page. *Note: You do not need to write the actual articles. You can just use placeholder text.* 
- Create the article view page. Its URL should have the form /article/{id} and should display the appropriate article’s title, content, creation date, category, and tags.
- Create the category view page. Its URL should have the form /category/{slug} and should list all articles of a certain category. If the requested slug does not exist, handle the issue gracefully.
- Create the tag view page. It should behave the same as the category view page, but sort by tag, not category. Everywhere a tag is displayed (i.e. the article view page), it should be a link to the appropriate tag view page.
- Create the legal page. It must contain generic website Terms of Use and Privacy Policy content. You need not create fully-fledged legalese documents. A few simple paragraphs should do the trick.
- Create a search page. It should have 3 search bars — one for article ID, category, and tag, respectively. Clicking on the appropriate search button should redirect the user to the correct article, category, or tag page.
- Create a cookie notice that is displayed on every page of the website, using reusable components.
- Create a footer that is displayed on all web pages. It should contain links to the search page and legal page. It should also display a copyright notice with the current year.

## My contribution
Most of the files and folders in this repositry are Laravel-generated files. The code I wrote can be found in various places, including in:
- /cool-tech/resources/views
- /cool-tech/resources/views/components
- /cool-tech/routes/web.php

## How to install this project
1. Download and install Composer if you don't already have it: https://getcomposer.org/doc/00-intro.md.
2. Install Laravel with the following command from a terminal: `composer global require laravel/installer`.
3. Download Microsoft SQL Server if you don't already have it: https://www.microsoft.com/en-us/sql-server/sql-server-downloads
4. Clone this Github repository into a directory of your choice.
5. In Microsoft SQL, create a database and import the data contained in this file: /cool-tech/db_export.xlsx.
6. Open the .env.example file in the 'cool-tech' folder, and enter the database name, username and password for the database you just created. It should look something like this:
    ```
    DB_CONNECTION=sqlsrv
    DB_HOST=localhost
    DB_PORT=[the port you are using]
    DB_DATABASE=laravel
    DB_USERNAME=[the username you set in SQL Server]
    DB_PASSWORD=[the password you set in SQL Server]
    ```
    Save it as ".env".
7. Open a terminal in the folder of your project, and run the following to start a local webserver: `php artisan serve`.
8. In your browser, navigate to your localhost to see the site in action: http://localhost:8000.

## How to contribute
Feel free to submit issues or pull requests, I am always open to feedback and collaboration!