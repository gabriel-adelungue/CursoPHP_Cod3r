const nome = "Rebeca";
const concatenacao = "Olá " + nome + ' !';
const template = ` Olá ${nome} !`;

console.log(concatenacao, template);

// expressões...

console.log(`1 + 1 = ${1 + 1}`);

//arrow function
const up = texto => texto.toUpperCase(); // toUpperCase deixa a string com letras maiusculas
console.log(`Ei... ${up('cuidado')} !`);