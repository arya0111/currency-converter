# Currency Converter Website

A web-based currency converter developed as part of a Software Development Life Cycle (SDLC) assignment.

## About the Project

The Currency Converter Website allows users to convert an amount from one currency to another using exchange-rate information retrieved from ExchangeRate-API. The project demonstrates the development of a web application using frontend and server-side technologies.

## Technologies Used

- HTML5
- CSS3
- JavaScript
- PHP
- ExchangeRate-API

## Features

- Currency conversion using API-provided exchange rates.
- Support for currency selection.
- User input for the amount to convert.
- Server-side processing using PHP.
- A web interface styled with CSS.

## Project Structure

- `index.html` — HTML page.
- `index.php` — PHP-based page.
- `convert.php` — Processes currency conversion requests.
- `login.php` — Login functionality.
- `register.php` — Registration functionality.
- `style.css`, `styles.css`, `styless.css` — Stylesheet files.
- `config.example.php` — Example API configuration without a real API key.

## Requirements

- XAMPP or another compatible PHP environment.
- A web browser.
- An ExchangeRate-API API key.

## Installation and Setup

1. Download or clone this repository.
2. Place the project folder inside the XAMPP `htdocs` directory.
3. Copy `config.example.php` and rename the copy to `config.php`.
4. Open `config.php` and replace `YOUR_API_KEY` with your own API key.
5. Start Apache using the XAMPP Control Panel.
6. Open the project through `localhost` in your browser.

For example:

`http://localhost/currency-converter-sdlc/`

Adjust the URL to match your actual project folder name.

## Security

- Never commit your actual API key.
- The local `config.php` file is excluded through `.gitignore`.
- Use your own API key when running the application.

## Academic Context

This project was developed for an academic assignment focused on the Software Development Life Cycle (SDLC).