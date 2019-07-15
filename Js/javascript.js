$(document).ready(function(){
    $('#telefone').mask("(00) 0 0000-0000");
    $('.FormCadastro').validate({
        rules:{
            nome:{
                required: true,
                maxlength: 100,
                minlength:10
            },
            telefone:{
                required: true,
                maxlength:16,
                minlength:16
            },
            email:{
                required:true,
                email:true
            }
        },

        submitHandler:function(form){
            var nome = $('#nome').val();
            var telefone = $('#telefone').val();
            var mail = $('#email').val();

            event.preventDefault();

            $.ajax({
                url:'Controllers/ControllersCadastro.php',
                method: 'POST',
                data: {nome: nome, telefone:telefone, email:mail},
                success: function(result) {
                    $('form').trigger("reset");
                    //$('.resultado').addClass("alert-success");
                    $('.resultado').fadeIn().html(result);
                    setTimeout(function(){
                        $('.resultado').fadeOut('Slow');
                    },2000);
                }
            });
        }
    })
})


//$(document).ready(function(){
//    $("#FormCadastro").on('submit',function(event){
//
//        var nome = $('#nome').val();
//        var telefone = $('#telefone').val();
//        var mail = $('#email').val();
//
//
//        event.preventDefault();
//
//
//        //if (nome == '') {
//        //    $('.resultado').html('Preencher o nome.');
//        //    $('.resultado').addClass("alert-danger");
//        //    return false;
//        //}
//
//        //$('.resultado').html('');
//        //if (fone == '') {
//        //    $('.resultado').html('Preencher o telefone.');
//        //    $('.resultado').addClass("alert-danger");
//        //    return false;
//        //}
//        //$('.resultado').html('');
//        //if (mail == '') {
//        //    $('.resultado').html('Preencher a email.');
//        //    $('.resultado').addClass("alert-danger");
//        //    return false;
//        //}
//        //$('.resultado').html('');
//        $.ajax({
//            url:'Controllers/ControllersCadastro.php',
//            method: 'POST',
//            data: {nome: nome, telefone:telefone, email:mail},
//            success: function(result) {
//                $('form').trigger("reset");
//                $('.resultado').addClass("alert-success");
//                $('.resultado').fadeIn().html(result);
//                setTimeout(function(){
//                    $('.resultado').fadeOut('Slow');
//                },2000);
//            }
//        });
//    });
//});