  // Insert into the database the value in student table 
 	$query = "INSERT INTO `354groupb2`.student VALUES (?,?,?,?,?,?,?)";
	$stmt = $conn->prepare($query);

  // executes the query
  	$stmt->execute([$Net_id, $Fname, $Lname, $Standing, $gpa, $Email, $Major, $Gyear, $Resume]);