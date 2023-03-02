class CustomString extends String {
  split(separator) {

    // création d'un nouveau tableau à l'aide de map 
    const result = super.split(separator).map((elt, index, array) => {
      if (index == array.length - 1) return elt;
      return elt + separator;
    });
    return [
      super.split(separator),
      result
    ]
  }
}

// instance de CustomString
let hello = new CustomString("Hello World");
console.log(hello.split("o"));

while(hello) {
  console.log(hello.constructor.name);
  hello = Object.getPrototypeOf(hello);
}
