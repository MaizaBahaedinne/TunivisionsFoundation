

    <div id="welcome-box"  class="welcome-popup"  style="display: none ">
    
		    <h3>Apply now to the Arab Youth Hackathon</h3>
		<p>Submit your innovative ideas and solutions for challenges in times of crisis</p>
	    
    <div class="loc_widget">

        <a target="_blank" href="en/article/our-initiative/arab-youth-hackathon.html" class="item_" title="Hackathon">
                          <div class="icon_">
                             <img src="<?php echo base_url() ?>assets/frontend/dist/images/click.svg">
                          </div>
                          <span class="text_">Join the Hackathon</span>
                      </a>
                    
                                    
              </div>
    
    
</div>

	
	
	<footer>
  <div class="container">
    <div class="footer-text text-center">
        <div class="footer_links">
        <li>
          <a href="en/faq.html" class="link_">FAQ</a>
        </li>
        <li>
           <a href="en/team.html#join-the-team" class="link_">Careers</a>
        </li>
        <li>
          <a href="en/about.html#who-we-are" class="link_">About</a>
        </li>
        <li> <a href="index.html#contact" class="link_">Contact</a></li>
      </div>
      <span>All rights reserved © Arab Youth Center</span>
    </div>
  </div>
</footer>	    
		<!-- Scripts JSF-->
<script>  
    var isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);    
    if (window.document.documentMode || isSafari) {
        var blz_elemt = document.getElementsByClassName('b-lazy');
        for (var i = 0; i < blz_elemt.length; ++i) {
            var src_ = blz_elemt[i].dataset,
            src_data = JSON.parse(JSON.stringify(src_));
            for (var key in src_data) {
                var file_path = src_data[key];                
                if(file_path.split('.').pop() == 'webp') {
                    new_file = file_path.substr(0, file_path.lastIndexOf(".")) + ".jpg";                    
                    blz_elemt[i].dataset[key] = new_file;
                }
            }                        
        }
    }
</script>
<script src="<?php echo base_url() ?>assets/frontend/dist/scripts/lib/modernizr.min.js"></script>  
<script src="<?php echo base_url() ?>assets/frontend/dist/scripts/lib/jquery-3.4.1.min.js"></script>

<script src="<?php echo base_url() ?>assets/frontend/dist/scripts/min/home_plugins.js"></script>
<script src="<?php echo base_url() ?>assets/frontend/dist/scripts/min/home.js"></script> 
<script src="<?php echo base_url() ?>assets/frontend/dist/scripts/min/page.js"></script> 

<script src="../cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js" integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>
<script type="text/javascript" src="../www.google.com/recaptcha/api57b8.js?onload=myCaptchaCallBack&amp;render=explicit&amp;hl=en" async defer></script>
<script>
	if($.validator){
		
		$.validator.addMethod( "emailSpecialChar", function( value, element ) {
		return this.optional( element ) || !/[~`!#$%\^&*+=\-\[\]\\';\/{}|\\":<>\?]/g.test( value );        
		 }, "Special characters(#,$,% etc.) are not allowed." );
		 
		$.validator.addMethod( "max_500", function( value, element ) { 
			var wordsCount = 0;
			value = value.replace('.',' ');
			value = value.replace('-',' ');
			value = value.replace('_',' ');
			var arr = value.split(' ');
			  $(arr).each(function(i,v){
					if(v){
						wordsCount++;
					}
				});
			return !(wordsCount >500)
		 }, "Max 500 words allowed" );

		 $.validator.addMethod( "myEmail", function( value, element ) {
			return this.optional( element ) || /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test( value );
		}, "Invalid Email"); 
		
		$.validator.addMethod( "alphanumeric", function( value, element ) {
			//return this.optional( element ) || !/[~`!#$@%\^&*+=\-\[\]\\';,\/{}|\\":<>\?]/g.test( value );
			return this.optional( element ) || /^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z0-9_. -]*$/.test( value );
		}, "Special characters(#,$,% etc.) are not allowed." );

		$.validator.addMethod( "alphanumericMessageBox", function( value, element ) {
			return this.optional( element ) || /^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z0-9,_.\n -]*$/.test( value );
		}, "Special characters(#,$,% etc.) are not allowed." );

		$.validator.addMethod( "integer", function( value, element ) {
			return this.optional( element ) || /^-?\d+$/.test( value );
		}, "Only numbers are allowed" );

		$.validator.addMethod( "dateFormat", function( value, element ) {
			var pattern = /^[A-Za-z]{3} \d{2}, \d{4}$/;
			return this.optional( element ) || pattern.test(value)
		}, "Invalid date" );

		$.validator.addMethod( "noSpace", function( value, element ) {

			return !value.startsWith(" ");
		}, "Space not allowed");
		
	}
