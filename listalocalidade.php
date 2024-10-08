<?php
require_once 'config/config.php';
require_once 'controllers/LocalidadeController.php';
?>
<?php
$controller = new LocalidadeController($pdo);

$controller->exibirListaLocalidade();
?>
<a href="register-l.php">Registrar Novo?</a>
<style>
/* Estilo para o corpo da página */
body {
    font-family: Arial, sans-serif;
    background-color: #45a049;
    margin: 0;
    padding: 0;
}

/* Estilo geral para o formulário */
form {
    width: 100%;
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    gap: 15px;
}

/* Estilo dos rótulos (labels) */
label {
    font-weight: bold;
    margin-bottom: 5px;
    color: #333;
}

/* Estilo dos campos de entrada de texto */
input[type="text"] {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
    box-sizing: border-box;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

/* Mudar a cor da borda quando o campo estiver focado */
input[type="text"]:focus {
    border-color: #4CAF50;
    outline: none;
}

/* Estilo do botão de enviar */
button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

/* Mudança de cor no hover */
button[type="submit"]:hover {
    background-color: #45a049;
}

/* Estilo do ícone de lixeira */
a.lixo {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 15px;
    cursor: pointer;
    transition: transform 0.2s ease;
}

/* Efeito de zoom ao passar o mouse */
a.lixo:hover {
    transform: scale(1.1);
}

/* Estilo do modal */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

/* Estilo do conteúdo do modal */
.modal-content {
    background-color: #fff;
    margin: 15% auto;
    padding: 20px;
    border-radius: 10px;
    width: 80%;
    max-width: 400px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
}

/* Estilo do cabeçalho do modal */
.modal-header {
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 10px;
}

/* Estilo dos botões do rodapé do modal */
.modal-footer {
    display: flex;
    justify-content: space-between;
    gap: 10px;
}

/* Estilo do botão de cancelar */
.modal-footer .btn-cancel {
    background-color: #ccc;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Efeito no hover do botão de cancelar */
.modal-footer .btn-cancel:hover {
    background-color: #bbb;
}

/* Estilo do botão de confirmação */
.modal-footer .btn-confirm {
    background-color: #f44336;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Efeito no hover do botão de confirmação */
.modal-footer .btn-confirm:hover {
    background-color: #e53935;
}

</style>