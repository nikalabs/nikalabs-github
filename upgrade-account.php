<
   </nav>
<!-- Start of Main Body -->
   <div class="main">
   	<div class="container">
 <div class="row"><!-- Start of the Row -->
 
  	      
<div class="col-md-4"><!-- Start of the Column -->
      <div class="page-header">
        <h1>Upgrade Account</h1>
      </div>
      <form class="account-form" role="sign-up" action="mailto:youremail@email.com" method="post">
        <div class="form-group">
          <select name="typeofaccount" size="1" id="upgradeaccount"  type="select">
             <option value=""  style='display:none;'>Account Type</option>
             <option value="1">Business</option>
             <option value="2">Schools & Charities</option>
           </select>
          <div class="package">Package<br/>
             <select id="package" class="package-select">
            <option value="-1" selected style='display:none;'>1 item for $1.00 per day</option>
            <option class="pack" value="1">1 Item  |  $1.00/day<br/></option>
            <option class="pack" value="2"><table class="table" id="price-table">100 Postings | $29.99<br/></option>
          </select>
         </div>

           <div class="coupon">Coupon Code<br/>
          <input type="text" class="form-control coupon-code" placeholder="Enter Code..." name="coupon_code" id="coupon"></div>
          
          <div class="businessname">Business Name<br/>
          <input type="text" class="form-control business-name" placeholder="Target Store 134" name="business_name" id="business-name"></div>
           <div id="1" class="type payment">Payment Method<br/>
            <div class="ccard" style="width:100%;" role="tabpanel">
      
  <ul class="nav nav-tabs" role="tablist" id="myTab">
  <li role="presentation" class="credit"><a  href="#creditcard" aria-controls="creditcard" role="tab" data-toggle="tab"><span>Credit Card</span></a></li>
  <li role="presentation"><a href="#paypal" aria-controls="paypal" role="tab" data-toggle="tab"><img src="images/paypal.png"></a></li>
  
</ul>

<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="creditcard">
    <div class="card-name">Name on Card<br/>
          <input type="text" class="form-control card-name" placeholder="John Smith" name="name_on_card" id="card-name"></div>
    <div class="ccnumber">Credit Card Number<br/>
          <input type="password" class="form-control ccnumber" id="ccnumber" placeholder="&#9679;&#9679;&#9679;&#9679; - &#9679;&#9679;&#9679;&#9679; - &#9679;&#9679;&#9679;&#9679; - 4392" name="credit_number" size="8" ></div>
          <div class="cc-details">
          <div class="exp-date">Expiration Date<br/>
          <input type="text" class="form-control month" placeholder="11" name="expiration_date" id="month"><input type="text" class="form-control year" placeholder="16" name="expiration_year" id="year">
        </div>
          <div class="cvv">CVV<br/>
          <input type="text" class="form-control CVV-no" placeholder="493" name="CVV" id="CVV"></div></div></div>
  <div role="tabpanel" class="tab-pane" id="paypal">Email Address<br><input type="email" placeholder="JohnSmith4382@target.co" class="email-ppal" name="email"></div>
 
</div>

<script>
  $(function () {
     $('#myTab a:first').tab('show')
    $('#myTab a:last').tab('show')
  })
</script>
</div>
          
       
          
        </div>
          
       
          <div id="2" class="type ein" >EIN #(for schools & Charities if applicable)<br/>
          <input type="text" class="form-control ein-no" placeholder="Enter Ein #..." name="ein_number" id="ein"></div>
        </div>
        
        <button type="submit" class="btn btn-default upgrade-account">Upgrade Account</button>
        
      </form>
    
    </div><!-- End of the Column -->
          
      </div><!-- End of the Row -->

     
    </div><!-- End of the Container -->
   
   </div> <!-- End of the Main -->
