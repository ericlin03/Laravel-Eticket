pragma solidity >=0.4.21 <0.6.0;

contract Resale {
    
    address payable seller;
    address payable buyer;
    address payable public platform = 0x4190C332e7D40bF2E7A370Bbc836F5b8832CB326;
    uint originalPrice;

    constructor() public {
        buyer = msg.sender;
    }

    // 轉售方地址
    function setSeller(address payable _seller) public {
        seller = _seller;
    }

    // 售票平台地址（之後為定數）
    // function setPlatform(address payable _platform) public {
    //     platform = _platform;
    // }

    // 設定原票價金額
    function setAmount(uint _originalPrice) public {
        originalPrice = 1 ether * _originalPrice;
    }

    // 確定買票方多付10%的手續費
    modifier comfirm() {
        require(msg.sender == buyer && msg.value == originalPrice * 105 / 100, "金額出問題...");
        _;
    }

    // 轉帳；買家得到原票價的90％，平台得到中間的手續費
    function transfer() public payable {
        // require(msg.sender == buyer);
        // require(msg.value == originalPrice * 105 / 100);
        seller.transfer(originalPrice);
        // platform.transfer(originalPrice);
    }
}

// console script

// let instance = await Resale.deployed()
// let accounts = await web3.eth.getAccounts()
// instance.setSeller(accounts[6])
// instance.setPlatform(accounts[3])
// instance.setAmount(30)
// instance.transfer({from: accounts[0], value: web3.utils.toWei('33', 'ether')})