if (typeof web3 !== 'undefined') {
    web3 = new Web3(web3.currentProvider);
} else {
    web3 = new Web3(new Web3.providers.HttpProvider('http://localhost:7545'));
}

web3.eth.defaultAccount = web3.eth.accounts[2];

var contractAbi = [
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

var contractAddress = '0xB3f3BBa38A750F80f45cE8CDF0e143C0B26b8e43';

var contract = web3.eth.contract(contractAbi).at(contractAddress);

contract.tokenAmount(function (err, amount) {
    document.getElementById('tokenAmount').innerHTML = amount;
})
document.getElementById('btn').addEventListener('click', function () {
    location.reload();
    let x = document.getElementById('input').value;
    contract.addToken(parseInt(x));
})