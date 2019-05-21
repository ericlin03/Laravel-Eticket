pragma solidity >=0.4.21 <0.6.0;
pragma experimental ABIEncoderV2;

contract BuyTickets{
  address payable public owner = 0x4190C332e7D40bF2E7A370Bbc836F5b8832CB326;
  uint buyers = 0;
  address[] public buyerAccounts;
  uint price;
  uint public countConfirms = 0; //auto pay when all buyers confirm
  constructor() public{
    /* owner = msg.sender; */
    // price = 1 ether;
  }

  struct Buyer {
    string email;
    bool status;
  }

  mapping (address => uint) balance;
  mapping (address => Buyer) theBuyer;

  // event buyerRegistered(address email);

  function setBuyer(address[] memory arr, string[] memory email, bool[] memory status) public {
    for(uint i = 0; i < arr.length ; i++){
      theBuyer[arr[i]].email = email[i];
      theBuyer[arr[i]].status = status[i];
      buyers++;
      buyerAccounts.push(arr[i]) - 1;
    }
    buyers = arr.length;
    // emit buyerRegistered(buyer.email);
  }

  //confirm(): change status to true, and put in ether
  function confirm(uint _amount) public payable{
    /* require() */
    // require(msg.value == price); //making sure they are paying the right amount
    require(includes(buyerAccounts, msg.sender)); //making sure the account calling confirm is in the array
    require(theBuyer[msg.sender].status != true);
    theBuyer[msg.sender].status = true; //set buyer status to true
    balance[msg.sender] += msg.value; //remember how many a buyer paid
    countConfirms++;
    if(countConfirms == buyerAccounts.length){ //if all the buyers had confirm, pay automatically
      buyTickets(buyers * _amount);
    }
  }
  

  // cancel
  function cancel() public payable{
    // require(theBuyer[msg.sender].status == true); //make sure the buyer calling cancel was true
    theBuyer[msg.sender].status = false; //change buyer status to false
    countConfirms--;
    balance[msg.sender] -= price;
    msg.sender.transfer(price); //transfer money back to buyer
  }

  //buyTickets(): transfer ether to owner
  function buyTickets(uint _amount) public payable{
    require(checkIfTrue());
    owner.transfer(1 ether * _amount); //transfer ether to the contract owner
  }



  //to make sure the account calling confirm() is in the array
  function includes(address[] memory arr, address find) public pure returns(bool){
    uint count = 0;
    for(uint i = 0; i < arr.length; i++){
      if(arr[i] == find){
        count++;
      }
    }
    if(count > 0){
      return true;
    }
    else{
      return false;
    }
  }

  //check if all accounts status is true
  function checkIfTrue() public view returns(bool){
    uint flag = 0;
    for(uint j = 0; j< buyerAccounts.length -1; j++){
      if(theBuyer[buyerAccounts[j]].status == true){
        flag++;
      }
    }
    if(flag == buyerAccounts.length -1){
      return true;
    }
    else{
      return false;
    }
  }

  function checkDuplicate(address arr) public view returns(bool){
    if(buyerAccounts.length == 0){
      return true;
    }else{
      for(uint s = 0; s <= buyerAccounts.length -1 ; s++){
        /* buyerAccounts[s] == arr ? false: true; */
        if(buyerAccounts[s] == arr){
          return false;
        }
        /* else{
          return true;
        } */
      }
    }
    /* buyerAccounts.forEach( function(element) {
      if(element != arr){
        check = true;
      }
    }) */
    return true;
  }
}
/**
console script
var accounts;
web3.eth.getAccounts(function(err, res){accounts = res});
var account1 = accounts[1]
...
Eticket.deployed().then(inst => { test = inst })
test.setBuyer(account1, 'buyer1', false)
...
test.confirm({from: account1, value: web3.utils.toWei('1', 'ether')});
...
**/