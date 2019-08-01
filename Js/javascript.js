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
            var acao = $('#acao').val();
            var id = $('#id').val();
            var nome = $('#nome').val();
            var telefone = $('#telefone').val();
            var mail = $('#email').val();

            event.preventDefault();

            $.ajax({
                url:'Controllers/ControllersCadastro.php',
                method: 'POST',
                data: {acao: acao, id:id, nome: nome, telefone:telefone, email:mail},
                success: function(result) {
                    $('form').trigger("reset");
                    $('input').val("");
                    $('.resultado').fadeIn().html(result);
                    setTimeout(function(){
                        $('.resultado').fadeOut('Slow');
                    },3000);
                }
            });
        }
    });

    /*Confirmar exclusão no Banco*/
    $('.deletar').on('click',function(event){
        event.preventDefault();
        var Link=$(this).attr('href');
        if(confirm("Deseja mesmo apagar os dados")){
            window.location.href=Link;

            //window.location.href = 'Selecao.php';
        }else{
            return false;
        }
    });
});
