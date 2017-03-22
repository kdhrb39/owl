<?php 
require_once(dirname(dirname(__FILE__))."/config/owl.php");
header("Content-type: application/x-java-jnlp-file");
$title = $_REQUEST['title']; 
echo '<?xml version="1.0" encoding="UTF-8"?' .'>';
echo '<jnlp ';
echo '  spec="1.0+"';
echo '  codebase="http://'. $_SERVER['HTTP_HOST'] . $default->owl_root_url . '/xscan"';
//echo '  codebase="http://nightmare/Projects/Darchive/xscan"';
//echo '  codebase="http://nightmare/owl-1.00a/xscan"';
echo '>';
echo '<information>';
echo '  <title>Document Scan</title>';
echo '  <vendor>Engr. Kobi Mendel</vendor>';
echo '  <homepage href="/" />';
echo '  <description>From selected Twain Source, An Image is captured</description>';
echo '</information>';
echo '<offline-allowed/>';
echo '<security>';
echo '	<all-permissions/>';
echo '</security>';
echo '<resources>';
echo '  <j2se version="1.2+" />';
echo '  <jar href="xScan.jar" main="true"/>';
echo '  <jar href="jai_imageio.jar"/>';
echo '  <jar href="jai_core.jar"/>';
echo '  <jar href="jai_codec.jar"/>';
echo '  <jar href="mlibwrapper_jai.jar"/>';
echo '  <jar href="clibwrapper_jiio.jar"/>';
echo '  <jar href="iText-2.1.4.jar"/>';
echo '</resources>';
echo '<application-desc main-class="xScan">';
echo "  <argument>$title</argument>";
echo '</application-desc>';
echo '</jnlp>';
?>
