<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html >
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        
        <title><?php echo $this->lire('titre');?></title>
    </head>
    <body>
	<div id="conteneur">
            <div id="header">
               <?php include($this->lire('entete')); ?>
            </div>
            <div id="gauche">
               <?php include($this->lire('gauche')); ?>
            </div>
            <div id="centre">
                <?php include($this->lire('centre'));?>
            </div>
            <div id="pied">
                <?php include($this->lire('pied'));?>
            </div>
        </div>
    </body>
</html>


