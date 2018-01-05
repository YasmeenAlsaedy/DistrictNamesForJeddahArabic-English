<?php

/*


***** Done By Yasmeen Alsaedy 
**********  Saturday  23 Sep 2017




*/


?>




<style type="text/css">
  
td {
  width : 800px;
}
#otherText {
  visibility:hidden;
}
</style>

<form name="contactform" method="post" action="DistrictNamesForJeddahArabic&English.php">

<table width="600px">

<tr>
 <td valign="top"">
  <label for="last_name">  name <p3 style="color: red">*</p3></label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
<br>
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="telephone">Phone Number <p3 style="color: red">*</p3></label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
<tr>
 <td valign="top">
<br>
 </td>
</tr>

 <td valign="top">
  <label for="email">Email Address <p3 style="color: red">*</p3></label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
<br>
 </td>
</tr>


<tr>
 <td valign="top">
  <label for="Region">Region</label>
 </td>
 <td valign="top">
  <select name="Region_S" >
    <option value="MAKKAH" > MAKKAH  | مكة المكرمة </option>
  </select>
 </td>
</tr>

<tr>
 <td valign="top">
<br>
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="City">City</label>
 </td>
 <td valign="top">
  <select name="City" >
    <option value="JEDDAH" > JEDDAH  | جدة </option>
  </select>
 </td>
</tr>



<tr>
 <td valign="top">
<br>
 </td>
</tr>





<tr>
 <td valign="top">
  <label for="Market_name">Market name<p3 style="color: red">*</p3></label>
 </td>
 <td valign="top">
  <input  type="text" name="Market_name" maxlength="50" size="30">
 </td>
</tr>
<tr>

<tr>
 <td valign="top">
<br>
 </td>
</tr>

 <td valign="top"">
  <label for="Phone_Fax">Phone / Fax</label>
 </td>
 <td valign="top">
  <input  type="text" name="Phone_Fax" maxlength="50" size="30">
 </td>
</tr>

<tr>
 <td valign="top">
<br>
 </td>
</tr>


<tr>
 <td valign="top">
  <label for="NumOfMarkets" > How many Market you wanna add ? (dynamic list ) </label>
 </td>
 <td valign="top">
<select name="NumOfMarketSelect" id="NumOfMarketSelectID" onclick="Marketlocation()">
  
  <?php
    for ($i=1; $i<=100; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
</select>
 </td>
</tr>

<tr>
 <td valign="top">
<br>
 </td>
</tr>




<tr >
<td  valign="'top" id = "Market_location">
  

</td>
</tr>












<tr>
 <td valign="top">
  <label for="Hours" > Market working hours ( dynamic list ) </label>
 </td>
 <td valign="top">
 <select name="Hours" id = "otherHoursOnclick" >
    <option value="24" > 24 Hours  | ٢٤ ساعة </option>
    <option value="12" > 12 Hours  | ١٢ ساعة </option>
     <option value="otherHours" > Other  | أخرى </option>
  </select> 

<div id ="otherText">
  <label for="From"  > From <p3 style="color: red">*</p3></label>
  <input  type="text" name="From" maxlength="50" size="7" >
 <label for="To"  > &nbsp; To <p3 style="color: red">*</p3></label>
  <input  type="text" name="To" maxlength="50" size="7" >
  </div>
</td>
</tr>






<tr>
 <td  colspan="2"  style="text-align:center">
 <br>
 <input type="checkbox" name="Agree" value="Bike"> Agree  |  موافق
 </td>
</tr>

<tr>
 <td valign="top">
<br>
 </td>
</tr>






<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">   
 </td>
</tr>
</table>
</form>

<?php
if(isset($_POST['Agree'])) {
 
 
 
    function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
       die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['last_name']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['email']) ) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 


    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }

 
 
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
 }

?>

<script type="text/javascript">
  
document.getElementById("otherHoursOnclick").addEventListener("click", IfOther);




function Marketlocation() {

var counter = document.getElementById("NumOfMarketSelectID").value;
var DynamicMarketLocation = document.getElementById("Market_location");

while(DynamicMarketLocation.hasChildNodes())
{
 DynamicMarketLocation.removeChild(DynamicMarketLocation.firstChild);
}


for(var i = 0 ; i < counter ; i++)
{


 var label = document.createElement("Label");

if( i < 9 )
label.innerHTML="Market location ( District name ) " + ( i +1 ) + "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
else
label.innerHTML="Market location ( District name ) " + ( i +1 ) + "&nbsp;&nbsp;&nbsp;&nbsp;" ;
   
   var para = document.createElement("Label"); 
   para.innerHTML="<br> ";
   var element = document.getElementById("Market_location");
  element.appendChild(label);
   CreateSelectItems(i);
  element.appendChild(para);

}


 

}

