=== Elite Afiliados Widget ===
Contributors: M�rio Cecchi
Donate link: http://meriw.com/
Tags: affiliates, links, blogroll, elite, top, fan-sites, fansites, button, buttons, banner, banners, exchange
Requires at least: 2.7
Tested up to: 2.8
Stable tag: 1.0

Controle os Elite Afiliados do seu site direto do painel do WordPress sem tocar no HTML e liste-os no seu tema usando �cones.

== Description ==

Esse plugin foi feito para voc� usar o pr�prio painel do WordPress para editar seus links do tipo Elite Afiliados, mostrando-os com �cones. Geralmente se usa isso em f�-sites. Voc� pode ver um exemplo no meu site [PortalDUFF.com](http://portalduff.com). Voc� pode mostr�-lo usando **widgets**, caso seu tema use, ou inserindo o c�digo direto no seu tema. Leia a se��o de instala��o para ver como us�-lo.

== Installation ==

Como utilizar este plugin:

1. Coloque o arquivo `elite.php` na pasta `wp-content/plugins` do seu WP
2. Ative o plugin pelo menu de plugins do seu painel
3. Para colocar direto no seu tema: `<?php if(function_exists('elite')){elite(9,2,'elite',30,30,4);} ?>`, onde os n�meros correspondem a: n�mero de colunas de �cones, ID da categoria de links que ser� usada, classe css da tabela dos �cones, largura dos �cones, altura e espa�amento entre os �cones.
4. Caso queira usar como um Widget, v� no seu painel de Widgets e o adicione e configure por l�.

== Screenshots ==

1. Exemplo do plugin sendo usado com 9 colunas, �cones de 30x30px e 4px de espa�amento entre eles.

== Changelog ==

= 1.0 =
* Primeira vers�o. Suporte limitado.