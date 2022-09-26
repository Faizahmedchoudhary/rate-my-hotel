<div style="margin:5rem 0rem 5rem 0rem;">
    <h2>
        <?php echo $hotel['hotel_name'] ?>
    </h2>
    <p>
          <?php echo $hotel['created_at'] ?>
    </p>
    
    <?php echo $hotel['hotel_image'] ?>

    <p >
        <?php echo $hotel['hotel_desc'] ?>
    </p>

    <hr>

    <!-- reviews section -->
<h3 style="margin:3rem 0rem 0rem 0rem;" class="">Leave a Comment</h3>
<?php echo  form_open('hotels/createcomment'); ?>
<?php echo validation_errors(); ?>
      <input d="exampleInputEmail1" type="text" class="form-control" name="post_id" value="<?php echo $hotel['id'] ?>" >
 
      
      <div class="form-floating">
          <textarea name="reviews" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
          <label for="floatingTextarea2">Comments</label>
        </div>

        <div class=" input-group">
            <input name="user_name" placeholder="Enter Your Name" type="text" class="w-25 p-3 m-3" aria-label="First name" class="form-control">
            <input name="user_email"  placeholder="Enter Your Email Address" type="text" class="w-25 p-3  m-3" aria-label="First name" class="form-control">
            <input name="user_phone"  placeholder="Enter Your Phone" type="text" class="w-25 p-3 m-3" aria-label="Last name" class="form-control">
         </div>

         <button type="submit" class="btn btn-primary">Submit</button>


    </form>
</div>


    
    <!-- review show -->
    <?php $count = 0 ; ?>
    <?php foreach ($reviews as $review)  : $count++ ?>    
    <div class="m-3">
  <h2> <?php echo  $count ?>.
    <?php echo $review->user_name ?> 
        </h2>Says:     <?php echo $review->reviews ?> 
</div>

    
   
<?php endforeach ; ?>    

    <!-- review end -->