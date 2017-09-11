jQuery(document).ready(function() {  
    $(document).on('change','#modeselect',function() {
        var x = $(this).val();        
        window.location = "index.php?mode=" + x;
    });
});