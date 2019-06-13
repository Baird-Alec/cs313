const args = process.argv.slice(2);
var sum = 0;
args.forEach(element => {
    sum += Number(element);
});
console.log(sum);