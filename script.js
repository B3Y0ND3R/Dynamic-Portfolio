document.addEventListener("DOMContentLoaded", function () {
//Text animation
    const words = document.querySelectorAll(".word");
    const animationDelay = 80;
    const transitionDelay = 340;
    const initialWordDelay = 1000;
    const wordDisplayDelay = 1000; 
    const interval = 3000;

    words.forEach((word) => {
        const letters = word.textContent.split("");
        word.textContent = "";
        letters.forEach((letter) => {
            const span = document.createElement("span");
            span.textContent = letter;
            span.className = "letter";
            word.append(span);
        });
    });

    let currentWordIndex = 0;
    const maxWordIndex = words.length - 1;

    const changeText = () => {
        const currentWord = words[currentWordIndex];
        const nextWord = currentWordIndex === maxWordIndex ? words[0] : words[currentWordIndex + 1];

        Array.from(currentWord.children).forEach((letter, i) => {
            setTimeout(() => {
                letter.classList.add("out");
            }, i * animationDelay);
        });

        nextWord.style.opacity = "0";
        Array.from(nextWord.children).forEach((letter, i) => {
            letter.classList.remove("in", "out", "behind");
        });

        setTimeout(() => {
            nextWord.style.opacity = "1";
            Array.from(nextWord.children).forEach((letter, i) => {
                setTimeout(() => {
                    letter.classList.add("in");
                }, (i + 1) * animationDelay);
            });
        }, transitionDelay + wordDisplayDelay); 

        currentWordIndex = currentWordIndex === maxWordIndex ? 0 : currentWordIndex + 1;
    };

    words[currentWordIndex].style.opacity = "1";

    setTimeout(() => {
        changeText();
        setInterval(changeText, interval);
    }, initialWordDelay);


    //read-more and read-less
    const aboutContainer = document.querySelector('.about-cont');
    const readMoreBtn = document.getElementById('read-more');
    const readLessLink = document.getElementById('read-less');

    readMoreBtn.addEventListener('click', function (event) {
        event.preventDefault();
        aboutContainer.classList.add('show-full-description');
        const aboutSection = document.getElementById('about');
        aboutSection.scrollIntoView({
            behavior: 'smooth'
        });
    });

    readLessLink.addEventListener('click', function (event) {
      event.preventDefault();
      aboutContainer.classList.remove('show-full-description');
  });


  //sticky nav color
  var header = document.getElementById("h");
  var navi = document.getElementById("n");

  window.addEventListener("scroll", function () {
      var scrollPosition = window.scrollY;

      if (scrollPosition > 0) {
          header.style.backgroundColor = getComputedStyle(document.documentElement).getPropertyValue('--scroll-bg-color');
          navi.style.backgroundColor = getComputedStyle(document.documentElement).getPropertyValue('--scroll-bg-color');
          
      } else {
          header.style.backgroundColor = getComputedStyle(document.documentElement).getPropertyValue('--bg-color');
          navi.style.backgroundColor = getComputedStyle(document.documentElement).getPropertyValue('--bg-color');

          
      }
  });

  //radial bar
  const radials = document.querySelectorAll('.radial');
  radials.forEach(elem=>{
    var dots = elem.getAttribute("data-dots");
    var marked = elem.getAttribute("data-percent");
    var percent = Math.floor(dots*marked/100);
    var points = "";
    var rotate = 360/ dots;

    for(let i = 0; i < dots; i++){
        points += `<div class="points" style="--i:${i}; --rot:${rotate}deg"></div>`;
    }
    elem.innerHTML = points;

    const pointsMarked = elem.querySelectorAll('.points');
    for(let i = 0; i < percent; i++){
        pointsMarked[i].classList.add('marked');
    }
  })




//form



//color change
const navLinks = document.querySelectorAll("#n a");

window.addEventListener("scroll", function () {
    let current = "";

    navLinks.forEach((link) => {
        link.classList.remove("active");

        const sectionId = link.getAttribute("href").slice(1);
        const section = document.getElementById(sectionId);

        if (section) {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;

            if (pageYOffset >= sectionTop - sectionHeight / 3) {
                current = sectionId;
            }
        }
    });

    const activeLink = document.querySelector(`#n a[href="#${current}"]`);
    if (activeLink) {
        activeLink.classList.add("active");
    }
});


//res-nav
const dropdown = document.querySelector('.dropdown');

dropdown.addEventListener('click', () => {
    dropdown.classList.toggle('active');
});










});



