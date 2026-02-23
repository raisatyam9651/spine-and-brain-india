
<?php

   
      $subject = "Dr Arun saroha";

                $message = "<table style='border-collapse: collapse' border='1' cellspacing='0' cellpadding='6'>
                            <tbody>
                                <tr style='background: #47B7E8; color: #ffffff;'>
                                    <th colspan='2'>Contact Information</th>
                                </tr>
                                <tr style='background: #eee;'>
                                    <td>Name: </td><td>{$_POST['name']}</td>
                                </tr>  
 
                                <tr style='background: #eee;'>
                                    <td>Email: </td><td>{$_POST['your-email']}</td>
                                </tr>
                                 <tr style='background: #eee;'>
                                    <td>Phone: </td><td>{$_POST['phone']}</td>
                                </tr>
                                <tr style='background: #eee;'>
                                    <td>Message: </td><td>{$_POST['message']}</td>
                                </tr>  
                            </tbody>
                        </table>";
                  $toone = "formquery@convicare.com";
              
                //   $toone = "formquery@convicare.com";
                    $totwo = "brandingpioneersnike@gmail.com";
                    $from = $_POST['email'];
                    $headers .= 'MIME-Version: 1.0'."\r\n";
                    $headers ="From: $from \r\n";
                    $headers .= 'Content-type:text/html;charset=iso-8859-1'."\r\n"; 
                    @mail($toone,$subject,$message,$headers);
                    @mail($totwo,$subject,$message,$headers);
                    
                   

?>