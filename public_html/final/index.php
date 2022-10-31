<?php
// $db_host = 'localhost';
// $db_user = 'root';
// $db_pass = 'root';
// $db_name = 'local_idm232_01';
// $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// // check the connection is good with no errors

// if(mysqli_connect_errno()) {
//     die('Database connection failed: ' .
//     mysqli_connect_connect error() . 
//     ' (' . mysqli_connect_errno() . ')'
//     );
// }

// //read data from database from the users table
// $query = 'SELECT * FROM users';
// $result = mysqli_query($connection, $query);

// //check there are no errors with SQL statement
// if (!$result) {
//     die('Database query failed.');
// }

// while ($row = mysqli_fetch_array(result)) {
//     var_dump($row);
//     echo '<h2>' . $user[first_name] . " " . $user[last_name] . '</h2>';
//     echo '<hr>';
// }

// die;

include_once 'components/header.php'; ?>

<?php $assignment = 'Assignment - 01'; ?>
<h1><?php echo $assignment; ?></h1>
<?php include_once 'components/footer.php';