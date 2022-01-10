function unlimited_hidePreviewImage(){
    $('#previewUnlimitedImage').hide();
}
function unlimited_showPreviewImage(){
    $('#previewUnlimitedImage').show();
}
$("#unlimited-form").on('submit',function () {
    $(".unlimited-controls .btn").attr('disabled', 'disabled');
    as.btn.loading($("#save-unlimited"), 'Saving...');
    location.reload();
});


var vHeight = 202,
    image = null,
    unlimited_croppie = null;

function unlimited_initCroppie() {

    var previewImg = $("#previewUnlimitedImage");
    unlimited_croppie = previewImg;
    
    previewImg.attr("src", image);
    previewImg.attr("width", 200);
};

var timer;

$(window).on('resize', function () {
    if (unlimited_croppie) {
        timer && clearTimeout(timer);
        timer = setTimeout(unlimited_initCroppie, 100);
    }
});

function unlimited_readFile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            image = reader.result;
            unlimited_hideCurrentImage();
            unlimited_initCroppie();
            unlimited_hideSpinner();
        }

        unlimited_closeChooseModal();
        unlimited_makeCurrentImageInvisible();
        unlimited_hideChangePictureButton();
        unlimited_showAvatarControlButtons();
        unlimited_showSpinner();
        unlimited_showPreviewImage();

        reader.readAsDataURL(input.files[0]);
    }
    else {
        swal("Sorry - you're browser doesn't support the FileReader API");
    }
}

$("#cancel-unlimited-upload").on('click', function () {
    unlimited_hideAvatarControlButtons();
    unlimited_showChangePictureButton();
    unlimited_makeCurrentImageVisible();
    unlimited_hidePreviewImage();
    unlimited_showCurrentImage();
});

function unlimited_showAvatarControlButtons() {
    $(".unlimited-controls").removeClass('d-none').addClass('d-flex');
}

function unlimited_hideAvatarControlButtons() {
    $(".unlimited-controls").removeClass('d-flex').addClass('d-none');
}

function unlimited_showChangePictureButton() {
    $("#change-unlimited-picture").show();
}

function unlimited_hideChangePictureButton() {
    $("#change-unlimited-picture").hide();
}

function unlimited_closeChooseModal() {
    $("#choose-unlimited-modal").modal('hide');
}

function unlimited_hideCurrentImage() {
    $(".unlimited-wrapper .fav-preview").hide();
}

function unlimited_showCurrentImage() {
    $(".unlimited-wrapper .fav-preview").show();
}

function unlimited_makeCurrentImageInvisible() {
    $(".unlimited-wrapper .fav-preview").css({visibility: 'hidden'});
}

function unlimited_makeCurrentImageVisible() {
    $(".unlimited-wrapper .fav-preview").css({visibility: 'visible'});
}

function unlimited_showSpinner() {
    $(".unlimited-wrapper .spinner").css({opacity: 1});
}

function unlimited_hideSpinner() {
    $(".unlimited-wrapper .spinner").css({opacity: 0});
}

function unlimited_updateAvatarFromSource(url, imageUrl) {
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

$('#unlimited-upload').on('change', function () { unlimited_readFile(this); });

$(".source-external img").on('click',function () {
    var imageUrl = $(this).attr('src');
    unlimited_updateAvatarFromSource($(this).parent().data('url'), imageUrl);
});

$("#no-unlimited img").click(function () {
    unlimited_updateAvatarFromSource($(this).parent().data('url'), null);
});
