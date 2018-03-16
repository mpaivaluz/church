function validaSenha (input){ 
    if (input.value != document.getElementById('txtSenha').value) {
    input.setCustomValidity('As senhas não conferem');
  } else {
    input.setCustomValidity('');
  }
}