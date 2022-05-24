const counters = document.querySelectorAll(".value");
const speed = 3000;

if (document.querySelector("body").classList.contains("home")) {
  var sectionRing = document.querySelectorAll("div.section-ring")[0];
  var distanceToTopRing = sectionRing.offsetTop - window.innerHeight / 2;

  //ringAnimation
  var circle1 = document.querySelector("circle.circle1");
  // var circle2 = document.querySelector("circle.circle2");
  // var circle3 = document.querySelector("circle.circle3");
  var radius1 = circle1.r.baseVal.value;
  // var radius2 = circle2.r.baseVal.value;
  // var radius3 = circle3.r.baseVal.value;
  var circumference1 = radius1 * 2 * Math.PI;
  // var circumference2 = radius2 * 2 * Math.PI;
  // var circumference3 = radius3 * 2 * Math.PI;

  circle1.style.strokeDasharray = `${circumference1} ${circumference1}`;
  circle1.style.strokeDashoffset = `${circumference1}`;
  // circle2.style.strokeDasharray = `${circumference2} ${circumference2}`;
  // circle2.style.strokeDashoffset = `${circumference2}`;
  // circle3.style.strokeDasharray = `${circumference3} ${circumference3}`;
  // circle3.style.strokeDashoffset = `${circumference3}`;
}

function setProgress1(percent) {
  const offset = circumference1 - (percent / 100) * circumference1;
  circle1.style.strokeDashoffset = offset;
}
// function setProgress2(percent) {
//   const offset = circumference2 - (percent / 100) * circumference2;
//   circle2.style.strokeDashoffset = offset;
// }
// function setProgress3(percent) {
//   const offset = circumference3 - (percent / 100) * circumference3;
//   circle3.style.strokeDashoffset = offset;
// }

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

function count0(counters) {
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

export const animationsRings = () => {
  if (distanceToTopRing > window.pageYOffset) {
    setProgress1(0);
    // setProgress2(0);
    // setProgress3(0);
    count0(counters);
  }
  if (distanceToTopRing <= window.pageYOffset) {
    setProgress1(75);
    // setProgress2(97);
    // setProgress3(100);
    runCount();
  }
};
