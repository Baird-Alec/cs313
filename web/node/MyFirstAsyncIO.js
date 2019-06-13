var fs = require('fs');
var num = 0;
function count(callback) {
    fs.readFile(process.argv[2],'utf8',function done(err, str) {
        var arr = str.split('\n');
        var extra = arr.length;
        num = extra - 1;
        callback();
    });
}

function output() {
    console.log(num)
}

count(output)