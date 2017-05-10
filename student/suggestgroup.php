
<?php
  include '../dbcon.php';
  session_start();

  $studentId = $_SESSION['id'];
?>

      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card-2 w3-white">
            <div class="w3-container w3-padding">
              <h3 class="w3-center">SUGGEST GROUP</h3>
            </div>
          </div>
        </div>
      </div>
      <br />
  
   <div class="w3-row-padding">
    <div class="w3-col m12">
      <div class="w3-card-2 w3-white">  
        <div class="w3-container w3-padding"> 
            <form action="" method="POST" class="" >
           
              <h4>Enter the registration numbers in the fields below</h4>

              <div class="w3-row"><div class="w3-col m6"><input type="text" name="fMember" class="w3-input" placeholder="First Member" oninput="showMember(this.value)" required></div>
              <div class="w3-col m6"><span id="member1"></span></div>
              </div>
              <br />
              <div class="w3-row"><div class="w3-col m6"><input type="text" name="sMember" class="w3-input" placeholder="Second Member" oninput="showMember2(this.value)" required="true"></div>
              <div class="w3-col m6"><span id="member2"></span></div>
              </div>
               <br />
              <!--div class="w3-row"><div class="w3-col m6"><input type="text" name="lMember" class="w3-input" placeholder="Third Member" oninput="showMember3(this.value)"></div>
              <div class="w3-col m6"><span id="member3"></span></div>
              </div>
               <br /-->

              <br />
              <button type="submit" name="submit" onclick="suggestGroup()" class="w3-padding w3-btn-block w3-blue">Submit</button>
            </form>
          </div>
        </div>
    </div>
  </div>


<!-- ?php

if (isset($_POST['submit'])) 
{
  $fMember = $_POST['fMember'];
  $sMember = $_POST['sMember'];

  $suggestion = mysqli_query($dbcon, "INSERT into suggestedgroup(fMember, sMember, tMember) VALUES ('$fMember','$sMember','$studentId') ") or die(mysqli_error($dbcon));
  if ($suggestion) {
    ?>
<script> alert("Your grou suggestion has been recorded"); </script>
  <?php  /*} else { ?>
<script> alert("Sorry, your suggestion failed"); </script>
<?php
  }
}*/
?> -->

<script>
function suggestGroup() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
                document.getElementById("main").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "submitgroup.php", true);
        xmlhttp.send();
    }
}
function showMember(str) {
    if (str.length == 0) { 
        document.getElementById("member1").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("member1").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../getmember.php?q=" + str, true);
        xmlhttp.send();
    }
}
function showMember2(str) {
    if (str.length == 0) { 
        document.getElementById("member2").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("member2").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../getmember.php?q=" + str, true);
        xmlhttp.send();
    }
}
/*function showMember3(str) {
    if (str.length == 0) { 
        document.getElementById("member3").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("member3").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "../getmember.php?q=" + str, true);
        xmlhttp.send();
    }
}*/
</script>

