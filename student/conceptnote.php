
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
            <form action="upload.php" method="post" enctype="multipart/form-data" >
              <br />
                <input type="text" name="title" class="w3-input w3-border" placeholder="Proposed Title" >
                <br />
                <select class="w3-select w3-border" name="propSupervisor" >
                <option value="" disabled selected>Expected Output</option>
                <option value="webapp">Web App</option>
                <option value="mobileapp">Mobile App</option>
              </select>
                
               <input type="file" name="file" class="w3-input" >
               <br />

              <select class="w3-select w3-border" name="propSupervisor" disabled="true">
                <option value="" disabled selected>Propose A Supervisor</option>
                <?php


                ?>


                <option value="1">Supervisor 1</option>
                <option value="2">Supervisor 2</option>
                <option value="3">Supervisor 3</option>
              </select>
              <br />
              <br />
              <button type="submit" value="upload" class="w3-padding w3-btn-block w3-blue">Submit Concept Note</button>
            
            </form>
          </div>
        </div>
    </div>
  </div>

