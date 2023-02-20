var $ = jQuery.noConflict();
$(document).ready(function() {
 
    $('.form-validator').each(function() {
        var formObj = $(this);
        var formBtn = formObj.find('.btn_form');
        formBtn.click(function(event) {
            event.preventDefault();
            //if(formObj.attr('id') == 'careers-jobform' || formObj.attr('id') == 'contactus-form') {
            //ajaxSubmit_multipart(formObj);
            ///}
            //else {
            ajaxSubmit(formObj);
            //}
        });
    });
});

function ajaxSubmit(formObj) {

    var formID = formObj.attr('id');
    var formAction = formObj.attr('action');
    var formMethod = formObj.attr('method');
    var updateOnly = formObj.attr('updateOnly');
    //var formData = formObj.serialize();

    var formBtn = formObj.find('.btn_form');
    var formBtn_text=formbtn_text = formBtn.html();
    
    // var token="";
    // if($('#user_info').length>0){ var token=getCookie('user_token');}
   
    var token = localStorage.getItem('user_token');


    formBtn.html(loading_text).addClass('btn_load');
    formBtn.attr('disabled', 'disabled');
    formObj.find('.messages').html('');
    //   grecaptcha.execute(recaptcha_sitekey, {action:'validate_captcha'}).then(function(token) {
    formObj.find('input[name="g-recaptcha-response"]').remove();
    // formObj.append('<input type="hidden" name="g-recaptcha-response" value="'+token+'" />'); 
    //var formData = formObj.serialize();
    var formData = new FormData(formObj[0]);


    $.ajax({
        url: formAction,
        type: formMethod,
        headers: {"Authorization": "Bearer "+token},
        data: formData,
        success: function(response) {
            formBtn.html(formbtn_text).removeClass('btn_load');

           
            if (response.result == true) {
          
                if (response.msg) {
                    //alert_float('success',response.msg);
                    var check_form_success=formObj.closest('.success-submit-result');
                    if(check_form_success.find('form').length>0){
                        var check_icon_success=formObj.closest('.modal-content').find('.result-success-icon');
                        check_form_success.html('<div class="success-form">' + response.msg + '</div>');
                         if(check_icon_success.find('img').length>0){
                          var success_src=check_icon_success.find('img').attr('data-success-src');
                          check_icon_success.find('img').attr('src',success_src);
                        }
                    }else{
                        $('#success-form-popup').modal('show');
                          $('#success-form-popup .success-submit-result').html('<div class="success-form">' + response.msg + '</div>');
                       // formObj.find('.messages').html('<div class="success">' + response.msg + '</div>');
                    }
                    
                   // $('html, body').animate({ scrollTop: formObj.find('.messages').offset().top - 120 }, 500);
                   formObj.find( 'input[type="email"], input[type="text"], input[type="password"], textarea, select' ).each(function(){
                    $(this).val('');
                    $(this).val('').change();   
                   });
                }

             
                if (response.message) {
                    //alert_float('success',response.message);
                    formObj.find('.messages').html('<div class="success">' + response.message + '</div>');
                    // $('html, body').animate({ scrollTop: formObj.find('.messages').offset().top - 120 }, 500);
                   
                    formObj.find( 'input[type="email"], input[type="text"], input[type="password"], textarea, select' ).each(function(){
                        $(this).val('');
                        $(this).val('').change();   
                       });
                }

              
           
                if(response.token){
                    localStorage.setItem('user_token',response.token)
                    user=JSON.stringify(response.user);
                    if($('#redirect_link').length>0){
                    window.location =$('#redirect_link').val();}
                     //loadAllUserCarts(formObj,response);
                    //doSuccessFormResponseAction(formObj,response);
                }

                if(formID=="ProfileForm"){
                    setTimeout(function (){$('.profile_cancel').click();},1000);
                }

                if(formID=="AddressForm"){
                   
                    if(formObj.find('input[name="id"]').val()==0){
                        if($('#checkout_form').length>0){
                            CheckoutBindObj.addAddress(response.data);

                        }else{
                            UserBindObj.addAddress(response.data);
                        }
                        }
                        setTimeout(function (){$('.profile_cancel').click();},1000);
                 }
                if (response.redirect_link)
                    window.location = response.redirect_link;

                if (response.cart_box)
                    $('#load-header-cart').html(response.cart_box);
                //else
                /*formObj.find( 'input[type="email"], input[type="text"], input[type="password"], textarea, select' ).each(function(){
			           $(this).val('');
			           $(this).val('').change();   
			      	});*/
                      if(!updateOnly){
                 document.getElementById(formID).reset();}
            } else {

                if (response.errors) {
                    $.each(response.errors, function(i, val) {
                        var o = formObj.find('input[name="' + i + '"], textarea[name="' + i + '"], select[name="' + i + '"]');
                        if (o) {
                            o = o.parent('div');
                            o.addClass('error').append('<div class="form-error">' + val + '</div>');
                        }
                    });
                }
                if (response.msg) {
                    formObj.find('.messages').html('<div class="error">' + response.msg + '</div>');
                    //if(is_mobile) {
                   // $('html, body').animate({ scrollTop: formObj.find('.messages').offset().top - 120 }, 500);
                    //}
                }

                if (response.message) {
                    formObj.find('.messages').html('<div class="error">' + response.message + '</div>');
                    //if(is_mobile) {
                    $('html, body').animate({ scrollTop: formObj.find('.messages').offset().top - 120 }, 500);
                    //}
                }
            }
       

            if(formID=='checkout_form'){
                formBtn.html('Redirect...');
                window.location = $('#baseurl').val()+'/invoice?checkout=1&token='+response.OrderToken;
                localStorage.removeItem('cart');
            }else{
                formBtn.removeAttr('disabled', 'disabled').html(formBtn_text);
            }
        },
        fail: function(response) {
            formBtn.removeAttr('disabled', 'disabled').html(formBtn_text);
            formObj.find('.messages').html('<div class="error">ERROR</div>');
        },
        error: function (response) {
          
            formBtn.removeAttr('disabled', 'disabled').html(formBtn_text);
            var arr=response.responseJSON.message.split(',');
            var msg=''
            for(var i=0;i<arr.length;i++){
                msg= msg+'<p>'+arr[i]+'</p>';
            }
            formObj.find('.messages').html('<div class="error">' + msg + '</div>');
        },    
         contentType: false,
         processData: false
        // error: function(response) {
        //     formBtn.removeAttr('disabled', 'disabled').html(formBtn_text);
        //     formObj.find('.messages').html('<div class="error">ERROR</div>');
        // },
    });
    //});
}

