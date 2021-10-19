  $(document).ready(function() {
    var captchaCorrect = false;
    $('#contact_form').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please enter a message'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow")
                $('#contact_form').data('bootstrapValidator').resetForm();

            e.preventDefault();

            var $form = $(e.target);
            var bv = $form.data('bootstrapValidator');
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
    $('#contact_form').on('submit', function () {
        var userEntered = $("input#captcha_code").val();
        
        $.ajax({
            type: 'POST',
            url: "/checkCaptcha",
            data: {"captcha_code":userEntered},
            success: function(data){ 
                if(captchaCorrect===false)
                    captchaCorrect = (data == "true");
                if(captchaCorrect===false) {
                    $("input#captcha_code").val("");
                    $("input#captcha_code").css("border-color","#a94442");
                    $("small#captcha").css("display","block");
                    $("label[for=captcha_code]").css("color","#a94442");
                    $('#submitBtn').removeAttr('disabled');
                    document.getElementById('captcha_image').src = '/securimage/securimage_show.php?' + Math.random();
                }
            },
            async:false
        });
        if (typeof window.captcha_image_audioObj !== 'undefined') captcha_image_audioObj.refresh();
        
        return captchaCorrect;
    });
});

