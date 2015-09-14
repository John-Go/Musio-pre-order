<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
<script  src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="./public/js/jquery.transit.min.js"></script>
<script src="./public/remodal/remodal.js"></script>
<script type="text/javascript">
var is_web = '<?=$is_web;?>';
var is_cn = "<?=$this->session->userdata('language');?>";

if(is_cn == 'cn')
{
	$('body').css('font-weight','500');
}

function isValidEmailAddress(emailAddress) {
  var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
  return pattern.test(emailAddress);
}

$('a[name="language"]').click(function()
{
  var language = $(this).attr('id');
  $.ajax(
  {
    type:'post',  
    url:'/countryclassify/set_language',      
    data:{
      'language':language
    },
    dataType:'json',     
    success:function(json){
      if(json['status'])
      {              
        window.location.reload();
      }
      else
      {
       window.location.href = '/';
      }
    } 
  });
});

$("button#submit").click(function (e) {
	e.preventDefault()

	var params = {}
	params.email = $("input#email").val()

	if(!isValidEmailAddress(params.email))
	{
		alert('You must provide a valid email.');
		$("input#email").focus();
	}
	else
	{
		var message = $('.message')

		$.ajax({
			type: "POST",
			data: params,
			url: "/sendmail/send",
			dataType: "json",
			beforeSend: function() {
				$("input#email").attr("placeholder", "Sending ...")
			},
			success: function(json) {				
				if (json.status) {
					message.text(json.message)
					message.css("color", "#01df01")
					message.css("opacity", 1.0)
					message.delay(2000).animate({opacity: "0.0"})

					// ok.show()
					// ok.delay(2000).fadeOut(500)
				} else {
					message.text(json.message)
					message.css("color", "#ff8000")
					message.css("opacity", 1.0)
					message.delay(2000).animate({opacity: "0.0"})
					// remove.show()
					// remove.delay(2000).fadeOut(500)	
				}
			},
			error : function(error) {				
				// alert("Please try again.")
				message.text("Please try again.")
				message.css("color", "#ff8000")
				message.css("opacity", 1.0)
				message.delay(2000).animate({opacity: "0.0"})

				// remove.show()
				// remove.delay(2000).fadeOut(500)
			},
			complete: function() {
				$("input#email").attr("placeholder", "Enter your email.")
			}
		})
	}	
})

$(".arrow-lower").click(function() {	
	$('html,body').animate({scrollTop:$("div.article-box-talking").offset().top - 60}, 500)
})

jQuery(function() { // runs after DOM has loaded;

	if(is_web == 'true')
	{
		resizeToCover()
		jQuery(window).resize(function () { resizeToCover(); });
	}
	else // Mobile or Tablet
	{
		$('#main-video-wrap-static').css('display','inline-block');
		$('#main-video-wrap').css('display','none');
		$('#main-video-wrap-text').css('display','none');
	}
    
    // jQuery(window).trigger('resize');
});

function resizeToCover() {
	
	windowWidth = $(window).width();

	if(windowWidth < 1510)
	{
		var mainWrapHight = $('#main-video-wrap').height() - $('.main-video').height();
		min = 1510 - windowWidth;	
		
		if(windowWidth < 1370)
		{
			$('div#main-video-wrap').css('min-width', '1256px' );
			$('div#main-video-wrap').css('margin-top', '-140px' );
		}
		else
		{
			$('div#main-video-wrap').css('margin-top', '-'+min+'px' );
		}		
	}
	else
	{
		$('div#main-video-wrap').css('margin-top', '0px' );		
		$('#main-video-wrap').css('height','760px');
	}   
};

//youtube load api
var tag = document.createElement('script');
tag.src = "//www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var players

function onYouTubeIframeAPIReady() {
	players = new YT.Player('youtube_player', {
	  height: '360',
	  width: '640',
	  videoId: '7FE8tuQOUbU'	  
	});
}

$('#video_play_img').click(function(){	
	players.playVideo();
})

$('body').delegate('.remodal-wrapper','click',function(){	
	players.pauseVideo();
});

// youtube end.

