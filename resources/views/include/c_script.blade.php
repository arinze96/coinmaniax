<script src="{{ asset('assets/customer/assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('assets/customer/assets/js/circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/rating/jquery.rating-stars.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/sidemenu/sidemenu.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/p-scrollbar/p-scroll1.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/p-scrollbar/p-scroll.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/peitychart/peitychart.init.js') }}"></script>
<script src="{{ asset('assets/customer/assets/js/apexcharts.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/echarts/echarts.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/chart/chart.bundle.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/chart/utils.js') }}"></script>
<script src="{{ asset('asset/customer/assets/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/customer/assets/js/select2.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/moment/moment.js') }}"></script>
<script src="{{ asset('assets/customer/assets/js/index1.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/customer/assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/customer/assets/switcher/js/switcher.js') }}"></script>
<script src="{{ asset('assets/js/customer.js') }}"></script>


{{-- ////////////////////DATATABLE DATA////////////////////// --}}
{{-- <script src="{{ asset("assets/customer/assets/plugins/datatable/js/jquery.dataTables.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/js/dataTables.bootstrap4.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/js/dataTables.buttons.min.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/js/buttons.bootstrap4.min.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/js/jszip.min.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/js/pdfmake.min.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/js/vfs_fonts.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/js/buttons.html5.min.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/js/buttons.print.min.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/js/buttons.colVis.min.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/dataTables.responsive.min.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/plugins/datatable/responsive.bootstrap4.min.js") }}"></script>
		<script src="{{ asset("assets/customer/assets/js/datatables.js") }}"></script> --}}
<script src="{{ asset('assets/customer/assets/plugins/chart/chart.min.js') }}"></script>
<script src="{{ asset('assets/customer/assets/plugins/chart/chart.extension.js') }}"></script>
<script src="{{ asset('assets/customer/assets/js/widgets.js') }}"></script>
<script src="{{ asset('assets/home/assets/js/sweetAlert.js') }}"></script>
<script src="{{ asset('assets/home/assets/js/realtime.js') }}"></script>
<script>
  ////////////////////RANDOMIZE CUSTOMER ACTIVITY/////////////////////
  function showRandomDivs() {
      const container = document.getElementById('l_card_container');
      const allDivs = container.getElementsByClassName('l_card');
      for (let div of allDivs) {
          div.style.display = 'none';
      }
      let indicesToShow = new Set();
      while (indicesToShow.size < 5) {
          let randomIndex = Math.floor(Math.random() * allDivs.length);
          indicesToShow.add(randomIndex);
      }
      for (let index of indicesToShow) {
          allDivs[index].style.display = 'block';
      }
  }
  showRandomDivs();
  setInterval(showRandomDivs, 10000);

  function updateProductCount() {
        var currentCount = parseInt(localStorage.getItem('product1Count')) || 35;
        var randomIncrement = Math.floor(Math.random() * 5) + 1;
        var newCount = currentCount + randomIncrement;
        document.getElementById('product1').innerText = newCount;
        localStorage.setItem('product1Count', newCount);
    }
    setInterval(updateProductCount, 10000);
    updateProductCount();
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/65bf546f0ff6374032c91f78/1hlpm3l2s';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->