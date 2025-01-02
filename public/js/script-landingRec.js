function increment(nutrient) {
    const input = document.getElementById(nutrient);
    input.value = parseInt(input.value) + 1;
}

function decrement(nutrient) {
    const input = document.getElementById(nutrient);
    if (input.value > 0) {
        input.value = parseInt(input.value) - 1;
    }
}

function toggleTag(tag) {
    const tagsInput = document.getElementById("tags");
    let currentTags = tagsInput.value ? tagsInput.value.split(",") : [];

    if (currentTags.includes(tag)) {
        currentTags = currentTags.filter((t) => t !== tag);
    } else {
        currentTags.push(tag);
    }

    tagsInput.value = currentTags.join(",");

    // Toggle class for visual feedback
    const buttons = document.querySelectorAll(".tag");
    buttons.forEach((button) => {
        if (button.textContent.trim() === tag) {
            button.classList.toggle("selected");
        }
    });
}
$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
});
