$(document).ready(function(){

    function fetch_data(){
        $.ajax({
            url: "ajax_action.php",
            method: "POST",
            success:function(data){
                $('#load_data').html(data);
                fetch_data();
            }
        });
    }

    fetch_data();

    //insert data
    $('#button_insert').on('click', function(){
        var full_name = $('#full_name').val();
        var phone_number = $('#phone_number').val();
        var address = $('#address').val();
        var email = $('#email').val();
        var note = $('#note').val();

        $.ajax({
            url: "ajax_action.php",
            method: "POST",
            data:{
                full_name:full_name, 
                phone_number:phone_number,
                address:address,
                email:email,
                note:note
            },
            success:function(data){
                alert("successed");
                $('#insert_data')[0].reset();
                fetch_data();
            }
        });
    });
})