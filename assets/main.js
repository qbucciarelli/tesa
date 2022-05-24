// Webpack Imports
import * as bootstrap from "bootstrap";
// import { animationCaps } from "./js/_animationsCaps";
import { animationsRings } from "./js/_animationsRings";
import { animationProduct } from "./js/_animationProduct";

(function () {
  ("use strict");

  //GLOBAL JS

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
  var popoverTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="popover"]')
  );

  var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl, {
      trigger: "focus",
    });
  });

  document.querySelectorAll("a.smooth-link").forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
      });
    });
  });

  //Modals

  if (
    document.querySelector("body").classList.contains("page-template-metodo")
  ) {
    var myModal = new bootstrap.Modal(
      document.getElementById("exampleModalCenter")
    );
    document.querySelector(".modal-open").onclick = () => myModal.show();
    document.querySelector(".modal-close").onclick = () => {
      myModal.hide();
      controlVideo("stopVideo");
    };
    document.onclick = () => {
      if (
        (document.getElementById("exampleModalCenter").style.display = "none")
      ) {
        controlVideo("stopVideo");
      }
    };
  }

  function controlVideo(vidcontrol) {
    var div = document.getElementById("video");
    var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
    iframe.postMessage(
      '{"event":"command","func":"' + vidcontrol + '","args":""}',
      "*"
    );
  }

  //Functions calls

  if (document.querySelector("body").classList.contains("home")) {
    // animationCaps();
    animationsRings();
    window.onscroll = function () {
      // animationCaps();
      animationsRings();
    };
  }

  if (
    document.querySelector("body").classList.contains("page-template-producto ")
  ) {
    // animationCaps();
  }
})();
