$(document).ready(function(){
	$('.join_meeting_form').hide();
	$('.check_list_form').hide();
	$('.create_meeting_btn').click(function(e){
		 e.preventDefault();
		 $(this).addClass('active');
		 $('.join_meeting_btn').removeClass('active');
		 $('.check_list_btn').removeClass('active');
		 $('.create_meeting_form').show();
		  $('.join_meeting_form').hide();
		   $('.check_list_form').hide();

	});
	$('.join_meeting_btn').click(function(e){
		 e.preventDefault();
		 $(this).addClass('active');
		 $('.create_meeting_btn').removeClass('active');
		 $('.check_list_btn').removeClass('active');
		 $('.join_meeting_form').show();
		  $('.create_meeting_form').hide();
		   $('.check_list_form').hide();

	});
	$('.check_list_btn').click(function(e){
		 e.preventDefault();
		 $(this).addClass('active');
		 $('.create_meeting_btn').removeClass('active');
		 $('.join_meeting_btn').removeClass('active');
		 $('.check_list_form').show();
		  $('.create_meeting_form').hide();
		   $('.join_meeting_form').hide();

	});
});