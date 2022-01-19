const peso1 = 1.0;
const peso2 = Number('2.0');  //Mudar variavel para tipo number

console.log(peso1, peso2);
console.log(Number.isInteger(peso1)); // isInterger para ver se o tipo da variavel é inteira
console.log(Number.isInteger(peso2));

const avaliacao1 = 9.871;
const avaliacao2 = 6.871;

const total = (avaliacao1 * peso1) + (avaliacao2 * peso2);
const media = total / (peso1 + peso2);

console.log(media.toFixed(2));  // toFixed serve para descidir quantas casas decimais usar depois da vírgula
console.log(media.toString()); // toString converte o numero para String
console.log(media.toString(2)); // toString(2) transforma em número binário
console.log(typeof media); // tipo da variavel


