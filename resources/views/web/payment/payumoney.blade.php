<?php
$MERCHANT_KEY = "98ubY6CB"; // add your id
$SALT = "qJE2VvLUuI"; // add your id

$PAYU_BASE_URL = "https://sandboxsecure.payu.in";
// $PAYU_BASE_URL = "https://secure.payu.in";
$action = '';
$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
$posted = array();
$posted = array(
    'key' => $MERCHANT_KEY,
    'txnid' => $txnid,
    'amount' => $orders->amount,
    'firstname' => $orders->full_name,
    'email' => Auth::guard('web')->user()->email,
    'phone' => $orders->mobile,
    'productinfo' => $orders->package_name,
    'surl' => 'http://localhost/package-response/',
    'furl' => 'http://localhost/package-cancel/',
    'service_provider' => 'payu_paisa',
);

if(empty($posted['txnid'])) {
    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} 
else 
{
    $txnid = $posted['txnid'];
}
$hash = '';
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
    $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';  
    foreach($hashVarsSeq as $hash_var) {
        $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
        $hash_string .= '|';
    }
    $hash_string .= $SALT;

    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
} 
elseif(!empty($posted['hash'])) 
{
    $hash = $posted['hash'];
    $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
    <head>

    <script>
      var hash = "<?php echo $hash ?>";
      function submitPayuForm() {
        if(hash == '') {
          return;
        }
        var payuForm = document.forms.payuForm;
             payuForm.submit();
      }
    </script>
    </head>
    <body onload="submitPayuForm()">
      Processing.....
          <form action="<?php echo $action; ?>" method="post" name="payuForm"><br />
              <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" /><br />
              <input type="hidden" name="hash" value="<?php echo $hash ?>"/><br />
              <input type="hidden" name="txnid" value="<?php echo $txnid ?>" /><br />
              <input type="hidden" name="amount" value="<?php echo $orders->amount ?>" /><br />
              <input type="hidden" name="firstname" id="firstname" value="<?php echo $orders->full_name ?>" /><br />
              <input type="hidden" name="email" id="email" value="<?php echo Auth::guard('web')->user()->email ?>" /><br />
              <input name="phone" value="<?php echo $orders->mobile ?>" />
              <input type="hidden" name="productinfo" value="{{ $orders->package_name }}"><br />
              <input type="hidden" name="surl" value="http://localhost/quickwell/public/package-response/" /><br />
              <input type="hidden" name="furl" value="http://localhost/quickwell/public/package-cancel/" /><br />
              <input type="hidden" name="service_provider" value="payu_paisa"  /><br />
              <?php
              if(!$hash) { ?>
                  <input type="submit" value="Submit" />
              <?php } ?>
          </form>
    </body>
  </html>