<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html >
<html lang="fr">
    <head>
        <meta charset="UTF-8">
       <!--test-->
		<meta charset='UTF-8' />
		<link rel="stylesheet" href="../Webroot/css/bootstrap.css" />
                <link rel="stylesheet" href="../Webroot/css/bootstrap-theme.css" />
                <link rel="stylesheet" href="../Webroot/css/PiedDePage.css" />
                <link rel="stylesheet" href="../Webroot/css/style.css" />
		<title>Margo | Espace enseignant</title>
	
        <title><?php echo $this->lire('titre');?></title>
    </head>
    <body>
	
             
               <?php include($this->lire('gauche')); ?>
            
         <div class="container theme-showcase" role="main">
               <?php include($this->lire('entete')); ?>
          
           
          
                <?php include($this->lire('centre'));?>
          
                <?php include($this->lire('pied'));?>
        
        </div>
        <script src="../Webroot/js/jquery.js"></script>
        <script type="text/javascript" src="../Webroot/js/bootstrap.js"></script>
  
       
    </body>
</html>


