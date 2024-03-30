<?php

class Account {
    private $balance;

    public function __construct($balance) {
        $this->balance = $balance;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deductAmount($amount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            return true; // Deduction successful
        } else {
            return false; // Insufficient balance
        }
    }
}

// Function to perform the checkout
function checkout(Account $account, $totalAmount) {
    if ($account->deductAmount($totalAmount)) {
        return "Checkout successful. Remaining balance: $" . number_format($account->getBalance(), 2);
    } else {
        return "Checkout failed due to insufficient balance.";
    }
}

// Usage example
$account = new Account(100); // Starting balance $100

// Example total amount
$totalAmount = 2 * 10.50 + 1 * 60; // Assuming the same total amount as before

// Perform the checkout
echo checkout($account, $totalAmount) . "\n";

?>
