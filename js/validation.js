jQuery.validator.addMethod("notEqual", function(value, element, param) {
    return this.optional(element) || value != param;
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
            notEqual:idnumber1,
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
            notEqual:idnumber2,
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
            notEqual:"can not have identical ID numbers",
            notEqual:"can not have identical ID numbers",
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
            notEqual:"can not have identical ID numbers",
            notEqual:"can not have identical ID numbers",
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
            notEqual:"can not have identical ID numbers",
            notEqual:"can not have identical ID numbers"
        }
    },

    submitHandler: function(form) {
        console.log("HERE!!");
      form.submit();
    }
});