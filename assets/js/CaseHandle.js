class CaseHandle {
    constructor(numberOfItems) {
        this.clickHandle = this.clickHandle.bind(this);

        this.images = [];
        this.descriptions = [];
        this.buttons = [];
        this.resizeThreshold = 1000; //1000px
        this.updatedHighResImages = false;
        this.updatedLowResImages = false;

        for (let i = 0; i < numberOfItems; i++) {
            this.images.push(document.getElementById('case-image-' + i));
            this.descriptions.push(document.getElementById('case-description-' + i));

            let button = document.getElementById('case-button-' + i);
            button.addEventListener('click', this.clickHandle.bind(this));
            this.buttons.push(button);
        }

        this.activeImage = this.images[0];
        this.activeBtn = this.buttons[0];
        this.activeDescription = this.descriptions[0];

        // If screen width is large, update case images with higher res.
        // No need to add event listener in this case.
        if (window.innerWidth >= this.resizeThreshold) {
            this.resizeEvent();
        } else {
            window.onresize = this.resizeEvent.bind(this);
        }

    }

    clickHandle(event) {
        event.stopPropagation();

        if (event.currentTarget !== this.activeBtn) {
            let target = event.currentTarget.dataset.target;
            let imgElement = this.images[target];
            let descElement = this.descriptions[target];
            let buttonElement = this.buttons[target];

            this.activeImage.classList.add('hidden');
            this.activeDescription.classList.add('hidden');
            this.activeBtn.classList.remove('active');

            imgElement.classList.remove('hidden');
            descElement.classList.remove('hidden');
            buttonElement.classList.add('active');

            this.activeImage = imgElement;
            this.activeDescription = descElement;
            this.activeBtn = buttonElement;

        }
    }

    resizeEvent() {
        let srcset = [];
        let date;
        if (!this.updatedHighResImages && window.innerWidth >= 1000) {
            date = new Date();
            for (let image of this.images) {
                srcset = image.getAttribute("srcset").split(' ');
                srcset = srcset.filter(element => !element.includes(','));
                image.src = srcset[2] + "?" + date.getMilliseconds();
            }
            this.updatedHighResImages = true;
            this.updatedLowResImages = false;
        }
    }


}

export default CaseHandle;