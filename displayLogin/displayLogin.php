<?php

include_once 'html/header.php';

?>

<div>
    <form onsubmit='chamar(); return false;'>

        <h1>Login</h1>

        <div>
            <label>Email</label>
            <input id=”email” name=”email” type=”text” required=”required” /><br>
        </div>

        <div>
            <label>Senha</label>
            <input id=”password” name=”password” type=”password” required=”required” />
        </div>

        <div>
            <button type=”submit” name=”submit”>
                <span>Login</span>
            </button>
        </div>

        <div>
            <label>Nao possui conta ainda?</label>
            <a href="displayCadastro.php"> Cadastrar-se </a>  
        </div>

    </form>
</div>
<?php
include_once 'html/footer.php'
?>

<script>
function chamar() {

    $.ajax({
        url: 'processaLogin.php',
        method: 'POST',
        cache: false,
        data: $('form').serialize(),
        success: (data) => {

            alert('Gravado com sucesso');
            // redirect('displayLogado.php');			
            // location.reload();

        },
        error: (data) => {

            alert('Erro');

        }

    });

}

