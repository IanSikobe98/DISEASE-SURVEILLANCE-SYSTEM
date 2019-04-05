(() => {
    const form = document.querySelector("form[action='/action_page.php']");
    form.addEventListener('submit', e => e.preventDefault())
    form.querySelector("button").addEventListener("click", e => {
        window.location.href = form.querySelector("select").value;
    })
})(); 
