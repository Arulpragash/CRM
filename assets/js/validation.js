$(document).ready(function(){

$("#addCustomerForm").validate({
    ignore: [],
    debug: false,
    rules:{
        companyName: "required",
        address: "required",
        regNo: "required",
        website: {
            required: true,
            url: true
        }
    },
    messages:{
        companyName: "Please enter your company name",
        address: "Please enter the company address",
        regNo: "Please enter your buisness registration number",
        website: {
            required: "Please enter your website",
            url: "Please enter a valid url (example: http://www.google.com)"
        }
    },
    
    submitHandler: function(form) {

        var companyName    = $('#companyName').val();
        var address        = $("#address").val();
        var regNo          = $("#regNo").val();
        var website        = $('#website').val();

        var url1 = $('#addCustomerForm').attr('action');
        
        var formData = {companyName:companyName,address:address,regNo:regNo,website:website};

        $.ajax({
            type: "POST",
            url: url1,
            data: formData,
        
            success: function(data){
            
                var jsonOut=jQuery.parseJSON(data);
                $('#addCustomerSuccess').html("<div class='alert alert-success fade in'><button type='button' class='close close-sm' data-dismiss='alert'><i class='fa fa-times'></i></button><strong>Done...</strong>"+jsonOut.status+"</div>").fadeIn();
            },
            error: function() {
                
                alert('An Error Occurred...');
            }
        },"json");
    }
});

$("#editCustomerForm").validate({
    ignore: [],
    debug: false,
    rules:{
        companyName: "required",
        address: "required",
        regNo: "required",
        website: {
            required: true,
            url: true
        }
    },
    messages:{
        companyName: "Please enter your company name",
        address: "Please enter the company address",
        regNo: "Please enter your buisness registration number",
        website: {
            required: "Please enter your website",
            url: "Please enter a valid url (example: http://www.google.com)"
        }
    },
    
    submitHandler: function(form) {

        var companyid      = $('#companyID').val()
        var companyName    = $('#companyName').val();
        var address        = $("#address").val();
        var regNo          = $("#regNo").val();
        var website        = $('#website').val();

        var url1 = $('#editCustomerForm').attr('action');
        
        var formData = {companyid:companyid,companyName:companyName,address:address,regNo:regNo,website:website};

        $.ajax({
            type: "POST",
            url: url1,
            data: formData,
        
            success: function(data){
            
                var jsonOut=jQuery.parseJSON(data);
                $('#editCustomerSuccess').html("<div class='alert alert-success fade in'><button type='button' class='close close-sm' data-dismiss='alert'><i class='fa fa-times'></i></button><strong>Done...</strong>"+jsonOut.status+"</div>").fadeIn();
            },
            error: function() {
                
                alert('An Error Occurred...');
            }
        },"json");
    }
});

$("#addContactForm").validate({
    ignore: [],
    debug: false,
    rules:{
        cName: "required",
        companyID: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        contactNo: {
            required: true,
            minlength: 10,
            number: true
        }
    },
    messages:{
        companyID: "Please select the company",
        email: {
            required: "Please enter the email",
            email: "Check E-Mail format"
        },
        cName: "Please enter your contact name",
        contactNo: {
            required: "Please enter the contact no",
            minlength: "Contact number consists of maximum 10 numbers",
            number: "Invalid contact number"
        }
    },
    
    submitHandler: function(form) {

        var companyID     = $("select[id*=companyID]").val();
        var email         = $('#email').val();
        var cName         = $('#cName').val();
        var contactNo     = $('input#contactNo').val();

        var url1 = $('#addContactForm').attr('action');
        
        var formData = {companyID:companyID,email:email,cName:cName,contactNo:contactNo};

        $.ajax({
            type: "POST",
            url: url1,
            data: formData,
        
            success: function(data){
            
                var jsonOut=jQuery.parseJSON(data);
                $('#addContactSuccess').html("<div class='alert alert-success fade in'><button type='button' class='close close-sm' data-dismiss='alert'><i class='fa fa-times'></i></button><strong>Done...</strong>"+jsonOut.status+"</div>").fadeIn();
            },
            error: function() {
                
                alert('An Error Occurred...');
            }
        },"json");
    }
});

$("#editContactForm").validate({
   ignore: [],
    debug: false,
    rules:{
        cName: "required",
        companyID: {
            required: true
        },
        email: {
            required: true,
            email: true
        },
        contactNo: {
            required: true,
            minlength: 10,
            number: true
        }
    },
    messages:{
        companyID: "Please select the company",
        email: {
            required: "Please enter the email",
            email: "Check E-Mail format"
        },
        cName: "Please enter your contact name",
        contactNo: {
            required: "Please enter the contact no",
            minlength: "Contact number consists of maximum 10 numbers",
            number: "Invalid contact number"
        }
    },
    
    submitHandler: function(form) {

        var contactID     = $('#contactID').val();  
        var companyID     = $("select[id*=companyID]").val();
        var email         = $('#email').val();
        var cName         = $('#cName').val();
        var contactNo     = $('input#contactNo').val();

        var url1 = $('#editContactForm').attr('action');
        
        var formData = {contactID:contactID,companyID:companyID,email:email,cName:cName,contactNo:contactNo};

        $.ajax({
            type: "POST",
            url: url1,
            data: formData,
        
            success: function(data){
            
                var jsonOut=jQuery.parseJSON(data);
                $('#editContactSuccess').html("<div class='alert alert-success fade in'><button type='button' class='close close-sm' data-dismiss='alert'><i class='fa fa-times'></i></button><strong>Done...</strong>"+jsonOut.status+"</div>").fadeIn();
            },
            error: function() {
                
                alert('An Error Occurred...');
            }
        },"json");
    }
});


$("#addActivityForm").validate({
    ignore: [],
    debug: false,
    rules:{
        companyID: {
            required: true
        },
        date: "required",
        type: {
            required: true,
        },
        outcome: "required",
        sPerson: {
            required: true
        }
    },
    messages:{
        companyID: "Please select your customer",
        date: "Please enter the date",
        type: "Please select a type",
        outcome: "Please enter the outcome",
        sPerson: "Please select a sales person"
    },
    
    submitHandler: function(form) {

        var companyID   = $("select[id*=companyID]").val();
        var date        = $('input#date').val();
        var type        = $("select[id*=type]").val();
        var outcome     = $("#outcome").val();
        var sPerson     = $("select[id*=sPerson]").val();

        var url1 = $('#addActivityForm').attr('action');
        
        var formData = {companyID:companyID,date:date,type:type,outcome:outcome,sPerson:sPerson};

        $.ajax({
            type: "POST",
            url: url1,
            data: formData,
        
            success: function(data){
            
                var jsonOut=jQuery.parseJSON(data);
                $('#addActivitySuccess').html("<div class='alert alert-success fade in'><button type='button' class='close close-sm' data-dismiss='alert'><i class='fa fa-times'></i></button><strong>Done...</strong>"+jsonOut.status+"</div>").fadeIn();
            },
            error: function() {
                
                alert('An Error Occurred...');
            }
        },"json");
    }
});


$("#editActivityForm").validate({
    ignore: [],
    debug: false,
    rules:{
        companyID: {
            required: true
        },
        date: "required",
        type: {
            required: true,
        },
        outcome: "required",
        sPerson: {
            required: true
        }
    },
    messages:{
        companyID: "Please select your customer",
        date: "Please enter the date",
        type: "Please select a type",
        outcome: "Please enter the outcome",
        sPerson: "Please select a sales person"
    },
    
    submitHandler: function(form) {

        var activityID  = $('#activityID').val();
        var companyID   = $("select[id*=companyID]").val();
        var date        = $('input#date').val();
        var type        = $("select[id*=type]").val();
        var outcome     = $("#outcome").val();
        var sPerson     = $("select[id*=sPerson]").val();

        var url1 = $('#editActivityForm').attr('action');
        
        var formData = {activityID:activityID,companyID:companyID,date:date,type:type,outcome:outcome,sPerson:sPerson};

        $.ajax({
            type: "POST",
            url: url1,
            data: formData,
        
            success: function(data){
            
                var jsonOut=jQuery.parseJSON(data);
                $('#editActivitySuccess').html("<div class='alert alert-success fade in'><button type='button' class='close close-sm' data-dismiss='alert'><i class='fa fa-times'></i></button><strong>Done...</strong>"+jsonOut.status+"</div>").fadeIn();
            },
            error: function() {
                
                alert('An Error Occurred...');
            }
        },"json");
    }
});



})