<?php
	 require _DIR_ . "/vendor/autoload.php";

	 use Google\Cloud\BigQuery\BigQueryClient;
 
	 $projectId = "hopeful-lexicon-236016";
 
	 $bigQuery = new BigQueryClient([
		 "projectId" => $projectId,
	 ]);
?>