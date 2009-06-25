=== Elite Afiliados Widget ===
Contributors: Mário Cecchi
Donate link: http://meriw.com/
Tags: affiliates, links, blogroll, elite, top, fan-sites, fansites, button, buttons, banner, banners, exchange
Requires at least: 2.7
Tested up to: 2.8
Stable tag: 1.0

Controle os Elite Afiliados do seu site direto do painel do WordPress sem tocar no HTML e liste-os no seu tema usando ícones.

== Description ==

Esse plugin foi feito para você usar o próprio painel do WordPress para editar seus links do tipo Elite Afiliados, mostrando-os com ícones. Geralmente se usa isso em fã-sites. Você pode ver um exemplo no meu site [PortalDUFF.com](http://portalduff.com). Você pode mostrá-lo usando **widgets**, caso seu tema use, ou inserindo o código direto no seu tema. Leia a seção de instalação para ver como usá-lo.

== Installation ==

Como utilizar este plugin:

1. Coloque o arquivo `elite.php` na pasta `wp-content/plugins` do seu WP
2. Ative o plugin pelo menu de plugins do seu painel
3. Para colocar direto no seu tema: `<?php if(function_exists('elite')){elite(9,2,'elite',30,30,4);} ?>`, onde os números correspondem a: número de colunas de ícones, ID da categoria de links que será usada, classe css da tabela dos ícones, largura dos ícones, altura e espaçamento entre os ícones.
4. Caso queira usar como um Widget, vá no seu painel de Widgets e o adicione e configure por lá.

== Screenshots ==

1. Exemplo do plugin sendo usado com 9 colunas, ícones de 30x30px e 4px de espaçamento entre eles.

== Changelog ==

= 1.0 =
* Primeira versão. Suporte limitado.