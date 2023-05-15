<?php
//Create connection with database
$connect = mysqli_connect("localhost", "hot", "12345678", "booking_form"); //Maria replace with the right paramters par rapport a ta db and tables names
// the order is : host usernale passwd  dabatse name
if (!$connect) {
   die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$Name = mysqli_real_escape_string($connect, $_POST['name']);
$email = mysqli_real_escape_string($connect, $_POST['email']);
$phone = mysqli_real_escape_string($connect, $_POST['phone']);
$numberP=$_POST['number'];
$date = $_POST['date'];
$time = $_POST['time'];
$guests = $_POST['guests'];
$message = mysqli_real_escape_string($connect, $_POST['message']);

// Calculate the reservation time frame
$endTime = date('H:i', strtotime('+2 hours', strtotime($time)));


// Check the availability of tables within the time frame
$query = "SELECT COUNT(*) AS count FROM bookings WHERE date = '$date' AND time >= '$time' AND time < '$endTime'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
$reservationCount = $row['count'];
// a enlever peut-etre
if ($reservationCount < 30) {
   // Assign the next available table number
   $nextTableNumber = $reservationCount;

   // Prepare the SQL query to insert the reservation details
   $query = "INSERT INTO bookings (full_name, email, phone, date, time, guests, message, table_number) 
             VALUES ('$Name', '$email', '$phone', '$date', '$time', $guests, '$message', $nextTableNumber)";

   // Exe the query
   if (mysqli_query($connect, $query)) {
      echo "Reservation successfully created. Your table number is $nextTableNumber.";
   } else {
      echo "Error creating reservation: " . mysqli_error($connect);
   }
} else {
   echo "No tables available for the selected time frame. Please choose a different time.";
}

// Close the database connection
mysqli_close($connect);
?>
