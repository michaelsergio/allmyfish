$(document).ready(function() {
  var Cat = Backbone.Model.extend({

    sync: function(method, model, options) {
      if (method.toLowerCase() === 'read') {
        options = options || {};
        options.url = "http://plentyofcats.com/poc/testDB.php?random=YES";
      }
      return Backbone.sync.apply(this, arguments);
    },

    meow: function(onSuccess) {
      this.increment("meow_count", onSuccess);
    },
    notmeow: function(onSuccess) {
      this.increment("not_count", onSuccess);
    },
    increment: function(field, onSuccess) {
      var url = "http://plentyofcats.com/poc/cats.php?id=1" + 
                "&field=" + field;
      $.get(url, {'id':this.id}, onSuccess);
    },

  });
  var cat = new Cat();
  cat.fetch();

  var profile = cat.get("description");


  // Pop up profile on profile click 
  // Maybe display short bit here
  
  // $('#cat-description').text("cat description here");

  //var isAdoptable = cat.get("is_adoptable");
  // var location = cat.get("location");
  var description = [ cat.get("age"), "-", cat.get("size"), " - ", 
      cat.get("sex"), cat.get("breed")].join(" ");


  var imageUrl = cat.get("image_url");
  $('#cat-img').attr('src', imageUrl);

  function nextPage() {
    // add class to slide cat off 
    // redirect page
    // on page load slide cat in
  }

  // meow button on click should make and ajax call an increment
  // on success it should slide in the next cat picture/profile 
  $('#meow').click(function() {
      cat.meow(function() {
        nextPage();
      });
  });
  $('#notmeow').click(function() {
      cat.notmeow(function() {
        nextPage();
      });
  });
  
  // top scores should be displayed on different page
  // scores are just the sum of the cats likes
});
