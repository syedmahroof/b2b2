var boostPFSInstantSearchConfig={search:{}};(function(){BoostPFS.inject(this),SearchInput.prototype.customizeInstantSearch=function(){},SearchInput.prototype.afterBindEvents=function(){document.addEventListener("click",function(e){if(this.searchAutoComplete&&this.searchAutoComplete.isOpen&&e&&e.target){var $clickedElement=jQ(e.target),isClickSuggestion=$clickedElement.closest("."+Class.searchSuggestionWrapper).length>0;isClickSuggestion&&(this.searchAutoComplete.$element.hide(),this.searchAutoComplete.searchInput.onCloseAutocomplete(),this.searchAutoComplete.isOpen=!1)}}.bind(this),!0)}})();
//# sourceMappingURL=/cdn/shop/t/89/assets/boost-pfs-instant-search.js.map?v=48585880632234017741679663932
