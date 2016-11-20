<?php
session_start();
require_once("PHP/myPage.php");

$P = new WPPTPage('2',"Wykonaj przelew");
$P->SetDescription("Przelew na inne konto");
$P->AddKeywords("przelew, bank");
$P->AddJS("jquery-1.11.1.js");
$P->AddJS("potwierdz.js");
$P->AddJS("serverComm.js");
$P->AddJS("allign.js");

echo $P->Begin();
?>

<h1>Bank WPPT</h1>
</div>
<p>Członek grupy Banki PWr</p>

<?php 
echo $P->Main(); ?>

<article>
<header>
<h3>Potwierdzenie danych do przelewu</h3>
</header>

  <section>
<h3>Instrukcja</h3>
  <p> Proszę sprawdzić poprawność danych. Następnie nacisnąć przycis "POTWIERDŹ".</p>
  </section>
  
  <section>
   <div class="col-6-6">
        <div class="panel">
          <section>
<h2>Panel potwierdzenia danych.</h2>
</section>
          Sprawdź poprawność poniższych danych i naciśnij przycisk "POTWIERDŹ".<br><br>
           <div id="confirmField">
          
        </div>
           
           
        </div>
        <p>
        <span class = "button" id="przelej"/>POTWIERDŹ </span>
        </p>
        <div class="col-6-6">
        <h3>Informacja:</h3>
        <div id="loginRes" class="panel result">
          &nbsp;
        </div>
        </div>
        </div>
      </section>
</article>


<?php
 echo  $P->End();
?>  