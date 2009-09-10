<?php
/*
Plugin Name: Elite Afiliados
Plugin URI: http://meriw.com/
Description: Controle os Elite Afiliados do seu site direto do painel de links do WP sem precisar tocar no HTML toda vez que adicionar um novo.
Version: 1.1
Author: Mário Cecchi
Author URI: http://meriw.com/
*/

function elite($colunas,$catid,$class="elite",$blank="blank.gif",$width=30,$height=30,$cellspacing=4) {
	if (!$catid) { echo "Especifique a categoria dos links."; break; }
	$bk = objectToArrayElite(get_bookmarks("orderby=rating&order=DESC&category=$catid"));
	$total = count($bk);
	$nm = 1; $nm_t = 1;
	if ($total > 0) {
	echo "<table cellspacing=\"$cellspacing\" border=\"0\" class=\"$class\">\n<tr>";
	foreach($bk as $link) {
		echo "<td>";
		echo "<a href=\"{$link['link_url']}\" target=\"_blank\" title=\"{$link['link_description']}\"><img src=\"{$link['link_image']}\" width=\"$width\" height=\"$height\" border=\"0\"></a>";
		echo "</td>\n";
		
		if ($nm_t==$total) { // se for o ultimo link
		$faltam = $colunas-$nm; // ve qts faltam
			if($faltam>0) { // se ainda faltar algum
				while($faltam>=1) { // mostra vazio ate completar 9
					echo "<td><img src=\"".get_bloginfo('template_directory')."/images/$blank\" width=\"$width\" height=\"$height\" class=\"blank\" /></a></td>\n";
					$faltam--;
				}
			}
		}
		
		if ($nm==$colunas) {
			echo "</tr>\n<tr>";
			$nm = 1;
		} else {
		$nm++;
		}
		$nm_t++;
	}
	echo "\n</tr>";
	// echo "<tr><td colspan=\"$colunas\" align=\"center\"><a href=\"/site/afiliados\">torne-se um</a></td></tr>";
	echo "\n</table>";
	} else {
		echo "Nenhum elite afiliado. Entre em contato conosco e seja um!";
	}
}

function objectToArrayElite($object) {
	$arr = array();
	for ($i = 0; $i < count($object); $i++) {
		$arr[] = get_object_vars($object[$i]);
	}
	return $arr;
}

function elite_widget($args) {
	extract($args);
	$options = get_option("elite_widget");
	echo "{$before_widget}{$before_title}{$options['title']}{$after_title}";
	  elite($options['colunas'],$options['linkscat'],$options['class'],$options['blank'],$options['width'],$options['height'],$options['spacing']);
	echo $after_widget;
}

function elite_control() {
  $options = get_option("elite_widget");
  if (!is_array( $options ))
        {
	  global $blankdefault;
      $options = array(
      'title' => 'Elite Afiliados',
      'colunas' => '6',
      'linkscat' => '',
      'class' => 'elite',
      'blank' => 'blank.gif',
      'width' => '30',
      'height' => '30',
      'spacing' => '4',
      );
  }
  if ($_POST['elite_widget_submit'])
  {
    $options['title'] = htmlspecialchars($_POST['elite_widget_title']);
    $options['colunas'] = $_POST['elite_widget_colunas'];
    $options['linkscat'] = $_POST['elite_widget_cat'];
    $options['class'] = $_POST['elite_widget_class'];
    $options['width'] = $_POST['elite_widget_w'];
    $options['height'] = $_POST['elite_widget_h'];
    $options['spacing'] = $_POST['elite_widget_spacing'];
    $options['blank'] = $_POST['elite_widget_blank'];
    update_option("elite_widget", $options);
  }
?>
<p>
    <label for="elite_widget_title">Título </label>
    <input type="text" id="elite_widget_title" name="elite_widget_title" value="<?php echo $options['title'];?>" />
    
    <label for="elite_widget_colunas"><br>
    Colunas </label>
    <input name="elite_widget_colunas" type="text" id="elite_widget_colunas" value="<?php echo $options['colunas'];?>" size="3" />
    
  <label for="elite_widget_cat">Cat. </label>
    <input name="elite_widget_cat" type="text" id="elite_widget_cat" value="<?php echo $options['linkscat'];?>" size="3" />
    <br>
    <br>
    
  <label for="elite_widget_class">Classe (CSS) </label>
  <input name="elite_widget_class" type="text" id="elite_widget_class" value="<?php echo $options['class'];?>" /><br>
  Ícone para links vazios
  <input name="elite_widget_blank" type="text" id="elite_widget_blank" value="<?php echo $options['blank'];?>" />
  <br />
  <small>A imagem deverá estar dentro da pasta <b>images</b> do seu tema.</small><br>
    <br>
  <b>Ícones:</b><br>    
  <label for="elite_widget_w">Largura </label>
    <input name="elite_widget_w" type="text" id="elite_widget_w" value="<?php echo $options['width'];?>" size="3" />
    
  <label for="elite_widget_h">Altura </label>
    <input name="elite_widget_h" type="text" id="elite_widget_h" value="<?php echo $options['height'];?>" size="3" /><br>

  <label for="elite_widget_spacing">Espaço entre os ícones </label>
    <input name="elite_widget_spacing" type="text" id="elite_widget_spacing" value="<?php echo $options['spacing'];?>" size="3" />
    
    
    <input type="hidden" id="elite_widget_submit" name="elite_widget_submit" value="1">
</p>
<?php

}

function elite_widget_init() {
	register_sidebar_widget(__('Elite Afiliados'), 'elite_widget');
	register_widget_control('Elite Afiliados', 'elite_control');
}

add_action("plugins_loaded", "elite_widget_init");

?>