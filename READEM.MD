**********DIFERENÇA ENTRE REQUIRE E INCLUDE**********

``require`` = irá mostrar o erro e não carregará a página;
``include`` = mostrará o mesmo erro e ira exibir a página, ou seja, ele dá o aviso, mas não impede de o código continuar;

note: Temos uma variação de require para que não haha duplicidade nos imports. Imagina que puxamos duas vezes nosso home.php, ele irá exibir a home duas vezes, nesse caso, afim de evitar, podemos usar o ``require_once('archive.php')`` para q seja importar apenas uma vez. 
*****************************************************
