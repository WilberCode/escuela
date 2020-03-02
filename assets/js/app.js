// you can import modules from the theme lib or even from
// NPM packages if they support it…
import ExampleComponent1 from "./components/ExampleComponent1";

// you can also require modules if they support it…
const ExampleModule2 = require('./components/example-2');

// Some convenient tools to get you started…
import ReplaceObfuscatedEmailAddresses from "./components/ReplaceObfuscatedEmailAddresses";
import AnimateOnPageLinks from "./components/AnimateOnPageLinks";


// Initialise our components on jQuery.ready…
// jQuery(function ($) {
//     ExampleComponent1.init();
//     ExampleModule2.init();
//     ReplaceObfuscatedEmailAddresses.init();
//     AnimateOnPageLinks.init();
// });
  
 
// const ExampleModule5 = require('./materialize/materialize.min.js');
import './materialize/materialize.min.js'
 

// Shorthand 
const Id = document.getElementById.bind(document)
const className = document.getElementsByClassName.bind(document)
const tagName = document.getElementsByTagName.bind(document)

// Toggle and Menu 
let navToggle = Id('nav-toggle')
let nav = Id('header-nav')

navToggle.addEventListener('click', () => {
  navToggle.classList.toggle('nav-toggle-active')
  nav.classList.toggle('nav-active')
  console.log('hola')

})

// Id('menu').addEventListener('click', (e) => {
//   nav.classList.toggle('nav-active')
//   navToggle.classList.toggle('nav-toggle-active')
// })



M.AutoInit(); 

// Start ScrollSpy
// document.addEventListener('DOMContentLoaded', function () {
//     var elems = document.querySelectorAll('.scrollspy');
//     var instances = M.ScrollSpy.init(elems, options); 

// }); 
//   End ScrollSpy
// var instance = M.Tabs.init(el, options);

// Start Tabs
 

// End Tabs



// Start Pushpin
 

//  window.onscroll = function () {
//      myFunction()
//  };

//  var tab = document.getElementById("tab");
//  var sticky = tab.offsetTop;

//  function myFunction() {
//      if (window.pageYOffset >= sticky) {
//          tab.classList.add("sticky")
//      } else {
//          tab.classList.remove("sticky");
//      }
//  }

//   End Pushpin
 

// fetch('http://localhost:8080/wordpress/escuela/index.php/wp-json/eventos/destacados').then((res) => res.json()).then((res) => console.log(res))

 
  instance.destroy();

