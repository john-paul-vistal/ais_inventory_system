i=0;
function addItem(){
    i++;
    var num = prompt("Enter number: ");
    var ID = prompt("Enter ID: ")
    var item = prompt("Enter Item: ");
    var price = prompt("Enter Price: ");
    var qty = prompt("Enter Quantity: ");
    var disc = prompt("Enter Discount: ");
    var total = prompt("Enter Total: ");

    var table = document.getElementById("add_item-table");
    var row=table.insertRow(i);
    var cell_1= row.insertCell(0);
    var cell_2= row.insertCell(1);
    var cell_3= row.insertCell(2);
    var cell_4=row.insertCell(3);
    var cell_5=row.insertCell(4);
    var cell_6=row.insertCell(5);
    var cell_7=row.insertCell(6);
    var cell_8=row.insertCell(7);

    cell_1.innerHTML = num;
    cell_2.innerHTML = ID;
    cell_3.innerHTML = item;
    cell_4.innerHTML = price;
    cell_5.innerHTML = qty;
    cell_6.innerHTML = disc;
    cell_7.innerHTML = total;
    cell_8.innerHTML = "<button btn btn-dfefault> X </button>";
    cell_8.addEventListener("click", deleteFunction);
}
function deleteFunction(){
    $(this).closest("tr").remove();
}