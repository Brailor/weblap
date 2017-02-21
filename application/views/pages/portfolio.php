<script>
var image = "myproject/assets/img/portfolio-bg.jpg"; var title="Portfolio"; var sub= "Az eddigi projekteim, folyamatos feltöltése alatt, ahogy elkészülnek";
changeBg(image,title,sub);
</script> 
 <div class="row">
            <div class="col-lg-12">
                
                <h1 class="page-header">Weblap
                    <small><a href="http://beartech.hu/" target="_blank">beartech.hu</a></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <iframe src="http://beartech.hu/" width="100%" height="500px"></iframe>
               
            </div>

            <div class="col-md-4">
                <h3 class="hehe">Leírás</h3>
                <p>Ezt az oldalt egy barátom számára készítettem. Az oldalnak nincs backend része, mivel az volt az igény, hogy az oldal csak információközlésre szolgáljon.</p><p>Ebből adódott egy probléma, konkrétan, hogy az email küldést valahogy meg kellett oldalni, szerencsére találtam egy JS alapon működő applikációt, szóval egy sima ajax funckióval lehet emailt küldeni a weblapról.
    
                
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <!-- Modal -->

            <div id="myModal" class="modal">
                  <span class="close">&times;</span>
                  <img class="modal-content" id="img01">
                  <div id="caption"></div>
                </div>

            <div class="col-lg-12">
                <h3 class="page-header">Fotók:</h3>
            </div>
            
            <div class="col-sm-6 col-xs-12 ">
                    <img class="img-responsive portfolio-item modal-pic" id="modal-0" onmousedown="modalFunc(this)" src="<?php echo base_url();?>myproject/assets/img/site-page-1-1.png" alt="Faldiagnosztika 1">
                
            </div>
            <div class="col-sm-6 col-xs-12 ">
                    <img class="img-responsive portfolio-item modal-pic" id="modal-1" onmousedown="modalFunc(this)" src="<?php echo base_url();?>myproject/assets/img/site-page-1-2.png" alt="Faldiagnosztika 2">
            </div>

            <div class="col-sm-6 col-xs-12 ">
                    <img class="img-responsive portfolio-item modal-pic" id="modal-2" onmousedown="modalFunc(this)" src="<?php echo base_url();?>myproject/assets/img/site-page-2-1.png" alt="">
            </div>

            <div class="col-sm-6 col-xs-12 ">
                    <img class="img-responsive portfolio-item modal-pic" id="modal-3" onmousedown="modalFunc(this)" src="<?php echo base_url();?>myproject/assets/img/site-page-2-2.png" alt="">
            </div>
            <div class="col-sm-6 col-xs-12 col-sm-offset-3">
                    <img class="img-responsive portfolio-item modal-pic" id="modal-3" onmousedown="modalFunc(this)" src="<?php echo base_url();?>myproject/assets/img/site-contact.png" alt="">
            </div>


        </div>
         <div class="row">
            <div class="col-lg-12">
                <hr>
                <h1 class="page-header">MEAN stack projektek
                    <small>Heroku</small>
                </h1>
            </div>
        </div>
       

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <a href="https://url-shortener-brailor.herokuapp.com/" target="_blank"><img class="img-responsive" src="<?php echo base_url();?>myproject/assets/img/url-shortener.png" alt="Url shortener microservice"></a>
            </div>

            <div class="col-md-4">
                <h3 class="hehe">Projekt Leírás</h3>
                <p>Ezeket az appokat a MEAN stack tanulása közben írtam. Az appokat a Heroku oldalon hosztolom, amin ki is lehet próbálni őket(katt a képekre).</p>
                <h3>Mikroalkalmazások:</h3>
                <ul>
                    <li>Timestamp microservice <a href="https://github.com/Brailor/ffc-timestamp-api" target="_blank">(kód)</a></li>
                    <li>Header parser microservice <a href="https://github.com/Brailor/ffc-req-header-parser-microservice" target="_blank">(kód)</a></li>
                    <li>Url-shortener microservice <a href="https://github.com/Brailor/ffc-url-shortener" target="_blank">(kód)</a></li>
                    <li>Authentication Webapp <a href="https://github.com/Brailor/mean-auth-project" target="_blank">(kód)</a> #Heroku-ra deportálás még folyamatban#</li>
                    <li><del>File Metadata Microservice <a href="#"> (kód)</a></del></li>
                </ul>
            </div>

        </div>
        

        
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Projektek képei</h3>
            </div>
            
            <div class="col-md-6 col-xs-12 ">
                    <a href="https://timestamp-brailor.herokuapp.com/" target="_blank"><img class="img-responsive portfolio-item" src="<?php echo base_url();?>myproject/assets/img/timestamp.png" alt="Timestamp microservice"></a>
                
            </div>
            <div class="col-md-6 col-xs-12 ">
                    <a href="https://brailor-header-req.herokuapp.com/" target="_blank"><img class="img-responsive portfolio-item"  src="<?php echo base_url();?>myproject/assets/img/header-parser.png" alt="Header Parser microservice"></a>
            </div>

            <div class="col-md-6 col-xs-12 ">
                    <a href="https://github.com/Brailor/mean-auth-project" target="_blank"><img class="img-responsive portfolio-item"  src="<?php echo base_url();?>myproject/assets/img/auth-1.png" alt="MEAN Authentication Webapp Login"></a>
            </div>

            <div class="col-md-6 col-xs-12 ">
                    <a href="https://github.com/Brailor/mean-auth-project" target="_blank"><img class="img-responsive portfolio-item " src="<?php echo base_url();?>myproject/assets/img/auth-3.png" alt="MEAN Authentication Webapp Register"></a>
            </div>


        </div>
        

         <div class="row">
            <div class="col-lg-12">
                <hr>
                <h1 class="page-header">CodePen projektek
                    <small>Frontend JS</small>
                </h1>
            </div>
        </div>
       

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <a href="http://codepen.io/Brailor/pen/GNyoPb" target="_blank"><img class="img-responsive" src="<?php echo base_url();?>myproject/assets/img/weather.png" alt="Weather webapp"></a>
            </div>

            <div class="col-md-4">
                <h3 class="hehe">Projekt Leírás</h3>
                <p>Ezeket az appokat a Frontend tanulása közben csináltam(om). A projekteket a CodePen.io oldalon hosztolom, a képekre kattintva meg is jelennek.</p>
                <h3>Miniappok:</h3>
                <ul>
                    <li>Weather Webapp<a href="http://codepen.io/Brailor/pen/GNyoPb" target="_blank"> (kód)</a></li>
                    <li>Wiki Search Webapp<a href="https://codepen.io/Brailor/pen/zojyKV" target="_blank"> (kód)</a></li>
                    <li>Random Quote Generator<a href="https://codepen.io/Brailor/pen/KNZbjg" target="_blank"> (kód)</a></li>
                    <li>Twitch API <a href="https://codepen.io/Brailor/pen/xRaxwr" target="_blank"> (kód)</a></li>
                
                </ul>
            </div>

        </div>
        

        
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">Projektek képei</h3>
            </div>
            
            <div class="col-md-6 col-xs-12 ">
                    <a href="https://codepen.io/Brailor/pen/zojyKV" target="_blank"><img class="img-responsive portfolio-item"  src="<?php echo base_url();?>myproject/assets/img/wiki.png" alt="Wiki Search API"></a>
                
            </div>
            <div class="col-md-6 col-xs-12 ">
                    <a href="https://codepen.io/Brailor/pen/KNZbjg" target="_blank"><img class="img-responsive portfolio-item" src="<?php echo base_url();?>myproject/assets/img/quote.png" alt="Random Quote Generator"></a>
            </div>
               
        </div>
       
        <div class="row">
            <div class="col-lg-12">
                 <hr>
                <h1 class="page-header">Az első programozási projektem
                    <small>Kuka Robot</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
               <video controls width="700">
                   <source src="<?php echo base_url();?>myproject/assets/img/kuka.mp4" type="video/mp4">
                   <source src="<?php echo base_url();?>myproject/assets/img/kuka.ogv" type="video/ogv">
                    Úgy néz ki a böngésződ nem támogatja ezt a videó formátumot. :(
               </video>
            </div>

            <div class="col-md-4">
                <h3 class="hehe">Projekt Leírása:</h3>
                <p>Ez volt az első 'igazi' projektem, ami bevezetett a programozás világába. Igaz nem számítógépes programról volt szó, de az alapokat ez adta.</p><p>A feladat az volt, hogy egy 5x5-ös mezőben random módón elhelyezett fehér-fekete labdákat kellett valamilyen séma szerint sorba helyezni(a videón már 6x6-ra lett bővítve a mező, viszont még az 5x5-re írt program fut rajta). Arra a megoldásra jutottunk, hogy soronként rendezzük a labdákat, amíg van egy adott színből(tehát amíg van fehér labda, addig az adott sor csak fehér labdát fog tartalmazni). További probléma volt még, hogy a meglévő felvelő szerszám nem volt alkalmas a labdák felvevésére, mivel összetörte volna őket, erre a megoldás a lenti képen látható. </p>
                <h3>Projekt részletei:</h3>
                <ul>
                    <li>5x5(később 6x6) mezőn sorba rendezni a random labdákat</li>
                    <li>Megfogó szerszám átalakítása</li>
                    
                </ul>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <!-- Modal -->

            <div id="myModal" class="modal">
                  <span class="close">&times;</span>
                  <img class="modal-content" id="img01">
                  <div id="caption"></div>
                </div>

            <div class="col-lg-12">
                <h3 class="page-header">Kapcsolódó kép(ek):</h3>
            </div>
            
            <div class="col-sm-8 col-sm-offset-2 col-xs-12" >
                    <img class="img-responsive modal-pic" id="modal-0" onmousedown="modalFunc(this)" src="<?php echo base_url();?>myproject/assets/img/kuka.jpg" alt="Kuka robot felépítse, 1/3: pneumatikus felvevőegységek, 2: optikai szenzor, 4: meglévő megfogó, amit le kellett cserélni, mivel ez összetörte volna a labdákat">
                
            </div>
            

            

        </div>
      
     

        