</script>
<?php if($page == 'shop') { ?>
<script src="./public/js/jquery.countries.js"></script>
<script src="./public/js/jquery.number.min.js"></script>
<script src="./public/js/creditly.js"></script>
<script type="text/javascript">
var count = parseInt($('.count').text());
var quantity = 0;

// Select country
populateCountries("country");
populateCountries("billing_country");

function inputTotal(count)
{
	$('.count').text(count);
	$('#sub-total').text('$ '+$.number(count*99)+'.00');
	$('#total').text('$ '+$.number(count*99)+'.00 USD');
}

$('input#shop_email').keydown(function(event){
  if(event.keyCode==13){
     $('#next_payment').trigger('click');
  }
});       

$('#subtraction').click(function() {	
	if(count > 1)
	{
		count--;		
		inputTotal(count)
	}
});

$('#addition').click(function() {		
	if(count >= 0)
	{
		count++;
		inputTotal(count)
	}
});

$('#billing_my_shipping').click(function () {

	if( $(this).prop('checked') )
	{
		$('#billing_my_shipping_table').css('display','none');
	}
	else
	{
		$('#billing_my_shipping_table').css('display','inline-table');	
	}
})

// has-error

$('input#shop_email').keyup(function() {
	if( isValidEmailAddress($('#shop_email').val())	){	
		$('#next_payment').attr('disabled',false);
		
	}else{		
		$('#next_payment').attr('disabled',true);		
	}
})


function errorMessageAppear (textMessage) {
	var message = $('#message')
	message.text(textMessage)	
	message.css("color", "#ff8000")
	message.css("opacity", 1.0)
	message.delay(2000).animate({opacity: "0.0"})
}

$('#back').click(function () {
	$('#shipping_table').css('display','none')
	$('#shipping_email').css('display','block')
})

$('#edit').click(function () {
	$('#shipping_table').css('display','block')
	$('#shipping_summary').css('display','none')
})

var params = {}
var email = '';
var first_name = '';
var last_name = '';
var address = '';
var address2 = '';
var city = '';
var region = '';
var country = '';
var postal_code = '';
var phone = '';

$('#next_payment').click(function(){
	$('#shipping_email').css('display','none')
	$('#shipping_table').css({'display':'block'})
	$('#first_name').focus();

	email = $("input#shop_email").val();	
	params.email = email;

	$.ajax({
		type: "POST",
		data: params,
		url: "/setcookie/set",
		dataType: "json",
		beforeSend: function() {
			$("input#shop_email").attr("placeholder", "Sending ...")
		},
		success: function(json) {
			console.log(json);
			
			if (json.status) {
				
			} else {
				
			}
		},
		error : function(error) {
			alert("Please try again.")			
		}
	})
});

$('#continue_pay').click(function () {
	first_name = $('#first_name');
	last_name = $('#last_name');
	address = $('#address');
	address2 = $('#address2');
	city = $('#city');
	region = $('#region');
	country = $( "#country option:selected" );
	postal_code = $('#postal_code');
	phone = $('#phone');

	if(first_name.val() == 0)
	{
		alert('Please write your firstname!'); first_name.focus();	
	}
	else if(last_name.val() == 0)
	{
		alert('Please write your lastname!'); last_name.focus();		
	}
	else if(address.val() == 0)
	{
		alert('Please write your address!'); address.focus();		
	}
	else if(address2.val() == 0)
	{
		alert('Please write your address2!'); address2.focus();		
	}
	else if(city.val() == 0)
	{
		alert('Please write your city!'); city.focus();
	}	
	else if(region.val() == 0)
	{
		alert('Please write your region!'); region.focus();
	}	
	else if(country.text() == 'Select Country')
	{
		alert('Please select your country!'); country.focus();
	}
	else if(postal_code.val() == 0)
	{
		alert('Please write your postal code!'); postal_code.focus();
	}
	else if(phone.val() == 0)
	{
		alert('Please write your phone!'); phone.focus();
	}
	else
	{
		params.first_name = first_name.val();
		params.last_name = last_name.val();
		params.address = address.val();
		params.address2 = address2.val();
		params.city = city.val();
		params.region = region.val();
		params.country = country.text();
		params.postal_code = postal_code.val();
		params.phone = phone.val();

		if(!$('#billing_my_shipping').is(':checked'))
		{
			var billing_full_name = $('#billing_full_name');
			var billing_address = $('#billing_address');
			var billing_address2 = $('#billing_address2');
			var billing_city = $('#billing_city');
			var billing_region = $('#billing_region');
			var billing_country = $( "#billing_country option:selected" );
			var billing_postal_code = $('#billing_postal_code');

			if(billing_full_name.val() == 0)
			{
				alert('Please write your full name!'); billing_full_name.focus();	
			}
			else if(billing_address.val() == 0)
			{
				alert('Please write your billing address!'); billing_address.focus();		
			}
			else if(billing_address2.val() == 0)
			{
				alert('Please write your billing address2!'); billing_address2.focus();		
			}
			else if(billing_city.val() == 0)
			{
				alert('Please write your city!'); billing_city.focus();		
			}
			else if(billing_region.val() == 0)
			{
				alert('Please write your region!'); billing_region.focus();
			}	
			else if(billing_country.text() == 'Select Country')
			{
				alert('Please select your country!'); billing_country.focus();
			}
			else if(billing_postal_code.val() == 0)
			{
				alert('Please write your postal code!'); billing_postal_code.focus();
			}
			else
			{
				params.billing_full_name = billing_full_name.val();
				params.billing_address = billing_address.val();
				params.billing_address2 = billing_address2.val();
				params.billing_city = billing_city.val();
				params.billing_region = billing_region.val();
				params.billing_country = billing_country.text();
				params.billing_postal_code = billing_postal_code.val();				
			}	
		}
		else
		{
			console.log('success')	
			params.billing_full_name = first_name.val()+' '+last_name.val();
			params.billing_address = address.val();
			params.billing_address2 = address2.val();
			params.billing_city = city.val();
			params.billing_region = region.val();
			params.billing_country = country.text();
			params.billing_postal_code = postal_code.val();

			console.log(params);

			$('#shipping_table').css('display','none')
			$('#shipping_summary').css('display','block')

			$('#shipping_sum_email').text(email);
			$('#shipping_sum_full_name').text(params.billing_full_name);
			$('#shipping_sum_address').text(params.address);
			$('#shipping_sum_region').text(params.city+', '+params.region+' '+params.postal_code);			
		}
	}
})

$(function() {
  var creditly = Creditly.initialize(
      '.expiration-month-and-year',
      '.credit-card-number',
      '.security-code',
      '.card-type');  
});

</script>
<?php } ?>