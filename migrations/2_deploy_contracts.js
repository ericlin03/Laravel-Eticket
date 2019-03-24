// const ConvertLib = artifacts.require("ConvertLib");
// const MetaCoin = artifacts.require("MetaCoin");
const Eticket = artifacts.require("Eticket");
const Resale = artifacts.require("Resale");

module.exports = function(deployer) {
  // deployer.deploy(ConvertLib);
  // deployer.link(ConvertLib, MetaCoin);
  // deployer.deploy(MetaCoin);
  // deployer.link(ConvertLib, Eticket);
  deployer.deploy(Eticket).then(() => console.log(Eticket.address));
  deployer.deploy(Resale);
};
