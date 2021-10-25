if (document.querySelector("body").classList.contains("home")) {
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
}

export const animationCaps = () => {
  if (
    distanceToTopAnimation > window.pageYOffset &&
    document.querySelectorAll(".cap-animation ")[0].style.position !==
      "absolute"
  ) {
    document.querySelectorAll(".cap-animation ")[0].style.position = "absolute";
  }

  if (
    distanceToTopAnimation <= window.pageYOffset &&
    document.querySelectorAll(".cap-animation ")[0].style.position !== "fixed"
  ) {
    document.querySelectorAll(".cap-animation ")[0].style.position = "fixed";
    document.querySelectorAll(".cap-animation ")[0].style.bottom = "inherit";
    document.querySelectorAll(".cap-animation ")[0].style.top = "0";
  }
  if (distanceToTopAnimation - window.innerHeight / 2 > window.pageYOffset) {
    document.querySelectorAll("div.cap-1")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-2")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-text-block--1")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-text-block--1")[0].style.zIndex = "1";
    document.querySelectorAll("div.cap-text-block--1")[0].style.transform =
      "translateX(-50px)";

    document.querySelectorAll("div.cap-icon-1")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-text-block--1")[0].style.zIndex = "10";
    document.querySelectorAll("div.cap-icon-1")[0].style.transform =
      "translateX(50px)";
    document.querySelectorAll("div.cap-icon-2")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-text-block--1")[0].style.zIndex = "10";
    document.querySelectorAll("div.cap-icon-2")[0].style.transform =
      "translateX(-50px)";
  }
  if (
    distanceToTopAnimation - window.innerHeight / 2 <= window.pageYOffset &&
    step1 > window.pageYOffset
  ) {
    console.log("Step 1");
    document.querySelectorAll("div.cap-1")[0].style.opacity = "1";
    document.querySelectorAll("div.cap-2")[0].style.opacity = "1";
    document.querySelectorAll("div.cap-2")[0].style.transform =
      "translate(0px, 50px)";
    document.querySelectorAll("div.cap-text-block--1")[0].style.opacity = "1";
    document.querySelectorAll("div.cap-text-block--1")[0].style.zIndex = "10";
    document.querySelectorAll("div.cap-text-block--1")[0].style.transform =
      "translateX(0)";
    document.querySelectorAll("div.cap-text-block--2")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-text-block--2")[0].style.zIndex = "1";
    document.querySelectorAll("div.cap-text-block--2")[0].style.transform =
      "translateX(-50px)";

    document.querySelectorAll("div.cap-icon-1")[0].style.opacity = "1";
    document.querySelectorAll("div.cap-icon-1")[0].style.transform =
      "translateX(-10px)";
    document.querySelectorAll("div.cap-icon-2")[0].style.opacity = "1";
    document.querySelectorAll("div.cap-icon-2")[0].style.transform =
      "translateX(10px)";
    document.querySelectorAll("div.cap-icon-3")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-icon-3")[0].style.transform =
      "translateX(50px)";
    document.querySelectorAll("div.cap-icon-4")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-icon-4")[0].style.transform =
      "translateX(-50px)";
  }
  if (step1 <= window.pageYOffset && step2 > window.pageYOffset) {
    console.log("Step 2");
    document.querySelectorAll("div.cap-2")[0].style.transform =
      "translate(0px, -10px)";
    document.querySelectorAll("div.cap-3")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-text-block--1")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-text-block--1")[0].style.zIndex = "1";
    document.querySelectorAll("div.cap-text-block--1")[0].style.transform =
      "translateX(50px)";
    document.querySelectorAll("div.cap-text-block--2")[0].style.opacity = "1";
    document.querySelectorAll("div.cap-text-block--2")[0].style.zIndex = "10";
    document.querySelectorAll("div.cap-text-block--2")[0].style.transform =
      "translateX(0)";
    document.querySelectorAll("div.cap-text-block--3")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-text-block--3")[0].style.zIndex = "1";
    document.querySelectorAll("div.cap-text-block--3")[0].style.transform =
      "translateX(-50px)";

    document.querySelectorAll("div.cap-icon-1")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-icon-1")[0].style.transform =
      "translateX(50px)";
    document.querySelectorAll("div.cap-icon-2")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-icon-2")[0].style.transform =
      "translateX(-50px)";
    document.querySelectorAll("div.cap-icon-3")[0].style.opacity = "1";
    document.querySelectorAll("div.cap-icon-3")[0].style.transform =
      "translateX(-10px)";
    document.querySelectorAll("div.cap-icon-4")[0].style.opacity = "1";
    document.querySelectorAll("div.cap-icon-4")[0].style.transform =
      "translateX(10px)";
    document.querySelectorAll("div.cap-icon-5")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-icon-5")[0].style.transform =
      "translateX(50px)";
    document.querySelectorAll("div.cap-icon-6")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-icon-6")[0].style.transform =
      "translateX(-50px)";
  }
  if (step2 <= window.pageYOffset && step3 > window.pageYOffset) {
    console.log("Step 3");

    document.querySelectorAll("div.cap-2")[0].style.transform =
      "translate(0px, -70px)";
    document.querySelectorAll("div.cap-3")[0].style.opacity = "1";
    document.querySelectorAll("div.cap-3")[0].style.transform =
      "translate(0px, 90px)";

    document.querySelectorAll("div.cap-text-block--2")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-text-block--2")[0].style.zIndex = "1";
    document.querySelectorAll("div.cap-text-block--2")[0].style.transform =
      "translateX(50px)";
    document.querySelectorAll("div.cap-text-block--3")[0].style.opacity = "1";
    document.querySelectorAll("div.cap-text-block--3")[0].style.zIndex = "10";
    document.querySelectorAll("div.cap-text-block--3")[0].style.transform =
      "translateX(0)";
    document.querySelectorAll("div.cap-text-block--4")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-text-block--4")[0].style.zIndex = "1";
    document.querySelectorAll("div.cap-text-block--4")[0].style.transform =
      "translateX(-50px)";

    document.querySelectorAll("div.cap-icon-3")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-icon-3")[0].style.transform =
      "translateX(50px)";
    document.querySelectorAll("div.cap-icon-4")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-icon-4")[0].style.transform =
      "translateX(-50px)";
    document.querySelectorAll("div.cap-icon-5")[0].style.opacity = "1";
    document.querySelectorAll("div.cap-icon-5")[0].style.transform =
      "translateX(-10px)";
    document.querySelectorAll("div.cap-icon-6")[0].style.opacity = "1";
    document.querySelectorAll("div.cap-icon-6")[0].style.transform =
      "translateX(10px)";
    document.querySelectorAll("div.cap-icon-7")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-icon-7")[0].style.transform =
      "translateX(50px)";
    document.querySelectorAll("div.cap-icon-8")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-icon-8")[0].style.transform =
      "translateX(-50px)";
  }
  if (step3 <= window.pageYOffset && step4 > window.pageYOffset) {
    console.log("Step 4");

    document.querySelectorAll("div.cap-3")[0].style.transform =
      "translate(0px, 30px)";

    document.querySelectorAll("div.cap-text-block--3")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-text-block--3")[0].style.zIndex = "1";
    document.querySelectorAll("div.cap-text-block--3")[0].style.transform =
      "translateX(50px)";
    document.querySelectorAll("div.cap-text-block--4")[0].style.opacity = "1";
    document.querySelectorAll("div.cap-text-block--4")[0].style.zIndex = "10";
    document.querySelectorAll("div.cap-text-block--4")[0].style.transform =
      "translateX(0)";
    document.querySelectorAll("div.cap-text-block--5")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-text-block--5")[0].style.zIndex = "1";
    document.querySelectorAll("div.cap-text-block--5")[0].style.transform =
      "translateX(-50px)";

    document.querySelectorAll("div.cap-icon-5")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-icon-5")[0].style.transform =
      "translateX(50px)";
    document.querySelectorAll("div.cap-icon-6")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-icon-6")[0].style.transform =
      "translateX(-50px)";
    document.querySelectorAll("div.cap-icon-7")[0].style.opacity = "1";
    document.querySelectorAll("div.cap-icon-7")[0].style.transform =
      "translateX(-10px)";
    document.querySelectorAll("div.cap-icon-8")[0].style.opacity = "1";
    document.querySelectorAll("div.cap-icon-8")[0].style.transform =
      "translateX(10px)";
    document.querySelectorAll("div.cap-icon-9")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-icon-9")[0].style.transform =
      "translateX(50px)";
    document.querySelectorAll("div.cap-icon-10")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-icon-10")[0].style.transform =
      "translateX(-50px)";
  }

  if (step4 <= window.pageYOffset && step5 > window.pageYOffset) {
    console.log("Step 5");

    document.querySelectorAll("div.cap-3")[0].style.transform =
      "translate(0px, -30px)";

    document.querySelectorAll("div.cap-text-block--4")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-text-block--4")[0].style.zIndex = "1";
    document.querySelectorAll("div.cap-text-block--4")[0].style.transform =
      "translateX(50px)";
    document.querySelectorAll("div.cap-text-block--5")[0].style.opacity = "1";
    document.querySelectorAll("div.cap-text-block--5")[0].style.zIndex = "10";
    document.querySelectorAll("div.cap-text-block--5")[0].style.transform =
      "translateX(0)";

    document.querySelectorAll("div.cap-icon-7")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-icon-7")[0].style.transform =
      "translateX(50px)";
    document.querySelectorAll("div.cap-icon-8")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-icon-8")[0].style.transform =
      "translateX(-50px)";
    document.querySelectorAll("div.cap-icon-9")[0].style.opacity = "1";
    document.querySelectorAll("div.cap-icon-9")[0].style.transform =
      "translateX(-10px)";
    document.querySelectorAll("div.cap-icon-10")[0].style.opacity = "1";
    document.querySelectorAll("div.cap-icon-10")[0].style.transform =
      "translateX(10px)";
  }
  if (
    step5 <= window.pageYOffset &&
    distanceBottomToTopSection2 > window.pageYOffset
  ) {
    console.log("Step 6");

    document.querySelectorAll("div.cap-icon-5")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-icon-5")[0].style.transform =
      "translateX(50px)";
    document.querySelectorAll("div.cap-icon-6")[0].style.opacity = "0";
    document.querySelectorAll("div.cap-icon-6")[0].style.transform =
      "translateX(-50px)";
  }
  if (
    distanceBottomToTopSection2 - window.innerHeight <= window.pageYOffset &&
    document.querySelectorAll(".cap-animation ")[0].style.position !==
      "absolute"
  ) {
    document.querySelectorAll(".cap-animation ")[0].style.position = "absolute";
    document.querySelectorAll(".cap-animation ")[0].style.bottom = "0";
    document.querySelectorAll(".cap-animation ")[0].style.top = "inherit";
  }
};
