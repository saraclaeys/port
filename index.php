<?php include 'includes/header.php'; ?>

<body>
  <!-------------------------------------- main navigation --------------------------------------->
  <a href="#menu" class="menu" role="button">
    <span class="fa fa-reorder"></span>
  </a>

  <nav class="mainnav">
    <ul class="links list-unstyled">
      <li><a href="#about" title="">About me</a></li>
      <li><a href="#experiences" title="">Experiences</a></li>
      <li><a href="#abilities" title="">Abilities</a></li>
      <li><a href="#projects" title="">Projects</a></li>
      <li><a href="#contact" title="">Contact</a></li>
    </ul>
  </nav>

  <!--------------------------------------- main header ---------------------------------------->
  <header class="mainheader parallax-window" data-parallax="scroll" data-image-src="images/banner.jpg">
    <div class="overlay">
      <h1>Sara Claeys</h1>
      <p>Full Stack Developer</p>
    </div>
    <div id="arrow-down">
      <a href="#about"><span></span></a>
    </div>
  </header>

  <!--------------------------------------- main about ---------------------------------------->
  <main>
    <section id="about" class="about">
      <h2>About me</h2>
      <div class="flex-container">
        <div class="about-text">
          <p>
            Hi there! My name is Sara Claeys, 29 years old, born and grew up in
            Ghent, living in Sint-Laureins. And hooked on Web Development.
          </p>
          <hr />
          <p>
            It was just last year that I fell in love with Web Development, as soon as I knew this, I made a career
            change and followed a course at Multimedi to master the basics. It didn't stop there, in my spare time I'm
            working on getting better at coding and learning more. I'd like to join a team of developers who is as
            ambitious I am.
          </p>
          <form method="get" action="cv.pdf" target="_blank">
            <button class="cv" type="submit">Download CV</button>
          </form>
        </div>
        <div class="image-about">
          <img src="images/profielfoto.jpg" alt="profielfoto" class="profielfoto" />
        </div>
      </div>
    </section>
  </main>
  <!--------------------------------------- section experiences ---------------------------------------->
  <section id="experiences" class="experiences">
    <h2>Experiences</h2>
    <article class="education">
      <h3>Education</h3>

      <div class="experience-row">
        <h4>Web Developer</h4>
        <p class="experience-doc">Certificaat<span>2019 - 2020</span></p>
        <p class="experience-location">
          <i class="fa fa-map-marker"></i> Multimedi bvba
        </p>
      </div>

      <div class="experience-row">
        <h4>Boekhoudkundig Bediende</h4>
        <p class="experience-doc">
          Diploma <br />
          Secundair Onderwijs<span>2014 - 2015</span>
        </p>
        <p class="experience-location">
          <i class="fa fa-map-marker"></i> KISP Gent
        </p>
      </div>
    </article>
    <hr />
    <article class="careers">
      <h3>Careers</h3>

      <div class="experience-row">
        <h4>Assistent Filiaalmanager</h4>
        <p class="experience-place">Aldi nv <span>2015 - 2019</span></p>
        <p class="experience-location">
          <i class="fa fa-map-marker"></i> Vlaanderen
        </p>
      </div>

      <div class="experience-row">
        <h4>Coach</h4>
        <p class="experience-place">Pizza Hut <span>2010 - 2014</span></p>
        <p class="experience-location">
          <i class="fa fa-map-marker"></i> Vlaanderen
        </p>
      </div>
    </article>
  </section>

  <!--------------------------------------- section abilities ---------------------------------------->
  <section id="abilities" class="abilities">
    <h2>Abilities</h2>
    <article class="hard-skills">
      <h3>Hard Skills</h3>
      <ul class="no-bullets">
        <div class="left-items">
          <li>
            <span class="ability-title">HTML(5)</span>
            <span class="ability-score">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </span>
          </li>
          <li>
            <span class="ability-title">CSS(3)</span>
            <span class="ability-score">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </span>
          </li>
          <li>
            <span class="ability-title">Bootstrap</span>
            <span class="ability-score">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </span>
          </li>
          <li>
            <span class="ability-title">SCSS / Sass</span>
            <span class="ability-score">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
            </span>
          </li>
          <li>
            <span class="ability-title">JavaScript</span>
            <span class="ability-score">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
            </span>
          </li>
          <li>
            <span class="ability-title">jQuery</span>
            <span class="ability-score">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
            </span>
          </li>
          <li>
            <span class="ability-title">MySQL</span>
            <span class="ability-score">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
            </span>
          </li>
          <li>
            <span class="ability-title">PHP</span>
            <span class="ability-score">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
            </span>
          </li>
        </div>
        <div class="right-items">
          <li>
            <span class="ability-title">Object Orientated Programming</span>
            <span class="ability-score">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
            </span>
          </li>
          <li>
            <span class="ability-title">Command Line Interface</span>
            <span class="ability-score">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
            </span>
          </li>
          <li>
            <span class="ability-title">WordPress</span>
            <span class="ability-score">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
            </span>
          </li>
          <li>
            <span class="ability-title">SEO</span>
            <span class="ability-score">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
            </span>
          </li>
          <li>
            <span class="ability-title">Scrum</span>
            <span class="ability-score">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
            </span>
          </li>
          <li>
            <span class="ability-title">VueJS</span>
            <span class="ability-score">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </span>
          </li>
          <li>
            <span class="ability-title">C#</span>
            <span class="ability-score">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </span>
          </li>
        </div>
      </ul>
    </article>
    <hr />
    <article class="soft-skills">
      <h3>Soft Skills</h3>
      <ul class="no-bullets">
        <li>Goal Orientated</li>
        <li>Reliable</li>
        <li>Sociable</li>
        <li>Flexible</li>
        <li>Obliging</li>
        <li>No Nonsense</li>
        <li>Focused</li>
        <li>Self-conscious</li>
      </ul>
    </article>
    <hr />
  </section>

  <!--------------------------------------- section languages ---------------------------------------->
  <section class="languages">
    <h3>Languages</h3>
    <article class="lang">
      <ul class="no-bullets">
        <li>
          <span class="ability-title">Dutch</span>
          <span class="ability-score">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </span>
        </li>
        <li>
          <span class="ability-title">English</span>
          <span class="ability-score">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </span>
        </li>
        <li>
          <span class="ability-title">French</span>
          <span class="ability-score">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </span>
        </li>
      </ul>
    </article>
    <hr />
  </section>

  <!--------------------------------------- section tools ---------------------------------------->
  <section class="tools">
    <h3>Tools</h3>
    <article class="tool">
      <ul class="no-bullets">
        <li>
          <span class="ability-title">Windows</span>
          <span class="ability-score">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </span>
        </li>
        <li>
          <span class="ability-title">MS Office</span>
          <span class="ability-score">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </span>
        </li>
        <li>
          <span class="ability-title">Visual Studio Code</span>
          <span class="ability-score">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </span>
        </li>
        <li>
          <span class="ability-title">Brackets</span>
          <span class="ability-score">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </span>
        </li>
        <li>
          <span class="ability-title">PHPStorm</span>
          <span class="ability-score">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </span>
        </li>
        <li>
          <span class="ability-title">WampServer</span>
          <span class="ability-score">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </span>
        </li>
        <li>
          <span class="ability-title">Git / Github</span>
          <span class="ability-score">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </span>
        </li>
        <li>
          <span class="ability-title">Trello</span>
          <span class="ability-score">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </span>
        </li>
        <li>
          <span class="ability-title">Firefox</span>
          <span class="ability-score">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </span>
        </li>
        <li>
          <span class="ability-title">Chrome</span>
          <span class="ability-score">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </span>
        </li>
        <li>
          <span class="ability-title">Internet Explorer</span>
          <span class="ability-score">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </span>
        </li>
        <li>
          <span class="ability-title">FileZilla</span>
          <span class="ability-score">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
          </span>
        </li>
      </ul>
    </article>
  </section>

  <!--------------------------------------- projects ---------------------------------------->
  <section id="projects" class="projects">
    <h2>Projects</h2>
    <ul class="no-bullets">
      <li><a href="https://saraclaeys.github.io/aotearoa/" target="_blank"><img src="images/aotearoa.png" alt="" /></a></li>
      <li><a href="https://saraclaeys.github.io/todolist/" target="_blank"><img src="images/todolist.png" alt="" /></a></li>
      <li><a href="https://saraclaeys.github.io/travotel/" target="_blank"><img src="images/travotel.png" alt="" /></a></li>
      <li><a href="https://saraclaeys.github.io/2Dpong/" target="_blank"><img src="images/2dpong.png" alt="" /></a></li>
    </ul>
    <form action="https://github.com/saraclaeys" method="get" target="_blank">
      <button type="submit">See more projects on GitHub</button>
    </form>
  </section>

  <?php include 'includes/footer.php';?>