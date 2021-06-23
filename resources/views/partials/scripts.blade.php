<script src="{{asset('assets/js/jquery-2.2.3.js')}}"></script>
<script src="{{asset('assets/js/toastr.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/bootsnav.js')}}"></script>
<script src="{{asset('assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('assets/js/jquery-countTo.js')}}"></script>
<script src="{{asset('assets/js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.cubeportfolio.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('assets/js/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('assets/js/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('assets/js/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('assets/js/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('assets/js/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
<script src="https://cdn.lordicon.com//libs/frhvbuzj/lord-icon-2.0.2.js"></script>
@stack('js')

<script>
    @if(Session::has('message'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('message') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('message') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('message') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('message') }}");
                  break;
          }
    @endif
</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function applyNow(course){
      var course = course;

      $(document).ready(function(){
        $("#myModalLabel").html(course);
        $('#course').val(course);
      })
    }
</script>