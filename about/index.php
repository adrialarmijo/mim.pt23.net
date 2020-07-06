<!DOCTYPE html>
<html lang="en-US">
  <head>
    <?php include('../include/head.inc.php');?>
    <meta name="description" content="Resume Overview">
    <title>Resume Overview</title>

    <!--- Page Specific Resources -->
    <link rel="stylesheet" href="css/resume_overview.css">

  </head>
  <body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">
        <span class="d-block d-lg-none"></span>
        <span class="d-none d-lg-block">
          <img class="img-profile rounded-circle mx-auto mb-2" src="me.jpg" alt="Profile Picture" >
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <span class="d-xs-block d-sm-block d-md-block d-lg-none d-xl-none float-right">
          <img class="img-profile rounded-circle mx-auto mb-2" src="me.jpg" alt="Profile Picture" id="mobileProfilePic">
        </span>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#education">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../">Back to MIM</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid p-0">
      <section class="resume-section" id="about">
        <div class="resume-section-content">
          <h1 class="mb-0">Adrial
            <span class="text-primary">Armijo</span>
          </h1>
          <div class="subheading mb-5">Chino Hills, CA ·
            <a href="mailto:name@email.com">adrial.armijo@gmail.com</a>
          </div>
          <p class="lead mb-5">Seeking Web Developer work that allows for implementation of communication, service, and design skills to the programming essentials</p>
          <div class="social-icons">
          <a id="printMe" href="/about/print/resume.html">
              <i class="fas fa-print"></i>
              <script>
                var link = document.getElementById('printMe');                   
                link.download = "AdrialArmijo_web-resume.pdf";             
            </script> 
            </a>         
            <a href="https://www.linkedin.com/in/adrial-armijo/">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://www.github.com/adrialarmijo">
              <i class="fab fa-github"></i>
            </a>
            <a href="https://www.twitter.com/music_surrounds">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.facebook.com/adrial.armijo">
              <i class="fab fa-facebook-f"></i>
            </a>
          </div>
        </div>
        
      </section>

      <hr class="m-0">
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="experience">
        <div>
          <h2 class="mb-5">Experience</h2>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Solutions Engineer</h3>
              <div class="subheading mb-3">Capital Group, Irvine CA</div>
              <ul>
                <li>Participate as an active member of an agile team using scrum practices, including the Atlassian Suite (Jira, Confluence, Bamboo) with two-week sprint cycles. Use SCRUM for agile development and participate in team-led solutions, reviewing peer’s code for quality and completeness</li>
                <li>Participate and quality test during releases as the team project moves through development, staging, and production environments</li>
                <li>Develop end to end front-end solutions for product feature using Thymeleaf, Javascript, REST API calls with integration of salesforce.com</li>
                <li>Assist in developing feature enhancement with unit tests for back-end using Java stack and Spring technologies</li>
                <li>Maintain copy edits on an application, provided by copy editors for legal compliance using HTML/CSS/Typescript in an Angular framework</li>
              </ul>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">March 2019 - present</span>
            </div>
          </div>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">Information Technology Student Assistant</h3>
              <div class="subheading mb-3">CSU Fullerton, Auxiliary Services Corp.</div>
              <ul>
                <li>Achieve data migration through getting, compiling, and analyzing data from enterprise resource planning (ERP) solutions and advanced Microsoft Excel formulas</li>
                <li>Communicate product sales history to senior management through assemble and distribution of legacy system data for migration to DB1 with SQL applications</li>
                <li>Adapt through attendance of training conference for cloud-based data integration system and apply learned SaaS content to workflow</li>
                <li>Integrate online ERP solutions to end-user systems through setup, monitor, and maintenance of point of sales (POS) terminals</li>
                <li>Promote self-growth through maintenance on self-guided progress in each assigned project</li>
              </ul>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">November 2018 - March 2019</span>
            </div>
          </div>        
        </div>
      </section>
      <hr class="m-0">
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="education">
        <div>
          <h2 class="mb-5">Education</h2>
          <div class="resume-item d-flex flex-column flex-md-row mb-5">
            <div class="resume-content mr-auto">
              <h3 class="mb-0">California State University</h3>
              <div class="subheading mb-3">Bachelor of Science</div>
              <div>Computer Science - Media &amp; Game Design</div>
              <div>
                <ul>
                  <li>Relevant electives:</li>
                  <ul>
                    <li>CPSC 489 Game Development Project</li>
                    <li>CPSC 486 Game Programming</li>
                    <li>CPSC 484 Principles of Computer Graphics</li>
                    <li>CPSC 386 Intro to Game Design</li>
                  </ul>
                  <li>Relevant projects:</li>
                  <ul>
                    <li>"Stinky Shoe Clicker" - self-orignated game design, programmed and implemented by myself and small team in python-pygame Geany Ubuntu </li>
                    <li>"Ball Maze" - self-originated game design, programmed and implemented by myself and one other in C++ using Unreal Engine Windows/Mac and Visual Studio/Xcode</li>
                    <li>OpenGL Vertex Shader - class project in C++/OpenGL using Geany Ubuntu Matte</li>
                    <li>OpenGL Camera - class project in C++/OpenGL using Geany Ubuntu Matte</li>
                    <li>OpenGL projects were submitted using a private student/class github repository</li>
                  </ul>
                </ul>
              </div>
            </div>
            <div class="resume-date text-md-right">
              <span class="text-primary">August 2013 - December 2018</span>
            </div>
          </div>
        </div>
      </section>
      <hr class="m-0">
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="skills">
        <div>
          <h2 class="mb-5">Skills</h2>
          <div class="subheading mb-3">Interpersonal</div>
          <ul>
            <li>Communication</li>
            <li>Teamwork</li>
            <li>Data compiliation &amp; analytics</li>
            <li>Problem solving</li>
            <li>Technical troubleshooting</li>
          </ul>
          <div class="subheading mb-3">Programming Languages &amp; Tools</div>
          <ul>
            <li>Beginner: Java, Java Stack, Angular, JavaScript</li>
            <li>Intermediate: C/C++, HTML/CSS</li>
            <li>Learning: React, React Native, PHP</li>
            <li>Tools: Spring, Maven, Visual Studio Code, git bash, Microsoft Office Suite</li>
          </ul>
          <div class="subheading mb-3">Workflow</div>
          <ul class="fa-ul mb-0">
            <li>
              <i class="fa-li fa fa-check"></i>
              Mobile-First, Responsive Design</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Object Oriented &amp; Agile Development</li>
            <li>
              <i class="fa-li fa fa-check"></i>
              Cross Functional Teams</li>
          </ul>
        </div>
      </section>
      <hr class="m-0">
      <section class="resume-section p-3 p-lg-5 d-flex flex-column" id="interests">
        <div>
          <h2 class="mb-5">Interests</h2>
          <p>In my spare time I enjoy exploring new sights. My most recent trip was to King's Canyon, CA. where I went camping with my family. The waterfalls are very peaceful.</p>
          <p class="mb-0">When indoors, which is most of the time, I worship streaming video services and religously binge shows, I casually enjoy my melee damage role in World of Warcraft and I spend a large amount of my free time following new technology industry developments within computer hardware.</p>
          <p class="mb-0">I love to build custom PCs, just recently upgraded my previous build.</p>
        </div>
      </section>
      <hr class="m-0">     
    </div>
  </body>
</html>
