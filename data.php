<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

.center {
  margin-left: auto;
  margin-right: auto;
}

.row {
  margin-left: auto;
  margin-right: auto;
}
  
.column {
  width: -100px;
  padding: 0px;
  margin-left: auto;
  margin-right: auto;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 1px;
  text-align: center;
  border-collapse: collapse;
  border-spacing: 0;
  width: 900px;
}

th {
     background-color: yellow;
}

th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  border-collapse: collapse;
  border-spacing: 0;
  padding: 0px;
  font-size: 20px;
  height:40px;
  width: 200px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}


h1 {
  text-align: center;
}
</style>
<meta http-equiv="refresh" content="1">
</head>
<body>
   <h1 h1 style="margin-left: -5px; margin-right: -5px;margin-top:-5px; text-align: center;padding:20px; font-size:30px; font-family:verdana;background-color: #FFC300" text-align= "center;">DATABASE</h1>
   <input type="button" value="MAIN Page" onclick="document.location='main.php'"  style="float: right; margin-right: 30px; margin-bottom: 0px; padding: 10px 18px; background-color: #FFC300;font-weight: bold" >
   
   <div class="row">
  <div class="column">
    <table>
    <tr>
        <th>PATIENT ID</th>
        <th>X</th>
        <th>Y</th>
        <th>Z</th>
        <th>DATE</th>
        <th>TIME</th>
        <th>ACTION</th>
      </tr>
    </table>
  </div>
</div>
   
   
   
</body>
</html>