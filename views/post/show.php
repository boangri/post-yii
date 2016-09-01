<?php 
$this->beginBlock('block1');
?>
<h3>Some info</h3>

<?php
$this->endBlock();
?>

<h1><?=$this->title?></h1>

<button id="btn" class="btn btn-success">Click me!!!</button>

<pre>
    <?php print_r($cats); ?>
</pre>

<?php
$js = <<<JS
    $('#btn').on('click', function(){
        $.ajax({
            url: 'index.php?r=post/ajax',
            data: {
                test: '123',
                str: 'qwerty'
            },
            type: 'POST',
            success: function(res){
                console.log(res);
            },
            error: function(error){
                alert('error '+error);
            }
        });
    });

JS;

$this->registerJs($js);

?>