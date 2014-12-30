
<!-- Start of Main Body -->
   <div class="main">
   	<div class="container">
 <div class="row"><!-- Start of the Row -->
 
  	      
<div class="col-md-4"><!-- Start of the Column -->
      <div class="page-header">
        <h1>Upgrade Account</h1>
      </div>
      <p><em>Free postings for first 3 months - Payment method is required when doing postings after the promotion period</em></p>
      <form class="account-form" role="sign-up" action="mailto:youremail@email.com" method="post">
        <div class="form-group">
          <select name="typeofaccount" size="1" id="upgradeaccount"  type="select">
             <option value="-1" selected>Account Type</option>
             <option value="1">Business</option>
             <option value="2">Schools & Charities</option>
           </select>
          
          
           <div id="1" class="type payment">

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
                <div class="store">
                  <input type="checkbox" name="store" value="store"> Is a store?<br></div>

          <div class="first-name">First Name<br/>
          <input type="text" class="form-control firts" placeholder="John" name="first_name" id="first" required ></div>
          <div class="last-name">Last Name<br/>
          <input type="text" class="form-control last" placeholder="Smith" name="last_name" id="last" required ></div>
          
                <div class="store-address"><input type="text" class="form-control address" placeholder="Address" name="address" id="address"></div>
                <div class="store-city"><input type="text" class="form-control city" placeholder="City" name="city" id="city"></div>
                <div class="store-zip"><input type="text" class="form-control zip" placeholder="Zip Code" name="zip_code" id="zip"></div>
                <div class="store-sate"><select class="form-control state" name="state" id="state">
  <option value="-1" selected>State</option>              
  <option value="AL">Alabama</option>
  <option value="AK">Alaska</option>
  <option value="AZ">Arizona</option>
  <option value="AR">Arkansas</option>
  <option value="CA">California</option>
  <option value="CO">Colorado</option>
  <option value="CT">Connecticut</option>
  <option value="DE">Delaware</option>
  <option value="DC">District Of Columbia</option>
  <option value="FL">Florida</option>
  <option value="GA">Georgia</option>
  <option value="HI">Hawaii</option>
  <option value="ID">Idaho</option>
  <option value="IL">Illinois</option>
  <option value="IN">Indiana</option>
  <option value="IA">Iowa</option>
  <option value="KS">Kansas</option>
  <option value="KY">Kentucky</option>
  <option value="LA">Louisiana</option>
  <option value="ME">Maine</option>
  <option value="MD">Maryland</option>
  <option value="MA">Massachusetts</option>
  <option value="MI">Michigan</option>
  <option value="MN">Minnesota</option>
  <option value="MS">Mississippi</option>
  <option value="MO">Missouri</option>
  <option value="MT">Montana</option>
  <option value="NE">Nebraska</option>
  <option value="NV">Nevada</option>
  <option value="NH">New Hampshire</option>
  <option value="NJ">New Jersey</option>
  <option value="NM">New Mexico</option>
  <option value="NY">New York</option>
  <option value="NC">North Carolina</option>
  <option value="ND">North Dakota</option>
  <option value="OH">Ohio</option>
  <option value="OK">Oklahoma</option>
  <option value="OR">Oregon</option>
  <option value="PA">Pennsylvania</option>
  <option value="RI">Rhode Island</option>
  <option value="SC">South Carolina</option>
  <option value="SD">South Dakota</option>
  <option value="TN">Tennessee</option>
  <option value="TX">Texas</option>
  <option value="UT">Utah</option>
  <option value="VT">Vermont</option>
  <option value="VA">Virginia</option>
  <option value="WA">Washington</option>
  <option value="WV">West Virginia</option>
  <option value="WI">Wisconsin</option>
  <option value="WY">Wyoming</option>
</select>       
        </div>
                
            Payment Method<br/><!--Start Payment Div -->
            <div class="ccard" style="width:100%;" >
                <div class="ccselector">
                  <label>
                 <input id="id_radio1" type="radio" name="name_radio1" value="value_radio1" />
                 <img src="images/ccard.png">
                 </label>
                <label>
                 <input id="id_radio2" type="radio" name="name_radio1" value="value_radio2" />
                 <img src="images/paypal.png">
                </label>
              </div>


  <div id="div1">
  <div  id="creditcard">
    <div class="card-name">Name on Card<br/>
          <input type="text" class="form-control card-name" placeholder="John Smith" name="name_on_card" id="card-name"></div>
    <div class="ccnumber">Credit Card Number<br/>
          <input type="password" class="form-control ccnumber" id="ccnumber" placeholder="&#9679;&#9679;&#9679;&#9679; - &#9679;&#9679;&#9679;&#9679; - &#9679;&#9679;&#9679;&#9679; - 4392" name="credit_number" size="8" ></div>
          <div class="cc-details">
          <div class="exp-date">Expiration Date<br/>
          <input type="text" class="form-control month" placeholder="11" name="expiration_date" id="month"><input type="text" class="form-control year" placeholder="16" name="expiration_year" id="year">
        </div>
          <div class="cvv">CVV<br/>
          <input type="text" class="form-control CVV-no" placeholder="493" name="CVV" id="CVV"></div></div></div></div>
  <div id="div2"><div id="paypal">Email Address<br><input type="email" placeholder="JohnSmith4382@target.co" class="email-ppal" name="email"></div></div>
 
