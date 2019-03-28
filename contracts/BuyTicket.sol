pragma solidity >=0.4.21 <0.6.0;

contract BuyTicket {
    address payable buyer;
    address payable public platform = 0x4190C332e7D40bF2E7A370Bbc836F5b8832CB326;
    uint total;

    mapping (address => uint) balances;

    constructor() public {
        buyer = msg.sender;
    }

    function buyTicket(uint _amount) public payable {
        require(msg.value == 1 ether * _amount, "請確認帳戶餘額是否正確");
        platform.transfer(1 ether * _amount);
        total += _amount;
    }

    function viewTotal() public view returns (uint) {
        return total;
    }
}