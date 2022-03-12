 <!-- Jquery JS-->
 <script src="{{asset('assets/vendor/jquery-3.2.1.min.js')}}"></script>
 <!-- Bootstrap JS-->
 <script src="{{asset('assets/vendor/bootstrap-4.1/popper.min.js')}}"></script>
 <script src="{{asset('assets/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
 <!-- Vendor JS       -->
 <script src="{{asset('assets/vendor/slick/slick.min.js')}}">
 </script>
 <script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>
 <script src="{{asset('assets/vendor/animsition/animsition.min.js')}}"></script>
 <script src="{{asset('assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
 </script>
 <script src="{{asset('assets/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
 <script src="{{asset('assets/vendor/counter-up/jquery.counterup.min.js')}}">
 </script>
 <script src="{{asset('assets/vendor/circle-progress/circle-progress.min.js')}}"></script>
 <script src="{{asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
 <script src="{{asset('assets/vendor/chartjs/Chart.bundle.min.js')}}"></script>
 <script src="{{asset('assets/vendor/select2/select2.min.js')}}">
 </script>

 <!-- Main JS-->
 <script src="{{asset('assets/js/main.js')}}"></script>


 <script>
    jQuery(document).ready(function($){
        $('#mymodal').on('show.bs.modal',function(e){
            var button= $(e.relatedTarget);
            var modal = $(this);
            modal.find('.modal-body').load(button.data("remote"));
            modal.find('.modal-title').html(button.data("title"));
        });
    });
</script>


<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollmodalLabel">Scrolling Long Content Modal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- content --}}
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Ubah Nilai</button>
            </div> --}}
        </div>
    </div>
</div>



<script>
    jQuery(document).ready(function($){
        $('#mymodal1').on('createnilai.bs.modal',function(e){
            var button= $(e.relatedTarget);
            var modal = $(this);
            modal.find('.modal-body1').load(button.data("remote1"));
            modal.find('.modal-title1').html(button.data("title1"));
        });
    });
</script>


<div class="modal fade" id="mymodal1" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title1" id="scrollmodalLabel">Form Tambah Pengajar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body1">
                {{-- content --}}
          </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div> 