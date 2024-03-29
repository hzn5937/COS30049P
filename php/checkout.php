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

class ShoppingCart {
    private $items = [];
    private $account;

    public function __construct(Account $account) {
        $this->account = $account;
    }

    public function addItem($product_id, $quantity, $price) {
        $this->items[] = [
            'product_id' => $product_id,
            'quantity' => $quantity,
            'price' => $price
        ];
    }

    public function calculateTotal() {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['quantity'] * $item['price'];
        }
        return $total;
    }

    public function checkout() {
        $totalAmount = $this->calculateTotal();
        if ($this->account->deductAmount($totalAmount)) {
            return "Checkout successful. Remaining balance: $" . number_format($this->account->getBalance(), 2);
        } else {
            return "Checkout failed due to insufficient balance.";
        }
    }
}

// Usage example
$account = new Account(100); // Starting balance $100
$cart = new ShoppingCart($account);

// Adding items to the cart
$cart->addItem('1', 2, 10.50); // Product ID 1, Quantity 2, Price $10.50 each
$cart->addItem('2', 1, 60); // Product ID 2, Quantity 1, Price $60 each

// Checking out
echo $cart->checkout() . "\n";

// Fully implemented checkout function
function checkout($cart) {
    // Here you would implement any additional logic related to the checkout process
    // For the sake of this example, we'll just return the result of the ShoppingCart's checkout method
    return $cart->checkout();
}

// Call the fully implemented checkout function
echo checkout($cart) . "\n";

?>
