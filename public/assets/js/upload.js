'use strict';

const uploadInputs = document.querySelectorAll("input[type='file']");

for (const uploadInput of uploadInputs) {

    uploadInput.addEventListener('input', e => {

        console.log(uploadInput);

    });

}

