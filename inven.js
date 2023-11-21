      // adding to the table, once added to the table, will need to be added to a SQL table and saved to a PDF for Sharepoint?
      function addToTable() {
        const items1 = document.getElementById("items1");
        const selectedOption1 = items1.value;
        const selectedText1 = items1.options[items1.selectedIndex].text;

        const tableBody = document.getElementById("tableBody");
        const newRow = tableBody.insertRow();

        const userAmount2 = document.getElementById("userAmount2").value;
        const userAmount3 = document.getElementById("userAmount3").value;
        const userAmount4 = document.getElementById("userAmount4").value;
        const userAmount5 = document.getElementById("userAmount5").value;
        const userAmount6 = document.getElementById("userAmount6").value;
        const userAmount7 = document.getElementById("userAmount7").value;
        const userAmount8 = document.getElementById("userAmount8").value;
        
        var now = new Date();
        now.setMinutes(now.getMinutes() - now.getTimezoneOffset());
        document.getElementById('Date').value = now.toISOString().slice(0,16);

        const cell1 = newRow.insertCell();
        cell1.innerHTML = selectedText1;

        const cell2 = newRow.insertCell();
        cell2.innerHTML = userAmount2;

        const cell3 = newRow.insertCell();
        cell3.innerHTML = userAmount3;

        const cell4 = newRow.insertCell();
        cell4.innerHTML = userAmount4;

        const cell5 = newRow.insertCell();
        cell5.innerHTML = userAmount5;

        const cell6 = newRow.insertCell();
        cell6.innerHTML = userAmount6;

        const cell7 = newRow.insertCell();
        cell7.innerHTML = userAmount7;

        const cell8 = newRow.insertCell();
        cell8.innerHTML = userAmount8;

        const cell9 = newRow.insertCell();
        cell9.innerHTML = Date;

      }
      function saveToDatabase() {
        const tableData = [];
        const rows = document.querySelectorAll("#tableBody tr");
        rows.forEach((row) => {
          const cells = row.querySelectorAll("td");
          const rowData = {
            option1: cells[0].innerText,
            option2: cells[1].innerText,
            user_amount: cells[2].innerText,
            constant_value1: cells[3].innerText,
            constant_value2: cells[4].innerText,
          };
          tableData.push(rowData);
        });

        // Convert the data to JSON and send it to the PHP script
        const jsonData = JSON.stringify(tableData);
        const xhr = new XMLHttpRequest();
        xhr.open("POST", "save_to_db.php", true);
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.onreadystatechange = function () {
          if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response from the PHP script if needed
            console.log(xhr.responseText);
          }
        };
        xhr.send(jsonData);
      }