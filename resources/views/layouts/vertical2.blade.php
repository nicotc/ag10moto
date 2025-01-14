<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">
    <head>
        @vite('resources/css/app.scss')
        <style>
            #tooltip {
              background: #333;
              color: white;
              font-weight: bold;
              padding: 4px 8px;
              font-size: 13px;
              border-radius: 4px;
              display: none;
            }

            #tooltip[data-show] {
              display: block;
            }

            #arrow,
            #arrow::before {
              position: absolute;
              width: 8px;
              height: 8px;
              background: inherit;
            }

            #arrow {
              visibility: hidden;
            }

            #arrow::before {
              visibility: visible;
              content: '';
              transform: rotate(45deg);
            }

            #tooltip[data-popper-placement^='top'] > #arrow {
              bottom: -4px;
            }

            #tooltip[data-popper-placement^='bottom'] > #arrow {
              top: -4px;
            }

            #tooltip[data-popper-placement^='left'] > #arrow {
              right: -4px;
            }

            #tooltip[data-popper-placement^='right'] > #arrow {
              left: -4px;
            }




            .bounce {
  display: inline-block;
  margin: 0 0.5rem;

  animation: bounce; /* referring directly to the animation's @keyframe declaration */
  animation-duration: 12s; /* don't forget to set a duration! */
}


          </style>
    </head>
    <body>
        <div class="card col-12">
            <div class="card-body">
                <button id="button" aria-describedby="tooltip">My button</button>
                <div id="tooltip" role="tooltip">
                  My tooltip
                  <div id="arrow" data-popper-arrow></div>
                </div>

            </div>
        </div>



        <input type="text" class="input-element" placeholder="Enter your credit card number" />


        <span class="fi fi-ve"></span> <span class="fi fi-ve fis"></span>


        <div class="card col-6">
            <div class="card-body">

                <div id="editor">
                    <p>Hello World!</p>
                    <p>Some initial <strong>bold</strong> text</p>
                    <p><br /></p>
                  </div>
            </div>
        </div>



        <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-offset="0,8" data-bs-placement="top" data-bs-custom-class="tooltip-primary" data-bs-original-title="Primary tooltip">
            Primary
          </button>


        <select class="select2">
            <option value="AL">Alabama</option>
            <option value="WY">Wyoming</option>
          </select>
          <input name='basic' value='tag1, tag2' autofocus>


          <span class="badge bg-primary">Primary</span>


        <button  data-aos="flip-right"  class="btn btn-primary">Hello</button>

        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
  </button>
<div class="card col-5">
    <div class="card-body">

        <div id="chart" >
        </div>
    </div>
</div>

<div class="card col-12">
    <div class="card-body">

        asdasdsadsadasdasdsa
    </div>
</div>

<div class="card col-12">
    <div class="card-body">

        asdasdsadsadasdasdsa
    </div>
</div>


<div class="card col-12">
    <div class="card-body">

        asdasdsadsadasdasdsa
    </div>
</div>


<div class="card col-12">
    <div class="card-body">

        asdasdsadsadasdasdsa
    </div>
</div>

<div class="card col-12">
    <div class="card-body ">
   <p class="bounce"></p>asdasdsadsadasdasdsa</p>

    </div>
</div>


<div class="card col-12">
    <div class="card-body">

        asdasdsadsadasdasdsa
    </div>
</div>

<div class="card col-12">
    <div class="card-body">

        asdasdsadsadasdasdsa
    </div>
</div>
<div class="card col-12">
    <div class="card-body">

        asdasdsadsadasdasdsa
    </div>
</div>
<div class="card col-12">
    <div class="card-body">

        asdasdsadsadasdasdsa
    </div>|


</div>

<button
        type="button"
        class="btn btn-danger btn-floating btn-lg"
        id="btn-back-to-top"
        >
  <i class="fas fa-arrow-up"></i>
</button>


  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-5">
    <div class="card-body">

        <div id="chart" >
        </div>
    </div>
</div>






        @vite([
            'resources/js/app.js'
        ])

        <script type="module">
            // Select2
            $(document).ready(function() {

                const button = document.querySelector('#button');
      const tooltip = document.querySelector('#tooltip');

      const popperInstance = Popper.createPopper(button, tooltip, {
        modifiers: [
          {
            name: 'offset',
            options: {
              offset: [0, 8],
            },
          },
        ],
      });

      function show() {
        // Make the tooltip visible
        tooltip.setAttribute('data-show', '');

        // Enable the event listeners
        popperInstance.setOptions((options) => ({
          ...options,
          modifiers: [
            ...options.modifiers,
            { name: 'eventListeners', enabled: true },
          ],
        }));

        // Update its position
        popperInstance.update();
      }

      function hide() {
        // Hide the tooltip
        tooltip.removeAttribute('data-show');

        // Disable the event listeners
        popperInstance.setOptions((options) => ({
          ...options,
          modifiers: [
            ...options.modifiers,
            { name: 'eventListeners', enabled: false },
          ],
        }));
      }

      const showEvents = ['mouseenter', 'focus'];
      const hideEvents = ['mouseleave', 'blur'];

      showEvents.forEach((event) => {
        button.addEventListener(event, show);
      });

      hideEvents.forEach((event) => {
        button.addEventListener(event, hide);
      });





                let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



                $('.select2').select2();

                toastr.success('Hello World');

                Swal.fire({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success"
});


var options = {
  chart: {
    type: 'line'
  },
  series: [{
    name: 'sales',
    data: [30,40,35,50,49,60,70,91,125]
  }],
  xaxis: {
    categories: [1991,1992,1993,1994,1995,1996,1997, 1998,1999]
  }
}

var chart = new ApexCharts(document.querySelector("#chart"), options);

chart.render();


// Quill
var quill = new Quill('#editor', {
    theme: 'snow'
});

var cleave = new Cleave('.input-element', {
    date: true,
    delimiter: '-',
    datePattern: ['Y', 'm', 'd']
});

const tour = new Shepherd.Tour({
  useModalOverlay: true,
  defaultStepOptions: {
    classes: 'shadow-md bg-purple-dark',
    scrollTo: true
  }
});

tour.addStep({
  id: 'example-step',
  text: 'This step is attached to the bottom of the <code>.example-css-selector</code> element.',
  attachTo: {
    element: '#editor',
    on: 'bottom'
  },
  classes: 'example-step-extra-class',
  buttons: [
    {
      text: 'Next',
      action: tour.next
    }
  ]
});

tour.addStep({
  id: 'example-step',
  text: 'This step is attached to the bottom of the <code>.example-css-selector</code> element.',
  attachTo: {
    element: '#editor',
    on: 'bottom'
  },
  classes: 'example-step-extra-class',
  buttons: [
    {
      text: 'Complete',
      action: tour.complete
    }
  ]
});

tour.start();


            });


        </script>
    </body>

</html>
