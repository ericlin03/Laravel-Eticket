import Web3 from "../../node_modules/web3";
import eticketArtifact from "../../build/contracts/Eticket.json";
import resaleArtifact from "../../build/contracts/Resale.json";
// import {Personal} from 'web3-eth-personal';
// import { once } from "cluster";

var blockNumber;

const App = {
  web3: null,
  account: null,
  meta: null,
  resale: null,

  start: async function() {
    const { web3 } = this;

    try {
      // get contract instance
      const networkId = await web3.eth.net.getId();
      const deployedNetwork = eticketArtifact.networks[networkId];
      this.meta = new web3.eth.Contract(
        eticketArtifact.abi,
        deployedNetwork.address,
      );

      const deployResale = resaleArtifact.networks[networkId];
      this.resale = new web3.eth.Contract(
        resaleArtifact.abi,
        deployResale.address,
      );


      // get accounts
      const accounts = await web3.eth.getAccounts();
      this.account = accounts[0];
      // const personal = new Personal(
      //   'http://127.0.0.1:8545',
      //   this.account,
      // );
      web3.eth.getBlockNumber(function (error, num){if (!error) {blockNumber = num;}});
      this.viewBalance();
      this.allBlock();
      // $("#status").html(web3.defaultAccount);

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
      $("#status").html("start error");
    }
  },

  // Contract Eticket
  viewBalance: async function() {
    try {
      const { web3 } = this;
      const { getContractBalance } = this.meta.methods;
      var balance = await getContractBalance().call();
      balance = balance.toString();
      $("#balance").html(web3.utils.fromWei(balance, 'ether'));
    } catch(error) {
      $("#balance").html('error');
    }
  },

  setReceiver: async function() {
    try {
      const { setReceiver } = this.meta.methods;
      const { getReceiver } = this.meta.methods;
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
      const { web3 } = this;
      const { setDays } = this.meta.methods;
      const { getDays } = this.meta.methods;
      var days = parseInt($("#days").val());
      web3.eth.personal.unlockAccount(this.account, '123456').then(console.log('unlocked!'));
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
      const { sendToContract } = this.meta.methods;
      await sendToContract().send({from: this.account, value: web3.utils.toWei('1', 'ether')});
      this.viewBalance();
      // await sendToContract.sendTransaction({from: this.account, value: web3.utils.toWei('1', 'ether'), to: "0x38B0D0B614AC14FaB5e92f8b918Fa6aA68AF1c44"});
      // 0xA6d21556c9DD6B00c2CEC9c8A2f53993bFA48003
      $("#contractStatus").html('success');
    } catch (error) {
      $("#contractStatus").html('error');
    }
  },

  transferToOrganizer: async function() {
    try {
      const { transferToOrganizer } = this.meta.methods;
      await transferToOrganizer().send({ from: this.account });
      this.viewBalance();
      $("#status").html('success');
    } catch (error) {
      $("#status").html('error');
    }
  },

  // Contract Resale
  setSeller: async function() {
    try {
      const { web3 } = this;
      const { setSeller } = this.resale.methods;
      const { setPlatform } = this.resale.methods;
      var seller = $("#seller").val();
      await setSeller(seller).send({ from: this.account });
      await setPlatform('0x71b50f3c3fe9b5701cab53487330b91c1a9c816a').send({ from: this.account });
      $("#viewSeller").html(seller);
    } catch (error) {
      $("#viewSeller").html('error');
    }
  },

  setAmount: async function() {
    try {
      const { setAmount } = this.resale.methods;
      var amount = parseInt($("#amount").val());
      await setAmount(amount).send({ from: this.account });
      $("#viewAmount").html(amount);
    } catch (error) {
      $("#viewAmount").html('error');
    }
  },

  transfer: async function() {
    try {
      const { web3 } = this;
      const { transfer } = this.resale.methods;
      var amount = parseInt($("#amount").val()) * 11 / 10;
      amount = amount.toString();
      await transfer().send({ from: this.account, value: web3.utils.toWei(amount, 'ether') })
    } catch(error) {
      $("#status").html('error');
    }
  },

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