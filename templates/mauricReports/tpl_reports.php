<?php class tpl_reports {

function reports($q,$ms) { $s="";
	$s.='<div id="form-reports">';
	$s.=	'<div id="form-header">';
	$s.=		'<div id="form-caption">';
	$s.=			'Отчеты';
	$s.=		'</div>';
	$s.=	'</div>';
	$s.=	'<div id="form-table">';
	$s.=		'<table cellpadding="3" cellspacing="0" border="0">';
	if (sizeof($ms)>0) {
		foreach ($ms as $r) {
			$s.=	'<tr>';
			$s.=		'<td align="left">';
			$s.=			'<div class="form-table-line">';
			$s.=				'<a class="form-table-link" href="#report" data-path="http://mauric.ru/_upload/files/'.$r->NAME_FILE.'">';
			$s.=					$r->CAPTION;
			$s.=				'</a>';
			$s.=			'</div>';
			$s.=		'</td>';
			$s.=	'</tr>';
		}
	}	
	$s.=		'</table>';
	$s.=	'</div>';
	$s.='</div>';
	return $s;
}

} ?>
