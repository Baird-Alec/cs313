var fs = require('fs')
var buf = fs.readFileSync(process.argv[2])
var str = buf.toString()
var arr = str.split('\n')
var extra = arr.length
var found = extra - 1
console.log(found)


