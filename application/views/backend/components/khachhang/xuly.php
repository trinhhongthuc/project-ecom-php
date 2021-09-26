<?php

			if (!isset($_GET['act'])){
				$act = "default";
			}else{
				$act = $_GET['act'];
			}
				switch($act)
				{			
					
					case "admin/khachhang":
						require  "./index.php";
						break;
					
					default:
						require  "";
						break;
				}

?>