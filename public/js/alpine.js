document.addEventListener('alpine:init', () => {
    Alpine.store('darkMode', {
        on: 0,
        Array:[],

        toggle() {
            this.on ++
        }
    })
})

    document.addEventListener('alpine:init', () => {
        Alpine.data('carouselAbout', () => ({
            ActiveSlide : 1,
            slides : [
                {
                    image:'img/Exhibition/pic (6).JPG'
                },
                {
                    image:'img/Exhibition/pic (2).JPG'
                },
                {
                    image:'img/Exhibition/pic (3).JPG'
                },
                {
                    image:'img/Exhibition/pic (4).JPG'
                },
                {
                    image:'img/Exhibition/pic (5).JPG'
                },
                {
                    image:'img/Exhibition/pic (1).JPG'
                },
                {
                    image:'img/Exhibition/pic (7).JPG'
                }
            ],
            next(){
                this.ActiveSlide = this.ActiveSlide === this.slides.length ? 1 : this.ActiveSlide + 1
            },

            prev(){
                this.ActiveSlide = this.ActiveSlide === 1 ? this.slides.length : this.ActiveSlide - 1
            },

            
        }))
    })

    

