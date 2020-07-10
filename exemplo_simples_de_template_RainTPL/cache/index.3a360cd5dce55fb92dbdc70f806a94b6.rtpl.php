<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>hello <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

<p>o bagulho é sincero, teste de template</p>
<p>Version do php<?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>