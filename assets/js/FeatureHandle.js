class FeatureHandle {
    constructor() {
        this.clickHandle = this.clickHandle.bind(this);

        // Feature descriptions
        this.landing = document.getElementById("feature--landing-page");
        this.blog = document.getElementById("feature--blog");
        this.contact = document.getElementById("feature--contact");
        this.gallery = document.getElementById("feature--gallery");
        this.logo = document.getElementById("feature--logo");
        this.design = document.getElementById("feature--design");
        this.cms = document.getElementById("feature--cms");
        this.api = document.getElementById("feature--api");

        // Feature buttons
        this.landingBtn = document.getElementById("landing-feature-btn");
        this.landingBtn.addEventListener("click", this.clickHandle);
        this.blogBtn = document.getElementById("blog-feature-btn");
        this.blogBtn.addEventListener("click", this.clickHandle);
        this.contactBtn = document.getElementById("contact-feature-btn");
        this.contactBtn.addEventListener("click", this.clickHandle);
        this.galleryBtn = document.getElementById("gallery-feature-btn");
        this.galleryBtn.addEventListener("click", this.clickHandle);
        this.logoBtn = document.getElementById("logo-feature-btn");
        this.logoBtn.addEventListener("click", this.clickHandle);
        this.designBtn = document.getElementById("design-feature-btn");
        this.designBtn.addEventListener("click", this.clickHandle);
        this.cmsBtn = document.getElementById("cms-feature-btn");
        this.cmsBtn.addEventListener("click", this.clickHandle);
        this.apiBtn = document.getElementById("api-feature-btn");
        this.apiBtn.addEventListener("click", this.clickHandle);

        // Click outside
        document.addEventListener("click", this.clickHandle);

        this.activeBtn = false;
        this.activeDescription = false;

    }

    clickHandle(event) {
        event.stopPropagation();
        switch (event.currentTarget.id) {
            case "landing-feature-btn":
                this.changeActiveBtn(this.landingBtn);
                this.showDescription(this.landing);
                break;
            case "blog-feature-btn":
                this.changeActiveBtn(this.blogBtn);
                this.showDescription(this.blog);
                break;
            case "contact-feature-btn":
                this.changeActiveBtn(this.contactBtn);
                this.showDescription(this.contact);
                break;
            case "gallery-feature-btn":
                this.changeActiveBtn(this.galleryBtn);
                this.showDescription(this.gallery);
                break;
            case "logo-feature-btn":
                this.changeActiveBtn(this.logoBtn);
                this.showDescription(this.logo);
                break;
            case "design-feature-btn":
                this.changeActiveBtn(this.designBtn);
                this.showDescription(this.design);
                break;
            case "cms-feature-btn":
                this.changeActiveBtn(this.cmsBtn);
                this.showDescription(this.cms);
                break;
            case "api-feature-btn":
                this.changeActiveBtn(this.apiBtn);
                this.showDescription(this.api);
                break;
            default:
                if (this.activeBtn) {
                    this.changeActiveBtn(this.activeBtn);
                    this.showDescription(this.activeDescription);
                }
        }
    }

    showDescription(element) {
        if (this.activeDescription === element) {
            this.activeDescription.classList.add("hidden");
            this.activeDescription.setAttribute('aria-hidden', 'true');
            this.activeDescription = false;
        } else {
            if (this.activeDescription && this.activeDescription !== element) {
                this.activeDescription.classList.add("hidden");
                this.activeDescription.setAttribute('aria-hidden', 'true');
            }
            this.activeDescription = element;
            if (element.classList.contains("hidden")) {
                element.classList.remove("hidden");
                element.setAttribute('aria-hidden', 'false');
            }
        }


    }

    changeActiveBtn(button) {
        if (this.activeBtn) {
            this.activeBtn.classList.remove("active");

            if (this.activeBtn !== button) {
                button.classList.add("active");
                this.activeBtn = button;
            } else {
                this.activeBtn = false;
            }
        } else {
            button.classList.add("active");
            this.activeBtn = button;
        }
    }

}

export default FeatureHandle;