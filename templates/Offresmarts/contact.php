<section id="inner-headline">
    <div class="container">
    <div class="row">
        <div class="span4">
        <div class="inner-heading">
            <h2>CONTACTS</h2>
        </div>
        </div>
        <div class="span8">
        <ul class="breadcrumb">
            <li><a href="<?= $this->Url->build(['controller' => 'Offresmarts', 'action' => 'index']); ?>"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
            <!--<li><a href="#">Pages</a><i class="icon-angle-right"></i></li>-->
            <li class="active">Contacts</li>
        </ul>
        </div>
    </div>
    </div>
</section>





<section id="content">
    <div class="container">
    <div class="row">
        <div class="span12">
            <h4><strong>Nous localiser</strong></h4>
            </div>
        </div>

        <!-- divider -->
        <div class="row">
            <div class="span12">
            <div class="solidline">
            </div>
            </div>
        </div>
        <!-- end divider -->
    </div>


    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>

<div class="container">
  <div class="row">
    <div class="span12">
      <h4><strong>Ecrivez nous</strong></h4>

      <form action="" method="post" role="form" class="contactForm">
        <div id="sendmessage">Votre message a bien été envoyé. Merci!</div>
        <div id="errormessage"></div>

        <div class="row">
          <div class="span4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validation"></div>
          </div>
          <div class="span4 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Votre adresse Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validation"></div>
          </div>
          <div class="span4 form-group">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validation"></div>
          </div>
          <div class="span12 margintop10 form-group">
            <textarea class="form-control" name="message" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Votre Message"></textarea>
            <div class="validation"></div>
            <p class="text-center">
              <button class="btn btn-large btn-theme margintop10" type="submit">Envoyer</button>
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


</section>





<?= $this->element('footer'); ?>
