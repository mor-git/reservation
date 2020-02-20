$(document).ready(function(){

    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    })

    $('form').submit(function() { 
        //let token = $('form').find('input[name="_token"]').val();
        let logo =  $('form').find('input[name="logo"]').val();
        let name =  $('form').find('input[name="nom"]').val();
        
        $.ajax({ 
            type:'POST', 
            url: $(this).attr('action'), 
            data: $(this).serialize()
        })
        .done(function(data) {
            $('#partieAjax').hide().append("<table class='moris'><tr><th>"+logo+"</th><th>"+""+"</th><th>"+name+"</th></tr></table>").slideDown();
            $('input').val('');
            //console.log("Dialna");
        })
        .fail(function(data) {
            $(".error").empty().append(data);
            console.log("Dialoule");
        });
        return false;
    }); 
});