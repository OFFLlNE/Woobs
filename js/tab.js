$(function() {
  $(".pagination a").live("click", function() {
    $(".pagination").html("Page is loading...");
    return false;
  });
  
  $.fragmentChange(true);
  $(document).bind("fragmentChange.page", function() {
    $.getScript($.queryString(document.location.href, { "page" : $.fragment().page }));
  });
  
  if ($.fragment().page) {
    $(document).trigger("fragmentChange.page");
  }
});