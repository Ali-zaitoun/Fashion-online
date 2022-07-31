<?php
 require 'db.php';

require_once __DIR__ . '/pdf/autoload.php';

$mpdf = new \Mpdf\Mpdf();

// $mpdf->WriteHTML('');
$html='';



    
          
         
          $getfromCart=$database->prepare("SELECT * from cart WHERE IDLogin=:cookieEmail and checkout='checkout'");
          $getfromCart->bindParam("cookieEmail",$_COOKIE['emailfromlogin']);
          $getfromCart->execute();
       
          $html.='<h3 style="text-align:center; color:blue">'.$_COOKIE['emailfromlogin'].'</h3>';
            
         
            $html.='
            <table style=" width: 100%;border-collapse: collapse;">
              <tr  style="background-image:linear-gradient(45deg, #3b06fa 0%, #f0eaf7 100%);">
                <th style="text-align: left;padding: 5px 0px;color: #ffffff;font-weight: normal;">Product</th>
                <th style="text-align:center;padding: 5px 0px;color: #ffffff;font-weight: normal;">Size</th>
                <th style="text-align:center;padding: 5px 0px;color: #ffffff;font-weight: normal;">Colors</th>
                <th style="text-align:center;padding: 5px 0px;color: #ffffff;font-weight: normal;">Quantity</th>
                <th style="text-align: right;padding: 5px 0px;color: #ffffff;font-weight: normal; ">Total</th>
              </tr>';
              $sum=0;
          foreach($getfromCart AS $sql){
            
            $finalPrice=(double)$sql['productPrice']*$sql['quantity'];
            $html.='
            <tr>
            <td style="padding: 10px 5px;">
              <div style="display: flex; flex-wrap: wrap;">
                <img src="image/'.$sql['getImage'].'" alt="" style="width: 100px; height: 100px;margin-right: 10px;"/>
                <div>
                  <p>'.$sql['productName'].'</p>
                  <small>Price $'.$sql['productPrice'].'</small>
                  <br />
                  
                </div>
              </div>
            </td>
            <td style=" text-align:center;">'.$sql['size'].'</td>
            <td style="text-align:center;">'.$sql['color'].'</td>
            <td style="text-align:center;">'.$sql['quantity'].'</td>
            <td style="text-align:right;">$'.$finalPrice.'</td>
          </tr> 
          ';
          $sum+=$finalPrice;
          
          }
            
          $html.='</table>
      
          
            <table style="border-top: 3px solid blue;width: 100%;">
              
              <tr >
                <td style="text-align: right;padding: 5px 0px; width:67%">Total</td>
                <td style="text-align: right;padding: 5px 0px;">$'.$sum.'</td>
              </tr>
              
            </table>
          
        ';
        

         
         
       
        $stylesheet=file_get_contents('style.css');

 $mpdf->WriteHTML($html,\Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output();//'MycartPdf.pdf',"D" or"I"