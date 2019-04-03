<!DOCTYPE html>
<html>
  <head>
    <title>MetaCoin | Truffle Webpack Demo w/ Frontend</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  </head>
  <style>
    input {
      display: block;
      margin-bottom: 12px;
    }
  </style>
  <body>
    <h1>Resale Market</h1>

    <label id="viewSeller">seller:</label>
    <input type="text" id="seller" placeholder="e.g. 95" />
    <button onclick="App.setSeller()">Set seller</button>
    <button onclick="App.setPlatform()">Set Platform</button>

    <p><label id="viewAmount">amount:</label></p>
    <input type="text" id="amount" placeholder="e.g. 95" />
    <button onclick="App.setAmount()">Set amount</button>

    <p><button onclick="App.transfer()">transfer</button></p>

    <p id="status">status</p>

    <p><button onclick="App.setSeller();App.setAmount();App.setPlatform()">Set All parameters</button></p>
    <script src="./dist/js/index.js"></script>

    <a href="./index">go to index</a>
  </body>
</html>