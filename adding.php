<html>  
<body>  
<form method="post">  
Enter First Number:  
<input type="number" name="number1" /><br><br>  
Enter Second Number:  
<input type="number" name="number2" /><br><br> 
Enter Third Number:  
<input type="number" name="number3" /><br><br>   
<input  type="submit" name="submit" value="Add">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['number1'];  
        $number2 = $_POST['number2'];
        $number3 = $_POST['number3'];		
        $sum =  $number1+$number2+$number3;     
echo "The sum of $number1 , $number2 and $number3 is: ".$sum;   
}  
?>  
</body>  