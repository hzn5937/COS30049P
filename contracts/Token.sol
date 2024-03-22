pragma solidity ^0.4.2;

contract Token {
    uint public tokenAmount;

    function Token() public {
        tokenAmount = 0;
    }

    function addToken (uint _amount) public {
        tokenAmount += _amount;
    }
}
