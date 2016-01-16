$.validator.addMethod('notNull',function(value,element){
	return value != null && value != '';
},'Please Select a value');
$('.userform').validate({
	rules: {    
		name: "required",    
		email: {
		  required: true,
		  email: true
		},
		mobile:{
			required: true,
			maxlength: 10,
			minlength:10
		},
		city:{
		"notNull":true
		}
	},
	messages: {
		name: "Please specify your name",
		email: {
		  required: "We need your email address to contact you",
		  email: "Your email address must be in the format of name@domain.com"
		},
		mobile: {
		  required: "Please enter your mobile number",
		  maxlength: "Mobile number must be of ten digits",
		  minlength: "Mobile number must be of ten digits"
		},
		city:{
		"notNull":'Please select your city'
		}
		
	},
	ignore:[],
	onfocusout: function(element){
		$(element).valid();
	},
	highlight: function(element){
		$(element).addClass('redborder');
	},
	unhighlight: function(element){
		$(element).addClass('redborder');
	},
	errorPlacement: function(error,element){
		error.appendTo(element.parent());
	}
});

$(document).ready(function(){
	$('#id_CandidateLocation').multipleSelect({
		filter:true,
		single:true,
		hideOptCheckboxes:false,
		selectAll:false,
		placeholder:'Select City',
		width:'100%',
		styler:function(value){
			if(value == ''){
				return 'display:none';
			}
		}
	});
});