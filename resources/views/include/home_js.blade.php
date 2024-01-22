<script data-cfasync="false"
    src="{{ asset('assets/home/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
<script src="{{ asset('assets/home/assets/vendors/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/home/assets/vendors/waypoint/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/home/assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/home/assets/vendors/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/home/assets/vendors/progressbar-fill-visible/js/progressBar.min.js') }}"></script>
<script src="{{ asset('assets/home/assets/vendors/countdown-date-loop-counter/loopcounter.js') }}"></script>
<script src="{{ asset('assets/home/assets/vendors/modal-video/jquery-modal-video.min.js') }}"></script>
<script src="{{ asset('assets/home/assets/vendors/masonry/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/home/assets/vendors/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/home/assets/vendors/fancybox/dist/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('assets/home/assets/vendors/counterup/jquery.counterup.js') }}"></script>
<script src="{{ asset('assets/home/assets/vendors/slick/slick.min.js') }}"></script>
<script src="{{ asset('assets/home/assets/vendors/slick-nav/jquery.slicknav.js') }}"></script>
<script src="{{ asset('assets/home/assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/home/assets/js/jquery_ajax.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
<script src="{{ asset('assets/home/assets/js/sweetAlert.js') }}"></script>

<script>
    $("#contact_form_submit").click(function() {
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var subject = $("#subject").val();
        var message = $("#message").val();
        if (name == '' || email == '' || phone == '' || subject == '' || message == '') {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "error incomplete form",
                footer: '<a>Try again?</a>'
            });

        } else {
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Email Sent",
                showConfirmButton: false,
                timer: 1500
            });
        }

    })

    $("#faq").click(function() {
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var message = $("#message").val();
        if (name == '' || email == '' || phone == '' || message == '') {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "error incomplete form",
                footer: '<a>Try again?</a>'
            });

        } else {
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Email Sent",
                showConfirmButton: false,
                timer: 1500
            });
        }

    })

    $("#get_quote").click(function() {
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        if (name == '' || email == '' || phone == '') {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "error incomplete form",
                footer: '<a>Try again?</a>'
            });

        } else {
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Email Sent",
                showConfirmButton: false,
                timer: 1500
            });
        }

    })

    $("#subscribe").click(function() {
        var email = $(".email").val();
        if (!email) {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "error incomplete form",
                footer: '<a>Try again?</a>'
            });
        } else {
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Email Sent",
                showConfirmButton: false,
                timer: 1500
            });
        }
    })

    $("#craft").click(function() {
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var message = $("#message").val();
        if (name == '' || email == '' || phone == '' || message == '') {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "error incomplete form",
                footer: '<a>Try again?</a>'
            });

        } else {
            Swal.fire({
                position: "center",
                icon: "success",
                title: "Email Sent",
                showConfirmButton: false,
                timer: 1500
            });
        }

    })
</script>
<script>
    (function() {
        var js =
            "window['__CF$cv$params']={r:'842103589dc5d7a9',t:'MTcwNDY4MDk2OS40NDgwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/b/scripts/jsd/c8377512/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
        var _0xh = document.createElement('iframe');
        _0xh.height = 1;
        _0xh.width = 1;
        _0xh.style.position = 'absolute';
        _0xh.style.top = 0;
        _0xh.style.left = 0;
        _0xh.style.border = 'none';
        _0xh.style.visibility = 'hidden';
        document.body.appendChild(_0xh);

        function handler() {
            var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
            if (_0xi) {
                var _0xj = _0xi.createElement('script');
                _0xj.innerHTML = js;
                _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
            }
        }
        if (document.readyState !== 'loading') {
            handler();
        } else if (window.addEventListener) {
            document.addEventListener('DOMContentLoaded', handler);
        } else {
            var prev = document.onreadystatechange || function() {};
            document.onreadystatechange = function(e) {
                prev(e);
                if (document.readyState !== 'loading') {
                    document.onreadystatechange = prev;
                    handler();
                }
            };
        }
    })();
</script>
<script>
    (function(b, i, t, C, O, I, N) {
        window.addEventListener('load', function() {
            if (b.getElementById(C)) return;
            I = b.createElement(i), N = b.getElementsByTagName(i)[0];
            I.src = t;
            I.id = C;
            N.parentNode.insertBefore(I, N);
        }, false)
    })(document, 'script', 'https://widgets.bitcoin.com/widget.js', 'btcwdgt');
</script>
