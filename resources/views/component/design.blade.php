<div style="height: 100vh;">

    @include('component.designAccordion')
    <!-- <p> Design, UX Design, Character Design, CGI, Rigging </p> -->
    <div class="flex-row-to-col" onload="assembleDesign()"> 
        <div style="width: 50%;">
            <h1> Design </h1>
            <p> Design  </p>
            <hr>
            <h1 class="vert-title"> Title </h1> 
            <p class="vert-description"> this text </p>
            <img src="" class="vert-img">
        </div>
        <!-- @include('component.vertSlider') -->
        @include('component.designGallery')

    </div> 
</div>

<script>
let designPortfolio = [
  {
    title: 'Design',
    copy: 'Design'
  }, 
  {
    title: 'UX Design',
    copy: 'Design'
    },
  {
    title: 'General',
    copy: 'Design'
    },
  {
    title: 'CGI',
    copy: 'Design'},
  {
    title: 'Rigging',
    copy: 'Design'
    }
];

$(document).ready(function() { 

  // console.log("123123123 this peee");
  alert("Assemble");

  $("#acordTitle00").text(designPortfolio[0].title);
  $("#acordTitle01").text(designPortfolio[1].title);
  $("#acordTitle02").text(designPortfolio[2].title);
  $("#acordTitle03").text(designPortfolio[3].title);
  $("#acordTitle04").text(designPortfolio[4].title);

  // $("#acordCopy00").text(designPortfolio[0].copy);
  // $("#acordCopy01").text(designPortfolio[1].copy);
  // $("#acordCopy02").text(designPortfolio[2].copy);
  // $("#acordCopy03").text(designPortfolio[3].copy);
  // $("#acordCopy04").text(designPortfolio[4].copy);

  

});


</script>