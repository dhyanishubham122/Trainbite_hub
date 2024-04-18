var train_no;
function m(){
train_no=localStorage.getItem('train_no');
alert(train_no);
dt=localStorage.getItem('dt');
alert(dt);
if(train_no==19038)
clk2();
else
clk2();
}
function clk2(){
    const url = 'https://irctc1.p.rapidapi.com/api/v1/liveTrainStatus?trainNo=19038&startDay=1';
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': 'f1d91fa40fmsh6e6764576f73d27p13a470jsn077033a34ca0',
		'X-RapidAPI-Host': 'irctc1.p.rapidapi.com'
	}
};
st();
function st(){
try {
	   fetch(url, options).then((d)=>{
        return d.json();
    }).then((objectData)=>{
        document.getElementById("tr_name").innerText=objectData.data.train_name;
        document.getElementById("date").innerText=objectData.data.std;
         var sel = document.getElementById("Select01");
        objectData.data.upcoming_stations.map((values)=>{
            var opt = document.createElement('option');
             opt.value = values.station_name;
	         console.log(values.station_name);
             opt.innerHTML = values.station_name;
             sel.appendChild(opt);
        })
    })
	// const result =  response.text();
	// console.log(result);
} catch (error) {
	console.error(error);
}
}
}
function clk1(){
    
    const url = 'https://irctc1.p.rapidapi.com/api/v1/liveTrainStatus?trainNo=19038&startDay=1';
    const options = {
        method: 'GET',
        headers: {
            'X-RapidAPI-Key': 'f1d91fa40fmsh6e6764576f73d27p13a470jsn077033a34ca0',
            'X-RapidAPI-Host': 'irctc1.p.rapidapi.com'
        }
    };
    st();
    function st(){
    try {
           fetch(url, options).then((d)=>{
            return d.json();
        }).then((objectData)=>{
            document.getElementById("tr_name").innerText=objectData.data.train_name;
            document.getElementById("date").innerText=objectData.std;
             var sel = document.getElementById("Select01");
            objectData.data.upcoming_stations.map((values)=>{
                var opt = document.createElement('option');
                 opt.value = values.station_name;
                 console.log(values.station_name);
                 opt.innerHTML = values.station_name;
                 sel.appendChild(opt);
            })
        })
        // const result =  response.text();
        // console.log(result);
    } catch (error) {
        console.error(error);
    }
    }


}