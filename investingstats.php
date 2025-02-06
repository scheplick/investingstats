<?php
/*
Plugin Name: InvestingStats
Description: A minimalistic black background page with white text displaying curated investment stats.
Version: 1.3
Author: Your Name
*/

function investingstats_black_page() {
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
                    text-align: left;
                    padding: 40px;
                    max-width: 800px;
                    margin: auto;
                    line-height: 1.6;
                }
                h1, h2 {
                    text-align: center;
                }
                h1 {
                    font-size: 36px;
                    margin-bottom: 20px;
                }
                h2 {
                    font-size: 24px;
                    margin-top: 40px;
                    border-bottom: 2px solid white;
                    padding-bottom: 5px;
                }
                .section {
                    margin-bottom: 30px;
                }
                .stat {
                    margin-left: 20px;
                }
            </style>
        </head>
        <body>
            <h1>Investing Stats</h1>

            <div class="section">
                <h2>Top 10 Orange Exporters</h2>
                <p class="stat">1. Spain - $1.3 billion</p>
                <p class="stat">2. Egypt - $798.8 million</p>
                <p class="stat">3. South Africa - $792.4 million</p>
                <p class="stat">4. United States - $521.5 million</p>
                <p class="stat">5. Netherlands - $338.4 million</p>
                <p class="stat">6. Greece - $244.2 million</p>
                <p class="stat">7. Australia - $186.7 million</p>
                <p class="stat">8. Italy - $146.7 million</p>
                <p class="stat">9. Portugal - $129.1 million</p>
                <p class="stat">10. Turkey - $114.8 million</p>
            </div>

            <div class="section">
                <h2>Top 10 Avocado Exporters</h2>
                <p class="stat">1. Mexico - $2.8 billion</p>
                <p class="stat">2. Netherlands - $1.1 billion</p>
                <p class="stat">3. Peru - $963.4 million</p>
                <p class="stat">4. Spain - $413.9 million</p>
                <p class="stat">5. Israel - $260.8 million</p>
                <p class="stat">6. Chile - $244.7 million</p>
                <p class="stat">7. Colombia - $200.9 million</p>
                <p class="stat">8. Morocco - $152.7 million</p>
                <p class="stat">9. South Africa - $144.6 million</p>
                <p class="stat">10. Kenya - $141.8 million</p>
            </div>

            <div class="section">
                <h2>Largest GDPs by Country</h2>
                <p class="stat">1. United States - $28.78 trillion</p>
                <p class="stat">2. China - $18.53 trillion</p>
                <p class="stat">3. Germany - $4.59 trillion</p>
                <p class="stat">4. Japan - $4.11 trillion</p>
                <p class="stat">5. India - $3.94 trillion</p>
                <p class="stat">6. United Kingdom - $3.5 trillion</p>
                <p class="stat">7. France - $3.13 trillion</p>
                <p class="stat">8. Italy - $2.33 trillion</p>
                <p class="stat">9. Canada - $2.33 trillion</p>
                <p class="stat">10. South Korea - $2.24 trillion</p>
            </div>

            <div class="section">
                <h2>Volkswagen Short Squeeze (2008)</h2>
                <p>Volkswagen shares surged from €200 to over €1,000 in two days after Porsche increased its stake to 74.1%.</p>
                <ul>
                    <li>Stock skyrocketed 376% in 48 hours</li>
                    <li>Volkswagen briefly became the world’s most valuable company ($370B market cap)</li>
                    <li>Short sellers suffered massive losses</li>
                </ul>
            </div>

            <div class="section">
                <h2>90-90-90 Rule in Trading</h2>
                <p>90% of traders lose 90% of their money in 90 days—a harsh reality of short-term speculation.</p>
            </div>

            <div class="section">
                <h2>Best Performing Stocks Since IPO</h2>
                <p class="stat">1. Altria (MO) - ~266,000,000% return</p>
                <p class="stat">2. Coca-Cola (KO) - ~12,000,000% return</p>
                <p class="stat">3. Microsoft (MSFT) - ~360,000% return</p>
                <p class="stat">4. Apple (AAPL) - ~320,000% return</p>
                <p class="stat">5. Amazon (AMZN) - ~170,000% return</p>
            </div>

            <div class="section">
                <h2>Biggest Moves in Market History</h2>
                <p class="stat">📈 Largest point gain: +2,113 (Dow, March 24, 2020)</p>
                <p class="stat">📉 Largest point loss: -2,997 (Dow, March 16, 2020)</p>
                <p class="stat">🚀 Best percentage day: +15.3% (Dow, March 15, 1933)</p>
                <p class="stat">📉 Worst percentage day: -22.6% (Dow, October 19, 1987)</p>
            </div>

            <div class="section">
                <h2>Biggest Bitcoin Holders</h2>
                <p class="stat">1. Coinbase - 2,256,287 BTC</p>
                <p class="stat">2. Satoshi (Unknown) - 968,452 BTC</p>
                <p class="stat">3. Binance - 636,209 BTC</p>
                <p class="stat">4. BlackRock - 357,509 BTC</p>
            </div>

            <div class="section">
                <h2>Fastest Bear Market Ever</h2>
                <p>In 2020, the stock market crashed into a bear market in just **16 days**—the fastest recorded in history.</p>
            </div>

            <div class="section">
                <h2>Stock Market Participation in the U.S.</h2>
                <p>42% of U.S. households have **no exposure** to the stock market.</p>
                <p>Among the wealthiest 10%, **96.4% own stocks**.</p>
            </div>

        </body>
        </html>';
        
        exit;
    }
}
add_action('template_redirect', 'investingstats_black_page');
