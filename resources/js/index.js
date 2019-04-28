import Web3 from "../../node_modules/web3";
import eticketArtifact from "../../build/contracts/Eticket.json";
import resaleArtifact from "../../build/contracts/Resale.json";
import buyTicketArtifact from "../../build/contracts/BuyTicket.json";
import buyTicketsArtifact from "../../build/contracts/BuyTickets.json";
// import {Personal} from 'web3-eth-personal';
// import { once } from "cluster";

var blockNumber;
var checkStatus = false;

const App = {
  web3: null,
  account: null,
  eticket: null,
  resale: null,
  buyTicket: null,
  buyTickets: null,

  start: async function() {
    const { web3 } = this;

    try {
      // get contract instance
      const networkId = await web3.eth.net.getId();

      const deployedEticket = eticketArtifact.networks[networkId];
      this.eticket = new web3.eth.Contract(
        eticketArtifact.abi,
        deployedEticket.address,
      );

      const deployResale = resaleArtifact.networks[networkId];
      this.resale = new web3.eth.Contract(
        resaleArtifact.abi,
        deployResale.address,
      );

      const deployBuyTicket = buyTicketArtifact.networks[networkId];
      this.buyTicket = new web3.eth.Contract(
        buyTicketArtifact.abi,
        deployBuyTicket.address,
      );

      const deployBuyTickets = buyTicketsArtifact.networks[networkId];
      this.buyTickets = new web3.eth.Contract(
        buyTicketsArtifact.abi,
        deployBuyTickets.address,
      );


      // get accounts
      const accounts = await web3.eth.getAccounts();
      this.account = accounts[0];
      // $('#status').html(accounts);

      //get block number & present
      web3.eth.getBlockNumber(function (error, num){if (!error) {blockNumber = num;}});
      this.viewBalance();
      this.allBlock();

      // web3.eth.getBalance(this.account, (err, balance) => {
      //   if (err) return;
      //   $('#viewTx').html(balance);
      //   console.log(balance);
      // });

      // web3.eth.getTransactionReceipt(
      //   '0x05d81f00d7521c2a8976d520e3d68c28edbafd687008f05f3bae8b6f55a8b915',
      //   function(error, hash) {
      //     if (!error) {
      //       $('#viewStatus').html(hash.blockHash);
      //       console.log(hash);
      //     }
      //   }
      // );
    } catch (error) {
      // console.error("Could not connect to contract or chain.");
      console.log(error);
    }
  },

  // Contract BuyTickets
  setBuyer: async function() {
    try {
      const { setBuyer } = this.buyTickets.methods;
      let receiver = $("#rec").val();
      await console.log(receiver);
      await setBuyer(receiver, "email", false).send({
        from: this.account
      });
      // $("#status").html(await getBuyers().call());
    } catch (error) {
      // $("#viewReceiver").html("error");
      console.log(error);
    }
  },

  confirm: async function() {
    try {
      const { web3 } = this;
      const { confirm } = this.buyTickets.methods;
      let wallet = $("#wallet").text();
      wallet = wallet.toString();
      let amount = $("#amount").text();
      // amount = amount.toString();
      if (checkStatus) {
        setTimeout(function() {
          window.location.href = "http://localhost:8000/home";
        }, 200);
        await confirm().send({
          from: wallet,
          value: web3.utils.toWei(amount, "ether")
        });
      } else {
        alert("請先確認錢包");
        setTimeout(function() {
          window.location.href = "http://localhost:8000/confirmTicket";
        }, 200);
      }
    } catch (error) {
      console.log(error);
      $("#status").html("error");
    }
  },

  // Contract BuyTicket
  buy: async function() {
    try {
      const { web3 } = this;
      const { buyTicket } = this.buyTicket.methods;
      var amount = parseInt($("#amount").text());
      var value = amount.toString();
      if (checkStatus == true){
        await buyTicket(amount).send({ from: this.account, value: web3.utils.toWei(value, 'ether')});
        checkStatus = false;
      } else if (checkStatus == false) {
        alert('請確認填寫錢包位址與檢查');
      }
    } catch(error) {
      console.log(error);
    }
  },
  // .then(window.location.replace('./payment-step3')),

  jumpToStep3: async function(){
    if (checkStatus == true){
      window.location.replace('./payment-step3');
    }
  },

  checkStatus: async function() {
    if (this.account == $('#wallet').text()){
      checkStatus = true;
      alert('錢包位址正確！');
    } else {
      alert('錢包地址與個人資料不相符，請確認MetaMask帳號與付款地址相同，確認完後請重新整理。');
    }
  },

  // Contract Eticket
  viewBalance: async function() {
    try {
      const { web3 } = this;
      const { getContractBalance } = this.eticket.methods;
      var balance = await getContractBalance().call();
      balance = balance.toString();
      $("#balance").html(web3.utils.fromWei(balance, 'ether'));
    } catch(error) {
      $("#balance").html('error');
    }
  },

  setReceiver: async function() {
    try {
      const { setReceiver } = this.eticket.methods;
      const { getReceiver } = this.eticket.methods;
      var receiver = $("#receiver").val();
      await setReceiver(receiver).send({ from: this.account });
      var viewReceiver = await getReceiver().call();
      $("#viewReceiver").html(viewReceiver);
    } catch (error) {
      $("#viewReceiver").html('error');
      console.log(error)
    }
  },

  setDays: async function() {
    try {
      const { setDays } = this.eticket.methods;
      const { getDays } = this.eticket.methods;
      var days = parseInt($("#days").val());
      // web3.eth.personal.unlockAccount(this.account, '123456', 100, function(err, object){if (!err){$('#status').html('unlocked!')}});
      await setDays(days).send({ from: this.account });
      var viewDays = await getDays().call();
      $("#viewDays").html(viewDays);
    } catch (error) {
      $("#viewDays").html('error');
    }
  },

  sendToContract: async function() {
    try {
      const { web3 } = this;
      const { sendToContract } = this.eticket.methods;
      await sendToContract().send({from: this.account, value: web3.utils.toWei('1', 'ether')});
      this.viewBalance();
      $("#contractStatus").html('success');
    } catch (error) {
      $("#contractStatus").html('error');
    }
  },

  transferToOrganizer: async function() {
    try {
      const { transferToOrganizer } = this.eticket.methods;
      await transferToOrganizer().send({ from: this.account });
      this.viewBalance();
      $("#status").html('success');
    } catch (error) {
      $("#status").html('error');
    }
  },

  // Contract Resale
  checkResaleStatus: async function() {
    console.log("hello");
    if (this.account == $('#wallet').text()){
      checkStatus = true;
      alert('錢包位址正確');
      $("#setAmount").show();
      // var status = confirm('確定要購買此二手票卷嗎？');
      // if (status == true) {
      //   this.setAmount();
      //   this.setSeller();
      //   alert('請先在MetaMask中確認兩次交易後再按下確認付款！');
      // } else {
      //   alert('您已取消購買！');
      //   window.location.replace('./resale');
      // }
    } else {
      console.log($('#wallet').text());
      console.log(this.account);
      alert('錢包地址與個人資料不相符，請確認MetaMask帳號與付款地址相同，確認完後請重新整理。');
    }

    // if (checkStatus == true) {
    //   var status = confirm('錢包位址正確，確定要購買此二手票卷嗎？');
    //   if (status == true) {
    //     this.setAmount();
    //     var statusSeller = confirm('請先在MetaMask中按下CONFIRM，此步驟是設定金額');
    //   } else {
    //     alert('您已取消購買！');
    //     window.location.replace('./resale');
    //   }
    // }

    // if (statusSeller == true) {
    //   this.setSeller();
    //   alert('請先在MetaMask中按下CONFIRM，此步驟是設定賣家');
    // }
  },

  setSeller: async function() {
    console.log(this.account);
    try {
      if (checkStatus == true) {
        const { setSeller } = this.resale.methods;
        // var seller = $('#seller').val();
        var seller = $('#seller').text();
        await setSeller(seller).send({ from: this.account });
      }
    } catch (error) {
      console.log(error);
    }
  },

  // setPlatform: async function() {
  //   try {
  //     const { setPlatform } = this.resale.methods;
  //     var platform = '0x71b50f3c3fe9b5701cab53487330b91c1a9c816a';
  //     await setPlatform(platform).send({ from: this.account });
  //   } catch (error) {
  //     console.log(error);
  //   }
  // },

  setAmount: async function() {
    try {
      if (checkStatus == true) {
        const { setAmount } = this.resale.methods;
        // var amount = parseInt($("#amount").val());
        var amount = parseInt($("#amount").text());
        await setAmount(amount).send({ from: this.account });
      }
    } catch (error) {
      console.log(error);
    }
  },

  transfer: async function() {
    try {
      const { web3 } = this;
      const { transfer } = this.resale.methods;
      var amount = parseInt($("#amount").text());
      amount = amount * 1.05;
      // var amount = parseInt($("#amount").val());
      // var seller = $('seller').text();
      // var sellerAmount = amount * 0.95;
      // var platformAmount = amount * 0.1;
      // const platform = '0x4190C332e7D40bF2E7A370Bbc836F5b8832CB326';
      amount = amount.toString();
      // await web3.eth.sendTransaction({from: this.account, value: web3.utils.toWei(sellerAmount, 'ether'), to: seller});
      // await web3.eth.sendTransaction({from: this.account, value: web3.utils.toWei(platformAmount, 'ether'), to: platform});
      await transfer().send({ from: this.account, value: web3.utils.toWei(amount, 'ether') });
      checkStatus = false;
    } catch(error) {
      console.log(error);
    }
  },
  
  //web3 function for view.blade.php
  allBlock: async function() {
    try {
      $('#allBlockBody').empty();
      const { web3 } = this;
      for (var i = blockNumber; i >= 0; i--){
        web3.eth.getBlock(i, 
          function(err, object){
            if (!err) {
              $('#allBlockBody').append("<tr><td># "+ object.number +"</td><td>" + object.hash+"</td><td>" + 
              object.extraData + "</td><td>" + object.transactions + "</td></tr>");
            }
          }); 
      }
    } catch(error) {
      console.log(error);
    }
  },

  specificBlock: async function() {
    try {
      const { web3 } = this;
      var blockNum = $('#blockNum').val();
      web3.eth.getBlock(blockNum,
        function(err, object) {
          if (!err) {
            $('#specificHead').replaceWith("<th id=\"specificHead\">" + blockNum + "</th>");
            $('#hash').replaceWith("<td id=\"hash\">" + object.hash + "</td>");
            $('#extraData').replaceWith("<td id=\"extraData\">" + object.extraData + "</td>");
            $('#transactions').replaceWith("<td id=\"transactions\">" + object.transactions + "</td>");
            console.log(object);
          }
        });
    } catch(error) {
      console.log(error);
    }
  },

  searchTx: async function() {
    try {
      const { web3 } = this;
      var txHash = $('#txHash').val();
      web3.eth.getTransactionReceipt(txHash, 
        function(err, object){
          if (!err) {
            $('#txHead').replaceWith("<th id=\"txHead\">" + txHash + "</th>");
            $('#blockNumber').replaceWith("<td id=\"blockNumber\">" + object.blockNumber + "</td>");
            $('#from').replaceWith("<td id=\"from\">" + object.from + "</td>");
            $('#to').replaceWith("<td id=\"to\">" + object.to + "</td>");
            $('#contractAddress').replaceWith("<td id=\"contractAddress\">" + object.contractAddress + "</td>");
            $('#gasUsed').replaceWith("<td id=\"gasUsed\">" + object.gasUsed + " wei</td>")
            console.log(object);
          }
        });
    } catch (error) {
      console.log(error);
    }
  }
};

window.App = App;

window.addEventListener("load", function() {
  if (window.ethereum) {
    // use MetaMask's provider
    App.web3 = new Web3(window.ethereum);
    window.ethereum.enable(); // get permission to access accounts
  } else {
    console.warn(
      "No web3 detected. Falling back to http://127.0.0.1:9545. You should remove this fallback when you deploy live",
    );
    // fallback - use your fallback strategy (local node / hosted node + in-dapp id mgmt / fail)
    App.web3 = new Web3(
      new Web3.providers.HttpProvider("http://127.0.0.1:8545"),
    );
  }

  App.start();
});