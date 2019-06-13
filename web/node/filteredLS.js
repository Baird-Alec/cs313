var fs = require('fs')
const path = require('path')
var arr = []
var ext = "." + process.argv[3]
function readLines(callback) {

    fs.readdir(process.argv[2], function (err, list) {

        list.forEach(function(file) {
            if (path.extname(file) === ext) {
                console.log(file)
            }
        });
    })
}

readLines()