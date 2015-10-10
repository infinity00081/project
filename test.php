<?php
var table = document.getElementById('tblSkill');           
var row = table.insertRow(-1);
 
var rowCount = table.rows.length - 1;
 
var cell0 = row.insertCell(0);
var cell1 = row.insertCell(1);
var cell2 = row.insertCell(2);
 
var skill = document.getElementById('txtSkill').value;
var values = document.getElementById('txtValue').value;            
 
cell0.innerHTML = skill;
cell1.innerHTML = values;
cell2.innerHTML = "<input type='button' value='edit' size=" + lastId + " title=" + rowCount + " name='btnEdit' class='btnEdits'  />"

?>
<script>
$(".btnEdits").click(function(){                
 
var v_param = 0;
var v_value = 1;
var v_id = 2;
 
var r = this.title;                  
var table = document.getElementById('tblSkill');                       
$("#div_edit").show();   
 
document.getElementById('txtSkill').value = table.rows[r].cells[v_param].innerHTML;
document.getElementById('txtValue').value = table.rows[r].cells[v_value].innerHTML;
document.getElementById('hiddenID').value = table.rows[r].cells[v_id].innerHTML;
document.getElementById('hiddenRow').value = r;
document.getElementById('hiddenAdd').value = '0';           
 
});
</script>
