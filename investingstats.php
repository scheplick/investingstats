<?php
/*
Plugin Name: InvestingStats
Description: Forces /investingstats to be a blank white page with an animated stock ticker.
Version: 1.2
Author: Your Name
*/

function investingstats_cool_animated_page() {
    if (is_page('investingstats')) {
        echo '<!DOCTYPE html>
        <html>
        <head>
            <title>InvestingStats</title>
            <style>
                body {
                    background-color: black;
                    color: #00ff00;
                    font-family: monospace;
                    text-align: center;
                    margin: 0;
                    padding: 0;
                }
                h1 {
                    margin-top: 20%;
                    font-size: 50px;
                }
                .ticker-container {
                    position: fixed;
                    bottom: 10px;
                    width: 100%;
                    overflow: hidden;
                    white-space: nowrap;
                    background: rgba(255, 255, 255, 0.1);
                    padding: 5px 0;
                }
                .ticker {
                    display: inline-block;
                    animation: scroll 15s linear infinite;
                }
                @keyframes scroll {
                    from { transform: translateX(100%); }
                    to { transform: translateX(-100%); }
                }
                .stock {
                    display: inline-block;
                    padding: 0 15px;
                    font-size: 18px;
                }
            </style>
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    function getRandomStock() {
                        const stocks = ["AAPL", "TSLA", "AMZN", "GOOGL", "NVDA", "MSFT", "BTC", "ETH"];
                        return stocks[Math.floor(Math.random() * stocks.length)];
                    }

                    function getRandomPrice() {
                        return (Math.random() * 2000 + 100).toFixed(2);
                    }

                    function generateStockTicker() {
                        let tickerElement = document.getElementById("stock-ticker");
                        tickerElement.innerHTML = "";
                        for (let i = 0; i < 8; i++) {
                            let stock = document.createElement("span");
                            stock.className = "stock";
                            stock.innerHTML = getRandomStock() + ": $" + getRandomPrice();
                            tickerElement.appendChild(stock);
                        }
                    }

                    generateStockTicker();
                    setInterval(generateStockTicker, 5000);
                });
            </script>
        </head>
        <body>
            <h1>Hello World!</h1>
            <div class="ticker-container">
                <div class="ticker" id="stock-ticker"></div>
            </div>
        </body>
        </html>';
        
        exit;
    }
}
add_action('template_redirect', 'investingstats_cool_animated_page');
