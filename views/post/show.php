<h1>Article</h1>

<button id="btn" class="btn btn-success">Click me!!!</button>



<?php //$this->registerJsFile('@web/js/scripts.js') ?>

<?php
$js = <<<JS
    $('#btn').on('click', function(){
        $.ajax({
            url: 'index.php?r=post/index',
            data: {test: '123'},
            type: 'GET',
            success: function(res){
                console.log(res);
            },
            error: function(error){
                alert('error '+error);
            }
        });
    });

JS;

$this->registerJS($js);

?>