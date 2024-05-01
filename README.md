Sure, here's a sample README file for your Book Store web application:

---

# Book Store Web Application

This web application allows users to fetch and display information about books and authors from a database. Users can click on buttons to fetch different types of data, such as books, authors, or book titles.

## Features

- Fetch Books: Retrieve a list of books from the database.
- Fetch Authors: Retrieve a list of authors from the database.
- Fetch Books Title: Retrieve and display titles of books from the database.

## Technologies Used

- HTML: Markup language for creating the structure of the web pages.
- CSS: Styling language for designing the appearance of the web pages.
- JavaScript: Programming language for adding interactivity to the web pages.
- PHP: Server-side scripting language for handling database queries and generating dynamic content.
- MySQL: Relational database management system used to store book and author data.
- AJAX: Asynchronous JavaScript and XML for making asynchronous requests to the server without reloading the entire page.

## Setup

1. Ensure you have a web server (e.g., Apache) with PHP and MySQL installed.
2. Import the provided SQL database dump (`book_store.sql`) into your MySQL database.
3. Place the PHP files (`books.php`, `author.php`, `publish.php`) in the appropriate directory accessible by your web server.
5. Run server on the file that is called `main.php`
4. Open the `index.html` file in your web browser to access the Book Store web application.
6. Dont forget to change username,password and portnumber in  the PHP files (`books.php`, `author.php`, `publish.php`,`main.php`) in the line of connecting to the database.

## Usage

- Click on the buttons labeled "Fetch Books," "Fetch Authors," or "Fetch Books Title" to retrieve and display the corresponding data from the database.
- The fetched data will be displayed in a table format on the web page.

