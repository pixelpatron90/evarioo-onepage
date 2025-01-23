<?php

$portfolio = require(src/portfolio.php);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="./assets/js/layout.js"></script>
    <link href="./assets/css/layout.compiled.css" rel="stylesheet" />
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <title>Alexander Bergmann</title>
  </head>
  <body>
    <div class="wrapper-outside">
      <div class="wrapper-inside">
        <header>
          <div class="flex justify-end mb-3">
            <div>
              <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 p-1.5">
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    fill-rule="evenodd"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </button>
            </div>
          </div>
          <div class="intro">
            <img class="evarioo" src="./assets/images/evarioo.jpg" width="62" height="62" alt="evarioo" />
            <div class="details">
              <h1 class="name">Alexander Bergmann</h1>
              <p class="info">Webentwicklung: Mein Hobby, deine Vision.</p>
            </div>
            <div class="action animate__animated animate__fadeInDown">
              <a href="#">Freelancer</a>
            </div>
          </div>
        </header>

        <main>
          <section id="experience">
            <h1>Erfahrung</h1>
            <div class="mt-6">
              <article>
                <div class="flex flex-row gap-5">
                  <div>
                    <div class="icon">
                      <i class="fa-solid fa-hexagon-nodes fa-lg"></i>
                    </div>
                  </div>
                  <div>
                    <h1>Webentwicklung</h1>
                    <p>Ich bin seit 2018 in der Webentwicklung tätig und habe seitdem viele Projekte umgesetzt. Ich habe Erfahrung in der Entwicklung von Webseiten, Webanwendungen und Webshops. Ich arbeite mit den neuesten Technologien und Frameworks, um die besten Ergebnisse zu erzielen.</p>
                  </div>
                </div>
              </article>
              <article>
                <div class="flex flex-row gap-5">
                  <div>
                    <div class="icon">
                      <i class="fa-solid fa-hexagon-nodes fa-lg"></i>
                    </div>
                  </div>
                  <div>
                    <h1>Webentwicklung</h1>
                    <p>Ich bin seit 2018 in der Webentwicklung tätig und habe seitdem viele Projekte umgesetzt. Ich habe Erfahrung in der Entwicklung von Webseiten, Webanwendungen und Webshops. Ich arbeite mit den neuesten Technologien und Frameworks, um die besten Ergebnisse zu erzielen.</p>
                  </div>
                </div>
              </article>
              <article>
                <div class="flex flex-row gap-5">
                  <div>
                    <div class="icon">
                      <i class="fa-solid fa-hexagon-nodes fa-lg"></i>
                    </div>
                  </div>
                  <div>
                    <h1>Webentwicklung</h1>
                    <p>Ich bin seit 2018 in der Webentwicklung tätig und habe seitdem viele Projekte umgesetzt. Ich habe Erfahrung in der Entwicklung von Webseiten, Webanwendungen und Webshops. Ich arbeite mit den neuesten Technologien und Frameworks, um die besten Ergebnisse zu erzielen.</p>
                  </div>
                </div>
              </article>
            </div>
          </section>

          <section id="portfolio">
            <h1>Portfolio</h1>
            <div>
              <div class="animate__animated animate__zoomIn">
                <h1>Lorem Ipsum</h1>
                <img src="https://preview.cruip.com/devfolio/images/tutorial-01.jpg" />
              </div>
              <div class="animate__animated animate__zoomIn">
                <h1>Lorem Ipsum</h1>
                <img src="https://preview.cruip.com/devfolio/images/tutorial-01.jpg" />
              </div>
            </div>
          </section>

          <section id="recommendations">
            <h1>Empfehlungen</h1>
            <div class="mt-6">
              <div x-data="carousel()" x-init="startAutoplay()" class="relative w-full max-w-3xl overflow-hidden">
                <!-- Slides -->
                <div class="flex transition-transform duration-500 ease-out" :style="`transform: translateX(-${currentIndex * 100}%)`">
                  <div class="w-full flex-shrink-0">
                    <article>
                      <div class="flex flex-row gap-5">
                        <div>
                          <div class="icon">
                            <i class="fa-solid fa-hexagon-nodes fa-lg"></i>
                          </div>
                        </div>
                        <div>
                          <h1>Thorsten</h1>
                          <h3>Inhaber von www.mygserv.de</h3>
                          <p>Alexander hat in einem anspruchsvollen Sponsoring-Projekt seine technischen Fähigkeiten erfolgreich eingebracht und maßgeblich zum Erfolg beigetragen. Als Techniker übernahm er die Verantwortung für die technische Umsetzung und Betreuung, wobei er stets professionell, zuverlässig und zielorientiert arbeitete.</p>
                          <p class="website">
                            <i class="fa-solid fa-link me-2"></i>
                            www.mygserv.de
                          </p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="w-full flex-shrink-0">
                    <article>
                      <div class="flex flex-row gap-5">
                        <div>
                          <div class="icon">
                            <i class="fa-solid fa-hexagon-nodes fa-lg"></i>
                          </div>
                        </div>
                        <div>
                          <h1>Thorsten</h1>
                          <h3>Inhaber von www.mygserv.de</h3>
                          <p>Alexander hat in einem anspruchsvollen Sponsoring-Projekt seine technischen Fähigkeiten erfolgreich eingebracht und maßgeblich zum Erfolg beigetragen. Als Techniker übernahm er die Verantwortung für die technische Umsetzung und Betreuung, wobei er stets professionell, zuverlässig und zielorientiert arbeitete.</p>
                          <p class="website">
                            <i class="fa-solid fa-link me-2"></i>
                            www.mygserv.de
                          </p>
                        </div>
                      </div>
                    </article>
                  </div>
                  <div class="w-full flex-shrink-0">
                    <article>
                      <div class="flex flex-row gap-5">
                        <div>
                          <div class="icon">
                            <i class="fa-solid fa-hexagon-nodes fa-lg"></i>
                          </div>
                        </div>
                        <div>
                          <h1>Thorsten</h1>
                          <h3>Inhaber von www.mygserv.de</h3>
                          <p>Alexander hat in einem anspruchsvollen Sponsoring-Projekt seine technischen Fähigkeiten erfolgreich eingebracht und maßgeblich zum Erfolg beigetragen. Als Techniker übernahm er die Verantwortung für die technische Umsetzung und Betreuung, wobei er stets professionell, zuverlässig und zielorientiert arbeitete.</p>
                          <p class="website">
                            <i class="fa-solid fa-link me-2"></i>
                            www.mygserv.de
                          </p>
                        </div>
                      </div>
                    </article>
                  </div>
                </div>
              </div>

              <script>
                function carousel() {
                  return {
                    slides: [1, 2, 3],
                    currentIndex: 0,
                    interval: null,
                    startAutoplay() {
                      this.interval = setInterval(() => {
                        this.next();
                      }, 5000);
                    },
                    stopAutoplay() {
                      clearInterval(this.interval);
                    },
                    next() {
                      this.currentIndex = (this.currentIndex + 1) % this.slides.length;
                    },
                    goTo(index) {
                      this.currentIndex = index;
                    },
                  };
                }
              </script>
            </div>
          </section>
        </main>

        <footer>
          <div class="logo">
            <?xml version="1.0" encoding="UTF-8"?>
            <svg class="fill-white dark:fill-gray-400" width="280" version="1.1" viewBox="0 0 210.38 86.833" xmlns="http://www.w3.org/2000/svg">
              <g transform="translate(40.182 -142.39)">
                <path d="m-40.182 142.7v86.43h36.329l-1.8681-12.347h-20.878v-26.547h16.863l-1.8676-12.347h-14.995v-22.843h11.54l-1.8676-12.347zm36.96 0 0.082165 0.62012v-0.62012z" />
                <path
                  d="m46.602 142.43v2.8009l13.582 78.102v-31.514h4.6917c3.128 0 5.3096 0.78213 6.5443 2.3461 1.317 1.564 1.9756 4.3213 1.9756 8.2724v15.805c0 3.2103 0.08238 5.4326 0.24701 6.6673 0.16463 1.2347 0.49365 2.5518 0.98754 3.9512h9.278v-39.677c-1.3682-2.0651-3.3429-3.4984-5.9443-4.2788v-0.24701c2.5183-1.0143 4.4961-2.6295 5.9443-4.8328v-30.093c-0.54811-0.87029-1.1683-1.6613-1.8697-2.3626-3.2103-3.2926-8.3139-4.9387-15.311-4.9387zm13.582 12.347h6.1738c2.3871 0 4.1156 0.69975 5.1857 2.0991 1.1524 1.3994 1.7286 3.6628 1.7286 6.7908v6.6678c0 3.2926-0.69975 5.6385-2.0991 7.0378-1.317 1.3994-3.3339 2.0991-6.0503 2.0991h-4.9387zm-13.582 68.044v6.0394h13.582v-0.26768l-12.668 0.13177z"
                />
                <path d="m149.58 228.78q-10.001 0-15.311-5.5191-5.3093-5.5191-5.3093-15.598v-44.153q0-10.078 5.3093-15.598 5.3093-5.5191 15.311-5.5191 10.001 0 15.311 5.5191 5.3093 5.5191 5.3093 15.598v44.153q0 10.078-5.3093 15.598-5.3093 5.5191-15.311 5.5191zm0-11.998q7.0379 0 7.0379-8.2787v-45.833q0-8.2787-7.0379-8.2787-7.0379 0-7.0379 8.2787v45.833q0 8.2787 7.0379 8.2787z" aria-label="o" />
                <path d="m-15.869 142.7 13.088 86.524h18.027l13.088-86.524h-12.471l-8.8899 67.118h-0.24701l-8.8899-67.118z" />
                <path d="m45.063 142.47-18.396 0.1912-0.0057 0.0362h2.7316l-13.061 86.344 9.7539-0.1018 2.2929-16.909 15.433-0.1602-0.0026-0.24649 2.6484 17.103 13.581-0.14107zm-9.4733 15.134 6.4952 42.575-12.223 0.12764 5.4808-42.7z" />
                <path d="m84.966 142.43v86.43h13.582v-8.756c-1.9505-3.3127-2.928-7.4612-2.928-12.449v-44.153c0-4.9879 0.97738-9.1366 2.928-12.449v-8.6232z" />
                <path
                  d="m117.3 142.39c-6.6675 0-11.771 1.8396-15.31 5.519-3.5395 3.6794-5.3092 8.8786-5.3092 15.598v44.153c0 6.7189 1.7697 11.918 5.3092 15.597 3.5395 3.6794 8.6427 5.519 15.31 5.519 6.6675 0 11.771-1.8396 15.311-5.519 0.1032-0.10728 0.19952-0.22034 0.29972-0.33021-3.336-3.6582-5.009-8.7444-5.009-15.267v-44.153c0-6.5229 1.673-11.609 5.009-15.267-0.1002-0.10987-0.19652-0.22293-0.29972-0.33021-3.5395-3.6794-8.6432-5.519-15.311-5.519zm0 11.998c4.6919 0 7.0383 2.76 7.0383 8.2791v45.832c0 5.5191-2.3464 8.2791-7.0383 8.2791-4.6919 0-7.0378-2.76-7.0378-8.2791v-45.832c0-5.5191 2.3459-8.2791 7.0378-8.2791z"
                />
              </g>
            </svg>
          </div>
          <div class="social">
            <ul>
              <li>
                <a href="#">
                  <i class="fa-brands fa-github"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa-brands fa-facebook-f"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa-brands fa-discord"></i>
                </a>
              </li>
            </ul>
          </div>
          <p>&copy; 2021 <a href="#">evarioo.eu</a> | Alle Rechte vorbehalten.</p>
        </footer>
      </div>
    </div>
    <script src="./assets/js/darklight.js"></script>
    <script src="./assets/js/carousel.js"></script>
  </body>
</html>
