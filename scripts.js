
window.addEventListener('load',()=>{
    document.querySelector('#preloader').classList.add('preload-finish')
})
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
       
        console.log(name,wind_mph,icon,text,humidity,localtime)
        

    const mapdatafunct= function (forecastarr){
        
        forecastarr.map((d,index)=>{
            
            const localtime = d.date
            const {sunrise,sunset} = d.astro
            const y =parseInt(localtime.substr(0,4));
            const m =parseInt(localtime.substr(5,2));
            const day =parseInt(localtime.substr(8,2));
            
            const heres = document.querySelector(`#here${index}`).innerHTML=`
            
            <div class='card3' data-aos="fade-up" data-aos-offset="300" data-aos-anchor-placement="top-bottom">
            <div class='card-body'>
                    <div class='time1 '>${dayOfWeek(day,m,y)} ${day}/${m}/${y}</div>
                    <h1 class='degree1 '>${d.day.maxtemp_c} °C</h1>
                        <div class='d-flex1'>
                            <img class='icon1 ' src='https:${d.day.condition.icon}' alt='width="70px"/>
                            <h6 class='description1 ps-1 mt-3'>${d.day.condition.text}</h6>
                        </div>
                </div>
                <h6 class='humidity1  ps-2'>humidity: ${d.day.avghumidity}</h6>
                <h6 class='windspeed1  ps-2'>windspeed: ${d.day.maxwind_kph}</h6>
                <h6 class='windspeed1  ps-2'>Sunrise: ${sunrise}</h6>
                <h6 class='windspeed1  ps-2'>Sunset: ${sunset}</h6>
                <h6 class='country1  ps-2'>Country: ${country}</h6>  
            </div>
            </div>`
                
                return(console.log(d.date,sunrise,sunset), heres)
            })
       
        //   return forecastarr
    }
    function myFunction(x) {
        if (x.matches) { // If media query matches
          document.body.style.height="700vh"
        } else {
         document.body.style.height="200vh"
        }
      }
      
      const x = window.matchMedia("(max-width: 375px)")
      myFunction(x)
      
    document.body.style.backgroundImage="linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('https://source.unsplash.com/1920x1080/?"+name+text+"')"
    
    document.querySelector(".city").innerText= "Weather in "+ name;
    mapdatafunct(forecastarr);
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
function dayOfWeek(day,month,year){
    const weekday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
  let  dy=new Date(day,month,year)
    return weekday[dy.getDay()];
}

// setTimeout(function(){
//     location.reload(1);
//  }, 30000);
