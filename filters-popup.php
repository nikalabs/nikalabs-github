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
 		<span class="glyphicon glyphicon-search"></span> Searches
 	</div>
   </header>
 <div class="main" style="background-color:#f2f2f2;">
    	<div class="container" style="background-color:#f2f2f2;">
          <div class="row">
          	<div class="col-md-4"><!-- Start of the First Column -->
   	  <div class="intro"></div>
        <form action="demo_form.asp" method="get" id="search-popup-form">
          <div class="form-group">
       <table class="table" id="popup-table" class="search-popup">
         <tr  class="table-header">
    <td>Category</td>
    <td><select name="category" size="1" id="category"  type="select">
  <option value="1">Resturant</option>
  
</select></div></td>
</tr>
<tr>
  <td>Search String</td>
     <td><div class="wrapper string"><input type="text" placeholder="Donuts" class="search-string"><a href="#"><span class="glyphicon glyphicon-remove-circle"></span></a></div></td>
    
  </tr>
<tr>  
<td>Location</td>  	
 <td> <input type="text" placeholder="GPS, Zipcode, or Address" class="address"> </td>
</tr>

<tr>  
<td></td>   
 <td><span>Search Radius</span> <select class="radius" name="search_radius"><option>2 Miles</option> </select></td>
</tr>
<tr>
  <td><button type="submit" class="btn btn-default adding">Add</button></td>
  <td><button type="submit" class="btn btn-default removing">Remove</button></td>
  </tr>

   </table>
 </div>
   </form>
</div>
 	      </div>
 	   </div>
 </div>
 <script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
 </body>
 </html>
