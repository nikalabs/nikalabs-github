<!doctype html>
 <html>
 <head>
      	 <meta charset="utf-8">
      	 <meta name="viewport" content="width=device-weidth, initial-scale=1.0">
      	 <title>Front Apron</title>
      	 <link href="css/bootstrap.min.css" rel="stylesheet">
      	 <link href="css/custom.css" rel="stylesheet">
      	 <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
         

 </head>

 <body style="background-color:#f2f2f2;">
 	<header style="background-color:#32328f;">
 	 <div class="container popup" style="height:85px; padding-top:30px; color:#ffffff; font-size:18px;">
 		<span class="glyphicon glyphicon-map-marker"></span> Add Location	
 	</div>
   </header>
 <div class="main" style="background-color:#f2f2f2;">
    	<div class="container" style="background-color:#f2f2f2;">
          <div class="row">
          	<div class="col-md-4"><!-- Start of the First Column -->
   	  <div class="intro">Your Saved Locations:</div>
       <table class="table" id="popup-table">
       	<form action="demo_form.asp" method="get" id="popup-form">
         <tr  class="table-header">
    
    <td><input type="checkbox"  value="1" checked="checked"> 123 Pomegranite St.<span> Los Santos, CA 90213</span></td>
</tr>
<tr>
     <td><input type="checkbox"  value="2" > 456 Orange Blvd<span> Los Santos, CA 90213</span></td>
    
  </tr>
<tr>    	
 <td style="border-bottom:0px;"> <input type="submit" value="+ Add Location" class="submit"> </td>
</tr>
</form>
   </table>
</div>
 	      </div>
 	   </div>
 </div>
 <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
 </body>
 </html>
