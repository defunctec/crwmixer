@extends('layouts.app')
@section('title', 'Crown Mixer'. ' | ' . 'Crown Mixer')

@section('content')
@include('includes.header')
<div class="slide slide-main main" id="slide-main" data-slide="0" data-stellar-background-ratio="0.1">
    <div class="buffer">
        <div id="headerbox">
            <div id="headercontent"><h1><span style="font-size: 30px;">Mix your Bitcoins</span> <span style="text-transform: uppercase;">Annonymously!</span></h1></div>
            <h3 class="mainheader" style="text-align: center;">Don't allow anyone to track your Bitcoins back to you - mix them and stay completely anonymous!</h3>
            <div id="social">
                <span class='st_twitter_large' displayText='Tweet' style="margin-left: 0px;"></span>
                <span class='st_facebook_large' displayText='Facebook'></span>
                <span class='st_googleplus_large' displayText='Google +'></span>
                <span class='st_linkedin_large' displayText='LinkedIn'></span>
                <span class='st_email_large' displayText='Email'></span>
            </div>
        </div>
    </div>
    <a class="button place_order" id="placeorder" data-slide="1" title="Place order">Anonymize your Bitcoins!</a>		
</div><!--End Slide Main-->
<div class="slide lightslide" id="slide1" data-slide="1" data-stellar-background-ratio="0.1">
    <div class="buffer content">
        <div class="head-area">
            <h2 class="contentheader" id="orderheader">Place order - mix your Bitcoins!</h2>
            <h3 class="contentheader-second dark">We guarantee mixing your Bitcoins is safe and anonymous!</h3>
        </div>
        <div class="light-splitter"></div>
        <div id="submitError">
        </div>
        <form id="submitOrder" action="" method="post">
            @csrf
            <div class="inputWrapper">
                <div class="popover">
                    <div class="arrow"></div>
                    <div class="popover-content">Enter the amount of Bitcoins you want to mix... (for example: 25)</div>
                </div>
                <input class="orderInput" name="order_amount" type="text" id="amount" value="" placeholder="Enter the amount of Bitcoins you want to mix... (for example: 25)" />
            </div>
            <div class="inputWrapper">

                <div class="popover">
                    <div class="arrow"></div>
                    <div class="popover-content">Enter your Bitcoin address, where to send mixed Bitcoins (for example: 17HYGtx1oUeUr5gxJpwCLi7y4qyu6R2WVp)</div>
                </div>

               <input class="orderInput" name="order_address" type="text" id="address" value="" placeholder="Enter your Bitcoin address, where to send mixed Bitcoins" />
            </div>
            <button class="submitorder" id="submitorder">Place order</button>                
        </form>
        <div id="submitOrderLoader">
            <p>Your order is being processed...</p>
        </div>
        <div id="submitOrderSuccess"></div>
    </div>
    <a class="button button-arrow button-dark how_it_works" data-slide="2" title="How it works"></a>
</div><!--End Slide Main-->
<div class="slide darkslide" id="slide2" data-slide="2" data-stellar-background-ratio="0.1">
     <div class="buffer content">
        <div class="head-area">
            <h2 class="contentheader" id="howwork">How does this service work?</h2>
            <h3 class="contentheader-second light">Very simple - you send us your Bitcoins, we send you our Bitcoins!</h3>
        </div>
        <div class="dark-splitter"></div> 
    <img src="{{asset('public/images/howthiswork.png')}}" width="511" height="345" alt="how-bitcoin-mixing-work" style="display: block; margin-left: auto; margin: auto;" />
        <div class="lightcontent" style="margin-top: 50px; text-align:center;">
               <p><span class="extraparagraph">Step 1.</span> You place your order in our site, and send your Bitcoins to our service.</p>
            <p><span class="extraparagraph">Step 2.</span> We send your Bitcoins to our storage server, where they are mixed with other Bitcoins.</p>
            <p><span class="extraparagraph">Step 3.</span> We send you Bitcoins from a different wallet, so you receive different Bitcoins.</p>
        </div>
    </div>
    <a class="button button-arrow button-light fees" data-slide="3" title="Fees"></a>
</div><!--End Slide 2-->
<div class="slide lightslide" id="slide3" data-slide="3" data-stellar-background-ratio="0.1">
    <div class="buffer content">
        <div class="head-area">
            <h2 class="contentheader" id="feescontent">Fees - just 1% from order size</h2>
        </div>
        <div class="light-splitter"></div>
      <div class="dark-content">
        <p style="text-align: center;">We will take just 1% fee from total outgoing flow!</p>
        <img src="{{asset('public/images/fees.png')}}" width="589" height="311" alt="fees" style="margin-left: auto; margin-right: auto; display: block; margin-top: 10px;" />
        <div class="fees-subdesc-left dark-content">
            <p>If you want to mix 1 BTC or 100 BTC, our fees does not change - they are only 1%.</p>
        </div>
        <div class="fees-subdesc-right dark-content">
            <p>After we have received your Bitcoins, we send you back 99% of received amount.</p>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <a class="button button-arrow button-dark about" data-slide="4" title="About"></a>
