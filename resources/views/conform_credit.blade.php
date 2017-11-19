<!--SuccessOK!-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>クレジット決済のご案内</title>
    <style type="text/css">
      #site-box {
          width : 100%;
          font-family: "ＭＳ 明朝",sans-serif;
      }
      #header {
        text-align: center;
        font-size: 350%;
        color: #483D8B;
      }
      #main {
        width : 80%;
        text-align: center;
        font-size: 350%;
        color: #483D8B;
      }
      #footer {

      }
      .titlefont {
	       font-size: 350%;
	       color: #000000;
      }
      .subtitlefont {
	       font-size: 400%;
	       color: #000000;
      }
      .normalfont {
	       font-size: 250%;
	       color: #000000;
      }
     </style>
   </head>
   <body>
     <div id="site-box">
        <div id="header">
         クレジット決済のご案内</br>
        </div>
        <div id="main">
          <h2>サンプル決済</br>（クレジット）</h2></br>
          <form action= "https://secure.telecomcredit.co.jp/inetcredit/secure/order.pl" method="post">
            クレジット決済へ
            <input type = "hidden" name = "clientip" value = "<?php echo $clientip; ?>"/>
            <input type = "hidden" name = "sendid" value = "<?php echo $sendid; ?>"/>
            <input type = "hidden" name = "money" value = "<?php echo $money; ?>"/>
            <input type = "hidden" name = "usrmail" value = ""/>
            <input type = "hidden" name = "usrtel" value = ""/>
            <input type = "hidden" name = "sendpass" value = ""/>
            <input type = "hidden" name = "redirect_url" value = ""/>
            <input type = "hidden" name = "redirect_back_url" value = ""/>
            <input type = "hidden" name = "option" value = ""/>
            <input type = "hidden" name = "send_pass_bool" value = ""/>
            <input type = "hidden" name = "non_duplication_id" value = ""/>
            <input type = "hidden" name = "rebill_param_id" value = ""/>
            <input type = "submit" value = "決済"/>
          </form>
        </div>
     </div>
  </body>

</html>
