$(document).ready(function() {

$('.send_mail_form').submit(function() {
    var error=false;
    var form = $(this);
    var names = $('form input[name="name"]');
    var phone = $('form input[name="phone"]');
    var email = $('form input[name="email"]');
    var message = $('form input[name="message"]');

    var regName = /^[а-яА-ЯёЁa-zA-Z0-9]{2,20}$/i;
    var regPhone = /^\d{6,12}$/i;
    var regEmail = /^\w+@\w+\.\w{2,4}$/i;


    if (!regEmail.test(email.val())) {
            $(email).parent().addClass('has-error');
            error=true;
    }
    if (!regPhone.test(phone.val())) {
            $(phone).parent().addClass('has-error');
            error=true;
    }
    if (!regName.test(names.val())) {
            $(names).parent().addClass('has-error');
            error=true;
    }
    console.log(error);  
    //var data = form.serializeArray();
    //console.log(data); 
        // if(!error){  
        //     var submit_btn = form.find('button[type="submit"]');
        //     var data = form.serializeArray();
        //     console.log(data); 
        //         $.ajax({
        //             dataType: "json",
        //             method: "post", 
        //             url: 'action.php',
        //             data: data,
        //             beforeSend: function() {
        //                 submit_btn.attr('disabled', 'disabled').attr("data-text", submit_btn.text()).text('Отправка...');
        //             },
        //             success: function(data){ 
        //             if (data['error']) { 
        //                 alert(data['error']); 
        //                 alert(data['email']);
        //             } else { 
        //                 alert('Письмo oтврaвлeнo!=)'); 
        //             }
        //          },
        //             // success: function(response) {
        //             //     submit_btn.removeAttr("disabled").text(submit_btn.attr("data-text"));
        //             // },
        //             error: function (xhr, ajaxOptions, thrownError) { 
        //             alert(xhr.status); 
        //             alert(thrownError); 
        //             submit_btn.removeAttr("disabled").text(submit_btn.attr("data-text"));    
        //          },
        //             // error: function(){
        //             //     submit_btn.removeAttr("disabled").text(submit_btn.attr("data-text"));
        //             //     alert('Ошибка передачи параметров серверу.');
        //             // }
        //         });
        // } 
        // return false;
    });   
});
// $('.send_mail_form').each(function(){
//         var id = $(this).attr('id');
//         $('#'+id).validate({
//             rules: {
//                 name: {
//                     required: true,
//                     maxlength: 255,
//                 },
//                 phone: {
//                     required: true,
//                     minlength: 7,
//                     maxlength: 40
//                 },
//                 email: {
//                     required: true,
//                     email: true,
//                     maxlength: 50
//                 },
//             },
//             submitHandler: function(form) {

//                 form = $(form);
//                 var submit_btn = form.find('button[type="submit"]');

//                 $.ajax({
//                     dataType: "json",
//                     method: "post", 
//                     url: '/action.php',
//                     data: {
//                         data: form.serializeArray(),
//                         action: 'send_mail',
//                     },
//                     beforeSend: function() {
//                         submit_btn.attr('disabled', 'disabled').attr("data-text", submit_btn.text()).text('Отправка...');
//                     },
//                     success: function(response) {

//                         submit_btn.removeAttr("disabled").text(submit_btn.attr("data-text"));
//                         alert(response.msg);
//                         $('#exampleModal').modal('hide');
//                     },
//                     error: function(){
//                         submit_btn.removeAttr("disabled").text(submit_btn.attr("data-text"));
//                         alert('Ошибка передачи параметров серверу.');
//                     }
//                 });
//             }
//         });
//     });


