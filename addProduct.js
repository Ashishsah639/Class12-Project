function addProduct() {
    let name = document.getElementById('name').value;
    let image = document.getElementById('image').value;
    let description = document.getElementById('description').value;
    const newObject = {
        
      name: name,
      desc: description,
      img: image,
    };
  const existing = JSON.parse(localStorage.getItem("data"));
  existing && existing.push(newObject);
  localStorage.setItem("data", existing ? JSON.stringify(existing) : JSON.stringify([newObject]));
}