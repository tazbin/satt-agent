$(document).ready(function() {
    $(document).on('change', '#same_as ,#permanent_house, #permanent_road, #permanent_village, #permanent_post, #permanent_up, #permanent_dist, #permanent_post_code', function() {
        if ($('#same_as').prop('checked')) {
            $('#present_house').val($('#permanent_house').val()).attr('readonly', true);
            $('#present_road').val($('#permanent_road').val()).attr('readonly', true);
            $('#present_village').val($('#permanent_village').val()).attr('readonly', true);
            $('#present_post').val($('#permanent_post').val()).attr('readonly', true);
            $('#present_up').val($('#permanent_up').val()).attr('readonly', true);
            $('#present_dist').val($('#permanent_dist').val()).attr('readonly', true);
            $('#present_post_code').val($('#permanent_post_code').val()).attr('readonly', true);
        } else {
            $('#present_house').val('').attr('readonly', false);
            $('#present_road').val('').attr('readonly', false);
            $('#present_village').val('').attr('readonly', false);
            $('#present_post').val('').attr('readonly', false);
            $('#present_up').val('').attr('readonly', false);
            $('#present_dist').val('').attr('readonly', false);
            $('#present_post_code').val('').attr('readonly', false);
        }
    });
    $(document).on('change', '#terms_agree', function() {
        if ($('#terms_agree').prop('checked')) {
            $('#submit').attr('disabled', false);
        } else {
            $('#submit').attr('disabled', true);
        }
    });
    $(document).on('change', '#select_another', function() {
        var value = $(this).val();
        if (value == 'NID') {
            $('#front_end').removeClass('col-md-12 offset-3').hide();
            $('#front_end').addClass('col-md-6').show();
            $("input[name='document_fornt']").attr('required', true);
            $("#document_fornt_end_help").text("Upload Your Nid's Frontend Image");
            $('#backend').addClass('col-md-6').show();
            $("input[name='document_back']").attr('required', true);
        } else if (value == '') {
            $('#front_end').hide();
            $('#backend').hide();
        } else {
            $('#front_end').removeClass('col-md-6').hide();
            $('#backend').removeClass('col-md-6').hide();
            $('#front_end').addClass('col-md-6 offset-3').show();
            $("#document_fornt_end_help").text("Upload Your Document's Image");
        }
    });
    $(document).on('change', '#photo', function() {
        loadFile(event);
    });
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('photo_preview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
     $('#agent_form').parsley().on('field:validated', function() {
        var ok = $('.parsley-error').length === 0;
        $('.bs-callout-info').toggleClass('hidden', !ok);
        $('.bs-callout-warning').toggleClass('hidden', ok);
    });
    $('#agent_form').on('submit', function(e) {
            e.preventDefault();
            $('#submit').hide();
            $('#submiting').show();
            var submit_url = $('#agent_form').attr('action');
            //Start Ajax
            var formData = new FormData($("#agent_form")[0]);
            $.ajax({
                    url: submit_url,
                    type: 'POST',
                    data: formData,
                    contentType: false, // The content type used when sending data to the server.
                    cache: false, // To unable request pages to be cached
                    processData: false,
                    dataType: 'JSON',
                    success: function(data) {
                        Swal.fire({
                          title: 'Thank You!',
                          text: 'We Will Contact With You Soon.',
                          type: 'success'
                        });
                        $('#submit').show();
                        $('#submiting').hide();
                        $('#photo_preview').attr('src', '/agent/image/upload.png');
                        // $('#agent_form')[0].reset();
                        // setTimeout(function(){
                        //     window.location.href = 'https://sattit.com/web-apps';
                        // }, 2000);
                },
                error: function(data) {
                  $('#submit').show();
                  $('#submiting').hide();
                    Swal.fire({
                      title: 'Opps!',
                      text: 'Something Wrong. Please try again later.',
                      type: 'error'
                    });
                }
            });
    });
});
