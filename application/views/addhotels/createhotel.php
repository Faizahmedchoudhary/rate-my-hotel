

<h3 class="text-center  mt-3">Add a Hotel</h3>
<?php echo  form_open('hotels/createhotel'); ?>
<?php echo validation_errors(); ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control" name="hotel_name" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image</label>
    <input type="file" name="hotel_img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Paragraph</label>
  <textarea class="form-control" name="hotel_desc" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

  

  <div class="mb-3">
        <select class="form-select" name="hotel_location" aria-label="Default select example">
            <option selected>Please Select a Location</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Pune">Pune</option>
            <option value="Bangalore">Bangalore</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Manali">Manali</option>
            <option value="Goa">Goa</option>
        </select>
</div>

<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
</div>

               
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<!-- printing the success  -->
<?php if($this->session->flashdata('msg')): ?>
    <p><?php echo $this->session->flashdata('msg'); ?></p>
<?php endif; ?>





<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>
<script>
           CKEDITOR.replace( 'hotel_desc' );
</script>