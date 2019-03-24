<!DOCTYPE html>
<html>
  <head>
    <title>MetaCoin | Truffle Webpack Demo w/ Frontend</title>
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script> -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="./dist/js/index.js"></script>
  </head>
  <style>
    input {
      display: block;
      margin-bottom: 12px;
    }
  </style>
  <body>
    <h1>try to view tx and web3 functions</h1>
    <label id="viewStatus"></label>
    <!-- <p>Number: </p><p id="blockHash"></p>
    <p>BlockNumber: </p><p id="blockNumber"></p>
    <p>TransactionHash: </p><p id="transactionHash"></p>
    <p>transactionIndex: </p><p id="transactionIndex"></p>
    <p>from: </p><p id="from"></p>
    <p>to: </p><p id="to"></p>
    <p>contractAddress: </p><p id="contractAddress"></p>
    <p>cumulativeGasUsed: </p><p id="cumulativeGasUsed"></p>
    <p>gasUsed: </p><p id="gasUsed"></p>
    <p>logs: </p><p id="logs"></p> -->
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">查看所有區塊</a></li>
        <li><a data-toggle="tab" href="#menu1">查詢特定區塊</a></li>
        <li><a data-toggle="tab" href="#menu2">查詢交易</a></li>
      </ul>
    
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
          <button onclick="App.allBlock()" class="btn btn-primary">查看所有區塊</button>
          <table class="table table-striped">
            <thead id="allBlockHead">
              <tr>
                <th>Number</th>
                <th>Hash</th>
                <th>Extra Data</th>
                <th>Transactions</th>
              </tr>
            </thead>
            <tbody id="allBlockBody"></tbody>
          </table>
        </div>
        <div id="menu1" class="tab-pane fade">
          <h3>查詢特定區塊</h3>
          <input id="blockNum" type="text" width="400" placeholder="請輸入特定區塊編號"></input>
          <button onclick="App.specificBlock()">查詢特定區塊</button>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Block #</th>
                <th id="specificHead"></th>
              </tr>
            </thead>
            <tbody id="specificBlock">
              <tr>
                <td><b>Hash</b></td>
                <td id="hash"></td>
              </tr>
              <tr>
                <td><b>Extra Data</b></td>
                <td id="extraData"></td>
              </tr>
              <tr>
                <td><b>Transactions</b></td>
                <td id="transactions"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div id="menu2" class="tab-pane fade">
          <h3>查詢交易</h3>
          <input id="txHash" type="text" width="400" placeholder="請輸入Transaction ID"></input>
          <button onclick="App.searchTx()">查詢交易（使用Transaction ID）</button>
          <table class="table table-striped">
            <thead>
                <tr>
                  <th>Transaction #</th>
                  <th id="txHead"></th>
                </tr>
            </thead>
            <tbody id="txBody">
              <tr>
                <td><b>Block Number</b></td>
                <td id="blockNumber"></td>
              </tr>
              <tr>
                <td><b>From</b></td>
                <td id="from"></td>
              </tr>
              <tr>
                <td><b>To</b></td>
                <td id="to"></td>
              </tr>
              <tr>
                <td><b>Contract Address</b></td>
                <td id="contractAddress"></td>
              </tr>
              <tr>
                <td><b>Gas Used</b></td>
                <td id="gasUsed"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  </body>
</html>