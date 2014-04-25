<?php class reports {

function engine(&$q) {
		$q->fn->toModel($q,$this->showReports($q),"content");
}

function showReports(&$q) { $s=""; $ms=array();
	$sql=$q->sql_reports->getReports($q);
	$query=ibase_query($q->fdb_it,$sql);
	if (isset($query)) { if ($query) {
		while ($r=ibase_fetch_object($query)) {
			foreach (array("CAPTION") as $key) {
				if (isset($r->$key)) {
					$r->$key=$q->fn->toUTF($r->$key);
				} else {
					$r->$key="";
				}
			}
			$ms[]=$r;
		}
	} }
	$s.=$q->tpl_reports->reports($q,$ms); 
	return $s;	
}


} ?>
