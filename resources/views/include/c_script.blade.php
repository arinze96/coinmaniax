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

<!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 17190879;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/17190879/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

