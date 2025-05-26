<?php
include('./functions.php');

function setheader() {
  echo '<header>';
    echo '<div class="header container">';
      echo '<div class="logo">';
        h1('Barbare Tsikhelashvili', 'logo');
      echo '</div>';
      echo '<nav class="nav">';
        a('Home', '#');
        a('About Me', '#about');
        a('Projects', '#projects');
        a('Contact', '#contact');
        a('Download Resume', './My Resume (1).pdf');
      echo '</nav>';
    echo '</div>';
  echo '</header>';
}

function setaboutme($datas) {
  echo '<section id="about" class="about-section">';
    echo '<div class="container">';
      h1('About Me');
      echo '<div class="about-content">';
      echo '<div class="about-left">';
        img('./assets/me1.jpg', 'profile-img');
        echo '</div>';
        echo '<div class="about-right">';
        echo '<p class="about-text">I am Barbare Tsikhelashvili, a passionate student from Tbilisi with interests in coding, design, space, and video-editing. I am fluent in Georgian and English, and I strive to achieve success through creativity and hard work.</p>';
       
        echo '</div>';
      echo '</div>';
    echo '</div>';
  echo '</section>';
}

function setprojects() {
  echo '<section id="projects" class="projects-section">';
    echo '<div class="container">';
      h1('📁Projects', 'projects-title');
      echo '<div class="projects">';
        projectcard('Luxventus', 'Modern UI HTML/CSS template', 'https://github.com/sabaggg09/luxventus.git');
        projectcard('Mico HTML', 'Clean static website structure', 'https://github.com/04beka/mico-html.git');
      echo '</div>';
    echo '</div>';
  echo '</section>';
}

function projectcard($title, $desc, $link) {
  echo '<div class="project-card">';
    h2($title,'project-title');
    echo "<p class='project-title'>$desc</p>";
    a('View on GitHub', $link, 'btn project-btn');
  echo '</div>';
}

function setresume() {
  echo '<section class="resume-section">';
    echo '<div class="container">';
      h1('💼Resume', 'resume-title');
      a('Download Resume', './My Resume (1).pdf', 'btn resume-btn');
    echo '</div>';
  echo '</section>';
}

function setcontact() {
  echo '<section id="contact" class="contact-section">';
    echo '<div class="container">';
      h1('📬Contact Me', 'contact-title');
      echo '<p class="contact-sub">I’d love to hear from you! Reach out below:</p>';
      echo '<ul class="contact-list">';
        echo '<li><strong>Email:</strong> <a href="mailto:tsikhelashvilibarbare03@gmail.com">tsikhelashvilibarbare03@gmail.com</a></li>';
        echo '<li><strong>Phone:</strong> 555 525 623</li>';
        echo '<li><strong>Location:</strong> Tbilisi, Georgia</li>';
      echo '</ul>';
    echo '</div>';
  echo '</section>';
}

