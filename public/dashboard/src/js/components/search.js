"use_strict";

var UlSearch = (function () {
  var adminWrap = document.querySelector("div[class^='app-admin-wrap-layout']");
  var searchInputSelector = "#app-search";
  var searchInput = document.querySelector(searchInputSelector);
  var searchResultWrap = document.querySelector(".search-result");

  var initFullWidthSearchInput = function () {
    var wrapper = document.querySelector(".ul-search-full-width");
    var toggle = document.querySelectorAll(".toggle-search");
    if (toggle.length) {
      toggle.forEach((t) => {
        t.addEventListener("click", function (e) {
          if (ULUtil.hasClass(wrapper, "open")) {
            ULUtil.removeClass(wrapper, "open");

            // Clean input & trigger event so that autosuggest can detect
            searchInput.value = "";
            ULUtil.triggerCustomEvent(searchInput, "change");
          } else {
            ULUtil.addClass(wrapper, "open");
            searchInput.focus();
          }
        });
      });
    }
  };

  var initDropDownSearch = function () {};

  var initUlSearch = function () {
    if (!searchInput) {
      return;
    }
    new autoComplete({
      data: {
        // Data src [Array, Function, Async] | (REQUIRED)
        src: async () => {
          const source = await fetch(
            `assets/js/data/template-list.json`
          );
          // Format data into JSON
          const data = await source.json();
          // Return Fetched data
          return data;
        },
        key: ["name"],
        cache: false,
      },

      sort: (a, b) => {
        if (a.match < b.match) return -1;
        if (a.match > b.match) return 1;
        return 0;
      },
      placeHolder: "Explore Egret (e.g. drag & drop)",
      selector: searchInputSelector,
      threshold: 1,
      debounce: 300,
      searchEngine: "strict",
      resultsList: {
        render: true,
        container: (source) => {
          source.setAttribute("class", "ul-list-group-1 pt-sm");
        },
        destination: searchResultWrap,
        position: "beforeend",
        element: "div",
      },
      maxResults: 15,
      highlight: true,
      resultItem: {
        content: (data, source) => {
          source.innerHTML = `<div class="ul-list-item"><a 
          class="d-flex justify-content-start align-items-center text-body"
          href="${
            data.value.link
          }">
          
          <i class="material-icons icon icon-md">${
            data.value.icon || "trending_flat"
          }</i>
          
          <p class="m-0 text-small font-weight-semi">${data.match}</p>
          </a></div>`;
        },
        element: "div"
      },
      trigger: {
        event: ["input", "change"],
        condition: (query) => {
          query;
          if (query) {
            ULUtil.addClass(adminWrap, "search-result-open");
            ULUtil.addClass(searchResultWrap, "has-result");
          } else {
            ULUtil.removeClass(adminWrap, "search-result-open");
            ULUtil.removeClass(searchResultWrap, "has-result");
          }
          if (ULUtil.find(searchResultWrap, ".no-result")) {
            searchResultWrap.removeChild(searchResultWrap.querySelector(".no-result"));
          }
          return query;
        },
      },
      noResults: () => {   
        if (!ULUtil.find(searchResultWrap, ".no-result")) {
          const result = document.createElement("div");
          result.setAttribute("class", "no-result");
          result.innerHTML = "<span class='text-danger'>No Results</span>";
          searchResultWrap.appendChild(result);
        }
      },
      onSelection: (feedback) => {
        // Action script onSelection event | (Optional)
        window.location.replace(feedback.selection.value.link);
      },
    });
  };
  return {
    init: function () {
      initFullWidthSearchInput();
      initUlSearch();
    },
  };
})();

jQuery(document).ready(function () {
  UlSearch.init();
});
