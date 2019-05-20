  function CheckPassword()
{   
        var password = document.getElementById('Password');
        var confirm = document.getElementById('Confirm');

        if (password.value.length > 6){
            if(password.value === confirm.value)
            {
                    return true;
            }
            else
            {
                    alert("Senhas não conferem");
                    return false;
            }
        }else{
            alert("Senha muito pequena");
            return false;
        }
}

function tamanhoPassword(){
    var oldSenha = document.getElementById('oldSenha');
    var newSenha = document.getElementById('newSenha');
    
    if (oldSenha.value.length === 0 && newSenha.value.length > 0){
        alert("Insira a senha antiga para alterar");
        return false;
    }
    if (oldSenha.value === newSenha.value){
        alert ("As senhas são as mesmas");
        return false;
    }
    if (newSenha.value.length < 7){
        alert("Senha muito pequena");
        return false;
    }
    return true;
}

function mudarPicture(URLimg){
        console.log(URLimg);
}

$(function(){
    $('#diretorio').change( function(e) {
        var img = URL.createObjectURL(e.target.files[0]);
        $('.photo').attr('src', img);
    });
});