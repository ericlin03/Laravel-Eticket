pragma solidity >=0.4.21 <0.6.0;

contract Deposite {
    address payable public platform = 0x724091f781a3b0690E35f5Ac7e9601cfeE25c0eD; //平台帳號，永遠固定
    address payable buyer;

    constructor() public {
        buyer = msg.sender;
    }

    function deposite() public payable {
        require(buyer == platform, "非平台帳號");
    }

    function withdraw(uint _amount) public {
        // require(buyer != platform, "平台帳號不能購買平台幣");
        msg.sender.transfer(_amount * 1 ether);
    }
}