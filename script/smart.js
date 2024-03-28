if (typeof web3 !== 'undefined') {
    web3 = new Web3(web3.currentProvider);
} else {
    web3 = new Web3(new Web3.providers.HttpProvider('http://localhost:7545'));
}

web3.eth.defaultAccount = web3.eth.accounts[2];

var contractAbi = [
	{
		"constant": true,
		"inputs": [],
		"name": "transacId",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"type": "function",
		"stateMutability": "view"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_amount",
				"type": "uint256"
			}
		],
		"name": "addToken",
		"outputs": [],
		"payable": false,
		"type": "function",
		"stateMutability": "nonpayable"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "ownerAdd",
		"outputs": [
			{
				"name": "",
				"type": "address"
			}
		],
		"payable": false,
		"type": "function",
		"stateMutability": "view"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_amount",
				"type": "uint256"
			}
		],
		"name": "tokenExchanged",
		"outputs": [],
		"payable": false,
		"type": "function",
		"stateMutability": "nonpayable"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "tokenGained",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"type": "function",
		"stateMutability": "view"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "tokenAmount",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"type": "function",
		"stateMutability": "view"
	},
	{
		"inputs": [],
		"type": "constructor",
		"payable": true,
		"stateMutability": "payable"
	}
];

var contractAddress = '0x2c114983c091c3b640CfF98e463365CfF1d95a20';

var contract = web3.eth.contract(contractAbi).at(contractAddress);

contract.tokenAmount(function (err, amount) {
    document.getElementById('tokenAmount').innerHTML = amount;
});
contract.tokenGained(function (err, gain){
	document.getElementById('gain').innerHTML = gain;
});
contract.ownerAdd(function (err, address){
	document.getElementById('address').innerHTML = address;
});
contract.transacId(function (err, id){
	document.getElementById('id').innerHTML = id;
});
document.getElementById('btn').addEventListener('click', function () {
	location.reload();
    let x = document.getElementById('input').value;
    contract.addToken(parseInt(x));
    contract.tokenExchanged(parseInt(x));
})


