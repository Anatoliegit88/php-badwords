<?php $pararafo = " lorem22 Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis porro nobis et consequuntur tempore, itaque consectetur quae atque tenetur alias minus nemo sapiente aperiam tempora, aliquid repellendus. Temporibus, reprehenderit"; ?>
 <p><?php echo $pararafo; ?></p>



 <h1>Cambio Parole con le "***"</h1>
 <?php $nuovo_pararafo = cambio_parola("ipsum", "***", $pararafo);?>


 <p><?php echo $nuovo_pararafo;?></p>