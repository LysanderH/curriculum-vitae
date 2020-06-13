const imageSlider = {
    images: [],
    next: null,
    previous: null,
    active: null,
    nextImg: null,
    previousImg: null,
    init(){
        this.images = document.querySelectorAll('.carousel__img');
        this.next = document.querySelector('.carousel__navigation--right');
        this.previous = document.querySelector('.carousel__navigation--left');

        this.next.addEventListener('click', ()=>{
            this.nextSlide();
        })
        this.next.addEventListener('key', (e)=>{
            if (e.keyCode === 13){
                this.nextSlide();
            }
        })
        this.previous.addEventListener('click', ()=>{
            this.previousSlide();
        })
        this.previous.addEventListener('key', (e)=>{
            if (e.keyCode === 13){
                this.previousSlide();
            }
        })
    },
    nextSlide(){
        this.active = document.querySelector('.active');
        this.nextImg = document.querySelector('.next');
        this.previousImg = document.querySelector('.previous');

        this.active.classList.remove('active');
        this.active.classList.add('previous');

        this.nextImg.classList.remove('next');
        this.nextImg.classList.add('active');

        this.previousImg.classList.remove('previous');
        this.previousImg.classList.add('next');
    },
    previousSlide(){
        this.active = document.querySelector('.active');
        this.nextImg = document.querySelector('.next');
        this.previousImg = document.querySelector('.previous');

        this.active.classList.remove('active');
        this.active.classList.add('next');

        this.nextImg.classList.remove('next');
        this.nextImg.classList.add('previous');

        this.previousImg.classList.remove('previous');
        this.previousImg.classList.add('active');
    }
};
export default imageSlider;