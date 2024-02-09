<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('assets/home/assets/img/mug.png') }}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset("assets/css/auth.css") }}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function onSubmit(token) {
          document.getElementById("registerForm").submit();
        }
      </script>

<style>
  .nav {
      height: 50px;
      width: 100%;
      /* background-color: #4d4d4d; */
      position: relative;
      z-index: 10000;
      justify-content: space-between;
  }

  .dropdown {
      display: inline-block;
      position: relative;
  }

  .dd-button {
      display: inline-block;
      padding: 10px 30px 10px 20px;
      cursor: pointer;
      color: #fff;
      white-space: nowrap;
  }

  .dd-button:after {
      content: '';
      position: absolute;
      top: 50%;
      right: 15px;
      transform: translateY(-50%);
      width: 0;
      height: 0;
      border-left: 5px solid transparent;
      border-right: 5px solid transparent;
      border-top: 5px solid black;
  }

  .dd-input {
      display: none;
      color: #fff;
  }

  .dd-menu {
      position: absolute;
      top: 100%;
      border: 1px solid #ccc;
      border-radius: 4px;
      padding: 0;
      margin: 2px 0 0 0;
      box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.1);
      background-color: #ffffff;
      list-style-type: none;
  }

  .dd-input+.dd-menu {
      display: none;
  }

  .dd-input:checked+.dd-menu {
      display: block;
  }

  .dd-menu li {
      padding: 10px 20px;
      cursor: pointer;
      white-space: nowrap;
  }

  .dd-menu li:hover {
      background-color: #f6f6f6;
  }

  .dd-menu li a {
      display: block;
      margin: -10px -20px;
      padding: 10px 20px;
  }

  .dd-menu li.divider {
      padding: 0;
      border-bottom: 1px solid #cccccc;
  }

  .nav>.nav-header {
      display: inline;
  }

  .nav>.nav-header>.nav-title {
      /* display: inline-block;
      font-size: 22px;
      color: #fff; */
      padding: 10px 10px 10px 10px;
  }

  .nav>.nav-btn {
      display: none;
  }

  .nav>.nav-links {
      display: inline;
      float: right;
      font-size: 18px;
  }

  .nav>.nav-links>a {
      display: inline-block;
      padding: 13px 10px 13px 10px;
      text-decoration: none;
      color: #efefef;
  }

  .nav>.nav-links>a:hover {
      background-color: rgba(0, 0, 0, 0.3);
  }

  .nav>#nav-check {
      display: none;
  }

  @media (max-width:600px) {
      .nav>.nav-btn {
          display: inline-block;
          position: absolute;
          right: 0px;
          top: 0px;
      }

      .nav>.nav-btn>label {
          display: inline-block;
          width: 50px;
          height: 50px;
          padding: 13px;
      }

      .nav>.nav-btn>label:hover,
      .nav #nav-check:checked~.nav-btn>label {
          background-color: rgba(0, 0, 0, 0.3);
      }

      .nav>.nav-btn>label>span {
          display: block;
          width: 25px;
          height: 10px;
          border-top: 2px solid #eee;
      }

      .nav>.nav-links {
          position: absolute;
          display: block;
          width: 100%;
          background-color: #000;
          height: 0px;
          transition: all 0.3s ease-in;
          overflow-y: hidden;
          top: 50px;
          left: 0px;
      }

      .nav>.nav-links>a {
          display: block;
          width: 100%;
          margin-left: 10px;
      }

      .nav>#nav-check:not(:checked)~.nav-links {
          height: 0px;
      }

      .nav>#nav-check:checked~.nav-links {
          height: calc(100vh - 50px);
          overflow-y: auto;
      }
  }
</style>