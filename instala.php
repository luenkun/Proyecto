<?php
include "privado/bd.php";
function mysql_import($filename) {
	$return = false;
	$sql_start = array('INSERT', 'UPDATE', 'DELETE', 'DROP', 'GRANT', 'REVOKE', 'CREATE', 'ALTER');
	$sql_run_last = array('INSERT');
	if (file_exists($filename)) {
	$lines = file($filename);
		$queries = array();
		$query = '';
			if (is_array($lines)) {
			foreach ($lines as $line) {
				$line = trim($line);
					if(!preg_match("'^--'", $line)) {
					if (!trim($line)) {
						if ($query != '') {
						$first_word = trim(strtoupper(substr($query, 0, strpos($query, ' '))));
							if (in_array($first_word, $sql_start)) {
								$pos = strpos($query, '`')+1;
								$query = substr($query, 0, $pos) .  substr($query, $pos);								}
 
							$priority = 1;
							if (in_array($first_word, $sql_run_last)) {
								$priority = 10;
							} 
								$queries[$priority][] = $query;
							$query = '';
						}
					} else {
						$query .= $line;
					}
				}
			}
				ksort($queries);
				foreach ($queries as $priority=>$to_run) {
				foreach ($to_run as $i=>$sql) {
					mysql_query($sql);
					echo mysql_error();
				}
			}
		}
	}
}
mysql_import("querys.sql");
?>