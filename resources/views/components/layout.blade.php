<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta
        http-equiv="X-UA-Compatible"
        content="IE=edge"
    />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    />
    <title>Food Blog</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/app.css" type="text/css">
<style>

  .cardsWrapper {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 50px;
      align-items: center;
  }

  @media screen and (max-width: 500px) {
      .mainWrapper {
          margin: 50px 10px;
      }
  }

  .cardWrapper {
      width: 300px;
      height: 320px;
      border-radius: 50px;
      -webkit-box-shadow: 0px 4px 15px 0px #000000;
      box-shadow: 0px 4px 15px 0px #000000;
      transition: 500ms;
      background-color: #ececec;
      margin-bottom: 150px;
  }

  .cardWrapper:hover {
      transform: scale(1.05);
  }

  .img-center {
      text-align: center;
  }

  .cardImg {
      /* width: 80%;
      height: 300px;
      object-fit: cover;
      border-radius: 25px; */
      width: 230px;
      height: 230px;
      border-radius: 50%;
      margin-top: -120px;
      -webkit-box-shadow: 0px 4px 15px 0px #000000;
      box-shadow: 0px 4px 15px 0px #000000;
  }

  .cardTitle {
      padding: 20px 0;
      text-align: center;
      font-size: 22px;
      font-weight: 700;
      margin-top: 10px;
      margin-bottom: 0;
  }

  .btnCtrl {
      text-align: center;
      margin-top: 30px;
  }

  .cardBtn {
      text-decoration: none;
      border: none;
      background-color: var(--primary-color);
      color: #fff;
      padding: 15px 30px;
      margin-bottom: 20px;
      border-radius: 35px;
      font-size: 16px;
      cursor: pointer;
      font-family: "Poppins", sans-serif;
  }

  .cardBtn:active {
      background-color: #e58780;
  }

  .row.cardsWrapper {
      margin-top: 180px;
  }

  .pagination {
      justify-content: center !important;
      margin-top: -75px;
  }

  .c-img {
      height: 600px;
      object-fit: cover;
  }

  .carousel-control-prev {
      left: -120px;
  }

  .carousel-control-next {
      right: -120px;
  }

  .top-page {
      padding-top: 0;
  }

  .posts-block .cardWrapper {
      margin-bottom: 30px;
  }

  .site-footer {
      background-color: #26272b;
      padding: 20px 0 20px;
      font-size: 15px;
      line-height: 24px;
      color: #737373;
  }

  .site-footer hr {
      border-top-color: #bbb;
      opacity: 0.5;
  }

  .site-footer hr.small {
      margin: 20px 0;
  }

  .site-footer h6 {
      color: #fff;
      font-size: 16px;
      text-transform: uppercase;
      margin-top: 5px;
      letter-spacing: 2px;
  }

  .site-footer a {
      color: #737373;
  }

  .site-footer a:hover {
      color: #3366cc;
      text-decoration: none;
  }

  .footer-links {
      padding-left: 0;
      list-style: none;
  }

  .footer-links li {
      display: block;
  }

  .footer-links a {
      color: #737373;
  }

  .footer-links a:active,
  .footer-links a:focus,
  .footer-links a:hover {
      color: #3366cc;
      text-decoration: none;
  }

  .footer-links.inline li {
      display: inline-block;
  }

  .site-footer .social-icons {
      text-align: right;
  }

  .site-footer .social-icons a {
      width: 40px;
      height: 40px;
      line-height: 40px;
      margin-left: 6px;
      margin-right: 0;
      border-radius: 100%;
      background-color: #33353d;
  }

  .copyright-text {
      margin: 0;
  }

  @media (max-width: 991px) {
      .site-footer [class^="col-"] {
          margin-bottom: 30px;
      }
  }

  @media (max-width: 767px) {
      .site-footer {
          padding-bottom: 0;
      }
      .site-footer .copyright-text,
      .site-footer .social-icons {
          text-align: center;
      }
  }

  .social-icons {
      padding-left: 0;
      margin-bottom: 0;
      list-style: none;
  }

  .social-icons li {
      display: inline-block;
      margin-bottom: 4px;
  }

  .social-icons li.title {
      margin-right: 15px;
      text-transform: uppercase;
      color: #96a2b2;
      font-weight: 700;
      font-size: 13px;
  }

  .social-icons a {
      background-color: #eceeef;
      color: #818a91;
      font-size: 16px;
      display: inline-block;
      line-height: 44px;
      width: 44px;
      height: 44px;
      text-align: center;
      margin-right: 8px;
      border-radius: 100%;
      -webkit-transition: all 0.2s linear;
      -o-transition: all 0.2s linear;
      transition: all 0.2s linear;
  }

  .social-icons a:active,
  .social-icons a:focus,
  .social-icons a:hover {
      color: #fff;
      background-color: #29aafe;
  }

  .social-icons.size-sm a {
      line-height: 34px;
      height: 34px;
      width: 34px;
      font-size: 14px;
  }

  .social-icons a.facebook:hover {
      background-color: #3b5998;
  }

  .social-icons a.twitter:hover {
      background-color: #00aced;
  }

  .social-icons a.linkedin:hover {
      background-color: #007bb6;
  }

  .social-icons a.dribbble:hover {
      background-color: #ea4c89;
  }

  .main {
      /* height: 100vh; */
  }

  textarea {
      min-height: 200px !important;
  }

  @media (max-width: 767px) {
      .social-icons li.title {
          display: block;
          margin-right: 0;
          font-weight: 600;
      }
  }
</style>
</head>

<body id="home">
    <x-navbar />
    {{$slot}}
    <x-footer />
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"
    ></script>
    {{-- ckeditor --}}
    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector(".editor"), {
        licenseKey: "",
      })
        .then((editor) => {
          window.editor = editor;
        })
        .catch((error) => {
          console.error("Oops, something went wrong!");
          console.error(
            "Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:"
          );
          console.warn("Build id: 4tbxn2t1nghv-vo64egvrqxia");
          console.error(error);
        });
    </script>
</body>

</html>