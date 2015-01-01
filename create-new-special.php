
<!-- Start of Main Body -->
   <div class="main">
   	<div class="container">
 <div class="row"><!-- Start of the First Row -->
  <div class="col-md-4 first"><!-- Start of the First Column -->
   	  <div class="page-header">
        <h1>Create New Special</h1>
      </div>
      <form class="create-form " role="sign-in" action="mailto:youremail@email.com" method="post">
        <div class="form-group">
          <p>Product Name<br/>
          <input type="text" class="form-control product" placeholder="Enter Product Name..." name="product"></p>
           <p>Special Offer<br/>
          <input type="text" class="form-control offer" placeholder="Enter Offer..." name="offer"></p>
           <p class="price">Price<br/>
          <input type="number" class="form-control" placeholder="$5" name="price" id="price" min="1"></p>
          <p class="quantity">Qty<br/>
          <input type="number" class="form-control" placeholder="1" name="quantity" id="quantity" step="1" min="1"></p>
          <div class="starts">
          <p>Starts<br/>
           <input type="date" name="bday" class="form-control start" placeholder="Dec 12,, 2014" name="start-date" id="start-date"></p><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></a>
            <ul class="dropdown-menu date" role="menu">
            <li><script language="javascript" type="text/javascript">
var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

//  DECLARE AND INITIALIZE VARIABLES
var Calendar = new Date();

var year = Calendar.getFullYear();     // Returns year
var month = Calendar.getMonth();    // Returns month (0-11)
var today = Calendar.getDate();    // Returns day (1-31)
var weekday = Calendar.getDay();    // Returns day (1-31)

var DAYS_OF_WEEK = 7;    // "constant" for number of days in a week
var DAYS_OF_MONTH = 31;    // "constant" for number of days in a month
var cal;    // Used for printing

Calendar.setDate(1);    // Start the calendar day at '1'
Calendar.setMonth(month);    // Start the calendar month at now


/* VARIABLES FOR FORMATTING
NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
      tags to customize your caledanr's look. */

var TR_start = '<TR>';
var TR_end = '</TR>';
var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=DEDEFF BORDERCOLOR=CCCCCC><TR><TD WIDTH=20><B><CENTER>';
var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
var TD_start = '<TD WIDTH="30"><CENTER>';
var TD_end = '</CENTER></TD>';

/* BEGIN CODE FOR CALENDAR
NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
tags to customize your calendar's look.*/

cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=BBBBBB><TR><TD>';
cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2>' + TR_start;
cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#EFEFEF"><CENTER><B>';
cal += month_of_year[month]  + '   ' + year + '</B>' + TD_end + TR_end;
cal += TR_start;

//   DO NOT EDIT BELOW THIS POINT  //

// LOOPS FOR EACH DAY OF WEEK
for(index=0; index < DAYS_OF_WEEK; index++)
{

// BOLD TODAY'S DAY OF WEEK
if(weekday == index)
cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;

// PRINTS DAY
else
cal += TD_start + day_of_week[index] + TD_end;
}

cal += TD_end + TR_end;
cal += TR_start;

// FILL IN BLANK GAPS UNTIL TODAY'S DAY
for(index=0; index < Calendar.getDay(); index++)
cal += TD_start + '  ' + TD_end;

// LOOPS FOR EACH DAY IN CALENDAR
for(index=0; index < DAYS_OF_MONTH; index++)
{
if( Calendar.getDate() > index )
{
  // RETURNS THE NEXT DAY TO PRINT
  week_day =Calendar.getDay();

  // START NEW ROW FOR FIRST DAY OF WEEK
  if(week_day == 0)
  cal += TR_start;

  if(week_day != DAYS_OF_WEEK)
  {

  // SET VARIABLE INSIDE LOOP FOR INCREMENTING PURPOSES
  var day  = Calendar.getDate();

  // HIGHLIGHT TODAY'S DATE
  if( today==Calendar.getDate() )
  cal += highlight_start + day + highlight_end + TD_end;

  // PRINTS DAY
  else
  cal += TD_start + day + TD_end;
  }

  // END ROW FOR LAST DAY OF WEEK
  if(week_day == DAYS_OF_WEEK)
  cal += TR_end;
  }

  // INCREMENTS UNTIL END OF THE MONTH
  Calendar.setDate(Calendar.getDate()+1);

}// end for loop

cal += '</TD></TR></TABLE></TABLE>';

//  PRINT CALENDAR
document.write(cal);

//  End -->
</script>
</li>
            
          </ul>
        </div>
                   <div class="expires">
                    <p>Expires<br/>
           <input type="date" name="bday" class="form-control expire" placeholder="Dec 12,, 2014" name="expire-date" id="expire-date"></p><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></a>
            <ul class="dropdown-menu date" role="menu">
            <li><script language="javascript" type="text/javascript">
var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

//  DECLARE AND INITIALIZE VARIABLES
var Calendar = new Date();

var year = Calendar.getFullYear();     // Returns year
var month = Calendar.getMonth();    // Returns month (0-11)
var today = Calendar.getDate();    // Returns day (1-31)
var weekday = Calendar.getDay();    // Returns day (1-31)

