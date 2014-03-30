/*
var Cat = Backbone.Model.extend({
  url: function() {
    return 
  }
});
*/
//Cat.sync();

var Cat = {};
Cat.get = function(name)
{
	return "temp";
};

var cat = new Cat();

var desc = cat.get("description");
var isAdoptable = cat.get("is_adoptable");
var location = cat.get("location");
var breed = cat.get("breed");
var size = cat.get("size");
var sex = cat.get("sex");
var age = cat.get("age");
var imageUrl = cat.get("image_url");

$('#cat').innerHTML = desc ;
