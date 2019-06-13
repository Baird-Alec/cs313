var http = require('http')
var url = require('url')

http.createServer(function (request, response) {
  var parsed = url.parse(request.url, true)
  if(parsed.pathname == "home") {
    response.writeHead(200, {'Content-Type': 'text/plain'});
    response.write('Hello World!');
    response.end();
  }
  else {
    response.writeHead(200, {'Content-Type': 'text/plain'});
    response.write('Hello World!');
    response.end();
  }
}).listen(8888);

