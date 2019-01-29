<?php include("header.php");?>
      <!--
      ========================================================
                                  CONTENT
      ========================================================
      -->
 <div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form">
        <span class="contact100-form-title">
          BooK Now
        </span>

        <div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
          <span class="label-input100">FULL NAME *</span>
          <input class="input100" type="text" name="name" placeholder="Enter Your Name">
        </div>

        <div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
          <span class="label-input100">Email *</span>
          <input class="input100" type="text" name="email" placeholder="Enter Your Email ">
        </div>

        <div class="wrap-input100 bg1 rs1-wrap-input100">
          <span class="label-input100">Phone</span>
          <input class="input100" type="text" name="phone" placeholder="Enter Number Phone">
        </div>

        <div class="wrap-input100 in ut100-select bg1">
          <span class="label-input100">Needed Services *</span>
          <div>
            <select class="js-select2" name="service">
              <option>Please chooses</option>
              <option>BIRTHDAY PARTY ORGANIZER</option>
              <option>CATERING SERVICES</option>
              <option>WEDDING DECORATION</option>
              <option>DJ(SOUND) SYSTEM</option>
              <option>LIGHTING SERVICES</option>
              <option>DESIGNER TENT HOUSE</option>
              <option>BEDDING ON RENT</option>
            </select>
            <div class="dropDownSelect2"></div>
          </div>
        </div>

        
        <div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Message">
          <span class="label-input100">Message</span>
          <textarea class="input100" name="message" placeholder="Your message here..."></textarea>
        </div>

        <div class="container-contact100-form-btn">
          <button class="contact100-form-btn">
            <span>
              Submit
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
            </span>
          </button>
        </div>
      </form>
    </div>
  </div>



<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
  <script>
    $(".js-select2").each(function(){
      $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next('.dropDownSelect2')
      });


      $(".js-select2").each(function(){
        $(this).on('select2:close', function (e){
          if($(this).val() == "Please chooses") {
            $('.js-show-service').slideUp();
          }
          else {
            $('.js-show-service').slideUp();
            $('.js-show-service').slideDown();
          }
        });
      });
    })
  </script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="vendor/noui/nouislider.min.js"></script>
  <script>
      var filterBar = document.getElementById('filter-bar');

      noUiSlider.create(filterBar, {
          start: [ 1500, 3900 ],
          connect: true,
          range: {
              'min': 1500,
              'max': 7500
          }
      });

      var skipValues = [
      document.getElementById('value-lower'),
      document.getElementById('value-upper')
      ];

      filterBar.noUiSlider.on('update', function( values, handle ) {
          skipValues[handle].innerHTML = Math.round(values[handle]);
          $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
          $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
      });
  </script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
     
      
<?php include("footer.php");?>