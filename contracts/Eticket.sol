pragma solidity >=0.4.21 <0.6.0;

contract Eticket {

    address payable owner;
    address payable receiver;
    uint setDay;
    uint expirationDate;
    uint8 counter = 0;
    uint amount = 1 ether;

    mapping (address => uint) balances;

    constructor() public {
        owner = msg.sender;
    }

    function setReceiver(address payable recAddress) public {
        receiver = recAddress;
    }

    function getReceiver() view public returns(address){
        return receiver;
    }

    //Set how many days after to transfer
    function setDays(uint _days) public {
        setDay = _days;
        createTimer();
    }

    function getDays() view public returns (uint) {
        return setDay;
    }

    //Set a timer
    function createTimer() internal {
        expirationDate = now + setDay * 1 minutes;
    }

    //End the timer
    modifier endTimer() {
        require(expirationDate != 0 && now >= expirationDate, "如果尚未設定時間，請先設定時間。如果轉帳時間尚未到，請等計時器結束。");
        _;
    }

    //Let this contract can only use once.
    modifier count() {
        require(counter == 0, "此合約已被使用，無法再次轉帳。");
        _;
    }

    function sendToContract() public payable {
        require(msg.sender == owner);
        require(msg.value == amount);
        balances[owner] += amount;
    }

    function getContractBalance() view public returns (uint){
        return balances[owner];
    }

    //Transfer To Organizer
    function transferToOrganizer() public payable endTimer() count() {
        // require(balances[owner] == amount);
        receiver.transfer(amount);
        balances[owner] -= amount;
        counter += 1;
    }
/**
console script
let instance = await Eticket.deployed()
let accounts = await web3.eth.getAccounts()
let account1 = accounts[1]
instance.setReceiver(account1);
instance.getReceiver();
instance.setDays(1);
instance.sendToContract({from: account0, value: web3.utils.toWei('1','ether')})
instance.getContractBalance();
instance.transferToOrganizer();
**/



    // mapping (address => uint) balances;

    // constructor() public {
    //     balances[msg.sender] = 10000;
    // }

    // function transferToOrganizer(address receiver, uint amount) public returns(bool sufficient) {
    //     if (balances[msg.sender] < amount) return false;
    //     balances[msg.sender] -= amount;
    //     balances[receiver] += amount;
    //     emit Transfer(msg.sender, receiver, amount);
    //     return true;
    // }
}


// pragma solidity >=0.4.21 <0.6.0;

// import "./ConvertLib.sol";

// contract Eticket {

//     uint setDay;
//     uint expirationDate;
//     uint8 counter = 0;

//     mapping (address => uint) balances;

//     event Transfer(address indexed _from, address indexed _to, uint256 _value);

//     constructor() public {
//         balances[msg.sender] = 10000;
//     }

//     //Set how many days after to transfer
//     function setDays(uint _days) public {
//         setDay = _days;
//         createTimer();
//     }

//     //Set a timer
//     function createTimer() internal {
//         expirationDate = now + setDay * 1 minutes;
//     }

//     //End the timer
//     modifier endTimer() {
//         require(expirationDate != 0 && now >= expirationDate, "如果尚未設定時間，請先設定時間。如果轉帳時間尚未到，請等計時器結束。");
//         _;
//     }

//     //Let this contract can only use once.
//     modifier count() {
//         require(counter == 0, "此合約已被使用，無法再次轉帳。");
//         _;
//     }

//     //Transfer To Organizer
//     function transferToOrganizer(address _addr,uint _amount) public endTimer() count() returns (bool sufficient){
//         if (balances[msg.sender] < _amount) return false;
//         balances[msg.sender] -= _amount;
//         balances[_addr] += _amount;
//         counter += 1;
//         emit Transfer(msg.sender, _addr, _amount);
//         return true;
//     }


//     // mapping (address => uint) balances;

//     // constructor() public {
//     //     balances[msg.sender] = 10000;
//     // }

//     // function transferToOrganizer(address receiver, uint amount) public returns(bool sufficient) {
//     //     if (balances[msg.sender] < amount) return false;
//     //     balances[msg.sender] -= amount;
//     //     balances[receiver] += amount;
//     //     emit Transfer(msg.sender, receiver, amount);
//     //     return true;
//     // }

//     // function getBalanceInEth(address addr) public view returns(uint) {
//     //     return ConvertLib.convert(getBalance(addr),2);
//     // }

//     // function getBalance(address addr) public view returns(uint) {
//     //     return balances[addr];
//     // }
// }