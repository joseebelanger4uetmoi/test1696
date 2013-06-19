<?php 

	// Modification juste pour tester
	if(chose)
		$a=5;
	$pcDoc = new DOMDocument();
	$pcDoc -> loadText("postescanada.xml");

	$xsltDoc = new DOMDocument();
	$xsltDoc -> load("pc2html.xslt");

	$proc = new XSLTProcessor();
	$proc->importStyleSheet($xsltDoc);

	echo $proc->transformToXML($pcDoc);
?>