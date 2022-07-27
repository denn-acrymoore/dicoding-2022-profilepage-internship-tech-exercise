function textAreaCounter() {
    const modalTextAreaCounter = document.getElementById("tentang-saya-counter");
    const modalTextArea = document.getElementById("tentang-saya");

    let textAreaValue = modalTextArea.value;
    let textAreaValueLen = textAreaValue.length;
    console.log(textAreaValueLen)

    modalTextAreaCounter.innerHTML = textAreaValueLen.toString() + "/100"
}

function previewProfileImg(event) {
    const profileImgFormPreview = document.getElementById("profile-img-form-preview");

    profileImgFormPreview.src = URL.createObjectURL(event.target.files[0]);

    console.log(profileImgFormPreview.src);

    // Free existing object URL which was previously created by calling 
    // URL.createObjectURL() after the image has been loaded.
    profileImgFormPreview.onload = function() {
        URL.revokeObjectURL(profileImgFormPreview.src)
    }
}

// - Run this function once to calculate the initial input length of the textarea
// - This function will also be run when "onkeyup" event is triggered.
textAreaCounter();
