// Get the input element
let input = document.getElementById("filter-input");

// Add event listener to filter the table
input.addEventListener("keyup", filterRows);

// Add event listener to toggle the form
let addBtn = document.getElementById("add-btn");
addBtn.addEventListener("click", toggleForm);

// Function to filter the table rows
function filterRows() {
    // Get the filter value
    let filterValue = input.value.toUpperCase();

    // Get the table
    let table = document.getElementById("products-table");

    // Get the rows
    let rows = table.getElementsByTagName("tr");

    // Loop through the rows
    for (let i = 0; i < rows.length; i++) {
        // Get the cells
        let cells = rows[i].getElementsByTagName("td");

        // Check if any of the cells match the filter value
        let match = false;
        for (let j = 0; j < cells.length; j++) {
            if (cells[j].innerHTML.toUpperCase().indexOf(filterValue) > -1) {
                match = true;
                break;
            }
        }

        // Show or hide the row
        if (match) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }
}

// Function to toggle the form visibility
function toggleForm() {
    let form = document.getElementById("add-form");
    if (form.style.display === "none") {
        form.style.display = "block";
        addBtn.innerHTML = "Cancel";
    } else {
        form.style.display = "none";
        addBtn.innerHTML = "Add Product";
    }
}

// Animate the table when it's loaded
$(document).ready(function(){
    $("#products-table").animate({opacity: 1}, 1000, function(){
        console.log("Table animation complete!");
    });
});
