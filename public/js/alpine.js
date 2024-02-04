document.addEventListener("alpine:init", () => {
    Alpine.store("perorder", {
        on: 0,
        turn: false,
        Arraya: [],
        sendRequest() {
            let arraya = this.Arraya;
            axios
                .post("/sell", { arraya })
                .then((response) => {
                    this.turn = true;
                    console.log(response);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    });
});

document.addEventListener("alpine:init", () => {
    Alpine.data("carouselAbout", () => ({
        ActiveSlide: 1,
        slides: [
            {
                image: "img/Exhibition/pic (6).JPG",
            },
            {
                image: "img/Exhibition/pic (2).JPG",
            },
            {
                image: "img/Exhibition/pic (3).JPG",
            },
            {
                image: "img/Exhibition/pic (4).JPG",
            },
            {
                image: "img/Exhibition/pic (5).JPG",
            },
            {
                image: "img/Exhibition/pic (1).JPG",
            },
            {
                image: "img/Exhibition/pic (7).JPG",
            },
        ],
        next() {
            this.ActiveSlide =
                this.ActiveSlide === this.slides.length
                    ? 1
                    : this.ActiveSlide + 1;
        },

        prev() {
            this.ActiveSlide =
                this.ActiveSlide === 1
                    ? this.slides.length
                    : this.ActiveSlide - 1;
        },
    }));
});
