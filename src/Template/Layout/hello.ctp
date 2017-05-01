<!doctype html>
<html lang="ja">
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $this->fetch('title') ?>
    </title>
    <?php
        echo $this->Html->css('cake.hello');
        echo $this->Html->script('cake.hello');
        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
</head>

<body>
    <div id="container">
        <div id="header">
            <?php echo $this->element('Hello\header', ['msg'=>$msg]) ?>
        </div>
        <div id="content">
            <?= $this->fetch('content') ?>
        </div>
        <div id="footer">
            <?php echo $this->element($footer) ?>
        </div>
    </div>
</body>
</html>
