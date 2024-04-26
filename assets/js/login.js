async function loginCheck() {
    const form = document.querySelector("form");
    const inputs = form.querySelectorAll("input");

    console.log(inputs);

    const formData = new FormData();

    inputs?.forEach(input => {
        const { id, value } = input ?? {};
        formData.append(id, value)
    });

    console.log(formData);

    try {
        const result = await fetch('../../../backend/login.php', { method: 'POST', body: formData })
    } catch (error) {
        console.log(error)
    }
}