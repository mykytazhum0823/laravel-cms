function logimage_hidePreviewImage(){
    $('#previewLoginImage').hide();
}
function logimage_showPreviewImage(){
    $('#previewLoginImage').show();
}
$("#logImage-form").on('submit',function () {
    $(".logimage-controls .btn").attr('disabled', 'disabled');
    as.btn.loading($("#save-logimage"), 'Saving...');
    location.reload();
});


var vHeight = 202,
    image = null,
    logimage_croppie = null;

function logimage_initCroppie() {

    var previewImg = $("#previewLoginImage");
    logimage_croppie = previewImg;
    
    previewImg.attr("src", image);
    previewImg.attr("width", 200);
};

var timer;

$(window).on('resize', function () {
    if (logimage_croppie) {
        timer && clearTimeout(timer);
        timer = setTimeout(logimage_initCroppie, 100);
    }
});

function logimage_readFile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            image = reader.result;
            logimage_hideCurrentImage();
            logimage_initCroppie();
            logimage_hideSpinner();
        }

        logimage_closeChooseModal();
        logimage_makeCurrentImageInvisible();
        logimage_hideChangePictureButton();
        logimage_showAvatarControlButtons();
        logimage_showSpinner();
        logimage_showPreviewImage();

        reader.readAsDataURL(input.files[0]);
    }
    else {
        swal("Sorry - you're browser doesn't support the FileReader API");
    }
}

$("#cancel-logimage-upload").on('click', function () {
    logimage_hideAvatarControlButtons();
    logimage_showChangePictureButton();
    logimage_makeCurrentImageVisible();
    logimage_hidePreviewImage();
    logimage_showCurrentImage();
});

function logimage_showAvatarControlButtons() {
    $(".logimage-controls").removeClass('d-none').addClass('d-flex');
}

function logimage_hideAvatarControlButtons() {
    $(".logimage-controls").removeClass('d-flex').addClass('d-none');
}

function logimage_showChangePictureButton() {
    $("#change-logimage-picture").show();
}

function logimage_hideChangePictureButton() {
    $("#change-logimage-picture").hide();
}

function logimage_closeChooseModal() {
    $("#choose-logimage-modal").modal('hide');
}

function logimage_hideCurrentImage() {
    $(".logimage-wrapper .fav-preview").hide();
}

function logimage_showCurrentImage() {
    $(".logimage-wrapper .fav-preview").show();
}

function logimage_makeCurrentImageInvisible() {
    $(".logimage-wrapper .fav-preview").css({visibility: 'hidden'});
}

function logimage_makeCurrentImageVisible() {
    $(".logimage-wrapper .fav-preview").css({visibility: 'visible'});
}

function logimage_showSpinner() {
    $(".logimage-wrapper .spinner").css({opacity: 1});
}

function logimage_hideSpinner() {
    $(".logimage-wrapper .spinner").css({opacity: 0});
}

function logimage_updateAvatarFromSource(url, imageUrl) {
    var form =
        $('<form>', {
            'method': 'POST',
            'action': url
        });

    var hiddenInput =
        $('<input>', {
            'name': 'url',
            'type': 'hidden',
            'value': imageUrl
        });

    var token =
        $("<input>", {
            'name': '_token',
            'type': 'hidden',
            'value': $('meta[name="csrf-token"]').attr('content')
        });

    form.append(token, hiddenInput)
        .appendTo('body')
        .submit();
}

$('#logimage-upload').on('change', function () { logimage_readFile(this); });

$(".source-external img").on('click',function () {
    var imageUrl = $(this).attr('src');
    logimage_updateAvatarFromSource($(this).parent().data('url'), imageUrl);
});

$("#no-logimage img").click(function () {
    logimage_updateAvatarFromSource($(this).parent().data('url'), null);
});
