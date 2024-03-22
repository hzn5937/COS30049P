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
        "name": "candidateName",
        "outputs": [
            {
                "name": "",
                "type": "string"
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
                "name": "_name",
                "type": "string"
            }
        ],
        "name": "setCandidate",
        "outputs": [],
        "payable": false,
        "type": "function",
        "stateMutability": "nonpayable"
    },
    {
        "inputs": [],
        "type": "constructor",
        "payable": true,
        "stateMutability": "payable"
    }
];

var contractAddress = '0xae9609924Fd15850509c785559B5dc1Fec36674e';

var contract = web3.eth.contract(contractAbi).at(contractAddress);

contract.candidateName(function (err, candidate) {
    document.getElementById('tokenAmount').innerHTML = candidate;
})
document.getElementById('btn').addEventListener('click', function () {
    location.reload();
    let x = document.getElementById('input').value;
    contract.setCandidate(String(x));
})