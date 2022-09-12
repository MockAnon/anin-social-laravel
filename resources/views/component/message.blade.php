<!-- Trigger/Open The Modal -->
<div id="modalBtn">
  <img style="z-index:500;" id="modalIcon" src="img/icons/create_mail.svg" alt="Send mail">
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="flex-row padding-1-05 position-relative">
      Contact
      <span class="close">&times;</span>
    </div>
    @include('component.contact')
  </div>

</div>

<script>
  var modal = document.getElementById("myModal");

  var btn = document.getElementById("modalBtn");

  var span = document.getElementsByClassName("close")[0];

  btn.onclick = function() {
    modal.style.display = "block";
  }

  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }


</script>