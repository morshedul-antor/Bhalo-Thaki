<?php
include "hospital-header.php";
 ?>

 <html>
 <head>
   <style>
table {
   width:120%;
}
table, th, td {
 border: 1px solid black;
 border-collapse: collapse;
}
th, td {
  /* padding: 15px; */
 text-align: center;
}
table tr:nth-child(even) {
 background-color: #eee;
}
table tr:nth-child(odd) {
background-color: #fff;
}
table th {
 background-color: black;
 color: white;
}
</style>
 </head>
 <body>

   <div class="grid_10">
       <div class="box round first">


         <h2 align="center">Patients List</h2>
    

         <div class="block">


           <table border='1' style="width:70%" align="center">
           <tr>
           <th width="10%">Name</th>
           <th width="10%">Age</th>
           <th width="10%">Gender</th>
           <th width="10%">Contact</th>
           <th width="10%">Problems</th>
           <th width="10%">Assigned Doctor</th>
           </tr>

             <tr>

               <td>Zim</td>
               <td>x</td>
               <td>Male</td>
               <td>01x-***</td>
               <td>Something</td>
               <td>abc</td>

             </tr>

             <tr>

               <td>Antor</td>
               <td>x</td>
               <td>Male</td>
               <td>01a-***</td>
               <td>Something</td>
               <td>xyz</td>

             </tr>
             <tr>

               <td>Maliha</td>
               <td>x</td>
               <td>Femaale</td>
               <td>01p-***</td>
               <td>Something</td>
               <td>pqr</td>

             </tr>

             </table>


         </div>

   </div>

 </div>
<!-- content ends -->

 </body>
 </html>

 <?php
 include "footer.php";
  ?>
