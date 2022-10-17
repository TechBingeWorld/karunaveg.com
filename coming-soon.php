
    <link rel="stylesheet" href="assets/css/fontawesome.css">


<style>
    /* Dark theme colors */

/* Primary theme colors */
body[data-theme='light_theme'] {
  --white: #48AA91;
  /* --bg-color: #F8F8F8; */
  --bg-color: #48AA91;
  /* --color: #333; */
  --color: #fff;
  --secondary-color: #ff7f57;
  --icon-bg-color: #fff;   
  --icon-color: #fff;
}

body {
  background: var(--bg-color);
  color: var(--color);
  /* text-align: left; */
}

body[data-theme='dark_theme'] {
  --white: #fff;
  --bg-color: #000;
  --color: #fff;
  --secondary-color: #ff7f57;
  --icon-bg-color: #333;   
  --icon-color: #fff;
}

@keyframes fadeIn {
  from {top: 20%; opacity: 0;}
  to {top: 100; opacity: 1;}
  
}

@-webkit-keyframes fadeIn {
  from {top: 20%; opacity: 0;}
  to {top: 100; opacity: 1;}
  
}

.wrapper {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  animation: fadeIn 1000ms ease;
  -webkit-animation: fadeIn 1000ms ease;
  
}

h1 {
  font-size: 84px;
  text-align: center;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 0;
  line-height: 1;
  font-weight: 700;
}

.dot {
  color: var(--secondary-color);
}

p {
  text-align: center;
  margin: 34px;
  font-family: 'Muli', sans-serif;
  font-weight: normal;
}

.icons {
  text-align: center;
}

.icons i {
  color: var(--white);
  background: var(--icon-bg-color);
  height: 15px;
  width: 15px;
  padding: 13px;
  margin: 0 10px;
  border-radius: 50px;
  border: 2px solid transparent;
  transition: all 200ms ease;
  text-decoration: none;
  position: relative;
}

.icons i:hover, .icons i:active {
  color: var(--icon-color);
  background: none;
  border-color: var(--icon-bg-color);
  cursor: pointer !important;
  transform: scale(1.2);
  -webkit-transform: scale(1.2);
  text-decoration: none;
}


</style>

<body data-theme="light_theme" >
    <div class="wrapper text-start">
      <hr>
    <h1>Coming soon<span class="dot">.</span></h1>
    <p>We are building our website.</p>
    <br>
    <div class="icons">
    <a href="https://www.facebook.com/Karuna-Veg-101730179236012" target="_blank"><i class="fa fa-facebook"></i></a>
      <a href="https://www.instagram.com/karuna.veg/" target="_blank"><i class="fa fa-instagram"></i></a>
      <a href=""><i class="fa fa-twitter"></i></a>
      <a href=""><i class="fa fa-youtube-play"></i></a>
      <a href=""><i class="fa fa-linkedin"></i></a>
    </div>
   </div>
  </body>