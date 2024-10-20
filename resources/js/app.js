import './bootstrap';

let currentMonth = new Date().getMonth()
console.log(currentMonth)


let summerCarousel = document.getElementById("summerCarousel")
let winterCarousel = document.getElementById("winterCarousel")
let summerButton = document.getElementById('summerButton')
let winterButton = document.getElementById('winterButton')


if (currentMonth > 8) {
    winterCarousel.classList.remove("hidden");
    summerCarousel.classList.add('hidden');
    winterButton.classList.add('bg-gray-500')
}


summerButton.addEventListener("click", function () {
    if (summerCarousel.classList.contains('hidden')) {
        console.log('hidden')
        summerCarousel.classList.remove("hidden");
        winterCarousel.classList.add('hidden');
        winterButton.classList.remove('bg-gray-500')
        winterButton.classList.remove('text-white')

        summerButton.classList.add('bg-gray-500')
        summerButton.classList.add('text-white')

    } else {
        console.log('it is not hidden')

    }

})

winterButton.addEventListener('click', function () {
    if (winterCarousel.classList.contains('hidden')) {
        console.log('hidden')
        winterCarousel.classList.remove("hidden");
        summerCarousel.classList.add('hidden');
        summerButton.classList.remove('text-white')
        summerButton.classList.remove('bg-gray-500')
        winterButton.classList.add('bg-gray-500')
        winterButton.classList.add('text-white')

    } else {
        console.log('it is not hidden')

    }
})



