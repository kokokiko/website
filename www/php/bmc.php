<?php 
$host = 'localhost'; 
$userid = 'root';
$pass = 'root';

mysql_connect($host, $userid, $pass) or die("Errore nella connessione al DataBase, riprovare un'altro momento. ".mysql_error());

mysql_select_db("prodotti") or die ("ERROR ".mysql_error());

$sql = "SELECT * FROM bmc";

$result = mysql_query($sql);

$number = mysql_num_rows($result);




if ($number != 0) {
    while ($row=mysql_fetch_array($result)) {
   $toadd = '  <div id="prodottosingolo" style="width:200px; margin-left:5%;">
                       
                            <p id="title" style="padding:0px; Margin:0px; font-weight: bold;">'.$row[title].'</p>
                            <div id="hr" style="width:100%;height:0px; border-bottom: 1px solid #'.$row[color].'; padding:0px;"></div>
                            <img src="img/bmc/'.$row[imgid].'.JPG" style="width:30px; height:auto;display:inline-block; vertical-align:top; padding-top:5px; " class="noselect">
                            <p style="display:inline-block;width:146px;margin:0px;margin-left:5px; padding-left:4px;padding-top:5px; padding-bottom:5px;">'.$row[desc].'</p>
                            <div id="hr" style="width:76%;height:0px; border-bottom: 1px solid #'.$row[color].'; padding:0px;float:right"></div>
                            <br style="clear:both" class="noselect">
                            <img src="img/bmc/'.$row[other].'.JPG" style="float:right; width:150px; height: auto;" class="noselect">
                <br style="clear:both" class="noselect">
                            <div id="hr" style="width:100%;height:0px; border-bottom: 1px solid #'.$row[color].'; padding:0px;"></div>
              
            
            
            </div>
            <br style="select:"class="noselect">';
  echo($toadd);
    }
}else
{
echo("<p>Nessun prodotto trovato per questa categoria! <br> Riprovare in un'altro momento. <br> Grazie.</p>");
}
    
?>
