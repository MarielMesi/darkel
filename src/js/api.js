$(document).ready(function(){
    var ws = new WebSocket("wss://stream.binance.com:9443/ws/btcusdt@trade");
    ws.onmessage = (event) => {
        var stockObject = JSON.parse(event.data);
        var price = parseFloat(stockObject.p).toFixed(2);
        localStorage.setItem("btc", price);
    };
    var ws2 = new WebSocket("wss://stream.binance.com:9443/ws/ethusdt@trade");
    ws2.onmessage = (event) => {
        var stockObject2 = JSON.parse(event.data);
        var price2 = parseFloat(stockObject2.p).toFixed(2);
        localStorage.setItem("eth", price2);
    };
    var ws3 = new WebSocket("wss://stream.binance.com:9443/ws/bnbusdt@trade");
    ws3.onmessage = (event) => {
        var stockObject3 = JSON.parse(event.data);
        var price3 = parseFloat(stockObject3.p).toFixed(2);
        localStorage.setItem("bnb", price3);
    };
    var ws4 = new WebSocket("wss://stream.binance.com:9443/ws/adausdt@trade");
    ws4.onmessage = (event) => {
        var stockObject4 = JSON.parse(event.data);
        var price4 = parseFloat(stockObject4.p).toFixed(2);
        localStorage.setItem("ada", price4);
    };
    var ws5 = new WebSocket("wss://stream.binance.com:9443/ws/solusdt@trade");
    ws5.onmessage = (event) => {
        var stockObject5 = JSON.parse(event.data);
        var price5 = parseFloat(stockObject5.p).toFixed(2);
        localStorage.setItem("sol", price5);
    };
    var ws6 = new WebSocket("wss://stream.binance.com:9443/ws/xrpusdt@trade");
    ws6.onmessage = (event) => {
        var stockObject6 = JSON.parse(event.data);
        var price6 = parseFloat(stockObject6.p).toFixed(2);
        localStorage.setItem("xrp", price6);
    };
    var demon = localStorage.getItem("btc");
    var demon2 = localStorage.getItem("eth");
    var demon3 = localStorage.getItem("bnb");
    var demon4 = localStorage.getItem("ada");
    var demon5 = localStorage.getItem("sol");
    var demon6 = localStorage.getItem("xrp");
    var ctx = new Chart(document.getElementById("doughnut"), {
        type: 'doughnut',
        data: {
            labels: ['BTC', 'ETH', 'BNB', 'ADA', 'SOL', 'XRP'],
            datasets: [{
                data: [demon, demon2, demon3, demon4, demon5, demon6],
                backgroundColor: ['Yellow', 'Blue', 'Red', 'Green', 'Purple', 'Orange']    
            }]
        },
        options: {
            responsive: true
        }
    });
});