<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investment and Savings Plans</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <div class="container">
        <h1>Investment and Savings Plans</h1>
        <?php
        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $amount = floatval($_POST['amount']);
            $duration = intval($_POST['duration']);
            $interest = floatval($_POST['interest']);

            // Calculate the total return using the formula: A = P(1 + r/n)^(nt)
            // For simplicity, we'll assume compound interest is calculated annually (n = 1)
            $totalReturn = $amount * pow((1 + $interest / 100), $duration);
            $earnings = $totalReturn - $amount;

            // Display the investment summary
            echo "<h2>Investment Summary</h2>";
            echo "<p>Name: $name</p>";
            echo "<p>Initial Investment: NPR " . number_format($amount, 2) . "</p>";
            echo "<p>Duration: $duration years</p>";
            echo "<p>Estimated Earnings: NPR " . number_format($earnings, 2) . "</p>";
            echo "<p>Total Return: NPR " . number_format($totalReturn, 2) . "</p>";
        } else {
            // Display the form if not submitted
        ?>
            <form action="" method="POST">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="amount">Investment Amount (NPR):</label>
                <input type="number" id="amount" name="amount" required>

                <label for="duration">Investment Duration (years):</label>
                <input type="number" id="duration" name="duration" required>

                <label for="interest">Estimated Interest Rate (%):</label>
                <input type="number" id="interest" name="interest" step="0.01" required>

                <button type="submit">Calculate Returns</button>
            </form>
        <?php
        }
        ?>
    </div>
</body>
</html>
