$(document).ready(function(){
	var mybodyid = $('body').attr('id');
	var mynavid = '#nav-' + mybodyid;
	$(mynavid).attr('class',' active');
	$(mynavid).parent().parent().addClass('active');
	$('title').text($('#leftCol h2').text());
  
    $('#accordion').accordion();
    $('.fancybox').fancybox();
    $('#contactForm').validate();
  
  $(function(){
    var items = (Math.floor(Math.random() * ($('#quotes li').length)));
    $('#quotes li').hide().eq(items).show();
      function next(){
        $('#quotes li:visible').delay(10000).fadeOut('slow',function(){
            $(this).appendTo('#quotes ul');
            $('#quotes li:first').fadeIn('slow',next);
      });
    }
    next();
	 });
});

