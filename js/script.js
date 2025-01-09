const validarFormulario = () => {
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const senha = document.getElementById('senha').value;

    if (nome === "" || email === "" || senha === "") {
        alert("Todos os campos são obrigatórios!");
        return;
    }

    if (senha.length < 6) {
        alert("A senha precisa ter pelo menos 6 caracteres!");
        return;
    }
    document.getElementById('formCadastro').submit();
};