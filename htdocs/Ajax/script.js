$(function () {
    
    $('#nameForm').submit(function (e) { 
        e.preventDefault();
        var postdata = $('#nameForm').serialize();

        
        $.ajax({
            type: 'POST',
            url: 'transform.php',
            data: postdata,
            dataType : 'json',
            success: function(json){
                $('#result').text(json.name);
            }
        });
    });
    
})