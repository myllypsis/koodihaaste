const car_select = $("#car_select");
const distance = $("#distance");
const speedInputA = $("#speedInputA");
const speedInputB = $("#speedInputB");
const calculate_btn = $("#calculate");
const consumptionA = $("#consumptionA");
const consumptionB = $("#consumptionB");
const traveltimeA = $("#traveltimeA");
const traveltimeB = $("#traveltimeB");
const end_jargon = $("#end_jargon");
const cars = { 'a': 3,
               'b': 3.5,
               'c': 4 };


/**
 * Returns travel time and consumption with given speed.
 *
 * @param {number} driving speed.
 * @return {object} time_string: formatted time of travel time
 *                  minutes: total traveltime in minutes
 *                  consumption: total consumption
 */
function calculateEverything(speed){
  // Calculating traveltime in hours and minutes
  let hours = distance.val() / speed;
  let rhours = Math.floor(hours);
  let minutes = (hours- rhours) * 60;

  // Formatting travel time return string
  let return_str = rhours > 0 ? rhours + 'h ' : '';
      return_str += minutes > 0 ?  Math.floor(minutes) + 'min' : '';

  // Calculating consumption
  let consumption_per_km = (cars[car_select.val()] / 100);
  for (var i = 0; i < speed - 1; i++) {
    consumption_per_km *= 1.009;
  }
  let consumption = Math.round((consumption_per_km * distance.val()) * 100) / 100;

  return {'time_string': return_str,
          'minutes': minutes + (rhours * 60),
          'consumption': consumption};
}


// Hadnling click event on calculate button
calculate_btn.click(() => {

  // Checking that all the inputs are filled
  if(+distance.val() > 0 && +speedInputA.val() > 0 && +speedInputB.val() > 0){
    let travel1 = calculateEverything(speedInputA.val());
    let travel2 = calculateEverything(speedInputB.val());

    // Calculating differences in trips
    let time_end = travel1['minutes'] > travel2['minutes'] ? 'hitaampi' : 'nopeampi';
    let time_diff = travel1['minutes'] > travel2['minutes'] ? Math.round(travel1['minutes'] - travel2['minutes']) : Math.round(travel2['minutes'] - travel1['minutes']);
    let consumption_end = travel1['consumption'] > travel2['consumption'] ? 'enemmän' : 'vähemmän';
    let consumption_diff = travel1['consumption'] > travel2['consumption'] ?  travel1['consumption'] - travel2['consumption'] :  travel2['consumption'] - travel1['consumption'];

    // Appending data to user
    traveltimeA.html(travel1['time_string']);
    traveltimeB.html(travel2['time_string']);
    consumptionA.html(travel1['consumption'] + ' l');
    consumptionB.html(travel2['consumption'] + ' l');
    end_jargon.text('nopeus A on ' + time_diff + ' minuuttia ' + time_end + ' kuin nopeus B ja kuluttaa ' + Math.round(consumption_diff * 100) / 100 + ' litraa ' + consumption_end + ' polttoainetta')
    $(".end_jargon_div").show()


  }else{
    alert('Täytä kaikki kentät');
  }

})