function ajaxSubmit_multipart(formObj) {
    var formID = formObj.attr('id');
    var formAction = formObj.attr('action');
    var formMethod = formObj.attr('method');
    //var formData = formObj.serialize();
    //var formData = new FormData(formObj[0]);
    var formBtn = formObj.find('.btn_form');
    var formBtn_text = formBtn.html();

    formBtn.attr('disabled', 'disabled').html(loading_text);
    formObj.find('.messages').html('');
    grecaptcha.execute(recaptcha_sitekey, { action: 'validate_captcha' })
        .then(function(token) {
            formObj.find('input[name="g-recaptcha-response"]').remove();
            formObj.append('<input type="hidden" name="g-recaptcha-response" value="' + token + '" />');
            var formData = new FormData(formObj[0]);
            $.ajax({
                url: formAction,
                type: formMethod,
                data: formData,
                success: function(response) {
                
                    if (response.result == true) {
                        if (response.msg) {
                            formObj.find('.messages').html('<div class="success">' + response.msg + '</div>');
                            $('html, body').animate({ scrollTop: formObj.find('.messages').offset().top - 120 }, 500);
                            //alert_float('success',response.msg);
                        }
                        if (response.redirect_link)
                            window.location = response.redirect_link;
                        document.getElementById(formID).reset();
                    } else {
                        if (response.errors) {
                            $.each(response.errors, function(i, val) {
                                var o = formObj.find('input[name="' + i + '"], textarea[name="' + i + '"], select[name="' + i + '"]');
                                if (o) {
                                    o = o.parent('div');
                                    o.addClass('error').append('<div class="form-error">' + val + '</div>');
                                }
                            });
                        }
                        if (response.msg) {
                            formObj.find('.messages').html('<div class="error">' + response.msg + '</div>');
                            //if(is_mobile) {
                            $('html, body').animate({ scrollTop: formObj.find('.messages').offset().top - 120 }, 500);
                            //}
                        }
                    }
                    formBtn.removeAttr('disabled', 'disabled').html(formBtn_text);
                },
                fail: function(response) {
                    formBtn.removeAttr('disabled', 'disabled').html(formBtn_text);
                    formObj.find('.messages').html('<div class="error">ERROR</div>');
                    $('html, body').animate({ scrollTop: formObj.find('.messages').offset().top - 120 }, 500);
                },
                error: function(response) {
                    formBtn.removeAttr('disabled', 'disabled').html(formBtn_text);
                    formObj.find('.messages').html('<div class="error">ERROR</div>');
                    $('html, body').animate({ scrollTop: formObj.find('.messages').offset().top - 120 }, 500);
                },
                contentType: false,
                processData: false
            });
        });
}


