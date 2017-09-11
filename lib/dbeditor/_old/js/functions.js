jQuery(document).ready(function() {  
    $.fn.editable.defaults.mode = 'popup';
    $('.xedit').editable();
    $(document).on('click','.editable-submit',function(){
        var x = $(this).closest('td').children('span').attr('id');
        var y = $('.input-sm').val();
        var z = $(this).closest('td').children('span');

        $.ajax({
            url: "templates/process.php?id=" + x + "&data=" + y,
            type: 'GET',
            success: function(s){
                console.log(s);
                if(s == 'status'){
                $(z).html(y);}
                if(s == 'error') {
                alert('Error Processing your Request!');}
            },
            error: function(e){
                alert('Error Processing your Request!!');
            }
        });
    });
});