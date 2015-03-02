jQuery(document).ready(function($) {
	$("html").niceScroll();
});
$('.letra').hover(function()
{
	var id = $(this).attr('id').toLowerCase();
	var esto = $('#'+id);
	esto.animate({
		opacity: '1'
	},500)
},
function()
{
	var id = $(this).attr('id').toLowerCase();
	var esto = $('#'+id);
	esto.animate({
		opacity: '0'
	},500)
})
jQuery(document).ready(function($) {
	$(window).scroll(function(){
		var pos = $('#about').position();

		if (pos.top >= (parseInt($(window).scrollTop())+parseInt(95))) {
			$('.caricatura').stop().animate({
				'opacity': 0,
				},
				250);
			console.log('entro')
		}else
		{
			$('.caricatura').stop().animate({
				'opacity': 1,
				},
				250);
		}
		console.log(pos.top+' '+(parseInt($(window).scrollTop())+parseInt(95)));
	})
});
/*$(document).ready(function ()
{
	$("html").niceScroll();
	$(window).resize(function(){
		if (document.body) 
		{
			var width = document.body.clientWidth;	
			var height = document.body.clientHeight;
		}else
		{
			var width = window.width;
			var height = window.height;
		}
		$('.contenedorGrande').css('min-height',height);

	});
	if (document.body) 
	{
		var width = document.body.clientWidth;	
		var height = document.body.clientHeight;
	}else
	{
		var width = window.width;
		var height = window.height;
	}
	$('.contenedorGrande').css('min-height',height));
});*/

/*$(document).ready(function(){
	$('.navbar-toggle').toggle(function(){
		$('.menusera').css({'display':'block'}).animate({'opacity':1},500)
	},function(){
		$('.menusera').animate({'opacity':0},500,function(){
			$(this).css({'display':'none'})
		})
	})
	$(window).resize(function()
	{
		if ($(window).width()>991) {
			$('.menusera').css({'display':'block'}).animate({'opacity':1},500)
		}else
		{
			$('.menusera').animate({'opacity':0},500,function(){
			$(this).css({'display':'none'})
		})
		}
	})
})
$(document).ready(function(){
	$('#menu li').removeClass('active');
	var project = $('#project').offset(), 
		about = $('#about').offset(),
		news = $('#news').offset(),
		contact = $('#contact').offset();
	var top = $(window).scrollTop();
	if (top>=(about.top-300)) {
		$('.caricatura').stop().animate({
		'opacity': 1,
		},
		500);
	}
	if (top<(project.top-300)) {
			$('li:has(a[href = #home])').addClass('active');
		}else if (top>=(project.top-300) && top<(about.top-300)) {
			$('li:has(a[href = #project])').addClass('active');
			$('.caricatura').stop().animate({
				'opacity': 0,
				},
				500);
		}else if (top>=(about.top-300) && top<(news.top-300)) {
			$('li:has(a[href = #about])').addClass('active');
		}else if (top>=(news.top-300) && top<(contact.top-300)) {
			$('li:has(a[href = #news])').addClass('active');
		}else if (top>=(contact.top-300)) {
			$('li:has(a[href = #contact])').addClass('active');
		}
	$(window).scroll(function(){
		$('#menu li').removeClass('active');
		var top = $(window).scrollTop();
		if (top>=(about.top-300)) {
			$('.caricatura').stop().animate({
			'opacity': 1,
			},
			500);
		}
		if (top<(project.top-300)) {
			$('li:has(a[href = #home])').addClass('active');
		}else if (top>=(project.top-300) && top<(about.top-300)) {
			$('li:has(a[href = #project])').addClass('active');
			$('.caricatura').stop().animate({
				'opacity': 0,
				},
				500);
		}else if (top>=(about.top-300) && top<(news.top-300)) {
			$('li:has(a[href = #about])').addClass('active');
			$('.caricatura').stop().animate({
				'opacity': 1,
				},
				500);
		}else if (top>=(news.top-300) && top<(contact.top-300)) {
			$('li:has(a[href = #news])').addClass('active');
		}else if (top>=(contact.top-300)) {
			$('li:has(a[href = #contact])').addClass('active');
		}
	})
})
$(document).ready(function() {
	function cambiaImagen() {
		var img = $('.activo');
		if (img.next().length>0) {
			img.animate({'opacity':0},1500);
			img.removeClass('activo');
			img = img.next();
			img.addClass('activo');
			img.animate({'opacity':0},1);
			img.animate({'opacity':1},1500);
		}else
		{
			img.removeClass('activo')
			img = $('.nada:first-child');
			img.addClass('activo');
			img.animate({'opacity':0},1);
			img.animate({'opacity':1},1500);
		}
		
	}
	setInterval(cambiaImagen,5000);
})
/*$(document).ready(function()
{
	$('.clear').click(function() {
		$('.inputContact').$.each(function() {
			 $(this).val('');
		});
	});
	$('.send').click(function() {
        //get input field values
        var user_name       = $('input[name=name]').val(); 
        var subject         = $('input[name=subject]').val(); 
        var user_email      = $('input[name=email]').val();
        var user_message    = $('textarea[name=message]').val();
        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name==""){ 
            $('input[name=name]').css('border-color','red'); 
            proceed = false;
        }
        if(subject==""){ 
            $('input[name=subject]').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            $('input[name=email]').css('border-color','red'); 
            proceed = false;
        }
        if(user_message=="") {  
            $('textarea[name=message]').css('border-color','red'); 
            proceed = false;
        }
        if(proceed) 
        {
            //data to be sent to server
            post_data = {'userName':user_name, 'subject':subject, 'userEmail':user_email, 'userMessage':user_message};
            
            //Ajax post data to server
            $.ajax({
                url:'inicio/contacto',
                type:'POST',
                data:post_data,
                dataType:'json',
                success:function(response)
                {
                	$('.addon').animate({
							        	'opacity': 0,
							        	},
							        	500, function() {
							        	$('.addon').remove();
							        });
                    if (response.success) {
                    	$('.cont').before('<div class="alert alert-success addon"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Correo enviado sactisfactoriamente</div>');
                    }else
                    {
                    	$('.cont').before('<div class="alert alert-danger col-md-6 addon"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'+response.message+'</div><div style="clear:both; addon"></div>');
                    	$('input[name='+response.codigo+']').css('box-shadow','0px 0px 5px red');
                    		    $(".inputContact").keyup(function() { 
							        $(this).css('box-shadow','0px 0px 0px transparent'); 
							        
							    });
                    }
                },
                error:function(xml)
                {
                   alert('error')
                }

            });
       
        }else
        {
            alert('Debe llenar todos los campos');
        }
    
	    //reset previously set border colors and hide all message on .keyup()

        //everything looks good! proceed...
       
	});
});*/