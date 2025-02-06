<?php
/*
Plugin Name: InvestingStats
Description: Forces /investingstats to be a blank white page with just "Hello World!"
Version: 1.1
Author: Your Name
*/

function investingstats_force_blank_page() {
    if (is_page('investingstats')) {
        // Output a completely blank page with just "Hello World!"
        echo '<!DOCTYPE html>
        <html>
        <head>
            <title>InvestingStats</title>
            <style>
                body {
                    background-color: white;
                    color: black;
                    font-size: 24px;
                    text-align: center;
                    margin-top: 20%;
                }
            </style>
        </head>
        <body>
            Hello World!
        </body>
        </html>';
        
        exit; // Stop WordPress from loading anything else
    }
}
add_action('template_redirect', 'investingstats_force_blank_page');
