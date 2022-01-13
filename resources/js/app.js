require('./bootstrap');

window.addEventListener("DOMContentLoaded", function ()
{
    const formsDelete = document.querySelectorAll(".form-delete");

    formsDelete.forEach((form) =>
    {
        form.addEventListener("submit", (e) =>
        {
            e.preventDefault();
            const comicTitle = form.querySelector("[name='comicTitle']");
            const result = confirm("Are you sure? " + comicTitle.value + " will be deleted!");

            if (result) {
                form.submit();
            }
        });
    });
});
