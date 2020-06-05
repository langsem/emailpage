<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hurtigruta Carglass</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>

 <!-- nav bar -->
 <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a href="#" class="navbar-brand"><img class="logo-img" src="logoImg.png" alt=""></a>
  </nav>

<div class="container">
    <form action="makepdf.php"  method="post" enctype="multipart/form-data">

    <section>
    <div class="py-5 col-md-12">
    <label for="branch" class="">Avdeling</label>
              <div class="md-form">
              <select class="browser-default custom-select mb-4" type="text" id="branch" name="avdeling" class="form-control" required="required">
                          <option value="" selected disabled>Velg avdeling</option>
                          <option value="090 Langhus">090 Langhus</option>
                          <option value="015 Rommen">015 Rommen</option>
                          <option value="020 Lysaker">020 Lysaker</option>
                          <option value="030 Nydalen">030 Nydalen</option>
                          <option value="040 Fornebu">040 Fornebu</option>
                          <option value="050 Sandvika">050 Sandvika</option>
                          <option value="053 Vøyenenga">053 Vøyenenga</option>
                          <option value="055 Asker">055 Asker</option>
                          <option value="060 Skøyen">060 Skøyen</option>
                          <option value="070 Alnabru">070 Alnabru</option>
                          <option value="080 Ensjø">080 Ensjø</option>
                          <option value="085 Ryen">085 Ryen</option>
                          <option value="100 Ski">100 Ski</option>
                          <option value="105 Drøbak">105 Drøbak</option>
                          <option value="110 Lillestrøm">110 Lillestrøm</option>
                          <option value="115 Nittedal">115 Nittedal</option>
                          <option value="120 Jessheim">120 Jessheim</option>
                          <option value="121 Dal">121 Dal</option>
                          <option value="122 Årnes">122 Årnes</option>
                          <option value="130 Lørenskog">130 Lørenskog</option>
                          <option value="135 Elverum">135 Elverum</option>
                          <option value="137 Kongsvinger">137 Kongsvinger</option>
                          <option value="140 Hamar">140 Hamar</option>
                          <option value="150 Gjøvik">150 Gjøvik</option>
                          <option value="155 Hadeland">155 Hadeland</option>
                          <option value="160 Lillehammer">160 Lillehammer</option>
                          <option value="190 Hønefoss">190 Hønefoss</option>
                          <option value="200 Drammen">200 Drammen</option>
                          <option value="205 Åssiden">205 Åssiden</option>
                          <option value="208 Kongsberg">208 Kongsberg</option>
                          <option value="210 Tønsberg">210 Tønsberg</option>
                          <option value="215 Sandefjord">215 Sandefjord</option>
                          <option value="217 Kilen">217 Kilen</option>
                          <option value="220 Skien">220 Skien</option>
                          <option value="225 Porsgrunn">225 Porsgrunn</option>
                          <option value="230 Larvik">230 Larvik</option>
                          <option value="300 Moss">300 Moss</option>
                          <option value="310 Fredsrikstad">310 Fredrikstad</option>
                          <option value="315 Fredrikstad Sentrum">315 Fredrikstad Sentrum</option>
                          <option value="330 Askim">330 Askim</option>
                          <option value="350 Sarpsborg">350 Sarpsborg</option>
                          <option value="380 Halden">380 Halden</option>
                          <option value="400 Kristiansand">400 Kristiansand</option>
                          <option value="405 Sørlandsparken">405 Sørlandsparken</option>
                          <option value="410 Arendal">410 Arendal</option>
                          <option value="420 Mjåvann">420 Mjåvann</option>
                          <option value="440 Lyngdal">440 Lyngdal</option>
                          <option value="500 Stavanger">500 Stavanger</option>
                          <option value="505 Forus">505 Forus</option>
                          <option value="510 Sandnes">510 Sandnes</option>
                          <option value="515 Kvadrat">515 Kvadrat</option>
                          <option value="520 Haugesund">520 Haugesund</option>
                          <option value="530 Bryne">530 Bryne</option>
                          <option value="560 Stord">560 Stord</option>
                          <option value="600 Bergen">600 Bergen</option>
                          <option value="610 Godvik">610 Godvik</option>
                          <option value="615 Askøy">615 Askøy</option>
                          <option value="620 Os">620 Os</option>
                          <option value="625 Kokstad">625 Kokstad</option>
                          <option value="630 Åsane">630 Åsane</option>
                          <option value="690 Orkdal">690 Orkdal</option>
                          <option value="700 Tiller">700 Tiller</option>
                          <option value="705 Tunga">705 Tunga</option>
                          <option value="710 Leangen">710 Leangen</option>
                          <option value="720 Stjørdal">720 Stjørdal</option>
                          <option value="725 Steinkjer">725 Steinkjer</option>
                          <option value="730 Ålesund">730 Ålesund</option>
                          <option value="750 Molde">750 Molde</option>
                          <option value="760 Kristiansund">760 Kristiansund</option>
                          <option value="800 Bodø">800 Bodø</option>
                          <option value="805 Narvik">805 Narvik</option>
                          <option value="810 Tromsø" >810 Tromsø</option>
                          <option value="815 Langnes" >815 Langnes</option>
                          <option value="820 Mo i rana" >820 Mo i rana</option>
                          <option value="830 Harstad" >830 Harstad</option>
                          <option value="870 Alta" >870 Alta</option>



                        </select>
              </div>
          </div>
    </section>
  

    <section class="m-5">
    
    <h2 class="h1-responsive font-weight-bold text-center my-5">Bil informasjon</h2>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6">
            <label for="regNummer" class="">Regnummer</label>
              <input type="text" id="regNummer" name="regnummer" class="form-control" placeholder="Regnummer" required="required">
            </div>

            <div class="col-md-6">
              <label for="skadetrute" class="">Type rute</label>
              <select class="browser-default custom-select mb-4" type="text" id="skadetrute" name="skadetrute" class="form-control" required="required">
                <option value="" selected disabled>Velg rute</option>
                <option value="Front" >Front</option>
                <option value="Side">Side</option>
              </select>
            </div>

            <div class="col-md-6">
              <label for="bilmodell" class="">Model</label>
              <input type="text" id="bilmodell" name="bilmodell" class="form-control" placeholder="Bilmodel" required="required">
            </div>

            <div class="col-md-6">
              <label for="merke" class="">Merke</label>
              <select class="browser-default custom-select mb-4" type="text" id="merke" name="merke" class="form-control" required="required">
              <option value="" selected disabled>Velg Merke</option>
                <option value="Adria" >Adria</option>
                <option value="Ahorn">Ahorn</option>
                <option value="Alligro">Alligro</option>
                <option value="Andrade">Andrade</option>
                <option value="Arca">Arca</option>
                <option value="Autostar">Autostar</option>
                <option value="Bavaria">Bavaria</option>
                <option value="Benimar">Benimar</option>
                <option value="Bûrstner">Bûrstner</option>
                <option value="Camper Monoscocca">Camper Monoscocca</option>
                <option value="Carado">Carado</option>
                <option value="Carthago">Carthago</option>
                <option value="Challenger">Challenger</option>
                <option value="Chausson">Chausson</option>
                <option value="Ci">Ci</option>
                <option value="City van">City van</option>
                <option value="Concorde">Concorde</option>
                <option value="Dethleffs">Dethleffs</option>
                <option value="Dream">Dream</option>
                <option value="Elnagh">Elnagh</option>
                <option value="Eriba">Eriba</option>
                <option value="Esterel">Esterel</option>
                <option value="Etrvsco">Etrvsco</option>
                <option value="Euramobil">Euramobil</option>
                <option value="Evm">Evm</option>
                <option value="Fleurette">Fleurette</option>
                <option value="Florium">Florium</option>
                <option value="Forster">Forster</option>
                <option value="Frankia">Frankia</option>
                <option value="Giotttiline">Giotttiline</option>
                <option value="Hymer">Hymer</option>
                <option value="Itineo">Itineo</option>
                <option value="Kabe">Kabe</option>
                <option value="Kentucky">Kentucky</option>
                <option value="Knaus">Knaus</option>
                <option value="La boheme">La boheme</option>
                <option value="Laika">Laika</option>
                <option value="Le voyageur">Le voyageur</option>
                <option value="Lexa">Lexa</option>
                <option value="Lmc">Lmc</option>
                <option value="Malibu">Malibu</option>
                <option value="Maurer">Maurer</option>
                <option value="Mc Loius">Mc Loius</option>
                <option value="Miller">Miller</option>
                <option value="Mirage">Mirage</option>
                <option value="Mobilvetta">Mobilvetta</option>
                <option value="Mooveo">Mooveo</option>
                <option value="Morelo">Morelo</option>
                <option value="Niesmann + Bischoff">Niesmann + Bischoff</option>
                <option value="Nobel art-palmo">Nobel art-palmo</option>
                <option value="Notin">Notin</option>
                <option value="Oxygen">Oxygen</option>
                <option value="Phoenix">Phoenix</option>
                <option value="Pilote">Pilote</option>
                <option value="Rapido">Rapido</option>
                <option value="Rimor">Rimor</option>
                <option value="Rmb">Rmb</option>
                <option value="Roller team">Roller team</option>
                <option value="Safari Ways">Safari Ways</option>
                <option value="Sunlight">Sunlight</option>
                <option value="T.e.c">T.e.c</option>
                <option value="Tabbert">Tabbert</option>
                <option value="Vario mobil">Vario mobil</option>
                <option value="Vôlkner">Vôlkner</option>
                <option value="Wanner">Wanner</option>
                <option value="Weinsberg">Weinsberg</option>
              </select>
            </div>

            <div class="col-md-6">
              <label for="årsmodel" class="">Årsmodell?</label>
              <input type="number" id="årsmodel" name="årsmodel" class="form-control" required="required">
            </div>

            
          </div>
        </div>
      </div>
  </section>
  <hr>
