var IdNo1 = document.getElementById('idNo1InputLeft').innerHTML;
var IdNo2 = document.getElementById('idNo2InputMiddle').value;
var IdNo3 = document.getElementById('idNo3InputRight').value;

jQuery.validator.addMethod("notEqual", function(value, element, param) {
    return this.optional(element) || value != param.val();
}, "ID already selected");

jQuery.validator.addMethod("notEqual2", function(value, element, param) {
    return this.optional(element) || value != param.val();
}, "ID already selected");

$("#personalDetailsForm").validate({
    rules:{
        firstName1:{
           required: true, 
        },
        surname1:{
            required:true,
        },
        birthdate1:{
            required:true,
        },
        idnumber1: {
            required: true,
            minlength:13,
            notEqual:$('#idNo2InputMiddle'),
            notEqual2:$('#idNo3InputRight'),
        },
        firstName2:{
            required: true,
        },
        surname2:{
            required: true,
        },
        birthdate2:{
            required:true,
        },
        idnumber2: {
            required: true,
            minlength:13,
            notEqual:$('#idNo1InputLeft'),
            notEqual2:$('#idNo3InputRight'),
        },
        firstName3:{
            required: true,
        },
        surname3:{
            required: true,
        },
        birthdate3:{
            required:true,
        },
        idnumber3: {
            required: true,
            minlength:13,
            notEqual:$('#idNo1InputLeft'),
            notEqual2:$('#idNo2InputMiddle'),
        }
    },
    messages:{
        firstName1:{
            required:"Please enter your firstname",
        },
        surname1:{
            required:"Please enter your surname",
        },
        birthdate1:{
            required:"Please select your birth date",
        },
        idnumber1:{
            required:"Please input your ID number",
            minlength:"ID too short - must be 13 characters",
        },
        firstName2:{
            required:"Please enter your firstname",
        },
        surname2:{
            required:"Please enter your surname",
        },
        birthdate2:{
            required:"Please select your birth date",
        },
        idnumber2:{
            required:"Please input your ID number",
            minlength:"ID too short - must be 13 characters",
        },
        firstName3:{
            required:"Please enter your firstname",
        },
        surname3:{
            required:"Please enter your surname",
        },
        birthdate3:{
            required:"Please select your birth date",
        },
        idnumber3:{
            required:"Please input your ID number",
            minlength:"ID too short - must be 13 characters",
        }
    },

    submitHandler: function(form) {
        // console.log("HERE!!");
      form.submit();
    }
});