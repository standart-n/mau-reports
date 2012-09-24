<?php class sql_reports {

function getReports($q) { $s="";
	$s.="SELECT * FROM WEB_FILE WHERE (1=1) ";
	$s.="AND (STATUS=0) ";
	$s.="ORDER by ID Desc ";
	return $s;
}

} ?>
