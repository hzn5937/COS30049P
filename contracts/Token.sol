pragma solidity ^0.4.2;

contract Token {
    uint public tokenGained;
    uint public tokenAmount;
    address public ownerAdd;
    uint public transacId;

    function Token() public {
        tokenAmount = 0;    
    }
    
    function addToken (uint _amount) public {
        tokenAmount += _amount;
        setAddress();
        setId();
    }

    function tokenExchanged (uint _amount) public {
        tokenGained = _amount;
    }

    function setAddress() private {
        ownerAdd = msg.sender; 
    }

    function setId() private {
        transacId += 1;
    }

}
