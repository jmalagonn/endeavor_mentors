$(document).ready(function(){
    setInterval(function(){
        change_video();        
    }, 1000);
});

function featured_allies(){
    let swipwer = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        breakpoints: {
            425: {
                slidesPerView: 2,
            },
            650: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 48,
            },
            1440: {
                slidesPerView: 6
            }
        },
        autoplay: {
            delay: 5000,
        }
    });
};

function change_video(){
    let today = new Date();
    let hour = today.getHours();
    let minutes = today.getMinutes();
    let seconds = today.getSeconds();
    let day = today.getDate();

    let start_date = getTime("Wed May 27 2020 08:30:00 GMT-0500");

    let url = window.location.origin;

    if( day === 27 && hour >= 12 && minutes >= 20  && seconds >= 0){
        //$('#main-video-section').attr('src', url + '/endeavor_mentors/public/videos/prueba2.mp4');
        $('#nps_form').removeClass('hidden');
    }

    if(start_date.time > 0){
        $('#days').html('<p class="clock-card"><span class="clock-number">' + start_date.days + '</span><br><span class="label-clock">DD</span></p>');
        $('#hours').html('<p class="clock-card"><span class="clock-number">' + start_date.hours + '</span><br><span class="label-clock">HH</span></p>');
        $('#minutes').html('<p class="clock-card"><span class="clock-number">' + start_date.minutes + '</span><br><span class="label-clock">MM</span></p>');
        $('#seconds').html('<p class="clock-card"><span class="clock-number">' + start_date.seconds + '</span><br><span class="label-clock">SS</span></p>');    
    }else{
        $('#clock-container').css('display', 'none');
    }
    
};

function getTime(dateTo){
    let now = new Date(),
        time = (new Date(dateTo) - now + 1000) / 1000,
        seconds = ('0' + Math.floor(time % 60)).slice(-2),
        minutes = ('0' + Math.floor(time / 60 % 60)).slice(-2),
        hours = ('0' + Math.floor(time / 3600 % 24)).slice(-2),
        days = Math.floor(time / (3600 * 24));

    return {
        seconds,
        minutes,
        hours,
        days,
        time
    }
};

featured_allies();