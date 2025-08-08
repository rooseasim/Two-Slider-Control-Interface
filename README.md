# Two-Slider-Control-Interface

Two-Slider Motor Control Interface (PHP + HTML)
This simple web-based project allows you to control a motor using two slider inputs from an HTML form. The values are sent to a PHP backend which saves them to a MySQL database for further processing or control logic.

📌 Features
Two interactive HTML sliders to collect user input.

PHP script to handle form submissions.

Stores values in a MySQL database.

Ideal for controlling speed, direction, or other motor settings.

Easy to integrate with microcontrollers like Arduino or ESP32.

🧰 Technologies Used
HTML5

PHP

MySQL (Database)

Localhost Server (e.g. XAMPP, WAMP)

🖥️ Interface Preview
The interface includes:

Slider 1 – Can represent speed, position, etc.

Slider 2 – Can represent direction, torque, or any other custom motor setting.

A Submit button that sends the slider values to the backend.

⚙️ How It Works
The user interacts with two sliders on the web page.

On clicking the "Save" button, the values are sent to sliderhtml.php.

The PHP script saves these values in the database slider table.

🗃️ Database Schema
Database Name: slider

Table: slider

Column Name	Type	Description
ID	INT	Primary key, auto-increment
slider1	INT	Value from first slider
slider2	INT	Value from second slider

🚀 Getting Started
Prerequisites
XAMPP/WAMP installed

PHP & MySQL enabled

A browser

Setup Steps
Clone or download the repository.

Place the files inside the htdocs (XAMPP) or www (WAMP) directory.

Start Apache and MySQL from your control panel.

Create the database and table using phpMyAdmin:

sql

CREATE DATABASE slider;
USE slider;
CREATE TABLE slider (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    slider1 INT,
    slider2 INT
);
Open http://localhost/index.php in your browser.

📂 Files Description
index.php: HTML page with sliders and form.

sliderhtml.php: PHP file that handles form submission and saves data to MySQL.

🔧 To-Do / Future Improvements
Add real-time feedback using JavaScript or AJAX.

Visualize motor response on the frontend.

Integrate with Arduino/ESP32 for actual motor control.

🧠 Inspiration
This project is part of a learning journey to explore how web technologies can interface with hardware components for automation and IoT applications.
