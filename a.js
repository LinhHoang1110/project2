var i = 0;
var tmp = 0;

self.addEventListener("message", function(e) {
    // the passed-in data is available via e.data
    tmp = e.data;
    countTime();
}, false);

// function timeCount() {
//     i = i + 1;
//     postMessage(i);
//     setTimeout('timeCount()', 1000)
// }
//
// timeCount();

function countTime() {
    postMessage(tmp--);
    setTimeout('countTime()', 1000);
}