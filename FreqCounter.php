
<!DOCTYPE HTML>

<html>
	<head>
		<title>Frequency Counter</title>
	</head>
	<style>
input[type=submit] {
    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 14px;
    margin: 8px 0;
    border: none;
    border-radius: 1px;
    cursor: pointer;
}
input[type=reset] {
    width: 10%;
    background-color: #e5ba39;
    color: white;
    padding: 14px 14px;
    margin: 8px 0;
    border: none;
    border-radius: 1px;
    cursor: pointer;
}


</style>
	<div align="center">
	<body>
		
		<form  method="get" action="Counter_handeler.php">
		
			<table>
			  <tr>
				<td colspan="2" align="center"><h1>Character Frequency Counter</h1></td>
			  </tr>
			  <tr>
							  
			  </tr>
			  <tr>
				<td colspan="2" align="center"><p>Insert your String into The Following text area to get the count per character</p></td>
			  </tr>
			  <tr>
			 <td> <p><textarea name="Tbox" cols="80" rows="15"></textarea></p></td>
			  </tr>					
			  
			  
				 <tr>
         <td align ="center" colspan="2">
		 <input type="submit" value="Count">
         <input type="reset" value="Clear">
		 </td>
				
			  </tr>	
		  </table>
		  
		</form> 
		</div>
	</body>
</html>