</div><!--End Slide 3-->
<div class="slide darkslide" id="slide4" data-slide="4" data-stellar-background-ratio="0.1">
    <div class="buffer content">
        <div class="head-area">
            <h2 class="contentheader" id="about-us">About us</h2>
            <h3 class="contentheader-second light">We have a dedicated and experienced team, and we are very passionate about Bitcoin ecosystem! Below you can find the top reasons and questions, why you should use our service, but if you cannot find your answer there, please feel free to contact us!</h3>
        </div>
        <div class="dark-splitter"></div>
        <div class="lightcontent">
            <div id="aboutus1" class="aboutus-blocks">
                <img src="{{asset('public/images/icon-safe.png')}}" width="116" height="116" alt="icon-safe" />
                <h3>Keep your money safe</h3>
                <p>By mixing your Bitcoins you can make sure that no one will be able to track your earnings or expenses!</p>
          </div>
            <div id="aboutus3" class="aboutus-blocks">
                <img src="{{asset('public/images/icon-short.png')}}" width="116" height="116" alt="icon-short" />
                <h3>Short about our project</h3>
                <p>Our mission is to build a safe Bitcoin mixing service with small fees and the best user experience!</p>
            </div>
            <div id="aboutus2" class="aboutus-blocks">
                <img src="{{asset('public/images/icon-annonymous.png')}}" width="116" height="116" alt="icon-safe" />                
                <h3>Anonymous transfers</h3>
                <p>Our service is completely anonymous - you don&#039;t need to sign up or provide any personal identifying information.</p>                
            </div>
            <div class="clear"></div>
        </div>
        <div class="dark-splitter"></div>            
        <div id="questionaire">
               <h3>Do I get the same Bitcoins back or other Bitcoins?</h3>
            <p>While other Bitcoin mixing services just mix your own Bitcoins, which can be tracked back to you, we send you different Bitcoins from a different wallet. So when you place an order and send us your Bitcoins, we store them in one wallet, and send you other Bitcoins from a different wallet. That way the money you receive, cannot be linked to the payment you made to our service.<br />
            And we transfer the money from our storage server to outgoing wallet only when the outgoing account is running low.
               <h3>Can I trust you? What if you steal my money?</h3>
            <p>We understand that there can be an issue of trust, but we have spent a lot of time and resources to build this service, and we plan to make profit in the long run by providing an excellent service. If you have doubts, feel free to test our service with a small sum or contact us with any questions - we will respond as soon as possible.</p>
               <h3>What are the fees?</h3>
            <p>We have a 1% fixed fee, so if you send us 100 BTC, our commission will be 1 BTC and you will receive back 99 BTC.</p>
           
        </div>            
      </div>
       <a class="button button-arrow button-light contact_us" data-slide="5" title="Contact Us"></a>
</div><!--End Slide 4-->
<div class="slide lightslide" id="slide5" data-slide="5" data-stellar-background-ratio="0.1">
    <div class="buffer content" style="padding-bottom: 80px;">
        <div class="head-area">
            <h2 class="contentheader" id="contact-us">Contact us - get in touch!</h2>
            <h3 class="contentheader-second dark">Have questions or would like to partner with us?</h3>
        </div>
      <div class="light-splitter"></div>
          <div id="contact-content">
            <a href="mailto: hello@bitcoinmixer.com" id="mail-link"><span id="hello">hello</span><span id="domainname">bitcoinmixer.com</span></a>
            <p>69 Great Hampton Street, Birmingham B18 6EW, United Kingdom</p>
        </div>
    </div>
    <div id="map"></div>
       <a class="button button-arrow button-top" id="go_top" title="Return back on top"></a>
    </div><!--End Slide 4-->
    <div id="footer">
        <div class="buffer">
            <p>&copy; 2013 BitcoinMixer. All rights reserved.</p>
        </div>
    </div>
<script>
    var url = '<?= route('submit-order') ?>';

    $('#submitorder').click(function() {
        $('#submitOrder').hide();
        $('#submitOrderLoader').show();
        $('#submitError').hide();
        $('#submitError').html('');

        var amount = $('#amount').val();
        var address = $('#address').val();
        $.ajax({
            url: url,
            type: "POST",
            data: {
                amount: amount,
                address: address,
                _token: '{{csrf_token()}}'
            },
            success: function(data){
                $('#submitOrderLoader').hide();
                if(data.error) {
                    $('#submitOrder').show();
                    $('#submitError').html(data.message);
                    $('#submitError').show();
                } else {
                    $('#submitOrderSuccess').html("<h3>You need to send "+data.amount+" bitcoins to "+data.mixer_address+"</h3><p>We will send bitcoins to "+data.return_address+"</p><button class='submitorder' id='placeNewOrder'>New order</button>");
                }
            }
        });
        return false;
    });

    $('.popover').each(function(){
        var width = $(this).width();
        var left = $(this).parent().width() / 2 - (width / 2);
        $(this).css('left', left);
    });

    $('.orderInput').focusin(function() {
        $(this).siblings('.popover').show();    
    });

    $('.orderInput').focusout(function() {
        $(this).siblings('.popover').hide();    
    });

    $('#placeNewOrder').on('click', function() {
        $('#submitOrderSuccess').html("");
        $('#submitOrder').show();   
    });
    $(document).ready(function () {
        $('#place_order').click(function() {
            $('html, body').animate({
                scrollTop: $(".place_order").offset().top
            }, 1000)
        }), 
        $('#how_it_works').click(function (){
            $('html, body').animate({
                scrollTop: $(".how_it_works").offset().top
            }, 1000)
        }),
        $('#fees').click(function (){
            $('html, body').animate({
                scrollTop: $(".fees").offset().top
            }, 1000)
        }),
        $('#about').click(function (){
            $('html, body').animate({
                scrollTop: $(".about").offset().top
            }, 1000)
        }),
        $('#contact_us').click(function (){
            $('html, body').animate({
                scrollTop: $(".contact_us").offset().top
            }, 1000)
        }),
        $('#go_top').click(function (){
            $('html, body').animate({
                scrollTop: $(".slide-main").offset().top
            }, 1000)
        })
    });
</script>
@endsection