</script><script>
var recaptchaArr = [];
var myCaptchaCallBack = function() { 
	  $('.recaptcha').each(function(){
		var id = $(this).attr('id');
			if(id){
				var tmp = grecaptcha.render( $(this).attr('id'), {
				  'sitekey' : '6LduzggUAAAAAEFpHflbMn2MhApiYPpvvEmaqp4D',
				  'theme' : 'light',
				  'lang':'en'
				});
				recaptchaArr.push({ID:$(this).attr('id'),obj:tmp});
			}
	  })
		
	};

function sendAjax(url,type,dataToSend,func,loaderDivID){
		if(loaderDivID){ $(loaderDivID).addClass('show'); }
		$.ajax({
			url:url,
			type:type,
			async:true,
			data:dataToSend,
			dataType:'json',
			statusCode: {
				302:function(){ console.log('Forbidden. Access Restricted'); },
				403:function(){ console.log('Forbidden. Access Restricted','403'); },
				404:function(){ console.log('Page not found','404'); },
				500:function(){ console.log('Internal Server Error','500'); }
			},
			error: function(res) {
				console.log(res.responseText);
			}
		}).done(function(responseData){							
			func(responseData);	
								
		}).always(function(){
			if(loaderDivID){$(loaderDivID).removeClass('show');}			
		});
 }
