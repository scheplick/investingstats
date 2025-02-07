<?php
/*
Plugin Name: InvestingStats
Description: A sleek, minimalistic page with flickering title and smoothly transitioning stats.
Version: 1.6
Author: Your Name
*/

function investingstats_minimal_page() {
    if (is_page('investingstats')) {
        echo '<!DOCTYPE html>
        <html>
        <head>
            <title>Investing Stats</title>
            <style>
                body {
                    background-color: black;
                    color: white;
                    font-family: Arial, sans-serif;
                    text-align: center;
                    margin: 0;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    height: 100vh;
                    overflow: hidden;
                }
                h1 {
                    font-size: 50px;
                    opacity: 0.8;
                    animation: flicker 1.5s infinite alternate;
                }
                @keyframes flicker {
                    0% { opacity: 0.8; }
                    100% { opacity: 1; }
                }
                .stats-container {
                    position: absolute;
                    top: 55%;
                    width: 100%;
                    height: 100px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    overflow: hidden;
                }
                .stat {
                    font-size: 24px;
                    position: absolute;
                    opacity: 0;
                    transform: translateX(100%);
                    animation: swipeInOut 6s linear infinite;
                }
                @keyframes swipeInOut {
                    0% { opacity: 0; transform: translateX(100%); }
                    10% { opacity: 1; transform: translateX(0%); }
                    90% { opacity: 1; transform: translateX(0%); }
                    100% { opacity: 0; transform: translateX(-100%); }
                }
            </style>
        </head>
        <body>
            <h1>Investing Stats</h1>
            <div class="stats-container">
                <div class="stat">Top Orange Exporter: Spain - $1.3 billion</div>
                <div class="stat">Largest GDP: United States - $28.78 trillion</div>
                <div class="stat">Fastest Bear Market: 16 days (2020)</div>
                <div class="stat">90-90-90 Rule: 90% of traders lose 90% in 90 days</div>
                <div class="stat">Biggest Short Squeeze: Volkswagen (2008) - 376% in 2 days</div>
                <div class="stat">Best Performing Stock: Altria (MO) - 266,000,000% return</div>
                <div class="stat">Bitcoin Holdings: Coinbase - 2,256,287 BTC</div>
                <div class="stat">Largest Single-Day Gain: +$50B (Elon Musk, Nov 2024)</div>
            </div>

            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    const stats = document.querySelectorAll(".stat");
                    stats.forEach((stat, index) => {
                        stat.style.animationDelay = `${index * 6}s`;
                    });
                });
            </script>
        </body>
        </html>';
        
        exit;
    }
}
add_action('template_redirect', 'investingstats_minimal_page');
