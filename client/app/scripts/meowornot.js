$(document).ready(function() {
  var Cat = Backbone.Model.extend({
    url: function() {
      return "http://plentyofcats.com/poc/cats.php?id=1";
    }
  });
  Cat.sync();

  /*
  var Cat = {};
  Cat.get = function(name)
  {
    return "temp";
  };

  var cat = Cat;
*/
  var desc = cat.get("description");
  var isAdoptable = cat.get("is_adoptable");
  var location = cat.get("location");
  var breed = cat.get("breed");
  var size = cat.get("size");
  var sex = cat.get("sex");
  var age = cat.get("age");
  var imageUrl = cat.get("image_url");

  $('#cat-img').attr('src', imageUrl);

  // meow button on click should make and ajax call increment
  // on success it should slide in the next cat picture/profile 
  $('#meow').click(function() {
  });
  
  // top scores should be displayed
  // scores are just the sum of the cats likes
});
