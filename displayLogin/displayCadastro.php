<?php


// echo phpinfo();
// die;

include_once 'html/header.php';

?>
<!-- onsubmit='chamar()' -->
<div>
    <form action="processaCadastro.php" method="POST" >

        <h1>Cadastro</h1>

        <div>
            <label>Nome</label>
            <input id=”name” name=”name” type=”text” required=”required” /><br>
        </div>

        <div>
            <label>Email</label>
            <input id=”email” name=”email” type=”email” required=”required” /><br>
        </div>

        <div>
            <label>Nivel de acesso</label>
            <input id=”levelAccess” name=”levelAccess” type=”text” /><br>
        </div>

        <div>
            <label>Observacoes</label>
            <input id=”comments” name=”comments” type=”text” /><br>
        </div>

        <div>
            <label>Senha</label>
            <input id=”password” name=”password” type=”password” required=”required” />
        </div>

        <div>
            <button type=”submit” name=”submit”>
                <span>Cadastre-se</span>
            </button>
        </div>

        <div>
            <label>Ja possui conta?</label>
            <a href="displayLogin.php">Login</a>  
        </div>

    </form>
</div>

<!-- <script>
function chamar() {

    $.ajax({
        url: 'processaCadastro.php',
        method: 'POST',
        cache: false,
        data: $('form').serialize(),
        success: (data) => {

            alert('Gravado com sucesso');
            // redirect('displayLogin.php');			
            // location.reload();

        },
        error: (data) => {

            alert('Erro');

        }

    });

}
</script> -->



<?php
include_once 'html/footer.php'
?>
