<?php get_header(); ?>
      
        <section id='hero'>
          <article>
              <h1>Webdesign mit</h1>
              <h1>Sinn und Zweck</h1>
              <h1>und XYZ</h1>
              <button>Angebot einholen</button>
          </article>
        </section>
        
        <h1 class="titleLeistungen">Leistungen</h1>
        <section id="leistungen">
            <div class="col1">
                <h2>Design</h2>
                <a href="#" class="button">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/design.svg" alt="design">
                </a>
            </div>
            <div class="col2">
                <h2>Strategie</h2>
                <a href="#" class="button">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/strategy.svg" alt="strategie">
                </a>
            </div>
            <div class="col3">
                <h2>Consulting</h2>
                <a href="#" class="button">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icons/consulting.svg" alt="consulting">
                </a>
            </div>
        </section>
      
        <h1 class="titleNews">News</h1>
        <section id="news">
              <div class="col1">
                  <h2>#MCMSGA</h2>
                  <p>Es gibt gewaltige Neuigkeiten in der Welt des CMS: Wordpress konfiguriert sich ganz von alleine!</p>
              </div>
              <div class="col2">
                  <h2>#MDGA</h2>
                  <p>Um die Welt von grauenhaft schlechtem Design zu befreien haben findige Designer die neuen 10 Gebote des Responsive design definiert!</p>
              </div>
              <div class="col3">
                  <h2>#MCGA</h2>
                   <p>Sind sie es leid sich mit nervigen Kunden rumzuschlagen die sowieso nie auf ihre Vorschläge hören? Jetzt gibt es den Consultobot der all das Gerede für sie übernimmt</p>
              </div>
        </section>
    
        <h1 class="titleReferences">Referenzen</h1>    
        <section id="referenzen">
              <div class="col1">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/frau.png" alt="frau">
                  <p>Dank dieser tollen Website habe ich nun endlich die Bedeutung hinter diesen Hashtags verstanden!</p>
              </div>
              <div class="col2">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/hase.jpeg" alt="hase">
                  <p>Super endlich mal eine Seite die auch für Hasen optimiert ist!</p>
              </div>
              <div class="col3">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/avatar/mann.jpeg" alt="mann">
                   <p>Tolles Webdesign und super freundliche Menschen!</p>
              </div>
        </section>

<?php get_footer(); ?>