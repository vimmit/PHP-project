<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<link rel="stylesheet" href="stylesheet.css"/>	


<body bgcolor="#E6E6FA">



Weight:  <input type="number" name="weight" id="wt" /><p id="wunit" ></p> <br />	
Height: <input type="number" name="height" id="ht" /><p id="hunit" ></p><br />		

&nbsp;   
<label><input type="checkbox" name="BMImethod" value="metric" id="met" onClick="changeUnits()"/> Metric</label><br />




document.getElementById("wunit").innerHTML = "(pounds)"
document.getElementById("hunit").innerHTML = "(inches)"

 if(document.getElementById("imp").checked == true)
 {
      document.getElementById("hunit").innerHTML = "(inches)"
 }
 if(document.getElementById("met").checked == true)
 {
     document.getElementById("hunit").innerHTML = "(meters)"
 }
}



// define variables and set to empty values
$weight = $height = $BMImethod =  $bmi = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $height = test_input($_POST["height"]);
    $BMImethod = test_input($_POST["BMImethod"]);
    
    {
        $bmi = ($weight * 703)/($height * $height);
        echo $bmi;    }
}

{
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;}

</body>
