// const ConvertLib = artifacts.require("ConvertLib");
// const MetaCoin = artifacts.require("MetaCoin");
const Eticket = artifacts.require("Eticket");
const Resale = artifacts.require("Resale");
const BuyTicket = artifacts.require("BuyTicket");
const BuyTickets = artifacts.require("BuyTickets");
// const DappToken = artifacts.require("DappToken");
// const DappTokenSale = artifacts.require("DappTokenSale");

module.exports = function(deployer) {
  // deployer.deploy(ConvertLib);
  // deployer.link(ConvertLib, MetaCoin);
  // deployer.deploy(MetaCoin);
  // deployer.link(ConvertLib, Eticket);
  deployer.deploy(Eticket).then(() => console.log(Eticket.address));
  deployer.deploy(Resale).then(() => console.log(Resale.address));
  deployer.deploy(BuyTicket).then(() => console.log(BuyTicket.address));
  deployer.deploy(BuyTickets).then(() => console.log(BuyTickets.address));
  // deployer.deploy(DappToken).then(() => console.log(DappToken.address));
  // deployer.deploy(DappTokenSale).then(() => console.log(DappTokenSale.address));
};
