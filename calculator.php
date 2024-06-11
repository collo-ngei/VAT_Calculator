<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h1>Selling Prices Calculation Results</h1>";
    
    for ($i = 1; $i <= 10; $i++) {
        $buyingPrice = $_POST["buying_price_$i"];
        $vatPercentage = $_POST["vat_$i"];
        $expensesPercentage = $_POST["expenses_$i"];
        $profitMarginPercentage = $_POST["profit_margin_$i"];
        
        $vatAmount = $buyingPrice * ($vatPercentage / 100);
        $expensesAmount = $buyingPrice * ($expensesPercentage / 100);
        $profitMarginAmount = $buyingPrice * ($profitMarginPercentage / 100);
        
        $sellingPrice = $buyingPrice + $vatAmount + $expensesAmount + $profitMarginAmount;
        
        echo "<h3>Product $i</h3>";
        echo "Buying Price: $buyingPrice<br>";
        echo "VAT Amount: $vatAmount<br>";
        echo "General Expenses Amount: $expensesAmount<br>";
        echo "Profit Margin Amount: $profitMarginAmount<br>";
        echo "<strong>Selling Price: $sellingPrice</strong><br><br>";
    }
}
?>
