<?php
require_once __DIR__ . '/config.php';
// Fetch the exchange rates from the API
$response = file_get_contents($api_url);

// Decode the JSON response
$exchange_rates = json_decode($response, true);

// Check if the API request was successful
if ($exchange_rates['result'] === 'success') {
    // Get form inputs
    $amount = $_POST['amount'];
    $from_currency = $_POST['from_currency'];
    $to_currency = $_POST['to_currency'];

    // Check if both currencies exist in the API data
    if (isset($exchange_rates['conversion_rates'][$from_currency]) && isset($exchange_rates['conversion_rates'][$to_currency])) {
        // Get the conversion rates
        $from_currency_rate = $exchange_rates['conversion_rates'][$from_currency];
        $to_currency_rate = $exchange_rates['conversion_rates'][$to_currency];

        // Convert from source currency to GBP, then to target currency
        $converted_amount = ($amount / $from_currency_rate) * $to_currency_rate;

        // Display the result
        echo "<h2>Conversion Result</h2>";
        echo "<p>$amount $from_currency is equal to " . number_format($converted_amount, 2) . " $to_currency</p>";
    } else {
        echo "<p>Invalid currency selection. Please try again.</p>";
    }
} else {
    echo "<p>Failed to retrieve exchange rates. Please try again later.</p>";
}
?>
