<?php 
	
 if 	( true ){
 
	$file = fopen ("database.csv" ,"r"); 
	$id = $_POST['id'];
	$name = $_POST['name'];
	$gen = $_POST ['gen'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$email = $_POST['email']; 
	$qualification = $_POST['qualification'];
	$stream = $_POST['st'];
	$found= false; 
	while (($data=fgetcsv($file,100,',') )!== FALSE ){

		if ($id == $data[0]){
			 
			$found = True;

			break;
		}
	}
	fclose($file);
	$file = fopen ("database.csv" ,"a");


	if (!$found){
	$data = array ($id,$name, $gen, $city, $state,$email,$qualification,$stream); 
	fputcsv ($file, $data); 
	 
	
	}



	fclose($file); 
}
 
if (!$found){

echo "<h1>Data Added Successfully</h1>"	.
'<table id= "student"><thead>'.
 '<tr>'.
 '<td>Student ID</td>'.
 '<td>Student Name</td>'.
 '<td>Gender</td>'.
 '<td>City</td>'.
 '<td>State</td>'.
 '<td>Email</td>'.
 '<td>Qualification</td>'.
 '<td>Stream</td>'.
 '</tr>'.
 '</thead><tbody>'.

 '<tr>'.

 "<td>".$data[0]."</td>". 
 "<td>".$data[1]."</td>". 
 "<td>".$data[2]."</td>". 
 "<td>".$data[3]."</td>". 
"<td>".$data[4]."</td>".
 "<td>".$data[5]."</td>". 
 "<td>".$data[6]."</td>". 
 "<td>".$data[7]."</td>".
 "</tr> </tbody></table>";
}
else{
echo "<h1>Student ID is already present in database.</h1>"	;
} 

?>



		
</table>
</div>	

	
</div>
</div>


<script type="text/javascript">
	

		function validate () {
		var valid = true; 
		var alpha = new RegExp ("^[a-zA-Z ]+$");
		var name = document.getElementById ("name").value;
		var conname = document.getElementById ("conname"); 
		var concity = document.getElementById ("concity");
		var city = document.getElementById ("city").value;
		var state = document.getElementById ("state").value;
		var constate = document.getElementById ("constate");
		var qualification = document.getElementById ("qualification").value;
		var conql = document.getElementById ("conql"); 
		var stream = document.getElementById ("stream").value;
		var consst = document.getElementById ("consst"); 
		
		conname.innerHTML= ""; 
		concity.innerHTML= ""; 
		constate.innerHTML= ""; 
		conql.innerHTML= ""; 
		consst.innerHTML= ""; 



		if (!( alpha.test (name) )){
			
			conname.innerHTML = "Only Alphabets are allowed"; 
			valid = false; 

		}


		
		
		 
		if (!( alpha.test (city) )){
			
			concity.innerHTML = "Only Alphabets are allowed"; 
			valid = false; 

		}



 
		if (!( alpha.test (state) )){
			console.log (alpha.test (state)); 
			constate.innerHTML = "Only Alphabets are allowed"; 
			valid = false; 

		}



		if (!( alpha.test (qualification) )){
					conql.innerHTML = "Only Alphabets are allowed"; 
					valid = false; 

				}
		
			
		if (!( alpha.test (stream) )){
					consst.innerHTML = "Only Alphabets are allowed"; 
					valid = false; 

				}
				return valid ; 
	} 


	

</script>
</body>
</html>