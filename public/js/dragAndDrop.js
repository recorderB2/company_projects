const dropArea = document.getElementById("dropArea");
const fileInput = document.getElementById("fileInput");
const preview = document.getElementById("preview");

dropArea.addEventListener("dragover", (event) => {
    event.preventDefault();
    dropArea.classList.add("border-blue-500");
});

dropArea.addEventListener("dragleave", () => {
    dropArea.classList.remove("border-blue-500");
});

dropArea.addEventListener("drop", (event) => {
    event.preventDefault();
    dropArea.classList.remove("border-blue-500");
    const file = event.dataTransfer.files[0];
    const fileList = new DataTransfer();
    fileList.items.add(file);
    fileInput.files = fileList.files;
    displayImage(file);
});

fileInput.addEventListener("change", (event) => {
    const file = event.target.files[0];
    displayImage(file);
});

function displayImage(file) {
    const reader = new FileReader();
    reader.onload = () => {
        const img = document.createElement("img");
        img.src = reader.result;
        img.className = "w-32 h-32 object-cover rounded-lg";
        preview.innerHTML = "";
        preview.appendChild(img);
    };
    reader.readAsDataURL(file);
}
