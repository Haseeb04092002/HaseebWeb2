// typing text animation script
var typed = new Typed(".HeroTyping1", {
  strings: ["Wordpress", "PHP", "JavaScript", "Bootstrap","HTMl", "CSS"],
  typeSpeed: 60,
  backSpeed: 40,
  loop: true,
});


// Get the button
let mybutton = document.getElementById("TopBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}




document.addEventListener('DOMContentLoaded', () => {
  const progressCircle = document.querySelector('circle');
  const progressSection = document.getElementById('skills');
  
  const Wordpress_number = document.getElementById('Wordpress_number');
  const JavaScript_number = document.getElementById('JavaScript_number');
  const PHP_number = document.getElementById('PHP_number');
  const SQL_number = document.getElementById('SQL_number');
  
  const sectionOffsetTop = progressSection.offsetTop;
  let hasAnimated = false;

  const animateProgress = () => {

    let Wordpress = 0;
    let JavaScript = 0;
    let PHP = 0;
    let SQL = 0;
    let HTML = 0;
    let CSS = 0;
    let Bootstrap = 0;
    let React = 0;
    
    // Wordpress interval
    let Wordpressinterval = setInterval(() => {
      if (Wordpress >= 80) {
        clearInterval(interval);
      } else {
        Wordpress += 1;
        Wordpress_number.textContent = `${Wordpress}%`;
      }
    }, 25);

    // JavaScript interval
    let JavaScriptinterval = setInterval(() => {
      if (JavaScript >= 75) {
        clearInterval(interval);
      } else {
        JavaScript += 1;
        JavaScript_number.textContent = `${JavaScript}%`;
      }
    }, 20);

    // PHP interval
    let PHPinterval = setInterval(() => {
      if (PHP >= 70) {
        clearInterval(interval);
      } else {
        PHP += 1;
        PHP_number.textContent = `${PHP}%`;
      }
    }, 20);

    // SQL interval
    let SQLinterval = setInterval(() => {
      if (SQL >= 60) {
        clearInterval(interval);
      } else {
        SQL += 1;
        SQL_number.textContent = `${SQL}%`;
      }
    }, 20);

    // HTML interval
    let HTMLinterval = setInterval(() => {
      if (HTML >= 90) {
        clearInterval(interval);
      } else {
        HTML += 1;
        HTML_number.textContent = `${HTML}%`;
      }
    }, 20);

    // CSS interval
    let CSSinterval = setInterval(() => {
      if (CSS >= 90) {
        clearInterval(interval);
      } else {
        CSS += 1;
        CSS_number.textContent = `${CSS}%`;
      }
    }, 20);

    // Bootstrap interval
    let Bootstrapinterval = setInterval(() => {
      if (Bootstrap >= 80) {
        clearInterval(interval);
      } else {
        Bootstrap += 1;
        Bootstrap_number.textContent = `${Bootstrap}%`;
      }
    }, 20);

    // React interval
    let Reactinterval = setInterval(() => {
      if (React >= 70) {
        clearInterval(interval);
      } else {
        React += 1;
        React_number.textContent = `${React}%`;
      }
    }, 20);
    

  };

  window.addEventListener('scroll', () => {
    const scrollY = window.scrollY + window.innerHeight;
    if (scrollY > sectionOffsetTop && !hasAnimated) {
      hasAnimated = true;
      
      document.querySelector('.Wordpress').classList.add('Wordpress-show-progress');
      document.querySelector('.JavaScript').classList.add('JavaScript-show-progress');
      document.querySelector('.PHP').classList.add('PHP-show-progress');
      document.querySelector('.SQL').classList.add('SQL-show-progress');
      document.querySelector('.HTML').classList.add('HTML-show-progress');
      document.querySelector('.CSS').classList.add('CSS-show-progress');
      document.querySelector('.Bootstrap').classList.add('Bootstrap-show-progress');
      document.querySelector('.React').classList.add('React-show-progress');

      animateProgress();
    }
  });
});