    <style>
      .flag{
        height: 18px;
        border: 1px solid black;
      }
      #langsel{
        display: inline-block;
        padding: 15px;
      }
      #langalert{
        position: fixed;
        left: 20%; top: 100px;;
        width: 60%; height: 200px;;
        background: green;  color: white !important;
        padding-left: 20px;padding-right: 20px;
        padding-top: 10px;
        z-index: 999999;
        <?php if ($langsel_offer) echo "display: block;"; else echo "display: none;"; ?>
      }
      #langalert h2, #langalert h3{ color: white !important; }
    </style>
    <script>
      function zmien(lang){
        document.cookie="langsel="+lang+";path=/";
        document.location.href=document.location.href;
      }
    </script>
<?php function langsel_showButtons(){ ?>
        <div id="langsel">
          Język:      
          <a onClick="zmien('pl')"><img src="http://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Flag_of_Poland.svg/320px-Flag_of_Poland.svg.png" class="flag" alt="PL" title="PL" /></a>
          <a onClick="zmien('en')"><img src="http://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Flag_of_the_United_Kingdom.svg/320px-Flag_of_the_United_Kingdom.svg.png" class="flag" alt="EN" title="EN" /></a>
        </div>
<?php } function langsel_showLangalert(){ ?>
<div id="langalert">
    <h3>I have detected that your browser language is neither English nor Polish.</h3>
    <h2>Please select language in which you want to read my website: 
    <a onClick="zmien('pl')"><img src="http://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Flag_of_Poland.svg/320px-Flag_of_Poland.svg.png" class="flag" alt="PL" title="PL" /></a>
    <a onClick="zmien('en')"><img src="http://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Flag_of_the_United_Kingdom.svg/320px-Flag_of_the_United_Kingdom.svg.png" class="flag" alt="EN" title="EN" /></a>
    </h2>
</div>
<?php }