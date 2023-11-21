<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE-edge" />
  <meta name="viewport" content="width=device-width , initial-scale=1.0" />
  <title>Databank Inventory</title>
  <link rel="stylesheet" type="text/css" href="dcops.inven.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js" />
</head>

<body>
  <section>
    <form id="MyForm" action="invenconnect.php" method="POST">
      <div class="drop1">
        <select id="items1" required="required" name="items">
          <option value="Make Selection">Make Selection</option>
          <option value="Ethernet Cable">Ethernet Cable</option>
          <option value="Power Strip(s)">Power Strip(s)</option>
          <option value="Cabinet">Cabinet</option>
          <option value="Ladder Rack">Ladder Rack</option>
          <option value="Fiber Tray">Fiber Tray</option>
          <option value="Cage Material">Cage Material</option>
          <option value="Other (Describe)">Other (Describe)</option>
          <span>Items</span>
        </select>
      </div>
      <div class="input2">
        <input type="text" id="userAmount2" required name="Description" />
        <span>Description</span>
      </div>

      <div class="input3">
        <input type="text" id="userAmount3" required name="Category" />
        <span>Category</span>
      </div>

      <div class="input4">
        <input type="text" id="userAmount4" required name="Make" />
        <span>Make</span>
      </div>

      <div class="input5">
        <input type="text" id="userAmount5" required name="Model" />
        <span>Model</span>
      </div>

      <div class="input6">
        <input type="text" id="userAmount6" required name="Color" />
        <span>Color</span>
      </div>

      <div class="input7">
        <input type="text" id="userAmount7" required name="Amount" />
        <span>Amount</span>
      </div>

      <div class="input8">
        <input type="text" id="userAmount8" required name="Location inside" />
        <span>Location inside</span>
      </div>
      <input type="datetime-local" name="Date" id="Date">
    </form>
    <button type="reset" value="reset" type="button" onclick="addToTable()">Submit Selections</button>
    <button type="button" value="Dashboard" onclick="history.back()">
      Return to Dashboard
    </button>
    <button type="submit" name="save_select" class="btn btn-primar" onclick="saveToDatabase()">Save to Database</button>
  </section>
  <section>
    <div class="tbl-header">
      <table cellpadding="0" cellspacing="0" border="0">
        <thead>
          <tr>
            <th>Selection</th>
            <th>Description</th>
            <th>Category</th>
            <th>Make</th>
            <th>Model</th>
            <th>Color</th>
            <th>Amount</th>
            <th>Location inside</th>
            <th>Date</th>
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


  <script src="inven.js"></script>
</body>

</html>