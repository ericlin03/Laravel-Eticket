<!DOCTYPE html>
<html>
  <head>
    <title>MetaCoin | Truffle Webpack Demo w/ Frontend</title>
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script> -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  </head>
  <style>
    input {
      display: block;
      margin-bottom: 12px;
    }
  </style>
  <body>
    <h1>MetaCoin — Example Dapp</h1>
    <p>You have <strong id="balance">loading...</strong> ETH</p>

    <h1>Send MetaCoin</h1>

    <label id="viewDays">Days:</label>
    <input type="text" id="days" placeholder="e.g. 95" />
    <button onclick="App.setDays()">Set Days</button>

    <p><strong id="viewReceiver">address</strong></p>
    <input type="text" id="receiver" placeholder="address" />

    <button onclick="App.setReceiver()">Set Receiver</button>
    <button onclick="App.sendToContract()">Transfer To contract</button>
    <button onclick="App.transferToOrganizer()">Transfer To Organizer</button>

    <p id="contractStatus">contract status</p>
    <p id="status">status</p>
    <p>
      <strong>Hint:</strong> open the browser developer console to view any
      errors and warnings.
    </p>

    <p><button onclick="App.setDays();App.setReceiver();App.sendToContract()">Set All parameters</button></p>

    <a href="./resale">go to resale</a>
    <script src="./dist/js/index.js"></script>
  </body>
</html>
