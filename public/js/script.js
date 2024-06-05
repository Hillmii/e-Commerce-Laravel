window.onscroll = function(){
    const nav = document.getElementById('nav');
    const scrollTop= document.getElementById('scrollTop');
    const history= document.getElementById('history');
    const header = document.getElementById('header');
    
    if(header.classList.contains('hidden')){
        if(window.pageYOffset > 0){
            nav.classList.add('fixed-nav');
    
            scrollTop.classList.remove('opacity-0');
            scrollTop.classList.add('opacity-100');
            scrollTop.classList.remove('invisible');
            scrollTop.classList.add('visible');
        }else{
            nav.classList.remove('fixed-nav');
            
            scrollTop.classList.remove('opacity-100');
            scrollTop.classList.add('opacity-0');
            scrollTop.classList.remove('visible');
            scrollTop.classList.add('invisible');
        }
    }else{
        if(window.pageYOffset > 0){
            nav.classList.add('fixed-nav');
    
            history.classList.remove('top-[160px]');
            history.classList.add('top-[120px]');
    
            scrollTop.classList.remove('opacity-0');
            scrollTop.classList.add('opacity-100');
            scrollTop.classList.remove('invisible');
            scrollTop.classList.add('visible');
        }else{
            nav.classList.remove('fixed-nav');
    
            history.classList.remove('top-[120px]');
            history.classList.add('top-[160px]');
            
            scrollTop.classList.remove('opacity-100');
            scrollTop.classList.add('opacity-0');
            scrollTop.classList.remove('visible');
            scrollTop.classList.add('invisible');
        }
    }


}

function buttonClose(){
    const header = document.getElementById('header');
    const history = document.getElementById('history');
    history.classList.remove('top-[160px]');
    history.classList.add('top-[120px]');
    header.classList.add('hidden');
}

function profile(){
    const container = document.getElementById('container');
    container.classList.toggle('scale-y-0');
    container.classList.toggle('scale-y-100');
}

function showQuick(){
    const quick = document.getElementById('quick');
    quick.classList.remove('scale-y-0');
    quick.classList.add('scale-y-100');
}

function getRandom(min, max){
    const result = Math.floor(Math.random() * (max - min + 1) + min);
    const loading = document.getElementById('loading');
    setTimeout(function(){
        loading.classList.add('hidden');
    },result - 50)
    return result;
}

function showUp(){
    const sectionShow = document.getElementById('sectionShow');
    const loading = document.getElementById('loading');
    loading.classList.remove('hidden');
    sectionShow.classList.remove('hidden');
    sectionShow.classList.add('fixed');
    sectionShow.classList.remove('opacity-0');
    sectionShow.classList.add('opacity-100');
    setTimeout(showQuick, getRandom(300,500))
}

function closeShow(){
    const show = document.getElementById('quick')
    const sectionShow = document.getElementById('sectionShow');
    
    sectionShow.classList.remove('fixed');
    sectionShow.classList.add('hidden');
    sectionShow.classList.remove('opacity-100');
    sectionShow.classList.add('opacity-0');
    show.classList.remove('scale-y-100');
    show.classList.add('scale-y-0');
}

function filterClick(){
    const filter = document.getElementById('filter');

    filter.classList.toggle('scale-y-0');
    filter.classList.toggle('scale-y-100');
}