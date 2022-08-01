   <!--CONTENT -->
   <!-- ABAOUT ME -->

   <section id="me">
       <div class="container">
           <div class="row no-gutters">
               <div class="col-lg-4"></div>
               <div class="col-lg-4 pt-5 px-5 perfil">
                   <div class="card">
                       <img class="card-img-top" src="images/perfil02.jpg" alt="Foto de Martin">
                       <div class="card-body px-0 text-center">
                           <h2 class="card-title verde">Martin Mele</h2>
                           <p class="card-text my-0">Graphic Designer<br>UX/UI Dev</p>
                       </div>
                       <a class="btn btn-outline btn-lg mb-5" href="files/cv-martin-mele.pdf" target="_blank" role="button">CV DOWNLOAD</a>
                       <!--
                        <button type="button" class="btn btn-outline- btn-lg mb-5" href="files/cv_martin_mele.pdf" target="_blank">CV DOWNLOAD</button>
                    -->
                   </div>
               </div>
               <div class="col-lg-4"></div>
           </div>
       </div>
   </section>
   <!-- END ABAOUT ME -->
   <!-- END BIOGRAPHY -->
   <section id="bio" class="pb-5">
       <h1 class="text-center">BIOGRAPHY</h1>
       <div class="container">
           <div class="row no-gutters">
               <div class="col-lg-6 pt-lg-5 pr-lg-5 pt-4 bioInfo">
                   <p>Technology fan since 1986, the day I received my Atari 800XL and started programming in Basic.</p>
                   <p>I obtained a Bachelor's Degree in Graphic Design in 2000 and began to develop in the various fields in which my career is closely related to digital media and Internet, focusing on UI / UX.</p>
                   <p>I worked in advertising agencies with multidisciplinary teams doing websites with Action Script 2 and 3 initially; then PHP, HTML5, CSS3 and JavaScript.</p>
                   <p>Continually seek to perfect myself and learn. Teamwork has enabled me to enrich myself on a professional and personal level, as well as enhancing creativity in solving objectives.</p>
               </div>
               <div class="col-lg-6 pt-lg-5 pl-lg-5 pt-4 bioSkills">
                   <h2 class="verde"><i class="fa fa-cog fa-spin fa-fw"></i> expertise</h2>

                   <ul class="list-inline pt-md-2">
                       <li class="list-inline-item"><i class="fa fa-bicycle fa-2x" aria-hidden="true"></i></li>
                       <li class="list-inline-item float-right"><i class="fa fa-graduation-cap fa-2x" aria-hidden="true"></i></li>
                   </ul>
                   <div>
                       <div class="progress">
                           <div class="progress-bar progress-bar-striped progress-bar-animated verde" role="progressbar" style="width: 97%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" aria-label="Expertise HTML 97%">HTML-HTML5</div>
                       </div>
                   </div>

                   <div>
                       <div class="progress">
                           <div class="progress-bar progress-bar-striped progress-bar-animated verde" role="progressbar" style="width: 90%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" aria-label="Expertise CSS,SASS 90%">CSS3-SASS-SASSY</div>
                       </div>
                   </div>

                   <div>
                       <div class="progress">
                           <div class="progress-bar progress-bar-striped progress-bar-animated agua" role="progressbar" style="width: 45%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" aria-label="Expertise Angular 45%">Angular 5+</div>
                       </div>
                   </div>
                   
                   <div>
                       <div class="progress">
                           <div class="progress-bar progress-bar-striped progress-bar-animated agua" role="progressbar" style="width: 35%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" aria-label="Expertise javascript 35%">JavaScript</div>
                       </div>
                   </div>
                   <div>
                       <div class="progress">
                           <div class="progress-bar progress-bar-striped progress-bar-animated agua" role="progressbar" style="width: 26%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" aria-label="Expertise Xamarin 26%">Xamarin (.net)</div>
                       </div>
                   </div>
                   <div>
                       <div class="progress">
                           <div class="progress-bar progress-bar-striped progress-bar-animated rojo" role="progressbar" style="width: 23%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" aria-label="Expertise php 25%">Php</div>
                       </div>
                   </div>
                   <div>
                       <div class="progress">
                           <div class="progress-bar progress-bar-striped progress-bar-animated rojo" role="progressbar" style="width: 17%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" aria-label="Expertise HTML 15%">Python</div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <!-- END BIOGRAPHY -->


   <!-- CONTACT -->
   <section id="contact" class="pb-5">
       <h1 class="text-center">CONTACT</h1>
       <div class="container mt-5">
           <form id="contacto" role="form" name="contacto" action="mail.php" method="POST">
               <div class="form-row">
                   <div class="col-12 col-lg-6 pb-3 pr-lg-5">
                       <input type="text" aria-label="Nombre" class="form-control form-control-lg" placeholder="Name" id="name" name="name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                       <?php echo "<p class='help-block text-danger'>$errName</p>"; ?>
                   </div>
                   <div class="col-12 col-lg-6 pb-3 pl-lg-5">
                       <input type="email" aria-label="email" class="form-control form-control-lg" placeholder="Email" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                       <?php echo "<p class='help-block text-danger'>$errEmail</p>"; ?>
                   </div>
               </div>
               <div class="form-row">
                   <div class="col-12 pb-3">
                       <textarea class="form-control form-control-lg" rows="6" aria-label="mensaje" placeholder="Message" id="message" name="message" value="<?php echo htmlspecialchars($_POST['message']); ?>"></textarea>
                       <?php echo "<p class='help-block text-danger'>$errMessage</p>"; ?>
                   </div>
               </div>
               <div class="text-right"><button type="submit" id="submit" name="submit" value="Send" class="btn btn-outline- btn-lg mb-3">SEND</button>
               </div>
               <!--center-block-->
               <div class="col-12 col-lg-6 text-center">
                   <div class="form-group" href="#contacto">
                       <?php echo $result; ?>
                   </div>
               </div>
           </form>
       </div>
   </section>

