$(document).ready(function() {
     
    //comfirmation the delete
    confirmation = () => {
        return confirm('Etes-vous sûr de vouloir supprimer ?')
    };

    //go back
    retour = () => {
        location.href = "/";
        // location.replace("/");
    };

     //delete
    $(document).on('click', '.delete', function(e){
        e.preventDefault();
        $('#delete_modal').modal('show');
        var id = $(this).attr('data-id');
        $('.del_id').val(id);

        $.ajax({
            url: "./controllers/show.php",
            type: "post",
            data: {id:id},
            dataType: 'json',
            success: function(data){
              $('.name').html(data.nomMarche);
            }
        });
    });
});