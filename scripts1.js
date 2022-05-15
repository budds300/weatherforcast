
let weather ={
    apiKey:"43241b5edddc430b9cc72005220205",
    fetchWeather: function (city){
        fetch("http://api.weatherapi.com/v1/forecast.json?key="+this.apiKey+"&q="+city+"&days=10&aqi=yes&alerts=no")
        .then(response =>response.json()
        
        ).then(data => this.displayWeather(data)
        )
    },
    displayWeather:function(data){
        const forecastarr=data.forecast.forecastday
        console.log("data",forecastarr)
        
        const {name,localtime,country} = data.location
        const{wind_mph}=data.current
        
        const {text,icon}= data.current.condition
        const {humidity}= data.current
        const {temp_c}= data.current
        const d =parseInt(localtime.substr(8,2));
        console.log(name,wind_mph,icon,text,humidity,localtime)
        

    const mapdatafunct= function (forecastarr){
        console.log("mapped",forecastarr)
        forecastarr.map((d,index)=>{
            d.hour.map((h, i)=>{
                const time =h.time.substr(11)
                const heres = document.querySelector(`#here${i}`).innerHTML=`
                
                <div class='card mt-5'>
                <div class='card-body'>
                        <div class='time1 mt-1'>${time}</div>
                        <h1 class='degree1 ms-'>${h.temp_c} °C</h1>
                            <div class='d-flex'>
                                <img class='icon1 ' src='https:${h.condition.icon}' alt=' width='100'/>
                                <h6 class='description1 ps-1 mt-3'>${h.condition.text}</h6>
                            </div>
                    </div>
                    <h6 class='humidity1  ps-2'>humidity: ${h.humidity}:</h6>
                    <h6 class='windspeed1  ps-2'>windspeed: ${h.wind_kph}</h6>
                    <h6 class='country1  ps-2'>country: ${country}</h6>  
                </div>
                </div>`
                return(console.log(time),heres)
            })
           return d;
        })
        return forecastarr;
    }
    function myFunction(x) {
        if (x.matches) { // If media query matches
          document.body.style.height="155vh"
        } else {
         document.body.style.height="700vh"
        }
      }
      
      const x = window.matchMedia("(max-width: 375px)")
      myFunction(x) // Call listener function at run time
    //   x.addListener(myFunction)
    document.body.style.backgroundImage="linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('https://source.unsplash.com/1920x1080/?"+name+"')"
    document.body.style.height="500vh"
    mapdatafunct(forecastarr);
    document.querySelector(".city").innerText= "Weather in "+ name;
    document.querySelector(".icon").src="http:"+icon;
    document.querySelector(".humidity").innerText="Humidity: "+humidity;
    document.querySelector(".windspeed").innerText="Wind Speed: "+wind_mph+ "km/h";
    document.querySelector(".degrees").innerText=temp_c + "°C";
    document.querySelector(".time").innerText= `Date: ${dayOfWeek(d,m,y)} ${d}/${m}/${y} Time: ${time}`;
    document.querySelector(".country").innerText="Country: "+country;
    document.querySelector(".card-body").classList.remove("loading");
        
    }
    ,
    search : function(){
            this.fetchWeather( document.querySelector(".search").value);
    },
    
}
document.querySelector("#search-addon").addEventListener("click",()=>{
    weather.search(); 
})
document.querySelector(".search").addEventListener("keyup",(event)=>{
    if(event.key == "Enter") {
        weather.search()
    }
})



// setTimeout(function(){
//     location.reload(1);
//  }, 30000);