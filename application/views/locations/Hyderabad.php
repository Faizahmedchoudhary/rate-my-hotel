</div>
<div class="page-title" style="text-align:center;">
    <h3 style="text-align:center; "><?=  $title ?></h3>
    <span >Location/<?= $title?></span>
</div>
<!-- </div> -->

       
       </div>
       
       
       <div class="container">
         <div class="row">
           <div class="d-flex flex-direction-row col-md-12 m-3 p-3">
           <?php foreach($hotels as $hotel): ?>
                       
                       <div class=" m-3 p-3 card w-100" style="width: 18rem;">
                           <div class="card-body">
                        

                           <img src="<?php echo base_url('application/assets/img/').$hotel->hotel_image; ?>">


                               <h5 class="card-title"><?php echo $hotel->hotel_name ; ?></h5>
                               
                               <p class="card-text"><?php echo word_limiter($hotel->hotel_desc , 25) ?></p>
                               <h6 class="card-text"><?php echo $hotel->hotel_location ?></h6>
                               <h6 class="card-text"><?php echo $hotel->created_at ?></h6>
                               <a href="<?php echo site_url('location/'.$hotel->slug); ?>" class="btn btn-success" >Read More</a>                           
                               
        
        
                               
                            </div>
                       </div>
           
                   <?php endforeach; ?>    
               </div>
          
         </div>
       </div>
       