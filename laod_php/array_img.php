<?php
   //print_r(sys_get_temp_dir());

   //echo "----------------file1";
	//print_r($_POST);
	print_r($_FILES['img_array']);
   echo ""+(count($_FILES['img_array']['tmp_name'])-1);
  
	date_default_timezone_set('America/Mexico_City');
	if(isset($_FILES['img_array']['tmp_name'] )){


      for ($i = 0; $i <= (count($_FILES['img_array']['tmp_name'])-1); $i++) {
         /******************************************jpg*/
         $nombreDirectorio = '';
         $nombreFichero    = date("Ymd_His")."-(".$i.")".$_FILES['img_array']['name'][$i];
         echo "$nombreFichero";
         move_uploaded_file($_FILES['img_array']['tmp_name'][$i], $nombreDirectorio.$nombreFichero);

      }
     

   }
?>