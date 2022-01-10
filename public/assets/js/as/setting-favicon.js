function fav_hidePreviewImage(){
    $('#previewFavicon').hide();
}
function fav_showPreviewImage(){
    $('#previewFavicon').show();
}
$("#favicon-form").on('submit',function () {
    $(".fav-controls .btn").attr('disabled', 'disabled');
    as.btn.loading($("#save-fav"), 'Saving...');
    location.reload();
});


var vHeight = 202,
    image = null,
    fav_croppie = null;

function fav_initCroppie() {


    var previewImg = $("#previewFavicon");
    fav_croppie = previewImg;
    
    previewImg.attr("src", image);
    previewImg.attr("width", 200);
};

var timer;

$(window).on('resize', function () {
    if (fav_croppie) {
        timer && clearTimeout(timer);
        timer = setTimeout(fav_initCroppie, 100);
    }
});

function fav_readFile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            image = reader.result;
            fav_hideCurrentImage();
            fav_initCroppie();
            fav_hideSpinner();
        }

        fav_closeChooseModal();
        fav_makeCurrentImageInvisible();
        fav_hideChangePictureButton();
        fav_showAvatarControlButtons();
        fav_showSpinner();
        fav_showPreviewImage();

        reader.readAsDataURL(input.files[0]);
    }
    else {
        swal("Sorry - you're browser doesn't support the FileReader API");
    }
}

$("#cancel-fav-upload").on('click', function () {
    fav_hideAvatarControlButtons();
    fav_showChangePictureButton();
    fav_makeCurrentImageVisible();
    fav_hidePreviewImage();
    fav_showCurrentImage();
});

function fav_showAvatarControlButtons() {
    $(".fav-controls").removeClass('d-none').addClass('d-flex');
}

function fav_hideAvatarControlButtons() {
    $(".fav-controls").removeClass('d-flex').addClass('d-none');
}

function fav_showChangePictureButton() {
    $("#change-fav-picture").show();
}

function fav_hideChangePictureButton() {
    $("#change-fav-picture").hide();
}

function fav_closeChooseModal() {
    $("#choose-fav-modal").modal('hide');
}

function fav_hideCurrentImage() {
    $(".fav-wrapper .fav-preview").hide();
}

function fav_showCurrentImage() {
    $(".fav-wrapper .fav-preview").show();
}

function fav_makeCurrentImageInvisible() {
    $(".fav-wrapper .fav-preview").css({visibility: 'hidden'});
}

function fav_makeCurrentImageVisible() {
    $(".fav-wrapper .fav-preview").css({visibility: 'visible'});
}

function fav_showSpinner() {
    $(".fav-wrapper .spinner").css({opacity: 1});
}

function fav_hideSpinner() {
    $(".fav-wrapper .spinner").css({opacity: 0});
}

function fav_updateAvatarFromSource(url, imageUrl) {
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

$('#fav-upload').on('change', function () { fav_readFile(this); });

$(".source-external img").on('click',function () {
    var imageUrl = $(this).attr('src');
    fav_updateAvatarFromSource($(this).parent().data('url'), imageUrl);
});

$("#no-fav img").click(function () {
    fav_updateAvatarFromSource($(this).parent().data('url'), null);
});
