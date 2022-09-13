let the_input = document.querySelector("#from_city");
let from_input = document.querySelector("#from_city").value;
function showFromResults() {
  console.log("xxx");
  if (the_input.value.length > 0) {
    document.querySelector("#from-results").style.display = "block";
    getCitiesFrom();
  } else {
    hideFromResults();
  }
}

function hideFromResults() {
  console.log("xxx");
  document.querySelector("#from-results").style.display = "none";
}

async function getCitiesFrom() {
  console.log(the_input.value);

  // Example POST method implementation:
  /* async function postData(url = "", data = {}) {
    // Default options are marked with *
    const response = await fetch(url, {
      method: "POST", // *GET, POST, PUT, DELETE, etc.
      cache: "no-cache", // *default, no-cache, reload, force-cache, only-if-cached
      headers: {
        "Content-Type": "application/json",
        // 'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: JSON.stringify(data), // body data type must match "Content-Type" header
    });
    return response.json(); // parses JSON response into native JavaScript objects
  }

  let flightData = [];
  postData("api-get-cities-from.php", { from_city: the_input.value }).then(
    (data) => {
      console.log(data);
      flightData = data; // JSON data parsed by `data.json()` call
    }
  ); */

  let conn = await fetch("api-get-cities-from?from_city=" + the_input.value);

  let data = await conn.json();
  console.log(data);
  let all_flights = "";
  const original_flight_blueprint = `
      <div class="from-city">
      <img src="img/img_city.png">

      <div>
      <div>
        <p>#from_city#</p>
        <p>#airport#</p></div>
        <div>
        <p>#from_country#</p>
        </div>
          </div>
    </div>`;
  data.forEach((flight) => {
    console.log(flight);
    let div_flight = original_flight_blueprint;
    div_flight = div_flight.replace("img_city.png", flight.city_image);
    div_flight = div_flight.replace("#from_city#", flight.city_name);
    div_flight = div_flight.replace("#airport#", flight.city_airport);
    div_flight = div_flight.replace("#from_country#", flight.city_country);

    all_flights += div_flight;
  });

  /*   let divCity = `<div class="from-city">
  <img src="citysrc" alt="">
  <div>
  <p>cityname</p>
  <p>population</p>
  </div>
  
</div>`; */

  /* let searchedCities = data.filter(function (el) {
    console.log(el.city_name);
    return el.city_name
      .toLowerCase()
      .includes(`${the_input.value.toLowerCase()}`);
  });

  let allCities = ""; */

  /*  for (let i = 0; i < searchedCities.length; i++) {
    let city = searchedCities[i];
    let cityName = city.city_name;
    let src = city.src;
    let copyDivCity = divCity;

    copyDivCity = copyDivCity.replace("cityname", cityName);
    copyDivCity = copyDivCity.replace("citysrc", src);
    copyDivCity = copyDivCity.replace(
      "population",
      `population: ${city.population}`
    );
    console.log(cityName);
    allCities += copyDivCity;
  } */
  document.querySelector("#from-results").innerHTML = all_flights;

  /*   document
    .querySelector("#from-results")
    .insertAdjacentHTML("afterbegin", allCities);
 */
}

let to_input = document.querySelector("#to-input");

function hideToResults() {
  console.log("xxx");
  document.querySelector("#to-results").style.display = "none";
}

function showToResults() {
  console.log("xxx");
  if (to_input.value.length > 0) {
    document.querySelector("#to-results").style.display = "block";
    getCitiesTo();
  } else {
    hideToResults();
  }
}

async function getCitiesTo() {
  let conn = await fetch("api-get-cities-to");
  let data = await conn.json();

  let divCity = `<div class="to-city">
  <img src="citysrc" alt="">
  <div>
  <p>cityname</p>
  <p>population</p>
  </div>
  
</div>`;

  console.log(data);

  let searchedCities = data.filter(function (el) {
    console.log(el.city_name);
    return el.city_name
      .toLowerCase()
      .includes(`${to_input.value.toLowerCase()}`);
  });

  /*   data.filter((city) => city.city_name.includes(`${to_input}`));
   */
  console.log(searchedCities);
  let allCities = "";

  for (let i = 0; i < searchedCities.length; i++) {
    let city = searchedCities[i];
    let cityName = city.city_name;
    let src = city.src;
    let copyDivCity = divCity;

    copyDivCity = copyDivCity.replace("cityname", cityName);
    copyDivCity = copyDivCity.replace("citysrc", src);
    copyDivCity = copyDivCity.replace(
      "population",
      `population: ${city.population}`
    );
    console.log(cityName);
    allCities += copyDivCity;
  }
  document.querySelector("#to-results").innerHTML = allCities;
  /*  insertAdjacentHTML("afterbegin", allCities);
   */
  console.log(searchedCities);
}

function shiftCities() {
  let city1 = document.querySelector("#from_city");
  let city2 = document.querySelector("#to-input");

  let input1 = document.querySelector("#from_city").value;
  let input2 = document.querySelector("#to-input").value;

  city1.value = input2;
  city2.value = input1;
}
