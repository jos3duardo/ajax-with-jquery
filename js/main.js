$(function () {
    //buscando os dados no banco
    var requestList = $.ajax({
        method: "GET",
        url: "post.php",
        data: {
            listAll:"list"
        },
        dataType: "json"
    });

    requestList.done(function (e) {
        var table = '<thead><tr><th>#</th><th>Name</th><th>Email</th><th>Telephone</th></tr></thead><tbody>';
        for (var k in e){
            table += '<tr><td>'+e[k].id+'</td>';
            table += '<td>'+e[k].name+'</td>';
            table += '<td>'+e[k].email+'</td>';
            table += '<td>'+e[k].tel+'</td>';
        }
        table += '</tbody>';
        $('#contacts').html(table);
    });


    $('#AjaxRequest').submit( function () {

        var form = $(this).serialize();
        var request = $.ajax({
            method: "POST",
            url: "post.php",
            data: form,
            dataType: "json"
        });

        request.done(function (e) {
            $('#msg').html(e.msg);

            if (e.status){
                $('#AjaxRequest').each(function () {
                    this.reset();
                });
                var table = '<tr><td>'+e.contact.id+'</td>';
                table += '<td>'+e.contact.name+'</td>';
                table += '<td>'+e.contact.email+'</td>';
                table += '<td>'+e.contact.tel+'</td>';
                $('#contacts tbody').prepend(table);
            }

        });

        request.fail(function (e) {
            $('#msg').html(e.msg);
        });
        // request.always(function (e) {
        //     console.log(e)
        // });
        return false;
    })
});