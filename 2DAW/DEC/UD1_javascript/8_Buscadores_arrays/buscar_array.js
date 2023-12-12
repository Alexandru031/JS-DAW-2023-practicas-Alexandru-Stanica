const array = ["Alexandru", "Alex", "Fernando", "Hola Mundo", "Jose", "Leo", "colar", "meter", "matar"]

console.log(array.includes("Alexandru"))
console.log(array.find(el => el.length < 5))
console.log(array.indexOf("Jose"))
console.log(array.filter(el => el.length === 5 ))