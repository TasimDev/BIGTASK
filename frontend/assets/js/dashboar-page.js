const addBtn = document.querySelector('#add-btn');
const closeBtn = document.querySelector('#close-btn');
const addProductForm = document.querySelector('#add-product-form');

addBtn.addEventListener('click', () => {
    addProductForm.style.display = "flex";
})
closeBtn.addEventListener('click', () => {
    addProductForm.style.display = "none";
})

//CRUD API

//Add New User Ajax Requesr

addProductForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    const formData = new FormData(addProductForm);

    formData.append('add', 1);

    if (addProductForm.checkValidty() === false) {
        e.preventDefault();
        e.stopPropagation();
        return false;
    } else {
        document.getElementById('#submit-btn').textContent = 'Please Wait....';

        const data = await fetch('action.php', {
            method: 'POST',
            body: formData,
        });

        const response = await data.text();
        console.log(response);
        
    }

})
