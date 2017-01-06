$(document).ready(function() {
    $('.fileinput').fileinput();
    $('#image-upload').change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#image-preview').attr('src', e.target.result);
                $('#preview').removeClass('hidden');
            }

            reader.readAsDataURL(this.files[0]);
        }
    });
    $('#image-remove').click(function() {
        $('#preview').addClass('hidden');
    });
});
