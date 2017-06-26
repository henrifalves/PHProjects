# Projetos em PHP 

Esse repositório conta com alguns projetos para entendimento de alguns paradgma, nada muito complexo, sem uso de nenhum framework
por enquanto, basicamente um entendimento de PDO, cURL e um reutilizador de código.

## Init! ##

Para conseguir testar isso pelo console basta baixar a versão do php necessária<br> 
(Por convenção com a Infra eu usei o 5.6 e Debian, mas farei a instalação para Windows, já que para linux é apt-get)

### Começando ###

[Versões NTS e TS](http://windows.php.net/download#php-7.1) - Versões do php thread safe e non-thread safe, com uma chave sha256.

Depois de descompactar crie uma variável de sistema apontando para a pasta com o exe do php

### Instalando dlls ###

Caso necessite (vai necessitar) de alguma dll como a PDO_SQLSRV, basta procura-la na internet<br>(essa no caso é disponibilizada pela Microsoft)
e colocar o caminho no php.ini, caso precise de alguma dll já instalada, basta descomentar a linha

Onde:
```
;extension=php_mongo.dll
```

Deixe:
```
extension=php_mongo.dll
```

## Rodar ##

Para rodar no console, basta usar o comando de analisar e executar -f como no exemplo:

```
php -f index.php
```
Isso de permite usar as streans e testar seu código como script de máquina, sem necessidade de usar a arquitetura de threads do Apache

### Debug ###

Eu sempre usei o xDebug e já existem tutoriais demais na internet de como fazer a mesma coisa então:
[Xdebug Rodando - iMasters](https://imasters.com.br/artigo/9446/php/xdebug-instalacao-configuracao-e-utilizacao-com-wamp-server/?trace=1519021197&source=single)

Se necessitar saber apenas o conteúdo de variáveis e não quiser perder tempo com o xDebug eu recomendo o uso de var_dump() 

Escreva esse script:
```
//index.php
<?php
  $var = "Hello world";
  var_dump($var);
?>
```
Execute no respectivo diretório:
```
php -f index.php
```

Resultado esperado:
```
string(11) "Hello world"
```


