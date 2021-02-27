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
  width: 500px;
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
  width: 100%;
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

</style>
<meta http-equiv="refresh" content="1">
</head>
<body>
    
     <h1 style="margin-left: -5px; margin-right: -5px;margin-top:-5px; text-align: center;padding:20px; font-size:30px; font-family:verdana;background-color: #FFC300" text-align= "center;">JUMPERBOW DATA RECORDING AND ANALYSIS SYSTEM</h1>
    
  <h1 style="text-align: center; font-size:30px; font-family:verdana;margin-left: 120px;"> <input type="button" value="DATABASE" onclick="document.location='data.php'"   style="float: right; margin-right: 30px; margin-bottom: 0px; padding: 10px 15px; background-color: #FFC300;font-weight:bold" ></h1>

  


<div class="row">
  <div class="column">
    <table>
    <tr>
        <th>Patient ID</th>
        <td><input type="text"   style=" margin-right: 0px; margin-bottom: 0px; padding: 10px 18px;width:100%" ></td>
      </tr>
    </table>
  </div>
</div>
  <p> &#x200B; </p>
<div class="row">
  <div class="column">
    <table>
    <tr>
        <th>X</th>
        <th>Y</th>
        <th>Z</th>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
  </div>
</div>
  <p> &#x200B; </p>
<div class="row">
  <div class="column">
    <table>
    <tr>
        <th>GET</th>
        <th>X</th>
        <th>Y</th>
        <th>Z</th>
      </tr>
      <tr>
        <td><input type="button" value="FRONT" onclick="document.location='data.php'"   style=" padding: 10px 10px; background-color: cyan; width:100%; height:100%;font-weight: bold;" ></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><input type="button" value="BACK" onclick="document.location='data.php'"   style=" padding: 10px 10px; background-color: cyan; width:100%; height:100%;font-weight: bold;" ></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><input type="button" value="RIGHT" onclick="document.location='data.php'"   style=" padding: 10px 10px; background-color: cyan; width:100%; height:100%;font-weight: bold;" ></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
            <tr>
        <td><input type="button" value="LEFT" onclick="document.location='data.php'"   style=" padding: 10px 10px; background-color: cyan; width:100%; height:100%;font-weight: bold;" ></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
            <tr>
        <td><input type="button" value="TOP" onclick="document.location='data.php'"   style=" padding: 10px 10px; background-color: cyan; width:100%; height:100%;font-weight: bold;" ></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
            <tr>
        <td><input type="button" value="BOTTOM" onclick="document.location='data.php'"   style=" padding: 10px 10px; background-color: cyan; width:100%; height:100%;font-weight: bold;" ></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </table>
  </div>
</div>
  
</body>
</html>