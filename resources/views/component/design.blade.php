<div style="height: 100vh;">

    @include('component.designAccordion')
    <p> Design, UX Design, Character Design, CGI, Rigging </p>
    <div class="flex-row-to-col"> 
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
]



</script>