// Webpack Imports
import * as bootstrap from "bootstrap";

(function () {
  ("use strict");

  // Focus input if Searchform is empty
  [].forEach.call(document.querySelectorAll(".search-form"), (el) => {
    el.addEventListener("submit", function (e) {
      var search = el.querySelector("input");
      if (search.value.length < 1) {
        e.preventDefault();
        search.focus();
      }
    });
  });

  // Initialize Popovers: https://getbootstrap.com/docs/5.0/components/popovers
  // var popoverTriggerList = [].slice.call(
  //   document.querySelectorAll('[data-bs-toggle="popover"]')
  // );
  // var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  //   return new bootstrap.Popover(popoverTriggerEl, {
  //     trigger: "focus",
  //   });
  // });

  var heightAnimationContainer = document.querySelectorAll(
    "div.section-animation"
  )[0].clientHeight;

  var section1 = document.querySelectorAll("div.section")[0];
  var section2 = document.querySelectorAll("div.section")[2];

  var distanceToTopAnimation =
    section1.offsetTop -
    section1.scrollTop +
    section1.clientTop +
    section1.clientHeight;

  var distanceBottomToTopSection2 =
    section2.offsetTop - section2.scrollTop + section2.clientTop;

  var step1 = heightAnimationContainer / 6 + distanceToTopAnimation;
  var step2 = heightAnimationContainer / 6 + step1;
  var step3 = heightAnimationContainer / 6 + step2;
  var step4 = heightAnimationContainer / 6 + step3;
  var step5 = heightAnimationContainer / 6 + step4;

  var sectionRing = document.querySelectorAll("div.section-ring")[0];

  var distanceToTopRing = sectionRing.offsetTop - window.innerHeight / 2;

  const counters = document.querySelectorAll(".value");
  const speed = 3000;

  // When the user scrolls the page, execute myFunction
  window.onscroll = function () {
    console.log(distanceToTopRing, window.pageYOffset);
    if (
      distanceToTopAnimation <= window.pageYOffset &&
      step1 > window.pageYOffset
    ) {
      console.log("Step 1");
      document.querySelectorAll("div.cap-2")[0].style.transform =
        "translate(0px, 100px)";
      document.querySelectorAll("div.cap-text-block--1")[0].style.opacity = "0";
      document.querySelectorAll("div.cap-text-block--1")[1].style.opacity = "0";
    }
    if (step1 <= window.pageYOffset && step2 > window.pageYOffset) {
      console.log("Step 2");
      document.querySelectorAll("div.cap-2")[0].style.transform =
        "translate(0px, 50px)";
      document.querySelectorAll("div.cap-text-block--1")[0].style.opacity = "1";
      document.querySelectorAll("div.cap-text-block--1")[1].style.opacity = "1";
      document.querySelectorAll("div.cap-text-block--2")[0].style.opacity = "0";
      document.querySelectorAll("div.cap-text-block--2")[1].style.opacity = "0";
    }
    if (step2 <= window.pageYOffset && step3 > window.pageYOffset) {
      console.log("Step 3");
      document.querySelectorAll("div.cap-2")[0].style.transform =
        "translate(0px, 0px)";
      document.querySelectorAll("div.cap-3")[0].style.opacity = "0";
      document.querySelectorAll("div.cap-text-block--1")[0].style.opacity = "1";
      document.querySelectorAll("div.cap-text-block--1")[1].style.opacity = "1";
      document.querySelectorAll("div.cap-text-block--2")[0].style.opacity = "1";
      document.querySelectorAll("div.cap-text-block--2")[1].style.opacity = "1";
      document.querySelectorAll("div.cap-text-title--1")[0].style.opacity = "1";
      document.querySelectorAll("div.cap-text-title--2")[0].style.opacity = "0";
    }
    if (step3 <= window.pageYOffset && step4 > window.pageYOffset) {
      console.log("Step 4");
      document.querySelectorAll("div.cap-3")[0].style.opacity = "1";
      document.querySelectorAll("div.cap-3")[0].style.transform =
        "translate(0px, 120px)";
      document.querySelectorAll("div.cap-text-block--1")[0].style.opacity = "0";
      document.querySelectorAll("div.cap-text-block--1")[1].style.opacity = "0";
      document.querySelectorAll("div.cap-text-block--2")[0].style.opacity = "0";
      document.querySelectorAll("div.cap-text-block--2")[1].style.opacity = "0";
      document.querySelectorAll("div.cap-text-title--1")[0].style.opacity = "0";
      document.querySelectorAll("div.cap-text-title--2")[0].style.opacity = "1";
      document.querySelectorAll("div.cap-text-block--3")[0].style.opacity = "0";
      document.querySelectorAll("div.cap-text-block--3")[1].style.opacity = "0";
    }

    if (step4 <= window.pageYOffset && step5 > window.pageYOffset) {
      console.log("Step 5");
      document.querySelectorAll("div.cap-3")[0].style.transform =
        "translate(0px, 70px)";
      document.querySelectorAll("div.cap-text-block--3")[0].style.opacity = "1";
      document.querySelectorAll("div.cap-text-block--3")[1].style.opacity = "1";
      document.querySelectorAll("div.cap-text-block--4")[0].style.opacity = "0";
      document.querySelectorAll("div.cap-text-block--4")[1].style.opacity = "0";
    }
    if (
      step5 <= window.pageYOffset &&
      distanceBottomToTopSection2 > window.pageYOffset
    ) {
      console.log("Step 6");
      document.querySelectorAll("div.cap-3")[0].style.transform =
        "translate(0px, 20px)";
      document.querySelectorAll("div.cap-text-block--4")[0].style.opacity = "1";
      document.querySelectorAll("div.cap-text-block--4")[1].style.opacity = "1";
    }
    if (distanceToTopRing > window.pageYOffset) {
      setProgress1(0);
      setProgress2(0);
      setProgress3(0);
      count0();
    }
    if (distanceToTopRing <= window.pageYOffset) {
      setProgress1(75);
      setProgress2(97);
      setProgress3(50);
      runCount();
    }
  };

  //ringAnimation
  var circle1 = document.querySelector("circle.circle1");
  var circle2 = document.querySelector("circle.circle2");
  var circle3 = document.querySelector("circle.circle3");
  var radius1 = circle1.r.baseVal.value;
  var radius2 = circle2.r.baseVal.value;
  var radius3 = circle3.r.baseVal.value;
  var circumference1 = radius1 * 2 * Math.PI;
  var circumference2 = radius2 * 2 * Math.PI;
  var circumference3 = radius3 * 2 * Math.PI;

  circle1.style.strokeDasharray = `${circumference1} ${circumference1}`;
  circle1.style.strokeDashoffset = `${circumference1}`;
  circle2.style.strokeDasharray = `${circumference2} ${circumference2}`;
  circle2.style.strokeDashoffset = `${circumference2}`;
  circle3.style.strokeDasharray = `${circumference3} ${circumference3}`;
  circle3.style.strokeDashoffset = `${circumference3}`;

  setProgress1(0);
  setProgress2(0);
  setProgress3(0);

  function setProgress1(percent) {
    const offset = circumference1 - (percent / 100) * circumference1;
    circle1.style.strokeDashoffset = offset;
  }
  function setProgress2(percent) {
    const offset = circumference2 - (percent / 100) * circumference2;
    circle2.style.strokeDashoffset = offset;
  }
  function setProgress3(percent) {
    const offset = circumference3 - (percent / 100) * circumference3;
    circle3.style.strokeDashoffset = offset;
  }

  function runCount() {
    counters.forEach((counter) => {
      const animate = () => {
        const value = +counter.getAttribute("akhi");
        const data = +counter.innerText;

        const time = value / speed;
        if (data < value) {
          counter.innerText = Math.ceil(data + time);
          setTimeout(animate, 30);
        } else {
          counter.innerText = value;
        }
      };

      animate();
    });
  }

  function count0() {
    counters.forEach((counter) => {
      const animate = () => {
        const value = 0;
        const data = +counter.innerText;

        const time = value / speed;
        if (data < value) {
          counter.innerText = Math.ceil(data + time);
          setTimeout(animate, 30);
        } else {
          counter.innerText = value;
        }
      };

      animate();
    });
  }
})();
