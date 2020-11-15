class FeatureHandle {
    constructor() {
        this.clickHandle = this.clickHandle.bind(this);

        // Feature descriptions
        this.general = document.getElementById("feature--general");
        this.landing = document.getElementById("feature--landing-page");
        this.blog = document.getElementById("feature--blog");

        // Feature buttons
        this.landingBtn = document.getElementById("landing-feature-btn");
        this.landingBtn.addEventListener("click", this.clickHandle);
        this.blogBtn = document.getElementById("blog-feature-btn");
        this.blogBtn.addEventListener("click", this.clickHandle);

        this.activeBtn = false;
        this.activeDescription = false;

    }

    clickHandle(event) {
        console.log(event.currentTarget.id);
        switch (event.currentTarget.id) {
            case "landing-feature-btn":
                this.hideGeneral(true);
                this.changeActiveBtn(this.landingBtn);
                this.showDescription(this.landing);
                break;
            case "blog-feature-btn":
                this.hideGeneral(true);
                this.changeActiveBtn(this.blogBtn);
                this.showDescription(this.blog);
                break;
            default:
        }
        //this.general.classList.add("hide")
    }

    hideGeneral(shouldHide) {
        if (shouldHide) {
            this.general.classList.add("hidden");
        } else {
            this.general.classList.remove("hidden");
        }
    }

    showDescription(element) {
        if (this.activeDescription && this.activeDescription !== element) {
            this.activeDescription.classList.add("hidden");
        }
        this.activeDescription = element;
        if (element.classList.contains("hidden")) {
            element.classList.remove("hidden");
        }
    }

    changeActiveBtn(button) {
        if (this.activeBtn) {
            this.activeBtn.classList.remove("active");
        }
        button.classList.add("active");
        this.activeBtn = button;
    }

}

export default FeatureHandle;