<!-- car details -->
  <section class="m-5">
    <h2 class="h1-responsive font-weight-bold text-center my-5">Bil detaljer</h2>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
        <div class="col-md-6">
              <label for="oppvarmet" class="">El-oppvarmet?</label>
              <select class="browser-default custom-select mb-4" type="text" id="oppvarmet" name="oppvarmet" class="form-control" required="required">
                <option value="" selected disabled>Velg ja eller nei?</option>
                <option value="Ja" >Ja</option>
                <option value="Nei">Nei</option>
              </select>
            </div>

            <div class="col-md-6">
            <label for="festet" class="">Limt eller gummilist</label>
            <select class="browser-default custom-select mb-4" type="text" id="festet" name="festet" class="form-control" required="required">
              <option value="" disabled selected>Velg limt eller gummilist</option>
              <option value="Limt" >Limt</option>
              <option value="Gummilist">Gummilist</option>
            </select>
          </div>

          <div class="col-md-6 mb-5">
              <label for="width_top" class="">Høyde topp midt på ruten</label>
            <div class="md-form">
              <input type="number" id="width_top" min="600" max="1800" name="breddetopp" class="form-control" placeholder="Bredde topp i mm" required="required">
            </div>  
          </div>

          <div class="col-md-6">
              <label for="width_bottom" class="">Bredde bunn</label>
            <div class="md-form">
              <input type="number" id="width_bottom" min="1500" max="3000" name="breddebunn" class="form-control" placeholder="Bredde bunn i mm">
            </div>  
          </div>

        
        </div>
 
      </div>
    </div>
  </section>

  <hr>

  <section class="mb-4">
      <h2 class="h1-responsive font-weight-bold text-center my-5">Bilder</h2>
      <div class="row">
        <div class="col-lg-6 col-md-6">
        <h3 class="mb-2 py-2">Bilde av foran på kjøretøy</h3>
          <input type="file" name="fileone" id="image-one-tag" onchange="readURL(this);" data-height="500" required="required"/>
        </div>
        <div class="col-lg-6 col-md-6">
        <h3 class="mb-2 py-2">Bilde av siden av kjøretøy</h3>
        <input type="file" name="filetwo" id="image-two-tag'" onchange="readURL(this);" data-height="500" required="required" />
        </div>
        <div class="col-lg-6 col-md-6">
        <h3 class="mb-2 py-2">Bilde av dotnr</h3>
        <input type="file" name="filethree" id="image-three-tag" onchange="readURL(this);" data-height="500" required="required"/>
        </div> 
      </div>
  </section>
  <!-- car images 
  <section class="mb-4">
    <h2 class="h1-responsive font-weight-bold text-center my-5">Bilder</h2>
    <div class="row">
      <div class="col-lg-6">
           <input type="file" class="form-control-file" id="file" name="file" accept=".jpg, .png, .jpeg" onchange="readURL(this);" data-height="500" required="required" />
      </div>
      <div class="col-md-6">
         <img id="blah" src="front.png" alt="Ta bilde forfra" />
      </div>
    </div>
  </section>-->

  <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="md-form">
          <textarea  type="text" id="message" name="melding" rows="4" class="form-control md-textarea" placeholder="Melding"></textarea>
        </div>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-6 col-xl-8 text-center">
      <div class="my-3">
        <!-- onclick="validateform(event)" -->
        <input type="submit"  class="btn btn-primary btn-lg btn-block" name="submit" > 
      </div>
      <div class="status" id="status"></div>
    </div>
    </div>

    
    </form>

</div>


    
<!-- java script -->

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="functions.js"></script>

</body>
</html>