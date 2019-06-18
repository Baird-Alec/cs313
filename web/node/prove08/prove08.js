var http = require('http')
var url = require('url')

http.createServer(function (request, response) {
  var parsed = url.parse(request.url, true)
  if(parsed.pathname == "/home") {
    response.writeHead(200, {'Content-Type': 'text/html'});
    response.write("<h1>Hello World!</h1>");
    response.end();
  }
  else if(parsed.pathname == "/getData") {
    response.writeHead(200, {'Content-Type': 'application/JSON'});
    var obj = [];
    obj.push({ "name": "Alec Baird", "class": "cs-313" })
    var json = JSON.stringify(obj)
    response.write(json);
    response.end();
  }
  else {
    response.writeHead(404, {'Content-Type': 'text/html'});
    response.write("<h1>404 Error: Not found</h1>");
    response.end();
  }
}).listen(8888);

