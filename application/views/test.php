<?php 
            if(isset($tuyenxe) && count($tuyenxe)){
                foreach ($tuyenxe as $k => $val){
                     echo $val['maloaighe'];
                     echo $val['loaighe'];
                 }