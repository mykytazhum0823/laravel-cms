function hidePreviewImage(){
    $('#previewImg').hide();
}
function showPreviewImage(){
    $('#previewImg').show();
}
$("#avatar-form").submit(function () {
    $(".avatar-controls .btn").attr('disabled', 'disabled');
    as.btn.loading($("#save-photo"), 'Saving...');
});

$('#birthday').datepicker({
    orientation: 'bottom',
    startView: 'years',
    format: 'yyyy-mm-dd'
});

var vHeight = 202,
    image = null,
    croppie = null;

function initCroppie() {
    // var width = $(".avatar-wrapper").width(),
    //     bWidth = width * 82/100,
    //     vWidth = bWidth * 53/100;

    // if (bWidth > 200) {
    //     bWidth = 200;
    //     previewImg.attr("width", bWidth);
    // }
    // if(vWidth > 160)
    // {
    //     vWidth = 160;
    // }

    var previewImg = $("#previewImg");
    
    previewImg.attr("src", image);
    previewImg.attr("width", 200);
};

var timer;

$(window).resize(function () {
    if (croppie) {
        timer && clearTimeout(timer);
        timer = setTimeout(initCroppie, 100);
    }
});

function readFile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            image = reader.result;
            hideCurrentImage();
            initCroppie();
            hideSpinner();
        }

        closeChooseModal();
        makeCurrentImageInvisible();
        hideChangePictureButton();
        showAvatarControlButtons();
        showSpinner();
        showPreviewImage();

        reader.readAsDataURL(input.files[0]);
    }
    else {
        swal("Sorry - you're browser doesn't support the FileReader API");
    }
}

$("#cancel-upload").on('click', function () {
    hideAvatarControlButtons();
    showChangePictureButton();
    makeCurrentImageVisible();
    hidePreviewImage();
    showCurrentImage();
});

function showAvatarControlButtons() {
    $(".avatar-controls").removeClass('d-none').addClass('d-flex');
}

function hideAvatarControlButtons() {
    $(".avatar-controls").removeClass('d-flex').addClass('d-none');
}

function showChangePictureButton() {
    $("#change-picture").show();
}

function hideChangePictureButton() {
    $("#change-picture").hide();
}

function closeChooseModal() {
    $("#choose-modal").modal('hide');
}

function hideCurrentImage() {
    $(".avatar-wrapper .avatar-preview").hide();
}

function showCurrentImage() {
    $(".avatar-wrapper .avatar-preview").show();
}

function makeCurrentImageInvisible() {
    $(".avatar-wrapper .avatar-preview").css({visibility: 'hidden'});
}

function makeCurrentImageVisible() {
    $(".avatar-wrapper .avatar-preview").css({visibility: 'visible'});
}

function showSpinner() {
    $(".avatar-wrapper .spinner").css({opacity: 1});
}

function hideSpinner() {
    $(".avatar-wrapper .spinner").css({opacity: 0});
}

function updateAvatarFromSource(url, imageUrl) {
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

$('#avatar-upload').on('change', function () { readFile(this); });

$(".source-external img").click(function () {
    var imageUrl = $(this).attr('src');
    updateAvatarFromSource($(this).parent().data('url'), imageUrl);
});

$("#no-photo img").click(function () {
    updateAvatarFromSource($(this).parent().data('url'), null);
});