function CreateSelectItems(i) {
 var Select = document.createElement("select"); 
Select.value = "Select" + i;
Select.name = "Select" + i;
var options = ["Al-Murjan " ,

 "Al-Basateen" ,

 "Al-Mohamadiya",

 "Ash-Shati",
,
 "An-Nahda"
,
 "An-Naeem"
,
 "An-Nozha"
,
 "Az-Zahraa"
,
 "As-Salamah"
,
 "Al-Bawadi"
,
 "Al-Rabwa"
,
 "Al-Safa"
,
"Al-Khalidiya"
,
"Ar-Rawdha"
,
 "Al-Faysaliya"
,
 "Al-Andalus"
,
 "Al-Aziziya"
,
 "Ar-Rihab"
,
 "Al-Hamraa"
,
 "Al-Mosharafa"
,
 "Ar-Roweis"
,
 "Ash-Sharafiya"
,
"Bani Malik"
,
 "Al-Woroud"
,
 "Al-Naseem"
,
 "Al-Baghdadiya Ash-Sharqiya"
,
 "Al-Amariya"
,
 "Al-Hindawiya"
,
 "As-Saheifa"
,
 "Al-Kandra"
,
"As-Sulaimaniya"
,
 "Al-Thaalba"
,
 "As-Sabeel"
,
 "Al-Qurayat"
,
 "Gholail"
,
 "An-Nozla Al-Yamaniya"
,
"Al-Nozla Ash-Sharqiya"
,
 "Al-Taghr"
,
 "Al-Jamaa"
 ,"Madayin Al-Fahad"
,
 "Al-Rawabi"
,
 "Al-Wazeeriya"
,
"Petromin"
,
 "Al-Mahjar"
,
"Prince Abdel Majeed"
,
 "Obhour Al-Janobiya"
,
"Al-Marwa"
,
 "AL-Fayhaa"
,
 "King Abdul Al-Aziz University"
,
"Al-Baghdadiya Al-Gharbiya"
,
 "Al-Balad"
,
"Al-Ajwad"
,
 "Al-Manar"
,
 "As-Samer"
,
"Abruq Ar-Roghama"
,
"Madinat As-Sultan"
,
"Um Hablain"
,
 "Al-Hamdaniya"
,
"Al-Salhiya"
,
 "Mokhatat Al-Aziziya"
,
 "Mokhatat Shamal Al-Matar"
,
 "Mokhatat Ar-Riyadh"
,
 "Mokhatat Al-Huda"
,
 "Braiman"
,
 "Al-Salam"
,
 "Al-Mostawdaat"
,
" Al-Montazahat"
,
" Kilo 14"
,
"Al-Harazat"
,
"Um As-Salam"
,
"Mokhtat Zahrat Ash-Shamal"
,
 "Al-Majid"
,"Gowieza"
,
"Al-Gozain"
,
"Al-Kuwait"
,
"Al-Mahrogat"
,
"Al-Masfa"
,
"Al-Matar Al-Gadeem (old airport)"
,
"Al-Bokhariya"
,
"An-Nour"
,
"Bab Shareif"
,
"Bab Makkah"
,
"Bahra"
,
"Al-Amir Fawaz"
,
"Wadi Fatma"
,
"Obhour Shamaliya"
,
"At-Tarhil (deportation)"
,
"Al-Iskan Al-janoubi"
,
"At-Tawfeeq"
,
"Al-Goaid"
,
"Al-Jawhara"
,
"Al-Jamoum"
,
"Al-Khumra"
,
"Ad-Difaa Al-Jawi (Air Defense)"
,
"Ad-Dageeg"
,
"Ar-Robou"
,
"Ar-Rabie"
,
"Ar-Rehaily"
,
"As-Salmiya"
,
"As-Sanabil"
,
"As-Sinaiya (Bawadi)"
,
"Industrial City (Mahjar)"
,
"Al-Adl"
,
"Al-Olayia"
,
"Al-Faihaa"
,
"Al-Karanteena"
,
"Al-Ajaweed"
,
"Al-Ahmadiya"
,
"Al-Mosadiya"
,
"East Al-Khat As-Sarei"
,
"Kilo 10"
,
"King Faisal Navy Base"
,
"Kilo 7"
,
"Kilo 3"
,
"King Faisal Guard City"
,
"Kilo 11"
,"Thowal"

,"Kilo 13"
,
"Al-Makarona"
,
"Al-Layth"
,
"Al-Gonfoda"
,
"Rabegh"
,
"Kilo 8"
,
"Kilo 5"
,
"Kilo 2"
,
"Al-Mokhwa"
,
"National Guard Residence"
,
"As-Showag"
,
"Air Defense Residence"
,
"Al-Morsalat"
,
"Ah-Shoola"
 ,
"Al-Corniche" , "Al-Waha" , "Mokhatat Al-Haramain" , " Kholais" ] ;



 var element = document.getElementById("Market_location");
 element.appendChild(Select);


for( i = 0 ; i < options.length ; i++ ) {

   var option = document.createElement("option"); 
 option.value = options[i];
 option.innerHTML = options[i];
  Select.appendChild(option);
}



  }



function IfOther() {

if((document.getElementById("otherHoursOnclick").value) == "otherHours"){ 
document.getElementById("otherText").style.visibility = "visible";
}else
document.getElementById("otherText").style.visibility = "hidden";



}

</script>