var loaded_on_scroll = false;

function load_more_page() {
    if (!loaded_on_scroll) {
        loaded_on_scroll = true;
        var objBtn = $("#viewmore_link");
        var objBtn_text = objBtn.html();
        var objUrl = objBtn.attr("data-url");
        objBtn.html(loading_text);

        $.get(objUrl, function(response) {
            $(".load_more_page_append").append(response.content);
            if (objBtn.css('display') == 'none') {
                objBtn.show();
            }
            if ($(window).width() < 1024) {
                var y = $(window).scrollTop(); //your current y position on the page
                $(window).scrollTop(y + 60);
            }
            //objBtn.attr("href",response.new_url);
            objBtn.attr("data-url", response.new_url);
            if (response.disable_load_more == 1)
                objBtn.parent('div').remove();
            else {
                objBtn.html(objBtn_text);
            }
            loaded_on_scroll = false;
        });
    }
}

////////////////// RETURN FORM////////////
if($('#invoices-container').length>0){
var counter_invoices = 0;
add_more_invoices();

function add_more_invoices()
{
 
counter_invoices++;

var invoice_html = '<div class="row return-form-sub-set" id="invoice-c-'+counter_invoices+'">';


invoice_html +='<div class="col-md-12 mb-3 ">';
invoice_html +='<div class="row mx-0 border_top_light_grey mt-5 pt-4">';
invoice_html +='   <label class="mr-5 pl-0  text-left dark_grey_color">';
invoice_html +='       Have you already received an Advance Replacement?*';
invoice_html +='   </label>';
invoice_html +='   <div class="col-md-2 mr-2 text-left checkbox_container">';
invoice_html +=`       <input  type="radio" id="received_replacement" name="returns[`+counter_invoices+`]['advance_replacement']">`;
invoice_html +=`       <label  onclick="check_adv_repl('advance_replacement-${counter_invoices}', 'yes')"  for="received_replacement" class="py-2 mt-0">Yes</label>`;
invoice_html +='   </div>';
invoice_html +='   <div class="col-md-2  text-left checkbox_container ">';
invoice_html +=`       <input type="radio" id="not_received_replacement" name="returns[`+counter_invoices+`]['advance_replacement']">`;
invoice_html +=`        <label onclick="check_adv_repl('advance_replacement-${counter_invoices}', 'no')" for="not_received_replacement" class="py-2 mt-0">No</label>`;
invoice_html +='  </div>';
invoice_html +='</div>';
invoice_html +='</div>';


    // invoice_html += `<div class="r-formItem full left">
    //                            <label>Have you already received an Advance Replacement? <span class="r-Mark">*</span> :</label>
    //                         <label><input type="radio" onclick="check_adv_repl('advance_replacement-${counter_invoices}', 'yes')" class="advance_replacement" name="advance_replacement-${counter_invoices}" data-num="${counter_invoices}" value="yes"> Yes</label>
    //                         <label><input type="radio" onclick="check_adv_repl('advance_replacement-${counter_invoices}', 'no')" class="advance_replacement" name="advance_replacement-${counter_invoices}" data-num="${counter_invoices}" value="no"> No</label>
    //                          <span id="advance_replacement-${counter_invoices}-error" class="form-error"></span>
    //                     </div>      
    //                    <div class="r-formItem left div_invoice_number_ad_rep" data-num="${counter_invoices}">
    //                         <label>Invoice Number of the advance replacement received <span class="r-Mark">*</span> :</label>
    //                         <input type="text" class="textbox" name="invoice_number_ad_rep-${counter_invoices}" />
    //                         <span id="name-error" class="form-error"></span>
    //                     </div><div style="clear:both;"></div>`;
    // invoice_html += '<input type="hidden" name="invoice_counter[]" value="'+counter_invoices+'" />';

    invoice_html += '<div class="col-md-4">';
        invoice_html += '<div class="r-formItem full left">';
            invoice_html += '<label>Invoice Number <span class="r-Mark">*</span> :</label>';
            invoice_html += `<input type="text" class="textbox" name="returns[`+counter_invoices+`]['invoice_number']" value="" />`;
            invoice_html += '<span id="invoice_number-'+counter_invoices+'-error" class="form-error"></span>';
        invoice_html += '</div>  ';
    invoice_html += '</div>';

    invoice_html += '<div class="col-md-4 middle">';
        invoice_html += '<div class="r-formItem full left">';
            invoice_html += '<label>Date of Purchase <span class="r-Mark">*</span> :</label>';
            invoice_html += `<input type="text" class="textbox datepicker-'+counter_invoices+'" name="returns[`+counter_invoices+`]['date_of_purchase']" value="" />`;
            invoice_html += '<span id="date_of_purchase-'+counter_invoices+'-error" class="form-error"></span>';
        invoice_html += '</div>  ';
    invoice_html += '</div>';

    invoice_html += '<div class="col-md-4">';
        invoice_html += '<div class="r-formItem full left">';
            invoice_html += '<label>Quantity <span class="r-Mark">*</span> :</label>';
            invoice_html += `<input type="text" class="textbox" name="returns[`+counter_invoices+`]['quantity']" value="" />`;
            invoice_html += '<span id="quantity-'+counter_invoices+'-error" class="form-error"></span>';
        invoice_html += '</div>';
    invoice_html += '</div>';

    invoice_html += '<div class="col-md-4">';
        invoice_html += '<div class="r-formItem full left">';
            invoice_html += '<label>Product Code <span class="r-Mark">*</span> :</label>';
            invoice_html += `<input type="text" class="textbox" name="returns[`+counter_invoices+`]['product_code']" value="" />`;
            invoice_html += '<span id="product_code-'+counter_invoices+'-error" class="form-error"></span>';
        invoice_html += '</div>';
    invoice_html += '</div>';

    invoice_html += '<div class="col-md-4 middle">';
        invoice_html += '<div class="r-formItem full left">';
            invoice_html += '<label>Description :</label>';
            invoice_html += `<input type="text" class="textbox" name="returns[`+counter_invoices+`]['description']" value="" />`;
            invoice_html += '<span id="description-'+counter_invoices+'-error" class="form-error"></span>';
        invoice_html += '</div>  ';
    invoice_html += '</div>';

    invoice_html += '<div class="col-md-4">';
        invoice_html += '<div class="r-formItem full left">';
            invoice_html += '<label>Serial :</label>';
            invoice_html += `<input type="text" class="textbox" name="returns[`+counter_invoices+`]['serial']" value="" />`;
            invoice_html += '<span id="serial-'+counter_invoices+'-error" class="form-error"></span>';
        invoice_html += '</div>';
    invoice_html += '</div>';

    invoice_html += '<div class="col-md-4">';
        invoice_html += '<div class="r-formItem full left">';
            invoice_html += '<label>Reason for Return <span class="r-Mark">*</span> :</label>';
            invoice_html += `<select name="returns[`+counter_invoices+`]['reason']" class="selectbox">`;
                invoice_html += '<option value="">- select -</option>';
                for(var i = 0; i<reasons.length; i++) {
                    invoice_html += '<option value="'+reasons[i].id+'">'+reasons[i].title+'</option>';
                }
            invoice_html += '</select>';
            invoice_html += '<span id="reason-'+counter_invoices+'-error" class="form-error"></span>';
        invoice_html += '</div>';
    invoice_html += '</div>';

    invoice_html += '<div class="col-md-4 middle">';
        invoice_html += '<div class="r-formItem full left">';
            invoice_html += '<label>Condition :</label>';
            invoice_html += `<select name="returns[`+counter_invoices+`]['condition']" class="selectbox">`;
                invoice_html += '<option value="">- select -</option>';
                for(var i = 0; i<conditions.length; i++) {
                    invoice_html += '<option value="'+conditions[i].id+'">'+conditions[i].title+'</option>';
                }
            invoice_html += '</select>';
            invoice_html += '<span id="condition-'+counter_invoices+'-error" class="form-error"></span>';
        invoice_html += '</div> ';
    invoice_html += '</div>';

    invoice_html += '<div class="col-md-4 btn_container">';
        invoice_html += '<a class="r-Button mr-2 mt-1 grey_btn btn btn_small" onclick="remove_invoice('+counter_invoices+')">Delete</a>';
    invoice_html += '</div>';

invoice_html += '</div>';

$('#invoices-container').append(invoice_html);
// $('input[name="invoice_counter_in"]').val($('.return-form-sub-set').length);
// invoice_datepicker(counter_invoices);
}
function remove_invoice(i)
{
$('#invoice-c-'+i).remove();
$('input[name="invoice_counter_in"]').val($('.return-form-sub-set').length);
}
}

function doSuccessFormResponseAction(formObj,response){
    if(formObj.find('#redirect_link').length>0){
        window.location =formObj.find('#redirect_link').val();
    }

}