</script>	
<script>
     function CaptchaCallback() {
     $('.recaptcha').each(function () {
       grecaptcha.render(this, {
         'sitekey': '6LduzggUAAAAAEFpHflbMn2MhApiYPpvvEmaqp4D',
         'lang': 'en',
       });
     });
 
   };
 
   $(document).ready(function(){
     $('select').formSelect();
   });
         
   </script>
 
 <script>
     $(document).ready(function() {
         $('body').addClass('loaded');
     });
 
 </script>
 
 
 <script>
     var bannerSwiper = new Swiper('.banner-slider .swiper-container', {
     spaceBetween: 0,
     centeredSlides: true,
     //loop:true,
     //effect: 'fade',
     autoplay: {
       delay: 6000,
         disableOnInteraction: false,
     }, 
       navigation: {
         nextEl: '.banner-next',
         prevEl: '.banner-prev',
       },
       on: {
                 init: function () {
                     window.bLazy.revalidate();
                 },
             }
 
       });
 
     bannerSwiper.on('slideChange', function () {
       window.bLazy.revalidate();
    });
 
    var newsSlider = new Swiper('.news_wrapper .swiper-container', {
       slidesPerView: 1,
       slidesPerColumn: 1,
       spaceBetween: 0,
       navigation: {
         nextEl: '.news-navigation .news-next',
         prevEl: '.news-navigation .news-prev',
       },
       pagination: {
         el: '.swiper-pagination',
         clickable: true,
       },
       breakpoints: {
         1024: {
           slidesPerView: 1,
           slidesPerColumn: 1,
           spaceBetween: 20,
         }
       },
       on: {
             init: function () {
                 window.bLazy.revalidate();
             },
         }
     });
     newsSlider.on('slideChange', function () {
       window.bLazy.revalidate();
    });
 
   </script>

   <script type="text/javascript">
      $('.phone').mask('0000000000000000');
      $.validator.addMethod( "alphanumeric", function( value, element ) {
        return this.optional( element ) || !/[~`!#$%\^@&*+=\[\]\\';,\/{}|\\":<>\?]/g.test( value );
      }, "messages.enter_no_special_char"  );
      
      $.validator.addMethod( "textarea", function( value, element ) {
        return this.optional( element ) || /^[\u0600-\u065F\u066A-\u06EF\u06FA-\u06FFa-zA-Z0-9\n,_. -]*$/.test( value );
      }, "messages.enter_no_special_char"  );
      
      $.validator.addMethod( "textbox", function( value, element ) {
        return this.optional( element ) || !/[~`!#$%\^&*+=\[\]\\';,\/{}|\\":<>\?]/g.test( value );
      }, "messages.enter_no_special_char"  );
      
      $.validator.addMethod( "freetext", function( value, element ) {
        return this.optional( element ) || !/[~`!$%\^&*+=\[\]\\';\/{}|\\"<>\?]/g.test( value );
      }, "messages.enter_no_special_char"  );
      
      $.validator.addMethod( "integer", function( value, element ) {
        return this.optional( element ) || /^-?\d+$/.test( value );
      }, "messages.please_enter_number" );

      $.validator.addMethod( "myemail", function( value, element ) {
      return this.optional( element ) || /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test( value );
      }, "Invalid Email"); 


     $("#contactSubmitBtn").click(function() {
        $(".contactFormSubmit").submit();
     });

     $("#contact_us_form").validate({
        errorPlacement: function(error, element) {
          error.insertBefore(element);
        }, 
        ignore: '',
        rules: {
          "hiddenRecaptcha": {
            required: function () {
              var gotResponse = haveRecaptchaResponse('contactCaptcha');
              if(!gotResponse) {
                  $('#contactCaptcha').find('iframe').addClass('error-border');
              } else {
                  $('#contactCaptcha').find('iframe').removeClass('error-border');
              }
              return !gotResponse; 
            }
          },
          'contact_name': {
            required:true,
            alphanumeric:true
          },
          'contact_email': {
            required:true,
            myemail:true
          },
          'contact_country': {
            required:true,
            alphanumeric:true
          },
          'contact_inquiry_type': {
            required:true,
            alphanumeric:true
          },
          'contact_message': {
            required:true,
            textarea:true
          },

        },
        submitHandler: function(form) {
          var url = $(form).attr('action');
          console.log(url);
          var data = $(form).serializeArray();

          $(".message_box").html();

          $(".loader_form").show();

          sendAjax(url, 'post', data, function(res){
            resetRecaptcha();
            $(".message_box").html(res.message);
            
            $(".loader_form").hide();

            $('input[name="contact_name"]').val('');
            $('input[name="contact_email"]').val('');
            $('input[name="contact_message"]').val('');
            $('select option:first').prop('selected', true);
            // $('select[name="contact_inquiry_type"]').material_select();
            // $('select[name="contact_country"]').val('');
            // $('select[name="contact_inquiry_type"]').val('');

          }, '');

          return false;
        },
        messages: {            
          "hiddenRecaptcha" : {
            required : "This field is required",
          }, 
        },
     });
   </script>
<script type="text/javascript">
    $(document).ready(function() {
       // $.fancybox("#welcome-box"); $.fancybox("#welcome-box");
         //$("#hidden_link").fancybox().trigger('click');
        // $.fancybox.open({
        //     src : "#welcome-box"
        // });
    });
</script>

    <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
<script type="text/javascript">
/* curator-feed-default-feed-layout */
(function(){
var i, e, d = document, s = "script";i = d.createElement("script");i.async = 1;
i.src = "../cdn.curator.io/published/561847ee-9e03-4e79-bf0e-9eb7ad674d79.js";
e = d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
})();
</script>	<script>
</script>
<script>
            $(document).ready(function(){
                
              // Translated
                $('.dropify-fr').dropify({
                    messages: {
                        default: 'Glissez-déposez un fichier ici ou cliquez',
                        replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                        remove:  'Supprimer',
                        error:   'Désolé, le fichier trop volumineux'
                    }
                });

                // Used events
                var drEvent = $('#input-file-events').dropify();

                drEvent.on('dropify.beforeClear', function(event, element){
                    return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
                });

                drEvent.on('dropify.afterClear', function(event, element){
                    alert('File deleted');
                });

                drEvent.on('dropify.errors', function(event, element){
                    console.log('Has Errors');
                });



                


            });
    </script>


    <script>
    tinymce.init({
      selector: '#TinyMCE',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>


</body>

<!-- Mirrored from arabyouthcenter.org/en by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Oct 2020 19:59:50 GMT -->
</html>