var timerStart = Date.now();


$(window).load(function() {
    
    // $('.parallax').parallax();

        
    $('.loader').fadeOut(400); 



    $('.nav-open').on('click', function() {
        $('.page-header').addClass('show-it');
        $('#banner').addClass('show-it');
        console.log('0.21320');
    });
    $('.nav-close').on('click', function() {
        $('.page-header').removeClass('show-it');
        $('#banner').removeClass('show-it');
        console.log('1.21320');
    });

//     $('ul.nav li a').on('click', function() {
//         $('ul.nav').removeClass('show');        
//     });

   
// for wow
    wow = new WOW();
    wow.init();
// wow ends

// // for portfolio filter
//     $('.mixitup').mixItUp({
//         effects: ['fade','scale'],
//         easing: 'snap'
//     });
// // portfolio filter ends

  	var mX,
        rotateValue,
        totalWidth = $(window).width(),
        totalHeight = $(window).height();
        console.log(totalWidth);


    $( document ).on( "mousemove", function( event ) {
        mX = event.pageX;

        if(mX >= totalWidth/2){
            var xyz = mX - totalWidth/2; 
            rotateValue = xyz / 30;
            rotateValue2 = xyz / 20;
            $('.shape.g3').css('transform', 'translateX('+rotateValue+'px)');
            $('.shape.g4').css('transform', 'translateX('+rotateValue2+'px)');
        } else {
            var xyz = totalWidth/2 - mX; 
            rotateValue = xyz / 30;
            rotateValue2 = xyz / 20;
            $('.shape.g3').css('transform', 'translateX(-'+rotateValue+'px)');      
            $('.shape.g4').css('transform', 'translateX(-'+rotateValue2+'px)');      
        }
    });

    // $(window).on('scroll', function(){
    //     var $this = $(this),
    //         theScroll = $this.scrollTop(),
    //    		servicesScroll = $('#services').offset().top - 50,
    //    		myScroll = theScroll - servicesScroll;

    // 	$('.g3').css('margin-top', myScroll/3+'px');
    // 	$('.g4').css('margin-top', myScroll/2+'px');

    //     // if (theScroll <= totalHeight) {
    //     //     $(window).scrollTop(totalHeight);
    //     // }
    // });


    $('.page-head').particleground({
        dotColor: 'rgba(255, 255, 255, 0.5)',
        lineColor: '#fff',
        lineWidth: 0.1,
        particleRadius: 3,
        maxSpeedX: 0.1,
        maxSpeedY: 0.2
    });

    $('.page-head h1 span').textillate(
        { in: {
            effect: 'flipInX',
            delay: 100
        } }
    );

    $('ul.faqs li').on('click', '.head', function() {
        // $('ul.faqs li').removeClass('accordian').find('i').removeClass('ti-minus').addClass('ti-plus');
        $(this).parent('li').toggleClass('accordian');
        $(this).find('i').toggleClass('ti-plus').toggleClass('ti-minus');
    });

    var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
    }

    $('#contact-form').on('submit',function(event){
        event.preventDefault();
        var $this = $(this),
            formName = $this.find('#first_name').val(),
            formHoney = $this.find('#honey').val(),
            formEmail = $this.find('#email').val(),
            formMessage = $this.find('textarea').val();

            console.log(formName + formHoney+formEmail+formMessage);
        $.ajax({
            url: 'message.php',
            type: 'POST',
            data: {name: formName,honey:formHoney,email: formEmail,message: formMessage },
        })
        .done(function(data) {
            if(data===1)
            {
                alert('sent');
            } else {
                alert('Error');
            }
        })
        .fail(function() {
            console.log("error");
        });
        
    });
});