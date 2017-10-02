<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">
<head>	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" href="stylesheet.css"/>		
<title>Calculate BMI</title>	
</head>
<body bgcolor="#E6E6FA">	
<h2> Calculate BMI (Body Mass Index) </h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
Weight:  <input type="number" name="weight" id="wt" /><p id="wunit" ></p> <br />	 
Height: <input type="number" name="height" id="ht" /><p id="hunit" ></p><br />			
BMI Method:<br /><label><input type="checkbox" name="BMImethod" value="imperial" id="imp" onClick="changeUnits()" checked/>Imperial</label>	    
&nbsp;   
<label><input type="checkbox" name="BMImethod" value="metric" id="met" onClick="changeUnits()"/> Metric</label><br />        
<br /><br /><input type="submit" name="submit" value="Submit" id="bmiButton" class="buttonText" style="font-size:17px"/>
</form>

<script type="text/javascript">   
document.getElementById("wunit").innerHTML = "(pounds)"   
document.getElementById("hunit").innerHTML = "(inches)"
function changeUnits(){ 
 if(document.getElementById("imp").checked == true)  
 {    document.getElementById("wunit").innerHTML = "(pounds)"    
      document.getElementById("hunit").innerHTML = "(inches)"  
 }  
 if(document.getElementById("met").checked == true)  
 {   document.getElementById("wunit").innerHTML = "(kilograms)"         
     document.getElementById("hunit").innerHTML = "(meters)"  
 }  
}
</script>

<?php 
// define variables and set to empty values 
$weight = $height = $BMImethod =  $bmi = ""; 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{   $weight = test_input($_POST["weight"]);   
    $height = test_input($_POST["height"]);   
    $BMImethod = test_input($_POST["BMImethod"]);
    if($height != 0)
    {   echo "<p><b> BMI Value: </b></p>";   
        $bmi = ($weight * 703)/($height * $height);   
        echo $bmi;    }
}
function test_input($data) 
{  $data = trim($data);  
   $data = stripslashes($data);  
   $data = htmlspecialchars($data);  
   return $data;}
?>
</body>
</html>