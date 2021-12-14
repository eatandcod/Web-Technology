var entry= document.getElementById("entry"); 
entry.addEventListener("click", displayDetails); 
var row=1; 
function displayDetails(){ 
    var firstname=document.getElementById("firstname").value; 
    var lastname=document.getElementById("lastname").value; 
    var Feedback=document.getElementById("Feedback").value; 
    if(!firstname||!lastname||!Feedback){ 
        alert("please fill your FEEDBACK."); 
        return;
    } 
    var display=document.getElementById("display"); 
    var newRow= display.insertRow(row); 
    var cell1= newRow.insertCell(0); 
    var cell2= newRow.insertCell(1); 
    var cell3= newRow.insertCell(2); 
    cell1.innerHTML=firstname; 
    cell2.innerHTML=lastname; 
    cell3.innerHTML=Feedback; 
    row++;
}