var DAYS_OF_WEEK = 7;    // "constant" for number of days in a week
var DAYS_OF_MONTH = 31;    // "constant" for number of days in a month
var cal;    // Used for printing

Calendar.setDate(1);    // Start the calendar day at '1'
Calendar.setMonth(month);    // Start the calendar month at now


/* VARIABLES FOR FORMATTING
NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
      tags to customize your caledanr's look. */

var TR_start = '<TR>';
var TR_end = '</TR>';
var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=DEDEFF BORDERCOLOR=CCCCCC><TR><TD WIDTH=20><B><CENTER>';
var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
var TD_start = '<TD WIDTH="30"><CENTER>';
var TD_end = '</CENTER></TD>';

/* BEGIN CODE FOR CALENDAR
NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'
tags to customize your calendar's look.*/

cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=BBBBBB><TR><TD>';
cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2>' + TR_start;
cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#EFEFEF"><CENTER><B>';
cal += month_of_year[month]  + '   ' + year + '</B>' + TD_end + TR_end;
cal += TR_start;

//   DO NOT EDIT BELOW THIS POINT  //

// LOOPS FOR EACH DAY OF WEEK
for(index=0; index < DAYS_OF_WEEK; index++)
{

// BOLD TODAY'S DAY OF WEEK
if(weekday == index)
cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;

// PRINTS DAY
else
cal += TD_start + day_of_week[index] + TD_end;
}

cal += TD_end + TR_end;
cal += TR_start;

// FILL IN BLANK GAPS UNTIL TODAY'S DAY
for(index=0; index < Calendar.getDay(); index++)
cal += TD_start + '  ' + TD_end;

// LOOPS FOR EACH DAY IN CALENDAR
for(index=0; index < DAYS_OF_MONTH; index++)
{
if( Calendar.getDate() > index )
{
  // RETURNS THE NEXT DAY TO PRINT
  week_day =Calendar.getDay();

  // START NEW ROW FOR FIRST DAY OF WEEK
  if(week_day == 0)
  cal += TR_start;

  if(week_day != DAYS_OF_WEEK)
  {

  // SET VARIABLE INSIDE LOOP FOR INCREMENTING PURPOSES
  var day  = Calendar.getDate();

  // HIGHLIGHT TODAY'S DATE
  if( today==Calendar.getDate() )
  cal += highlight_start + day + highlight_end + TD_end;

  // PRINTS DAY
  else
  cal += TD_start + day + TD_end;
  }

  // END ROW FOR LAST DAY OF WEEK
  if(week_day == DAYS_OF_WEEK)
  cal += TR_end;
  }

  // INCREMENTS UNTIL END OF THE MONTH
  Calendar.setDate(Calendar.getDate()+1);

}// end for loop

cal += '</TD></TR></TABLE></TABLE>';

//  PRINT CALENDAR
document.write(cal);

//  End -->
</script>
</li>
            
          </ul>
        </div>
          <p>Description<br/>
          <textarea name="description" form="create" id="description" placeholder="Enter Description..."></textarea></p>
          <p>Image<br>
         <div class="image-upload">
         
         <label for="file-input">
            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <img src="images/placeholder.png"/>
         </label>
         <input id="file-input" type="file"/>
  </div></p>

  
  <ul id="results" style="list-style:none; padding:0px; margin-bottom:20px;"></ul>
     <div><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  + Add Location
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#32328f; color:#ffffff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-map-marker"></span> Add Location </h4>
      </div>
      <div class="modal-body" style="background-color:#f2f2f2;">
       
       
     <div class="intro">Your Saved Locations:</div>
     <div id="inputs">
    
    
    

       <table class="table" id="popup-table">
        <form action="" method="post" id="popup-form">
          
         <tr  class="table-header">
    
    <td><input type="checkbox" value="123 Pomegranite St. Los Santos, CA 90213"><label> 123 Pomegranite St.<span> Los Santos, CA 90213</span></label>
</td>
</tr>
<tr>
     <td><input type="checkbox" value="456 Orange Blvd Los Santos, CA 90213"><label> 456 Orange Blvd<span> Los Santos, CA 90213</span></label></td>
    
  </tr>
<tr>      
 <td style="border-bottom:0px;"> <input type="submit" value="post" class="submit" id="submit_location" onclick="return false;"> </td>
</tr>

</form>
   </table>
     </div>


        </div>
   
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div></div>

       
        <button type="submit" class="btn btn-default btn-lg create-btn">Create Special</button>
      </form>
     
  	  
  	</div><!-- End of the First Column -->
  	      
    <div class="col-md-4 second"><!-- Start of the Second Column -->
             
    </div><!-- End of the Second Column -->
    <div class="col-md-4 third"><!-- Start of the Third Column -->
            
    </div><!-- End of the Third Column -->
          
      </div><!-- End of the First Row -->

     
    </div><!-- End of the Container -->
   
   </div> <!-- End of the Main -->
  