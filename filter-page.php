
<!-- Start of Main Body -->
   <div class="main">
   	<div class="container">
   	   <div class="row"><!-- Start of the First Row -->
  	   <div class="col-md-4"><!-- Start of the First Column -->
         <div class="page-header">
        <h1>Filter</h1>
      </div>
       <table class="table" id="filter-table">
         <tr  class="table-header">
    <th class="Friends"><img src="images/friends-large.png"> <span>Friends</span></th>
    <th></th>
    <th class="button"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  <img src="images/add-button.png" >
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#32328f; color:#ffffff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-search"></span> searches</h4>
      </div>
      <div class="modal-body" style="background-color:#f2f2f2;">
       
       
      <div class="intro"></div>
        <form action="filter.php" method="post" id="search-popup-form">
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
     <td><div class="wrapper string"><input type="text" id="filterstring" placeholder="Donuts" class="search-string" name="fstring"><a href="#"><span class="glyphicon glyphicon-remove-circle"></span></a></div></td>
    
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
  <td><input type="submit" name="submit" id="submit_post" value="post" class="btn btn-default adding" onclick="return false;" ></td>
  <td><button type="submit" class="btn btn-default removing">Remove</button></td>
  </tr>

   </table>
 </div>
   </form>
   


        </div>
   
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div></th><!-- Modal -->
  </tr>
  <tr>
    <td>Dennis Green</td>
    <td></td>
    <td class="button"><img src="images/button-close.png"></td>
  </tr>
  <tr>
   <td>Rett McLaughlin</td>
    <td></td>
    <td class="button"><img src="images/button-close.png"></td>
  </tr>
   <tr>
    <td>Charles Neil</td>
    <td></td>
    <td class="button"><a href=""><img src="images/button-close.png" ></a></td>
  </tr>
  <tr  class="table-header">
    <th class="business"><img src="images/business-icon.png" > <span>Business</span></th>
    <th></th>
    <th class="button"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  <img src="images/add-button.png" >
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#32328f; color:#ffffff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-search"></span> searches</h4>
      </div>
      <div class="modal-body" style="background-color:#f2f2f2;">
       
       
      <div class="intro"></div>
        <form action="filter.php" method="post" id="search-popup-form">
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
     <td><div class="wrapper string"><input type="text" id="filterstring" placeholder="Donuts" class="search-string" name="fstring"><a href="#"><span class="glyphicon glyphicon-remove-circle"></span></a></div></td>
    
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
  <td><input type="submit" name="submit" id="submit_post" value="post" class="btn btn-default adding" onclick="return false;" ></td>
  <td><button type="submit" class="btn btn-default removing">Remove</button></td>
  </tr>

   </table>
 </div>
   </form>
   


        </div>
   
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div></th>
  </tr>
  <tr>
   <td>Target</td>
    <td></td>
    <td class="button"><a href=""><img src="images/button-close.png"></a></td>
  </tr>
   <tr>
   <td>BestBuy</td>
    <td></td>
    <td class="button"><a href=""><img src="images/button-close.png"></a></td>
  </tr>
  <tr  class="table-header">
    <th class="searches"><img src="images/search-blue.png"> <span>Seraches</span></th>
    <th></th>
    <th class="button"><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  <img src="images/add-button.png" >
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#32328f; color:#ffffff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-search"></span> searches</h4>
      </div>
      <div class="modal-body" style="background-color:#f2f2f2;">
       
       
      <div class="intro"></div>
        <form action="filter.php" method="post" id="search-popup-form">
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
     <td><div class="wrapper string"><input type="text" id="filterstring" placeholder="Donuts" class="search-string" name="fstring"><a href="#"><span class="glyphicon glyphicon-remove-circle"></span></a></div></td>
    
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
  <td><input type="submit" name="submit" id="submit_post" value="post" class="btn btn-default adding" onclick="return false;" ></td>
  <td><button type="submit" class="btn btn-default removing">Remove</button></td>
  </tr>

   </table>
 </div>
   </form>
   


        </div>
   
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div></th>
  </tr>
  <tr>
   <td>Coffee</td>
    <td></td>
    <td class="button"><a href=""><img class="forward" src="images/forward.png"></a><a href=""><img src="images/button-close.png"></a></td>
  </tr>
  <tr>
    <td><div id="result"></div></td>
    <td></td>
    <td class="button"><a href=""><img class="forward" src="images/forward.png"></a><a href=""><img src="images/button-close.png"></a></td>
  </tr>
       </table
  	   	
  	</div><!-- End of the First Column -->
  	        
      </div><!-- End of the First Row -->

    </div><!-- End of the Container -->
   
   </div> <!-- End of the Main -->

 </html>