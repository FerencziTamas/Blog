$(document).ready(function () {
    $('.kuld').click(function () {
        var userName=$("#userName").val();
        var headline=$("#headline").val();
        var text=$("#text").val();
        
        $.ajax({
            url: 'newPostSend.php',
            method: 'POST',
            type: 'text',
            dataType: 'html',
            data:{userName : userName, headline : headline, text : text},
            success: function(data){
                alert("Sikeres rögzítés!");
            }
        });
    });
});