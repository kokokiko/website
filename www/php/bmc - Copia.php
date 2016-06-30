<?php 
$host = 'localhost'; 
$userid = 'root';
$pass = 'root';

$link1 = mysql_connect($host, $userid, $pass);
if(!$link1) {
    die("Errore accesso al DataBase, riprovare più tardi. <br>Grazie. ".mysql_error());
}else{
    mysql_select_db("prodotti", $link1);
}
 


mysql_select_db("prodotti", $link1) or die ("Errore accesso al DataBase, riprovare più tardi. <br>Grazie.  ".mysql_error());

$sql = "SELECT * from bmc";

$result = mysql_query($sql);

$number = mysql_num_rows($result);

mysql_close($db);



if ($number != 0) {
    while ($row=mysql_fetch_array($result)) {
        
            
       $mad='<div id="prodotto"><h4>'.$row[id].'</h4><div id="hrcolorato" style="border-bottom: 1px solid #'.$row[color].'; height 0px; width: 100%;"></div>'
   
        
        
        
        
        
       $link2= mysql_connect($host, $userid, $pass, TRUE);
        mysql_select_db("diprodotti", $link2);
        
        if(!$link2) {
    die(“Not connected: ”. mysql_error());
}else{
   mysql_select_db("diprodotti", $link2);
}
        
        
        $sql2 = "SELECT * from ".$row[id];
        $resultproducts = mysql_query($sql2);
        $number2 = mysql_num_rows($resultproducts);
        mysql_close($db2);
        if ($number2 != 0) {
            while ($row2 = mysql_fetch_array($resultproducts)) {
                
                $mad .=  '<p style="color: #'.$row[color].'">'.$row2[idprodotto].'</p> <p>'.$row2[descprodotto].'</p>'
            }
        }
         
    
         
            
            
            
            $mad .= '<img src="img/'.$row[imgid].'.png"><img src="img/'.$row[other].'.png"></div>'
        
            
        echo(
        
       
        
        );
  
    }
}else
{
echo("Nessun prodotto trovato per questa categoria. <br> Riprovare in un'altro momento. <br> Grazie.");
}
    
?>