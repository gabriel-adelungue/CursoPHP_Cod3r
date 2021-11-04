const valores = [7.7, 8.9, 6.3, 9.2];
console.log(valores[0], valores[3]);

console.log(valores[4]);

valores[4] = 10; //Adicionar um elemento no Array
console.log(valores);
console.log(valores.length); // .length retorna quantos elementos tem no array

valores.push({id:3}, false, null, 'teste'); // Inserir elementos no array
console.log(valores);

console.log(valores.pop()); // É tirado o último elemento do array
delete valores[0]; // delete tira o elemento que deseja
console.log(valores);

console.log(typeof valores);