<!-- Trigger/Open The Modal -->
<button id="modalBtn">Open Modal</button>





<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="flex-row-reverse">
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