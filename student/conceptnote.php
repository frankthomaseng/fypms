
<?php
  include '../dbcon.php';
?>

      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-center">SUBMIT CONCEPT NOTE</h6>
            </div>
          </div>
        </div>
      </div>
      <br />
  
   <div class="w3-row-padding">
    <div class="w3-col m12">
      <div class="w3-card-2 w3-white">  
        <div class="w3-container w3-padding"> 
            <form action="uploadconcept.php" method="post" enctype="multipart/form-data" >
              <br />
               <input type="text" name="title" class="w3-input" placeholder="Proposed Title" >
                <br />
                 
                <input type="text" name="exout" class="w3-input" placeholder="Expected Output eg. Mobile app, Web app etc" >
                <br />

                <input type="text" name="propsup" class="w3-input" placeholder="Propose A Supervisor" >
                <br />

              <input type="file" name="filetoupload" class="w3-input" >
              <br/>
              <br />
              <button type="submit" value="upload" class="w3-padding w3-btn-block w3-blue">Submit Concept Note</button>
            
            </form>
          </div>
        </div>
    </div>
  </div>

