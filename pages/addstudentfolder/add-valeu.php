<?php 
include('conn.php');
$password = mysqli_real_escape_string($conn,$_POST['password']);
$result = mysqli_query($conn,"SELECT *FROM  student WHERE password='$password'")or die ("select Error ");
$row = mysqli_fetch_assoc($result);
if (is_array($row) && !empty($row))
{
    $_SESSION['Id'] = $row['Id'];
    $_SESSION['firstname'] = $row['firstname'];
    $_SESSION['lastname'] = $row['lastname'];
    $_SESSION['valid']=$row['password'];
}
if(isset($_SESSION['valid']))
                    {
                    
                    $td = mysqli_real_escape_string($conn, $_POST['td']); 
                    $tp= mysqli_real_escape_string($conn, $_POST['tp']);
                    $query = "INSERT INTO student (td,tp) VALUES ('$td', '$tp')";
                    mysqli_query($conn, $query) or die("Error: ". mysqli_error($conn));
                    header('location: grades-entry');
                }
 
?>