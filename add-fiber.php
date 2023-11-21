<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE-edge" />
  <meta name="viewport" content="width=device-width , initial-scale=1.0" />
  <title>Databank Inventory</title>
  <link rel="stylesheet" href="aistyle.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
  </link>
</head>

<body>
  <section>
    <h1>DataBank Fiber Inventory Manager</h1>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>Fiber Length</th>
            <th>Connector Type</th>
            <th>Amount</th>
            <th>Reorder Point</th>
            <th>Reorder Limit</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tbl-content">
      <table cellpadding="0" cellspacing="0" border="0">
        <tbody id="tableBody"></tbody>
      </table>
    </div>
  </section>
  <section>
    <form id="myForm" action="table-connect.php" method="POST">
      <div class="drop1">
        <select id="dropdown1" required="required" name="length">
          <option value="1M">1M</option>
          <option value="2M">2M</option>
          <option value="3M">3M</option>
          <option value="4M">4M</option>
          <option value="5M">5M</option>
          <option value="6M">6M</option>
          <option value="7M">7M</option>
          <option value="8M">8M</option>
          <option value="9M">9M</option>
          <option value="10M">10M</option>
          <option value="15M">15M</option>
          <option value="20M">20M</option>
          <option value="25M">25M</option>
          <option value="30M">30M</option>
        </select>
      </div>
      <input name="amount" required="required" class="input" type="number" id="userAmount" placeholder="Amount" min="0" max="100" />

      <div class="drop2">
        <select id="dropdown2" required="required" name="type">
          <option value="LC-LC">LC-LC</option>
          <option value="SC-SC">SC-SC</option>
          <option value="SC-LC">SC-LC</option>
        </select>
      </div>

      <button type="reset" value="reset" class="submit" type="button" onclick="addToTable()">
        Submit Selections
      </button>

      <button class="back" type="button" value="Dashboard" onclick="history.back()">
        Return to Dashboard
      </button>

      <button type="submit" name="save_select" class="btn btn-primar">Save to Database</button>

    </form>
  </section>
  <script src="aijs.js"></script>
</body>

</html>