<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
        <p>
            <?php
                echo '
                <div class="alert alert-danger" role="alert">
                    '.$error.'
                </div>
                ';
            ?>
         </p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>