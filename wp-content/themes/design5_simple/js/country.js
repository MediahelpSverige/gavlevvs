var countries = [["Argentina", "ar"], ...];

var countryNames = countries.map(function(country){
  return {
      label: '<div class="flag '+country[1].toLowerCase()+'">'+country[0]+'</div>',
      value: country[0]
  }
});

$('#country').autocomplete({
  source: countryNames,
  html: true
});