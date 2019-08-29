<div style="height: 100vh;">

    @include('component.designAccordion')
    <p> Design, UX Design, Character Design, CGI, Rigging </p>
    <div class="flex-row-to-col" onload="assembleDesign()"> 
        <div style="width: 50%;">
            <h1> Design </h1>
            <p> Design  </p>
            <hr>
            <h1 class="vert-title"> Title </h1> 
            <p class="vert-description"> this text </p>
            <img src="" class="vert-img">
        </div>
        @include('component.vertSlider')

    </div> 
</div>

<script>
let designPortfolio = [
  {title: Design}, 
  {title: UX Design},
];

function assembleDesign() {
  alert("ASSEMBLE");
};

assembleDesign();

function getTitle(event){
  console.log("123123123 this peee");
  // event.insertAdjacentHTML( 'beforeend', str );
}



</script>