<!DOCTYPE html>
<!--[if !IE]><!-->
<!--

    ___            ___
   /   \          /   \
   \_   \        /  __/
    _\   \      /  /__
    \___  \____/   __/
        \_       _/
          | @ @  \_
          |
        _/     /\
       /o)  (o/\ \_
       \_____/ /
         \____/
     
-->
<!--<![endif]-->
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="/files/Trumbowyg/ui/trumbowyg.css">
  <script src="/files/Trumbowyg/trumbowyg.min.js"></script>
  <script src="/files/Trumbowyg/plugins/colors/trumbowyg.colors.min.js"></script>
  <script src="/files/Trumbowyg/plugins/base64/trumbowyg.base64.min.js"></script>
  <!--<script src="/files/Trumbowyg/plugins/upload/trumbowyg.upload.min.js"></script>-->

  <script type="text/javascript">
  $(document).ready(function(){
    $('textarea').trumbowyg({
      lang: 'pl',
      fixedBtnPane: true,
      semantic: true,
      btnsDef: {
          // Customizables dropdowns
          align: {
              dropdown: ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
              ico: 'justifyLeft'
          },
          image: {
              dropdown: ['insertImage', 'upload', 'base64'],
              ico: 'insertImage'
          }
      },
      btns: [
        'viewHTML',
        '|', 'bold', 'italic', '|', 'link',
        '|', 'formatting',
        //'|', 'btnGrp-test',
        '|', 'align',
        '|', 'btnGrp-lists',
        '|', 'image']
    });
  });
  </script>

  <style>
    table#list{
      border: 1px solid black;
    }
    table#list td, table#list th{
      padding: 5px;
      border: 1px solid black;
    }
  </style>

  <title>admin pages</title>
  <style>
      body {
        padding-top: 50px;
      }
      .starter-template {
        padding: 40px 15px;
        text-align: center;
      }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">main page</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><a href="/auth">admin pages index</a></li>
        <li><a href="/page/list">pages</a></li>
        <li><a href="/fileadm">files</a></li>
        <li><a href="/topmenu/list">top menu</a></li>
        <li><a href="/region/list">regions</a></li>
        <li><a href="/config/list">config</a></li>
        <li><a href="/auth/logout">logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">