<!DOCTYPE html>
<html>
<body>
    <table style="width:848px;margin:auto">
        <tr>
            <td style="text-align:center"><a href="https://globallove.online/"><img src="https://globallove.online/images/logo.png"></a></td>
        </tr>
        <tr>
            <td style="background:url('https://globallove.online/images/banner-photo-rejected.png');width: 848px;
            height: 279px">
            <p style="text-align:center;font: normal normal bold 46px/63px Poppins;
            letter-spacing: 0px;
            color: #FFFFFF;">Account Denied<p>
            </td>
        </tr>
        <tr>
            <td style="text-align:center">
            <?php 
                    $reasons = explode(',',$text[0]->reason_status);
                  ?>
               
                <p style="text-align: center;
                font: normal normal normal 22px/43px Poppins;padding:30px 50px">Your account is denied by our review team for the following reasons:</p>
                     @foreach($reasons as $r) 
                     <p style="color: #f15052;font-size:20px; font-weight: 700;text-align: center">{{ $r }}</p>
                     @endforeach
            </td>
        </tr>
        <tr>
            <td style="text-align:center">
                <p style="text-align: center;
                font: normal normal normal 22px/43px Poppins;
                letter-spacing: 0px;
                color: #000000;margin-top:20px">Thanks,<br><span style="font-weight:600">GlobalLove Team </p>

            
            </td>
        </tr>
        <tr>
            <td style="text-align:center">
               <p style="margin-bottom:50px"></p>
            </td>
        </tr>
        <tr>
            <td style="height: 77px;
            background: #1C1C1C;
            opacity: 1;text-align:center">
              <a href="https://www.facebook.com/globalloveonline/"><img src="https://globallove.online/images/facebook.png" style="margin-right:5px"></a>
                <a href="https://www.instagram.com/globalloveonline/"><img src="https://globallove.online/images/linkedin.png" style="margin-right:5px"></a>
            </td>
        </tr>
    </table>
</body>
</html>



