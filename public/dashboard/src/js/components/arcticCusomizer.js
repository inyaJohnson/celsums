"use_strict";

var ArcticCustomizer = (function() {
  var secondarySidebarLayout = document.querySelector(
    ".narrow-sidebar"
  );

  //customizer
  var arcticCustomSettings = document.querySelector(
    ".sidebar-customizer-settings"
  );
  var arcticCustomizer = document.querySelector(".egret-customizer");
  var arcticCustomizerClose = document.querySelector(".customizer-close");

  var closeCustomizer = function() {
    ULUtil.removeClass(arcticCustomizer, "show");
    ULUtil.removeClass(arcticCustomizer, "collapse");
  };

  var initArcticCustomizer = function() {
    if (!arcticCustomizer) {
      return;
    }
    if(arcticCustomSettings) {
      arcticCustomSettings.addEventListener("click", function() {
        if (arcticCustomizer) {
          ULUtil.hasClass(arcticCustomizer, "show")
            ? ULUtil.removeClass(arcticCustomizer, "show")
            : ULUtil.addClass(arcticCustomizer, "show");
        }
      });
    }
    
    if(arcticCustomizerClose) {
      arcticCustomizerClose.addEventListener("click", function() {
        closeCustomizer();
      });
    }
    

    //egret customizer color sidebar-theme

    var addColors = document.querySelectorAll("[data-sidebar-color]");
    var adminWrapLayout1 = document.querySelector(".app-admin-wrap-layout-1");

    addColors.forEach(element => {
      element.addEventListener("click", function() {
        var sidebarThemeClass = ULUtil.attr(element, "data-sidebar-color");
        ULUtil.removeClassByPrefix(adminWrapLayout1, "sidebar-theme");
        ULUtil.addClass(adminWrapLayout1, sidebarThemeClass);
      });
    });

    secondarySidebarLayout.addEventListener(
      "secondarySidebarClose",
      function() {
        closeCustomizer();
      }
    );
  };

  return {
    init: function() {
      initArcticCustomizer();
    }
  };
})();

jQuery(document).ready(function() {
  ArcticCustomizer.init();
});
