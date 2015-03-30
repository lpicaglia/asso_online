// Lien entre les listes déroulantes domaine et thème
$("#theme").chained("#domaine"); 

function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img_logo').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#logo").change(function(){
    readURL(this);
});