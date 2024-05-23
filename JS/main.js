
const getOptionChart1=()=>{

};

const getOptionChart2=()=>{
    
};

const initCharts=()=>{
    const chart1=echarts.init(document.getElementById("chart1"));
    const chart2=echarts.init(document.getElementById("chart2"));


    chart1.setOption();
    chart2.setOption();


;}

window.addEventListener('load', ()=> {
    console.log("ok");

});