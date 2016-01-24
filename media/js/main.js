$.validator.addMethod('notNull',function(value,element){
	return value != null && value != '';
},'Please Select a value');
$('.userform').validate({
	rules: {    
		name:{
			required: true,			
			minlength:2
		},		
		email: {
		  required: true,
		  email: true
		},
		mobile:{
			required: true,			
			minlength:10
		},
		city:{
			required: true,			
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
		  required: "Please enter your Company name",			
			minlength:"Min 10 number",			
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
		switch (element.type) {
			
			case 'select-one':
				$(element).parent().find('.placeholder').addClass('redborder');
				break;
				
			default:
				$(element).addClass('redborder');		
			
		}
		
	},
	unhighlight: function(element){
		$(element).addClass('redborder');
	},
	errorPlacement: function(error,element){
		//error.appendTo(element.parent());
	},
	submitHandler: function(form) {
		$.ajax({
		  url: "lead.php",
		  data: $(form).serialize()
		}).done(function(r) {			
			if(r.res) {
					$('#myModal').find('.modal-body').html('<p>Your information is saved successfully. Our representatives will get in touch with you shortly.</p>')							
					document.getElementById('LeadSave').reset();
					$('.ms-choice').find('span').html('Select City');
			} else {
				$('#myModal').find('.modal-body').html('<p>Oops!! Some error occured.</p>')
				alert('');
			}
			$('#myModal').modal('show');			
		});
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

	numericOnly = function(evt){
        var evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if ((charCode > 47 && charCode < 58)    || charCode == 8 || charCode == 9 ){
            return !0;
        }
		evt.preventDefault();
        return !1;
    }
	
	document.getElementById("mobile").addEventListener("keypress", numericOnly, false);