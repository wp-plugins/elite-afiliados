=== Elite Afiliados Widget ===
Contributors: Mario Cecchi
Tags: affiliates, links, blogroll, elite, top, fan-sites, fansites, button, buttons, banner, banners, exchange, brasil, portugues, portuguese
Requires at least: 2.7
Tested up to: 2.8.4
Stable tag: 1.1.1

Controle os Elite Afiliados do seu site direto do painel de links do WP sem precisar tocar no HTML toda vez que adicionar um novo e liste-os no seu tema usando &iacute;cones.

== Description ==

Esse plugin foi feito para voc&ecirc; usar o pr&oacute;prio painel do WordPress para editar seus links do tipo Elite Afiliados, mostrando-os com &iacute;cones. Geralmente se usa isso em f&atilde;-sites. Voc&ecirc; pode ver um exemplo no meu site [PortalDUFF.com](http://portalduff.com). Voc&ecirc; pode mostr&aacute;-lo usando **widgets**, caso seu tema use, ou inserindo o c&oacute;digo direto no seu tema. Leia a se&ccedil;&atilde;o de instala&ccedil;&atilde;o para ver como us&aacute;-lo.

Qualquer d&#250;vida, como n&#227;o tenho uma p&#225;gina do plugin, podem mandar e-mail para macecchi@gmail.com pedindo ajuda. Me desculpem por n&#227;o poder ajudar direito por aqui.

**ATEN&#199;&#195;O:** Atualize a vers&#227;o dos seus plugins e o c&#243;digo usado no template. Essa tinha erros e n&#227;o explicava direito. Leia a se&#231;&#227;o de instala&#231;&#227;o para ver como adicionar links etc.

== Installation ==

Como utilizar este plugin:

1. Coloque o arquivo `elite.php` na pasta `wp-content/plugins` do seu WP.

2. Ative o plugin pelo menu de plugins do seu painel.

3. V&#225; no painel de Links do seu WP, na op&#231;&#227;o de Adicionar novo. Coloque o nome do site, como quiser, o endere&#231;o, a descri&#231;&#227;o (que ser&#225; exibida quando passar o mouse sobre a imagem), selecione a categoria do link e esque&#231;a o todas as outras op&#231;&#245;es, exceto uma: Endere&#231;o da Imagem, onde voc&#234; dever&#225; colocar  o endere&#231;o da imagem do link. Voc&#234; pode ocultar os outros campos pois n&#227;o ser&#227;o usados.<br />

4. Ap&#243;s adicionar os links, v&#225; no menu Links &gt; Categorias de Links. L&#225; voc&#234; vai precisar ver a ID da categoria dos links que voc&#234; est&#225; usando. Quando voc&#234; clica para editar alguma categoria a ID aparece no link (cat_ID=2, por exemplo). Caso voc&#234; nunca tenha alterado as categorias da&#237;, provavelmente ser&#225; 2 mesmo.

5. C&#243;digo r&#225;pido pra adicionar os links direto no seu tema, sem usar widgets: `<?php if(function_exists('elite')){elite(5,2);} ?>`, onde os n&#250;meros correspondem, respectivamente, ao n&#250;mero de &#237;cones por linha e ID da categoria (que voc&#234; achou no passo 4). Isso ir&#225; exibir links 30x30px automaticamente. Para completar automaticamente a linha, caso sobre espa&#231;o, coloque uma imagem chamada 'blank.gif' na pasta 'images' do seu tema.

6. O mesmo c&#243;digo customiz&#225;vel, caso queira usar outra altura etc.: `<?php if(function_exists('elite')){elite(5,2,'elite','blank.gif',30,30,4);} ?>`, onde os n&uacute;meros correspondem respectivamente a: n&uacute;mero de colunas de &iacute;cones, ID da categoria de links que ser&aacute; usada, classe css da tabela dos &iacute;cones, endere&ccedil;o da imagem em branco para completar a coluna (que dever&aacute; ficar na pasta 'images' do seu tema), largura dos &iacute;cones, altura e espa&ccedil;amento entre os &iacute;cones.

7. Caso queira usar como um Widget, v&aacute; no seu painel de Widgets e o adicione e configure por l&aacute;.


== Screenshots ==

1. Exemplo do plugin sendo usado com 9 colunas, &iacute;cones de 30x30px e 4px de espa&ccedil;amento entre eles.

== Changelog ==

= 1.1.1 =
* Corre&ccedil;&atilde;o do bug que causava o erro &quot;Headers already sent&quot; no painel.

= 1.1 =
* Corrigido o tutorial de instala&#231;&#227;o que estava errado e n&#227;o explicava direito como adicionar um link.
* Adicionada op&#231;&#227;o de alterar a imagem em branco que completa a linha caso sobre espa&#231;o. A imagem dever&#225; ficar dentro da pasta 'images' do seu tema.
* Por favor, atualizem o c&#243;digo que voc&#234;s usam no tema.
	
= 1.0.1 =
* Apenas uma corre&ccedil;&atilde;o

= 1.0 =
* Primeira vers&atilde;o. Suporte limitado.