@extends('layout')

@section('courses')

   <form action="" method="post" enctype="multipart/form-data">  
   <div style="width:200px;border-radius:6px;margin:0 auto">  
<table border="1"> 

<!--THIS IS FOR IT--> 
   <tr>  
      <td colspan="2"><b>INFORMATION TECHNOLOGY</b></td>  
   </tr>  
   <tr>  
      <td>Techno Preneurship</td>  
      </tr>  
   <tr>  
      <td>Application System Development 2</td>  
      </tr>  
   <tr>  
      <td>IT Elective 4: Review on IT Certification</td>  
      </tr>  
   <tr>  
      <td>Free Elective 2</td>  
      </tr>  
   <tr>  
      <td>Free Elective 3</td>  
      </tr>
</table>  
</div> 

</br>
</br>
<!--THIS IS FOR BSBA-->
<div style="width:200px;border-radius:6px;margin:0 auto">  
<table border="1">  
   <tr>  
      <td colspan="2"><b>BUSINESS ADMINISTRATION</b></td>  
   </tr>  
   <tr>  
      <td>Law 201: Negotiable Instrument Law</td>  
    </tr>  
   <tr>  
      <td>OM 106: Operation Management</td>  
   </tr>  
   <tr>  
      <td>OM 107: Facilities Management</td>  
    </tr>  
   <tr>  
      <td>OM 108: Strategic Operations Mgt</td>  
   </tr>  
   <tr>  
      <td>OM Elec 103: Global International Trade</td>  
   </tr>
      <tr>  
      <td>BEC 103: Social Responsibility & Good Governance</td>  
  </tr>  
   <tr>  
      <td>OM Elec 104: Feasibility Study</td>  
   </tr>   
</table>  
</div>



</form>  
<?php  
session_start();
if(isset($_POST['sub']))  
{  
include"connect.php";
$checkbox1=$_POST['subj'];  
$chk="";  
$id=$_SESSION['id'];
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
$in_ch=mysql_query("UPDATE table1 SET subjects='$chk' WHERE id = $id");  

if($in_ch==1)  
   {  
      echo'<script>alert("Inserted Successfully")</script>'; 
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  
}  
?>  
@stop