$(document).ready(function(){
    // Agregar experiencia
    $('#works').on('click', '.add', function(e){
        e.preventDefault();
        var fieldHTML =  $('.experience').clone();
        $('#works').append(fieldHTML);     
    });
    
    // Eliminar experiencia
    $(works).on('click', '.remove', function(e){
        e.preventDefault();
        $(this).parent().parent().parent().remove();
    });
});