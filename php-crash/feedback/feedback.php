<?php include 'inc/header.php'; ?>

<?php 
$sql= 'SELECT * FROM feedback';
$result=mysqli_query($conn, $sql);
$feedback=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
    <h2>Past Feedback</h2>
    <?php if(empty($feedback)): ?>
      <p class="lead mt3">There is no feedback!</p>
      <?php endif; ?>
      <?php foreach($feedback as $item): ?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
       <span>#</span>
       <?php echo $item['id']; ?>
       <span>-</span>
       <?php echo $item['body']; ?>
       <div class="text-secondary mt2">
         By <?php echo $item['name']; ?>
         on <?php echo $item['date']; ?>
       </div>
       <div class="my-3">       
        <?php switch($item['rating']): 
          case 0: ?>
            <div>Rating: no rating</div>
        <?php break; ?>
        <?php case 1: ?>
          </div>Rating: * <div>
        <?php break; ?>
        <?php case 2: ?>
          </div>Rating: * * <div>
        <?php break; ?>
        <?php case 3: ?>
          </div>Rating: * * * <div>
        <?php break; ?>
        <?php case 4: ?>
          </div>Rating: * * * * <div>
        <?php break; ?>
        <?php default: ?>
          </div>Rating: * * * * * <div>
        <?php break; ?>
        <?php endswitch; ?>
      </div>
      <?php
        echo '<a href="'.$item['url'].'">'.$item['url'].'</a>'; ?>
     </div>
   </div>
        <?php endforeach; ?>
   
   <?php include 'inc/footer.php'; ?>
