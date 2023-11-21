// Constant Vaule just for on screeen table, this might change depending...

const CONSTANT_VALUE_1 = "1";
const CONSTANT_VALUE_2 = "10";
      
function addToTable() {
const dropdown1 = document.getElementById("dropdown1");
const selectedOption1 = dropdown1.value;
const selectedText1 = dropdown1.options[dropdown1.selectedIndex].text;

const dropdown2 = document.getElementById("dropdown2");
const selectedOption2 = dropdown2.value;
const selectedText2 = dropdown2.options[dropdown2.selectedIndex].text;

const userAmount = document.getElementById("userAmount").value;

const tableBody = document.getElementById("tableBody");
const newRow = tableBody.insertRow();

const cell1 = newRow.insertCell();
cell1.innerHTML = selectedText1;

const cell2 = newRow.insertCell();
cell2.innerHTML = selectedText2;

const cell3 = newRow.insertCell();
cell3.innerHTML = userAmount;

const cell4 = newRow.insertCell();
cell4.innerHTML = CONSTANT_VALUE_1;

const cell5 = newRow.insertCell();
cell5.innerHTML = CONSTANT_VALUE_2;
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
}