<h1>サンプル</h1>
<p>これは、CakePHPのサンプルです。</p>
<?php echo date('Y/m/d', time()) ?>
<p>フォームの送信</p>
<form method="get" action="/hello/sendForm">
    <input type="text" name="text1" />
    <input type="submit" />
</form>
