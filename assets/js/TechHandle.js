class TechHandle {
    constructor() {
        this.clickHandle = this.clickHandle.bind(this);

        // tech descriptions
        this.wordpress = document.getElementById("tech--wordpress");
        this.symfony = document.getElementById("tech--symfony");
        this.database = document.getElementById("tech--database");
        this.php = document.getElementById("tech--php");
        this.html = document.getElementById("tech--html");
        this.css = document.getElementById("tech--css");
        this.js = document.getElementById("tech--js");
        this.react = document.getElementById("tech--react");

        // tech buttons
        this.wordpressBtn = document.getElementById("wordpress-tech-btn");
        this.wordpressBtn.addEventListener("click", this.clickHandle);
        this.symfonyBtn = document.getElementById("symfony-tech-btn");
        this.symfonyBtn.addEventListener("click", this.clickHandle);
        this.databaseBtn = document.getElementById("database-tech-btn");
        this.databaseBtn.addEventListener("click", this.clickHandle);
        this.phpBtn = document.getElementById("php-tech-btn");
        this.phpBtn.addEventListener("click", this.clickHandle);
        this.htmlBtn = document.getElementById("html-tech-btn");
        this.htmlBtn.addEventListener("click", this.clickHandle);
        this.cssBtn = document.getElementById("css-tech-btn");
        this.cssBtn.addEventListener("click", this.clickHandle);
        this.jsBtn = document.getElementById("js-tech-btn");
        this.jsBtn.addEventListener("click", this.clickHandle);
        this.reactBtn = document.getElementById("react-tech-btn");
        this.reactBtn.addEventListener("click", this.clickHandle);

        // Click outside
        document.addEventListener("click", this.clickHandle);

        this.activeBtn = false;
        this.activeDescription = false;

    }

    clickHandle(event) {
        event.stopPropagation();
        switch (event.currentTarget.id) {
            case "wordpress-tech-btn":
                this.changeActiveBtn(this.wordpressBtn);
                this.showDescription(this.wordpress);
                break;
            case "symfony-tech-btn":
                this.changeActiveBtn(this.symfonyBtn);
                this.showDescription(this.symfony);
                break;
            case "database-tech-btn":
                this.changeActiveBtn(this.databaseBtn);
                this.showDescription(this.database);
                break;
            case "php-tech-btn":
                this.changeActiveBtn(this.phpBtn);
                this.showDescription(this.php);
                break;
            case "html-tech-btn":
                this.changeActiveBtn(this.htmlBtn);
                this.showDescription(this.html);
                break;
            case "css-tech-btn":
                this.changeActiveBtn(this.cssBtn);
                this.showDescription(this.css);
                break;
            case "js-tech-btn":
                this.changeActiveBtn(this.jsBtn);
                this.showDescription(this.js);
                break;
            case "react-tech-btn":
                this.changeActiveBtn(this.reactBtn);
                this.showDescription(this.react);
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

export default TechHandle;