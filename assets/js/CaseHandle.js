class CaseHandle {
    constructor(numberOfItems) {
        this.clickHandle = this.clickHandle.bind(this);

        this.images = [];
        this.descriptions = [];
        this.buttons = [];

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

            console.log("CLICKING!!");
        }
    }

    showDescription(element) {

    }

    changeActiveBtn(button) {

    }

}

export default CaseHandle;