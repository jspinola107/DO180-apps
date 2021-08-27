<?php
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Formulários</title>';
echo '';
echo '<!--CSS interno apenas para efeito de aula -->';
echo '<style type="text/css">';
echo 'body{';
echo 'font-family: calibri;';
echo '}';
echo 'div{';
echo 'margin: 15px 0;';
echo '}';
echo '</style>';
echo '</head>';
echo '<body>';
echo '<h1>Formulários - componentes básicos</h1>';
echo '';
echo '<form action=""id="dados" name="dados" method="post">';
echo '';
echo '<div>';
echo '<label for="usuario">Usuário: </label>';
echo '<input type="text"id="usuario"name="usuario"';
echo 'placeholder="Ex: Fulano de tal"maxlenght="20"';
echo 'minlength="10" required autofocus>';
echo '';
echo '</div>';
echo '';
echo '';
echo '<div>';
echo '<label for="Senha">Senha:</label>';
echo '<input type="password"id="Senha"name="Senha"';
echo 'placeholder="Ex: 123456" maxlength="20"';
echo 'minlength="10" required autofocus>';
echo '</div>';
echo '';
echo '<div>';
echo '<label for="dtaNascimento">Data de nascimento:</label>';
echo '<input type="date" name="dtaNascimento" id="dtaNascimento"';
echo 'required>';
echo '</div>';
echo '';
echo '<div>';
echo '<label for="">Departamento</label>';
echo '';
echo '<input type="radio" name="depto" id="depto1"value="1">';
echo '<label for="depto1">Tecnologia</label>';
echo '';
echo '<input type="radio" name="depto" id="depto2"value="2">';
echo '<label for="depto2">Diretoria</label>';
echo '';
echo '<input type="radio" name="depto" id="depto3"value="3">';
echo '<label for="depto3">Gerência</label>';
echo '';
echo '<input type="radio" name="depto" id="depto4"value="4">';
echo '<label for="depto4">Financeiro</label>';
echo '';
echo '';
echo '</div>';
echo '';
echo '<div>';
echo '<label for="">Áreas de atuação: </label>';
echo '<input type="checkbox" name="atuacao" id="atuacao1"value="1">';
echo '<label for="atuacao1">Frontend</label>';
echo '';
echo '<input type="checkbox" name="atuacao" id="atuacao2"value="2">';
echo '<label for="atuacao2">Back end</label>';
echo '';
echo '<input type="checkbox" name="atuacao" id="atuacao3"value="3">';
echo '<label for="atuacao3">Full Stack</label>';
echo '';
echo '<input type="checkbox" name="atuacao" id="atuacao4"value="4">';
echo '<label for="atuacao4">Gerência de projetos</label>';
echo '';
echo '</div>';
echo '';
echo '<div>';
echo '<label for="formacao">Formação: </label>';
echo '<select name="formacao" id="formacao">';
echo '<option value="0" disabled selected>Selecione a sua opção</option>';
echo '<option value="1">Graduado</option>';
echo '<option value="2">Pós-graduado</option>';
echo '<option value="3">Mestrado</option>';
echo '<option value="4">Doutorado</option>';
echo '</select>';
echo '</div>';
echo '';
echo '<div>';
echo '<label for="mensagem">Mensagem: </label>';
echo '<textarea name="mensagem" id="mensagem"';
echo 'placeholder="Sua mensagem..."></textarea>';
echo '</div>';
echo '';
echo '<div>';
echo '<label for="arquivo">Enviar arquivo: </label>';
echo '<input type="file" id="arquivo" name="arquivo">';
echo '';
echo '</div>';
echo '';
echo '<div>';
echo '<input type="submit" value="Enviar dados">';
echo '<input type="reset"value="Limpar dados">';
echo '<input type="button"value="Função em JS">';
echo '</div>';
echo '';
echo '<div>';
echo '<button type="submit">Enviar</button>';
echo '<button type="reset">Limpar</button>';
echo '<button type="button">JavaScript</button>';
echo '';
echo '</div>';
echo '</form>';
echo '';
echo '';
echo '</body>';
echo '</html>';
?>