</div>


         <div>E-mail or Mobile Number<br/>
          <input type="text" class="form-control user" placeholder="JohnSmith4382@target.co" name="user_name" required ></div>
          <div class="password">Password<br/>
          <input type="password" class="form-control pass" id="pass" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="password" size="8" required ></div>  
       
          
        </div><!--End Of Payment Div -->
          
       
          <div id="2" class="type ein" >
            <div class="ein-number">EIN #(for schools & Charities if applicable)<br/>
          <input type="text" class="form-control ein-no" placeholder="Enter Ein #..." name="ein_number" id="ein" required ></div>

          <div class="first-name">First Name<br/>
          <input type="text" class="form-control firts" placeholder="John" name="first_name" id="first" required ></div>
          <div class="last-name">Last Name<br/>
          <input type="text" class="form-control last" placeholder="Smith" name="last_name" id="last" required ></div>
          
                <div class="store-address"><input type="text" class="form-control address" placeholder="Address" name="address" id="address"></div>
                <div class="store-city"><input type="text" class="form-control city" placeholder="City" name="city" id="city"></div>
                <div class="store-zip"><input type="text" class="form-control zip" placeholder="Zip Code" name="zip_code" id="zip"></div>
                <div class="store-sate"><select class="form-control state" name="state" id="state">
  <option value="-1" selected>State</option>              
  <option value="AL">Alabama</option>
  <option value="AK">Alaska</option>
  <option value="AZ">Arizona</option>
  <option value="AR">Arkansas</option>
  <option value="CA">California</option>
  <option value="CO">Colorado</option>
  <option value="CT">Connecticut</option>
  <option value="DE">Delaware</option>
  <option value="DC">District Of Columbia</option>
  <option value="FL">Florida</option>
  <option value="GA">Georgia</option>
  <option value="HI">Hawaii</option>
  <option value="ID">Idaho</option>
  <option value="IL">Illinois</option>
  <option value="IN">Indiana</option>
  <option value="IA">Iowa</option>
  <option value="KS">Kansas</option>
  <option value="KY">Kentucky</option>
  <option value="LA">Louisiana</option>
  <option value="ME">Maine</option>
  <option value="MD">Maryland</option>
  <option value="MA">Massachusetts</option>
  <option value="MI">Michigan</option>
  <option value="MN">Minnesota</option>
  <option value="MS">Mississippi</option>
  <option value="MO">Missouri</option>
  <option value="MT">Montana</option>
  <option value="NE">Nebraska</option>
  <option value="NV">Nevada</option>
  <option value="NH">New Hampshire</option>
  <option value="NJ">New Jersey</option>
  <option value="NM">New Mexico</option>
  <option value="NY">New York</option>
  <option value="NC">North Carolina</option>
  <option value="ND">North Dakota</option>
  <option value="OH">Ohio</option>
  <option value="OK">Oklahoma</option>
  <option value="OR">Oregon</option>
  <option value="PA">Pennsylvania</option>
  <option value="RI">Rhode Island</option>
  <option value="SC">South Carolina</option>
  <option value="SD">South Dakota</option>
  <option value="TN">Tennessee</option>
  <option value="TX">Texas</option>
  <option value="UT">Utah</option>
  <option value="VT">Vermont</option>
  <option value="VA">Virginia</option>
  <option value="WA">Washington</option>
  <option value="WV">West Virginia</option>
  <option value="WI">Wisconsin</option>
  <option value="WY">Wyoming</option>
</select>       
        </div>
      </div>
        
        <button type="submit" class="btn btn-default upgrade-account">Upgrade Account</button>
        
      </form>
    
    </div><!-- End of the Column -->
          
      </div><!-- End of the Row -->

     
    </div><!-- End of the Container -->
   
   </div> <!-- End of the Main -->