<?php
/**
 * Fonctions utiles au plugin Emogrifier
 *
 * @plugin     Emogrifier
 * @copyright  2013
 * @author     Vertige ASBL
 * @licence    GNU/GPL
 * @package    SPIP\Emogrifier\Fonctions
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

function filtre_emogrifier($html, $fichier_css='css/newsletter.css') {

  include_spip('lib/emogrifier/emogrifier');

  $css = file_get_contents(find_in_path($fichier_css));
  $htmldoc = new Emogrifier($html, $css);

  return $htmldoc->emogrify();
}

?>