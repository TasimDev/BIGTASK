fetch('components/header.html')
    .then(response => response.text())
    .then(data => {
        // Inject the HTML content into the container
        $('Navbar').html(data);
    });
fetch('components/footer.html')
    .then(response => response.text())
    .then(data => {
        // Inject the HTML content into the container
        $('Footer').html(data);
    });

const dots = document.querySelectorAll('.dot');
dots.forEach((dot) => {
    dot.addEventListener('click', () => {
        let current = document.getElementsByClassName('dot active');
        current[0].className = current[0].className.replace('active', '');
        dot.className += ' active';
    })
})
