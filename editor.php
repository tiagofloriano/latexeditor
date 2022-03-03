<?
/**
 * @name Latex Editor
 * @author Original by Tiago Floriano <tiagofloriano@protonmail.com> <http://tiagofloriano.github.io/>
 * @author Modified by nome <email ou URI> aaaa-mm-dd hh:mm  //para os próximos que modificarem
 * @license GPL 3
 * @version 1.0.0
 */
include("lib.php");
$latex = new latex();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style type="text/css">
        <!--
        body { padding: 20px; }
        -->
    </style>
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/x-mathjax-config">
	MathJax.Hub.Config({
	tex2jax: { inlineMath: [["$","$"],["\\(","\\)"]] },
	"HTML-CSS": {
	  linebreaks: { automatic: true, width: "container" }          
	}              
	});
	</script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src='https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML'></script>
    <title>Online LaTex Editor</title>
  </head>
  <body>
    <h1>Online LaTex Editor</h1>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <? 
    $latex->listtabs();
    ?>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
    <? 
    $latex->listcontent();
    ?>
</div>
<hr size=0>
<textarea class="form-control" id="codigolatex" rows="10"></textarea>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js.js"></script>
    
    <div id="preview">\[ \] </div>
    
	<script type="text/javascript">
	    $("#codigolatex").keyup(function() {
				$("#preview").html("\\[" + $("#codigolatex").val() + "\\]");
				MathJax.Hub.Typeset();
        });
	</script>

  </body>
</html>